<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Api extends Controller_Templates_APIv1
{
    public function action_get_stand_content()
    {
        $stand_id = Arr::get($_REQUEST, 'stand_id');

        // check for video wall first (video wall stand ids are reservered for 9000-9999)
        $video_wall_info = $this->get_video_wall_info($stand_id);

        if ($video_wall_info) {
            $this->set_video_content($video_wall_info);
        } else {
            // get subtheme from stand;
            $subtheme_id_query = $this->get_subtheme_id($stand_id);

            if (count($subtheme_id_query) > 0) {
                $subtheme_id = $subtheme_id_query[0];
            }

            if (!$subtheme_id) {
                $output = json_encode(false);
                $this->template->content = $output;
            } else {
                // get the stands' data
                $stands = $this->get_stands($subtheme_id);

                if (count($stands) > 0) {
                    $info = array();

                    // get the screen info to populate the json
                    $screen_info = $this->get_screen_info($stand_id);
                    // append screens and themes info. power is hardcoded for now
                    $info['screens'] = $this->get_display_info($screen_info);

                    // get the sub-theme's parent_theme_id & disclaimer to populate json
                    $theme_data = $this->get_subtheme_data($subtheme_id);
                    $parent_theme_id = $theme_data['parent_theme_id'];
                    $info['disclaimer'] = $theme_data['disclaimer'];
                    // get the theme to populate json
                    $theme_css = $this->get_css_class($parent_theme_id);
                    $info['theme'] = $theme_css;
                    // get the zones to populate json
                    $info['zones'] = $this->get_zones($stands[0]);

                    foreach ($info['zones'] as &$zone) {
                        $menus = $this->get_menus($zone['id']);

                        // if $menus is empty that means no menu is attached to this subtheme
                        foreach ($menus as &$menu) {
                            // get the event menu items to populate json (i don't think this is currently doing anything)
                            $event_menu_items = $this->get_event_menu_items($menu['id']);
                            // get all the menu items to populate json
                            $all_menu_items = $this->get_all_menu_items($menu['id']);
                            // $event_menu_items + $all_menu_items;
                            $temp_menu_arr = array();

                            // @TODO :create sql to combine both above sql statements

                            // currently above gets all menu items and event specific then overrides all with event items
                            foreach ($all_menu_items as $all_menu) {
                                $temp_menu_arr[$all_menu['mmi_id']] = $all_menu;
                            }

                            foreach ($event_menu_items as $event_menu) {
                                $temp_menu_arr[$event_menu['mmi_id']] = $event_menu;
                            }

                            $menu['menu_items'] = array_values($temp_menu_arr);
                        }

                        // get the promos to populate the json
                        $promos = $this->get_promos($stand_id, $zone['id']);

                        foreach ($promos as &$promo) {
                            $template_config = array(
                                'x' => 100,
                                'y' => 200,
                                'textColor' => '0xFFFFFF',
                                'delay' => 2,
                                'pricing' => array(),
                            );

                            // needs hard coded duration otherwise won't transition if image
                            $promo['duration'] = 10;
                            $promo['templateConfig'] = $template_config;
                        }

                        // get the large promos to populate the json
                        $large_promos = $this->get_large_promos($zone['id']);

                        foreach ($large_promos as &$large_promo) {
                            $template_config = array(
                                'x' => 100,
                                'y' => 200,
                                'textColor' => '0xFFFFFF',
                                'delay' => 2,
                                'pricing' => array(),
                            );

                            // needs hard coded duration otherwise won't transition if image
                            $promo['duration'] = 10;
                            $large_promo['templateConfig'] = $template_config;
                        }

                        if (!empty($menus)) {
                            $zone['menus'] = $menus;
                        }

                        if (!empty($promos)) {
                            $zone['promos'] = $promos;
                        }

                        if (!empty($large_promos)) {
                            $zone['large_promos'] = $large_promos;
                        }
                    }

                    $output = json_encode($info);
                    $this->template->content = $output;
                } else {
                    $output = json_encode(false);
                    $this->template->content = $output;
                }
            }
        }
    }

    private function set_video_content($video_wall_info)
    {
        $info = array();
        $info['screens'] = $this->get_display_info($video_wall_info);

        $output = json_encode($info);
        $this->template->content = $output;
    }

    private function get_display_info($display_info)
    {
        $power_state = $display_info[0]['power_state'];
        $tv_model = $display_info[0]['tv_model'];
        $ts = $display_info[0]['command_sent_time'];

        return array(
            'power_state' => $power_state,
            'tv_model' => $tv_model,
            'ts' => $ts
        );
    }

    /*
     * DATABASE COMMUNICATION
     */

    private function get_video_wall_info($stand_id)
    {
        $results = DB::select('id', 'stand_id', 'power_state', 'tv_model', 'command_sent_time')
            ->from ('video_walls')
            ->where('stand_id', '=', $stand_id)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_subtheme_id($stand_id)
    {
        $results = DB::select('theme_id')
            ->from('stands_themes')
            ->where('stand_id', '=', $stand_id)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_stands($subtheme_id)
    {
        $results = DB::select('stand_id')
            ->from('stands_themes')
            ->where('theme_id', '=', $subtheme_id)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_screen_info($stand_id)
    {
        $results = DB::select('power_state', 'tv_model', 'command_sent_time')
            ->from('stands')
            ->where('id', '=', $stand_id)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_subtheme_data($subtheme_id)
    {
        $result = DB::select('parent_theme_id', 'disclaimer')
            ->from('themes')
            ->where('id', '=', $subtheme_id)
            ->execute($this->client['database'])
            ->as_array();

        return $result[0];
    }

    private function get_css_class($parent_theme_id)
    {
        $results = DB::select('id', 'name', 'css_class')
            ->from('themes')
            ->where('id', '=', $parent_theme_id)
            ->execute($this->client['database'])
            ->as_array();

        return $results[0]['css_class'];
    }

    private function get_zones($stand_id_from_subtheme_id)
    {
        $results = DB::select('z.id', 'sz.sort', 'z.type')
            ->from(array('zones', 'z'))
            ->join(array('stands_zones', 'sz'))
            ->on('sz.zone_id', '=', 'z.id')
            ->where('sz.stand_id', '=', $stand_id_from_subtheme_id)
            ->order_by('sz.sort', 'ASC')
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_menus($zone_id)
    {
        $results = DB::select('m.title', 'm.id', 'm.type_detail')
            ->from(array('menus', 'm'))
            ->join(array('zones_content', 'zc'))
            ->on('zc.content_id', '=', 'm.id')
            ->where('zc.type', '=', 'menu')
            ->and_where('zc.zone_id', '=', $zone_id)
            ->order_by('zc.sort', 'ASC')
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_event_menu_items($menu_id)
    {
        $results = DB::select(array('mi.id', 'mi_id'), 'mi.title', 'mi.description', 'mi.description_extra', 'mip.price', array('mmi.id', 'mmi_id'), 'mmi.sort')
            ->from(array('menus_items', 'mi'))
            ->join(array('menus_menus_items', 'mmi'))
            ->on('mi.id', '=', 'mmi.menu_item_id')
            ->join(array('menus_items_prices', 'mip'))
            ->on('mip.menus_items_id', '=', 'mi.id')
            ->join(array('events_items', 'ei'))
            ->on('ei.item_id', '=', 'mip.id')
            ->join(array('events', 'e'))
            ->on('ei.event_id', '=', 'e.id')
            ->where('e.active', '=', 1)
            ->and_where('mi.enabled', '=', 1)
            ->and_where('ei.type', '=', 'menu_item')
            ->and_where('mmi.menu_id', '=', $menu_id)
            ->order_by('mip.price', 'DESC')
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_all_menu_items($menu_id)
    {
        $results = DB::select(array('mi.id', 'mi_id'), 'mi.title', 'mi.description', 'mi.description_extra', 'mip.price', array('mmi.id', 'mmi_id'), 'mmi.sort')
            ->from(array('menus_items', 'mi'))
            ->join(array('menus_menus_items', 'mmi'))
            ->on('mi.id', '=', 'mmi.menu_item_id')
            ->join(array('menus_items_prices', 'mip'))
            ->on('mip.menus_items_id', '=', 'mi.id')
            ->where('mmi.menu_id', '=', $menu_id)
            ->and_where('mi.enabled', '=', 1)
            ->order_by('mmi.sort', 'ASC')
            ->group_by(array('mmi.id'))
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_promos($stand_id, $zone_id)
    {
        $results = DB::select('pi.name', 'pi.media', 'pi.use_name')
            ->from(array('promos_items', 'pi'))
            ->join(array('promos_promos_items', 'ppi'))
            ->on('pi.id', '=', 'ppi.promos_items_id')
            ->join(array('promos', 'p'))
            ->on('p.id', '=', 'ppi.promos_id')
            ->join(array('zones_content', 'zc'))
            ->on('zc.content_id', '=', 'p.id')
            ->join(array('events_items', 'ei'))
            ->on('ei.item_id', '=', 'pi.id')
            ->join(array('events', 'e'))
            ->on('ei.event_id', '=', 'e.id')
            ->join(array('zones', 'z'))
            ->on('z.id', '=', 'zc.zone_id')
            ->join(array('stands_zones', 'sz'))
            ->on('z.id', '=', 'sz.zone_id')
            ->where('e.active', '=', 1)
            ->and_where('pi.enabled', '=', 1)
            ->and_where('sz.stand_id', '=', $stand_id)
            ->and_where('pi.large', '=', 0)
            ->and_where('ei.type', '=', 'promo')
            ->and_where('zc.type', '=', '')
            ->and_where('zc.zone_id', '=', $zone_id)
            ->and_where('p.center', '=', 0)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }

    private function get_large_promos($zone_id)
    {
        $results = DB::select('pi.name', 'pi.media', 'ppi.sort')
            ->from(array('promos_items', 'pi'))
            ->join(array('promos_promos_items', 'ppi'))
            ->on('pi.id', '=', 'ppi.promos_items_id')
            ->join(array('promos', 'p'))
            ->on('p.id', '=', 'ppi.promos_id')
            ->join(array('zones_content', 'zc'))
            ->on('zc.content_id', '=', 'p.id')
            ->join(array('events_items', 'ei'))
            ->on('ei.item_id', '=', 'pi.id')
            ->join(array('events', 'e'))
            ->on('ei.event_id', '=', 'e.id')
            ->where('e.active', '=', 1)
            ->and_where('pi.enabled', '=', 1)
            ->and_where('pi.large', '=', 1)
            ->and_where('ei.type', '=', 'promo')
            ->where('zc.type', '=', '')
            ->and_where('zc.zone_id', '=', $zone_id)
            ->and_where('p.center', '=', 1)
            ->execute($this->client['database'])
            ->as_array();

        return $results;
    }
}

?>