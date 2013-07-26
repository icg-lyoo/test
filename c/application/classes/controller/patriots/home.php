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
class Controller_Patriots_Home extends Controller_ICG_v1_ICG
{

    public function before()
    {
        parent::before();
    }

    public function action_logout()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'logout'), true);
        if ($result['meta']['status'] == 1)
        {
            Cookie::set('session_id', NULL);
//			Request::current()->redirect('icg/login');
            $output = json_encode(true);
        }
        else
        {
            $output = false;
        }
        echo $output;
    }

    public function action_index()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $themes = json_decode($this->_pancake_call('patriots', 'theme', 'get_parent_themes'));
        
        foreach ($themes as &$theme)
        {
            $subthemes = json_decode($this->_pancake_call('patriots', 'theme', 'get_subthemes', array('parent_theme_id' => $theme->id)), FALSE);

            $theme->subthemes = $subthemes;
        }
        $view = View::factory('patriots/template');
        $view->admin = $admin;
        $view->themes = $themes;
        $this->response->body($view);
    }

    public function action_events()
    {
        $active_event = json_decode($this->_pancake_call('patriots', 'event', 'get_active'));
        $events = json_decode($this->_pancake_call('patriots', 'event', 'get_all'));
        $name = $active_event->name;
        $view = View::factory('patriots/events');
        $view->active_event = $name;
        $view->events = $events;
        $this->response->body($view);
    }

    public function action_menu_items()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $events = json_decode($this->_pancake_call('patriots', 'event', 'get_all'));
        $active_event = json_decode($this->_pancake_call('patriots', 'event', 'get_active'));

        $view = View::factory('patriots/menu_items');
        $view->events = $events;
        $view->active_event = ($active_event) ? $active_event->id : 'all';
        $view->admin = $admin;

        $this->response->body($view);
    }

    public function action_promos()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $events = json_decode($this->_pancake_call('patriots', 'event', 'get_all'));
        $active_event = json_decode($this->_pancake_call('patriots', 'event', 'get_active'));

        $view = View::factory('patriots/promos');
        $view->events = $events;
        $view->active_event = ($active_event) ? $active_event->id : 'all';
        $view->large = 0;
        $view->admin = $admin;
        $this->response->body($view);
    }

    public function action_largepromos()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $events = json_decode($this->_pancake_call('patriots', 'event', 'get_all'));
        $active_event = json_decode($this->_pancake_call('patriots', 'event', 'get_active'));

        $view = View::factory('patriots/promos');
        $view->events = $events;
        $view->admin = $admin;
        $view->active_event = ($active_event) ? $active_event->id : 'all';
        $view->large = 1;

        $this->response->body($view);
    }

    public function action_stands_control()
    {
        $stands = json_decode($this->_pancake_call('patriots', 'stand', 'get_all_themes_subthemes'), true);

        $themes = json_decode($this->_pancake_call('patriots', 'theme', 'get_all'));

        $video_walls = json_decode($this->_pancake_call('patriots', 'videowall', 'get_all_video_wall'), true);
        
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $view = View::factory('patriots/stands_power');

        $view->stands = $stands;
        $view->video_walls = $video_walls;
        $view->themes = $themes;
        $view->admin = $admin;
        $this->response->body($view);
    }

    public function action_stands()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];


        $stands = json_decode($this->_pancake_call('patriots', 'stand', 'get_all_themes_subthemes'), true);

        $themes = json_decode($this->_pancake_call('patriots', 'theme', 'get_all'));
        $view = View::factory('patriots/stands');
        $view->stands = $stands;
        $view->themes = $themes;
        $view->admin = $admin;
        $this->response->body($view);
    }

    public function action_add_subtheme()
    {
        $theme_id = Arr::get($_REQUEST, 'theme');
        $theme = json_decode($this->_pancake_call('patriots', 'theme', 'get', array('id' => $theme_id)));
        $view = View::factory('patriots/add_subtheme');
        $view->theme = $theme[0];
        $this->response->body($view);
    }

    public function action_edit_subtheme()
    {
        $result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
        $admin = (bool) $result['meta']['status'];

        $theme_id = Arr::get($_REQUEST, 'theme');
        $subtheme_id = Arr::get($_REQUEST, 'subtheme');
        $subtheme_name = Arr::get($_REQUEST, 'subtheme_name', '');
        if ($subtheme_name == '')
        {
            $subtheme_info = json_decode($this->_pancake_call('patriots', 'theme', 'get_content', array('subtheme_id' => $subtheme_id)), TRUE);
        }
        
        $theme_id = json_decode($this->_pancake_call('patriots', 'theme', 'get_parent_id', array('theme_id' => $subtheme_id)));
        $theme = json_decode($this->_pancake_call('patriots', 'theme', 'get', array('id' => $theme_id)));

        $all_active_menu_items = json_encode($this->_pancake_call('patriots', 'event', 'get_all_active_menu_items'));
        
        if ($admin)
        {
            $view = View::factory('patriots/edit_subtheme');
        }
        else
        {
            $view = View::factory('patriots/preview_subtheme');
        }
        
        $view->all_active_menu_items = $all_active_menu_items;
        $view->theme = $theme[0];
        $view->subtheme = $subtheme_id;
        $view->subtheme_info = $subtheme_info;
        $view->admin = $admin;
        $this->response->body($view);
    }

}
?>
