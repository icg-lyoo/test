<?php

defined('SYSPATH') or die('No direct access');

class Controller_Auth_v1_Role extends Controller_Auth_v1_Auth
{

    public function action_list()
    {
        $result = DB::select('*')
                ->from('roles')
                ->execute()
                ->as_array();
        $status = ($result) ? TRUE : FALSE;
        $message = ($result) ? NULL : 'No roles found';
        $this->template->content = PancakeResponse::out($status, $message, $result);
    }
    
    public function action_add()
    {
        $name = Arr::get($_POST, 'name', NULL);
        $description = Arr::get($_POST, 'description', NULL);
        
        try
        {
            $result = DB::insert('roles', array('name', 'description'))
                ->values(array($name, $description))
                ->execute();
            if($result)
            {
                $output = PancakeResponse::out(TRUE);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'Error while adding role');
            }
        }
        catch(Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        
        $this->template->content = $output;
        
    }
    
    public function action_update()
    {
        $id = Arr::get($_POST, 'id', NULL);
        $name = Arr::get($_POST, 'name', NULL);
        $description = Arr::get($_POST, 'description', NULL);
        
        try
        {
            $result = DB::update('roles')
                ->set(array(
                    'name' => $name,
                    'description' => $description,
                ))
                ->where('id', '=', $id)
                ->execute();
            if($result)
            {
                $output = PancakeResponse::out(TRUE);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'Error while adding role');
            }
        }
        catch(Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        
        $this->template->content = $output;
        
    }

}
