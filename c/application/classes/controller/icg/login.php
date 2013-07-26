<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author equemuel
 */
class Controller_Icg_Login extends Controller_ICG_v1_ICG
{

    public function action_index()
    {
        $view = View::factory('icg/index');
        $this->response->body($view);
    }

}