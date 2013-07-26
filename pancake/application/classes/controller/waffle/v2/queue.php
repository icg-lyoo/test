<?phpdefined('SYSPATH') or die('No direct script access.');class Controller_Waffle_v2_Queue extends Controller_Templates_APIv1{    private $_no_auth_action = array('get_latest', 'create', 'update');    public function before()    {        // No authentication is required to access the following calls        if (in_array($this->request->action(), $this->_no_auth_action))        {            $this->_auth_required = FALSE;        }        parent::before();    }    public function action_update()    {        $queue_id = Arr::get($_REQUEST, 'queue_id', NULL);        $status_code = Arr::get($_REQUEST, 'status_code', NULL);        $output = Arr::get($_REQUEST, 'output', '');        $end_ts = (intval($status_code) == 4005) ? time() : 0;        $pancake_status = FALSE;        $message = NULL;        if ($queue_id && $status_code)        {            $result = WaffleQueue::update($queue_id, $status_code, $output, $end_ts);            if ($result >= 0)            {                //put code to resume queue HERE                $pancake_status = TRUE;            }            else            {                $message = "Error updating the status.";            }        }        else        {            $message = "Queue id or status not set.";        }        $pancake_output = PancakeResponse::out($pancake_status, $message);        $this->template->content = $pancake_output;    }    public function action_create()    {        $hardware_name = Arr::get($_REQUEST, 'hardware_name', NULL);        $profile_name = Arr::get($_REQUEST, 'profile_name', NULL);        $ts = Arr::get($_REQUEST, 'ts', time());        $client_id = Arr::get($_REQUEST, 'client_id', NULL);        $actions = Arr::get($_REQUEST, 'actions', '[]');        $pancake_status = FALSE;        $message = NULL;        $status = (isset($profile_name)) ? 2003 : 2001;        if (($profile_name || $hardware_name) && $client_id && $status && $actions)        {            $actions = json_decode($actions, TRUE);            if (is_array($actions) && !Utils::is_assoc($actions))            {                try                {                    if (isset($hardware_name))                        $result = WaffleQueue::create_by_hardware($hardware_name, $client_id, $actions, $status, $ts);                    elseif (isset($profile_name))                        $result = WaffleQueue::create_by_profiles($profile_name, $client_id, $actions, $status, $ts);                    if ($result)                    {                        $pancake_status = TRUE;                    }                    else                    {                        $message = "Error creating the queue.";                    }                }                catch (Exception $e)                {                    $message = "Exception[" . $e->getLine() . "]: " . $e->getMessage();                }            }            else            {                $message = "Actions is not a valid json array. It may be an object or have invalid JSON syntax";            }        }        else        {            $message = "Please input all required parameters";        }        $output = PancakeResponse::out($pancake_status, $message);        $this->template->content = $output;    }    public function action_get_latest()    {        $hardware_name = Arr::get($_REQUEST, 'hardware_name', NULL);        $client_id = Arr::get($_REQUEST, 'client_id', NULL);        try        {            $latest_queue = WaffleQueue::get_latest($client_id, $hardware_name);            $output = PancakeResponse::out(TRUE, NULL, $latest_queue);        }        catch (Exception $e)        {            $output = PancakeResponse::out(FALSE, $e->getMessage());        }        $this->template->content = $output;    }    /**     * Get the selected number of rows from the database.     */    public function action_get_range()    {		$limit 			= Arr::get($_REQUEST, 'limit', 10);		$order_by 		= Arr::get($_REQUEST, 'order_by', 'id');		$order 			= Arr::get($_REQUEST, 'order', 'DESC');		$offset 			= Arr::get($_REQUEST, 'offset', 0);		try		{			$results = WaffleQueue::get_range($limit, $order_by, $order, $offset);			$output = PancakeResponse::out(TRUE, NULL, $results);		}		catch (Exception $e)		{			$output = PancakeResponse::out(FALSE, $e->getMessage());		}		//$this->template->content = $results;		$this->template->content = $output;    }    /**     * Get the selected number of rows from the database for the hardware_name/client_id pair.     */    public function action_get_range_by_hardware()    {        $client_id = Arr::get($_REQUEST, 'client_id', false);        $hardware_name = Arr::get($_REQUEST, 'hardware_name', false);        $limit = Arr::get($_REQUEST, 'limit', 10);        $order_by = Arr::get($_REQUEST, 'order_by', 'id');        $order = Arr::get($_REQUEST, 'order', 'DESC');        try        {            $results = WaffleQueue::get_range_by_hardware($client_id, $hardware_name, $limit, $order_by, $order);            $output = PancakeResponse::out(TRUE, NULL, $results);        }        catch (Exception $e)        {            $output = PancakeResponse::out(FALSE, $e->getMessage());        }        //$this->template->content = $results;        $this->template->content = $output;    }}