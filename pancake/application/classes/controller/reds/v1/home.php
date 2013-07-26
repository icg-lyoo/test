<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Reds_v1_Home extends Controller_Templates_APIv1
{

    public function action_getStands()
    {
        $status = false;
        $message = null;
        $data = array();

        $standArrayNumeric = DB::query(Database::SELECT, 'SELECT * from stands order by  stand_name + 0')
            ->execute($this->client['database'])
            ->as_array();

        if ($standArrayNumeric)
        {

            $status = true;
            $data = $standArrayNumeric;
            $message = "Stands recieved";
        }
        else
        {
            $message = "No stands found.";
        }

        $output = PancakeResponse::out($status, $message, $data);

        echo $output;

        exit;
    }

}
?>



