<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Description of newPHPClass
 *
 * @author equemuel
 */

class Controller_Icg_Ajax_Auth extends Controller_ICG_v1_ICG
{

    protected $_is_ajax       = TRUE;
    protected $_auth_required = FALSE;

    public function action_index()
    {
        echo 'hello';
        exit;
    }
    
    public function action_login()
    {
        if ($_POST)
        {
            $remember = (isset($_POST['remember']) && $_POST['remember'] != 'null') ? true : false;
            $result = $this->_pancake_login($_POST['username'], $_POST['password'], $remember);
            echo $result;
        }
    }

}