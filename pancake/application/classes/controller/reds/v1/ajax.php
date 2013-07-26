<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Reds_v1_Ajax extends Controller_Templates_APIv1
{

    public function action_getStandPromos()
    {
        $data = DB::select('rc.*', 'ri.*', 'rirc.*')
            ->from(array('richcontent', 'rc'))
            ->join(array('richitem_richcontent', 'rirc'))
            ->on('rirc.richcontent_id', '=', 'rc.richcontent_id')
            ->join(array('richitems', 'ri'))
            ->on('rirc.richitem_id', '=', 'ri.richitem_id')
            ->where('rc.stand_id', '=', Arr::get($_POST, 'stand_id'))
            ->where('rc.richcontent_type', '=', 'visual')
            ->execute($this->client['database'])
            ->as_array();
        $this->template->content = PancakeResponse::out(true, 'Retrieved stand promos.', $data);
    }

    private function _getEnabledPromosForStandWithID($stand_id)
    {
        $status = false;
        $message = null;
        $data = array();

        $promoArray = DB::select('rc.richcontent_bg_image', 'rc.richcontent_fg_image', 'ri.richitem_media', 'ri.richitem_type')
            ->from(array('richcontent', 'rc'))
            ->join(array('richitem_richcontent', 'rirc'))
            ->on('rirc.richcontent_id', '=', 'rc.richcontent_id')
            ->join(array('richitems', 'ri'))
            ->on('rirc.richitem_id', '=', 'ri.richitem_id')
            ->where('rc.stand_id', '=', $stand_id)
            ->where('rc.richcontent_type', '=', 'visual')
            ->where('rirc.richitem_enabled', '=', '1')
            ->execute($this->client['database'])
            ->as_array();
        if ($promoArray)
        {
            $images = array('left' => array(), 'right' => array());
            $videos = array();

            foreach ($promoArray as $promoData)
            {
                switch ($promoData['richitem_type'])
                {
                    case "left":
                        $images['left'][] = $promoData['richitem_media'];
                        break;

                    case "right":
                        $images['right'][] = $promoData['richitem_media'];
                        break;

                    case "video":
                        $videos[] = $promoData['richitem_media'];
                        break;
                }
            }

            $dataArray = array(
                'bg_image' => $promoArray[0]['richcontent_bg_image'],
                'fg_image' => $promoArray[0]['richcontent_fg_image'],
                'images' => $images,
                'videos' => $videos,
            );

            $status = true;
            $data = $dataArray;
            $message = "rich content found and returned";
        }
        else
        {
            $message = "No rich content found.";
        }

        return $data;
    }

    private function _getMenusForStandWithID($_stand_id)
    {
        $status = false;
        $message = null;
        $data = array();

        $stand_id = $_stand_id;

        $menus = DB::select('menus.*')
            ->from('menus')
            ->where('stand_id', '=', $stand_id)
            ->execute($this->client['database'])
            ->as_array();

        foreach ($menus as $menu)
        {

            $items = $this->_getMenuItemsInMenu($menu['menu_id']);
            $richContent = $this->_getRichContentInMenu($menu['menu_id']);

            $icons = $richContent['icons'];
            $promos = array(
                'colors' => $richContent['colors'],
                'images' => $richContent['images'],
            );

            $menusArray[] = array(
                'title' => $menu['menu_title'],
                'items' => $items,
                'icons' => $icons,
                'promos' => $promos,
                'bg_image' => $menu['menu_bg_image'],
                'border_color' => $menu['menu_border_color'],
            );
        }

        if ($menusArray != false)
        {
            $status = true;
            $message = "Got Menus";
        }
        $data = $menusArray;
        return $data;
    }

    private function _getRichContentInMenu($menu_id)
    {

        //final array to return
        $final_array = array(
            'icons' => array(),
            'images' => array(),
            'colors' => array(
                'text' => '',
                'bar' => '',
            ),
        );


        //get the richcontent that belongs to the menu
        $richcontent = DB::select('*')
            ->from('richcontent')
            ->where('menu_id', '=', $menu_id)
            ->execute($this->client['database'])
            ->as_array();
        if ($richcontent)
        {
            $richcontent = $richcontent[0];

            $final_array['colors']['text'] = $richcontent['richcontent_text'];
            $final_array['colors']['bar'] = $richcontent['richcontent_bar'];

            //get the enabled rich items in the rich content
            $richitems = DB::select('ri.*', 'rirc.*')
                ->from(array('richitems', 'ri'))
                ->join(array('richitem_richcontent', 'rirc'))
                ->on('rirc.richitem_id', '=', 'ri.richitem_id')
                ->where('rirc.richcontent_id', '=', $richcontent['richcontent_id'])
                ->where('rirc.richitem_enabled', '=', 1)
                ->execute($this->client['database'])
                ->as_array();
            if ($richitems)
            {
                foreach ($richitems as $richitem)
                {
                    $type = $richitem['richitem_type'];
                    switch ($type)
                    {
                        case $type == "icon":
                            $final_array['icons']["soda"][] = $richitem['richitem_media'];
                            break;

                        case $type == "beer-icon":
                            $final_array['icons']["beer"][] = $richitem["richitem_media"];
                            break;

                        case $type == "promo":
                            $final_array['images'][] = $richitem['richitem_media'];
                            break;
                    }
                }
            }
        }

        return $final_array;
    }

    public function getRichItemsInMenu($richcontent_id)
    {
        $results = DB::select('richitem_id')
            ->distinct(TRUE)
            ->from('richitem_richcontent')
            ->where('richcontent_id', '=', $richcontent_id)
            ->execute($this->client['database'])
            ->as_array();

        $icons = array();
        $images = array();

        foreach ($results as $result)
        {
            $richitem = DB::select('ri.*')
                ->from(array('richitems', 'ri'))
                ->where('richitem_id', '=', $result['richitem_id'])
                ->execute($this->client['database'])
                ->as_array();

            if ($richitem['richitem_type'] == 'icon')
                $icons[] = $richitem['richitem_media'];
            else if ($richitem['richitem_type'] == 'promo')
                $images[] = $richitem['richitem_media'];
            else
                die('invalid type for menu. check database integrity');
        }

        return(
            array(
                'icons' => $icons,
                'images' => $images,
            )
            );
    }

    public function _getMenuItemsInMenu($menu_id)
    {
        $results = DB::select('m.*', 'mim.*', 'mi.*')
            ->distinct(true)
            ->from(array('menus', 'm'))
            ->join(array('menuitem_menu', 'mim'))
            ->on('m.menu_id', '=', 'mim.menu_id')
            ->join(array('menuitems', 'mi'))
            ->on('mi.menuitem_id', '=', 'mim.menuitem_id')
            ->where('m.menu_id', '=', $menu_id)
            ->where('mim.menuitem_enabled', '=', '1')
            ->order_by('mim.position', 'ASC')
            ->execute($this->client['database'])
            ->as_array();


        $menuitemArray = array();

        foreach ($results as $result)
        {


            if ($result['menuitem_style'] != '')
                $title = '<span class="' . $result['menuitem_style'] . '">' . $result['menuitem_title'] . '</span>';
            else
                $title = $result['menuitem_title'];

            $menuitemArray[] = array(
                'title' => $title,
                'price' => number_format($result['menuitem_price'], 2, '.', ''),
            );
        }


        return $menuitemArray;
    }

    public function action_updateMenus($data_pancake)
    {
        $status = false;
        $message = null;
        $data = array();

        $enabled = $data_pancake['menuitem_enabled'];
        $position = $data_pancake['position'];
        $menuitem_id = $data_pancake['menuitem_id'];
        $menu_id = $data_pancake['menu_id'];

        $results = DB::update('menuitem_menu')
            ->set(array('menuitem_enabled' => $enabled, 'position' => $position))
            ->where('menuitem_id', '=', $menuitem_id)
            ->and_where('menu_id', '=', $menu_id)
            ->execute($this->client['database']);

        if ($results == true)
        {
            $status = true;
            $message = "successfully updated";
        }
        else
        {
            $message = "There seems to be a problem";
        }

        $output = PancakeResponse::out($status, $message, $results);
        return $output;
    }

    public function action_submitChanges()
    {
        $post_data = json_decode(Arr::get($_POST, 'post_data', null), true);

        $message = $_POST['post_data'];
        $position = 1;
        $temp_menu_id = '';

        foreach ($post_data as $key => $data)
        {
            $parts = explode('-', $key);

            //count($parts)=2 means it is a global menu item or stand message
            if (count($parts) == 2)
            {
                if ($parts[1] == 'message')
                {
                    $stand_id = $parts[0];
                    $column = 'stand_message';
                    $stand_info = array(
                        'stand_id' => $stand_id,
                        'stand_message' => $data
                    );
                    $encoded_result = $this->action_saveStandMessage($stand_info);
                }
                else if ($parts[1] == 'price' || $parts[1] == 'title')
                {
                    $menu_info = array(
                        'type' => $parts[1],
                        'data' => $data,
                        'menuitem_id' => $parts[0]
                    );

                    $encoded_result = $this->action_updateMenuItem($menu_info);
                }
            }
            else if ($parts[0] === 'promo')
            {// This is for promo items
                $richcontent_id = $parts[1];
                $richitem_id = $parts[2];
                $column = 'richitem_' . $parts[3];
                $richitem_enabled = ($data == true) ? 1 : 0;

                $results = DB::update('richitem_richcontent')
                    ->set(array('richitem_enabled' => $richitem_enabled))
                    ->where('richcontent_id', '=', $richcontent_id)
                    ->and_where('richitem_id', '=', $richitem_id)
                    ->execute($this->client['database']);
                $status = ($results >= 0) ? TRUE : FALSE;
                $message = ($status) ? "Successfully updated rich content & item" : "Failed to update rich content & item";
                $encoded_result = PancakeResponse::out($status, $message, $results);
            }
            else
            {
                $stand_id = $parts[0];
                $menu_id = $parts[1];
                $menuitem_id = $parts[2];
                $column = 'menuitem_' . $parts[3];

                if ($data == true)
                    $data = 1;
                else
                    $data = 0;

                if ($temp_menu_id == '')
                {
                    $temp_menu_id = $menu_id;
                }
                else
                {
                    if ($temp_menu_id != $menu_id)
                    {
                        $position = 1;
                        $temp_menu_id = $menu_id;
                    }
                }
                $data_pancake = array(
                    'menuitem_id' => $menuitem_id,
                    'menu_id' => $menu_id,
                    'menuitem_enabled' => $data,
                    'position' => $position
                );
                $encoded_result = $this->action_updateMenus($data_pancake);
                $position++;
            }
        }

        $this->template->content = $encoded_result;
    }

    public function action_saveStandMessage($stand_info)
    {
        $status = false;
        $message = null;
        $data = array();

        $stand_id = $stand_info['stand_id'];
        $stand_message = $stand_info['stand_message'];

        $results = DB::update('stands')
            ->set(array('stand_message' => $stand_message))
            ->where('stand_id', '=', $stand_id)
            ->execute($this->client['database']);

        if ($results)
        {
            $message = "successfully updated";
            $status = true;
        }

        $output = PancakeResponse::out($status, $message, $data);
        return $output;
    }

    public function action_updateMenuItem($menu_info)
    {
        $status = false;
        $message = null;
        $data = array();

        $type = $menu_info['type'];
        $data = $menu_info['data'];
        $menuitem_id = $menu_info['menuitem_id'];

        $setArray = array(
            'menuitem_' . $type => $data
        );
        $results = DB::update('menuitems')
            ->set($setArray)
            ->where('menuitem_id', '=', $menuitem_id)
            ->execute($this->client['database']);

        if ($results)
        {
            $message = "successfully updated";
            $status = true;
        }

        $output = PancakeResponse::out($status, $message, $data);
        return $output;
    }

    public function action_deleteGlobal()
    {
        $status = false;
        $message = null;
        $data = array();

        $menuitem_id = Arr::get($_POST, 'menuitem_id', null);
        $result = DB::delete('menuitems')
            ->where('menuitem_id', '=', $menuitem_id)
            ->execute($this->client['database']);
        if ($result == 1)
        {
            $status = true;
            $message = "success";
        }
        else
        {
            $message = "There was an issue";
        }

        $this->template->content = PancakeResponse::out($status, $message, $data);
    }

    public function action_getGlobalMenus()
    {
        $status = false;
        $message = null;
        $data = array();

        if (Arr::get($_POST, "getPromos", null) != null)
        {
            $promos = $this->action_getGlobalPromos(true);

            foreach ($promos as $promo)
            {
                if ($promo['richitem_type'] === "left" || $promo["richitem_type"] == "right" || $promo["richitem_type"] === "video")
                {
                    $data["promos"]["center_promos"][] = $promo;
                }
                else
                {
                    $data["promos"]["menu_promos"][] = $promo;
                }
            }
        }
        if (Arr::get($_POST, "getMenus", null) != null)
            $data["menus"] = $this->action_getAllMenus(true);

        $results = DB::select('m.*')
            ->from(array('menuitems', 'm'))
            ->order_by('m.menuitem_title')
            ->execute($this->client['database'])
            ->as_array();

        if ($results)
        {
            $status = true;
            $message = "Menus successfully recieved.";
            $data["menuitems"] = $results;
        }
        else
        {
            $message = "There are no menus to recieve";
        }

        $this->template->content = PancakeResponse::out($status, $message, $data);
    }

    public function action_getAllMenus($internal = false)
    {
        $status = false;
        $message = null;
        $data = array();

        $results = DB::select('m.*', 's.stand_description')
            ->from(array('menus', 'm'))
            ->join(array('stands', 's'))
            ->on("s.stand_id", '=', 'm.stand_id')
            ->order_by('m.stand_id')
            ->execute($this->client['database'])
            ->as_array();

        if ($results)
        {
            $status = true;
            $message = "Menus Retrieved";
            $data = $results;
        }
        else
        {
            $message = "There are no menus to retrieve.";
        }

        if ($internal)
            return $data;
        $output = PancakeResponse::out($status, $message, $data);

        echo $output;
        exit;
    }

    public function action_searchMenusAndStands()
    {
        $search = Arr::get($_REQUEST, 'search', '');
        $type = Arr::get($_REQUEST, 'type', 'menus');

        $data = array();
        if ($type == 'stands')
        {
            $stands = DB::select("*")
                ->from('stands')
                ->where('stand_description', 'LIKE', '%' . $search . '%')
                ->execute($this->client['database'])
                ->as_array();

            $data = $stands;
        }
        else
        {
            $menus = DB::select('m.menu_id', 's.stand_description', 'm.menu_title')
                ->from(array('menus', 'm'))
                ->join(array('stands', 's'))
                ->on('s.stand_id', '=', 'm.stand_id')
                ->where('m.menu_title', 'LIKE', '%' . $search . '%')
                ->or_where('s.stand_description', 'LIKE', '%' . $search . '%')
                ->execute($this->client['database'])
                ->as_array();

            $data = $menus;
        }

        $this->template->content = PancakeResponse::out(TRUE, 'Retrieved search successfully', $data);
    }

    public function action_getGlobalPromos($internal = false)
    {
        $stand_name = Arr::get($_REQUEST, 'stand', 0);
        $richitem_type = Arr::get($_POST, 'type', null);

        $status = false;
        $data = array();
        $message = null;

        $results = DB::select('ri.*')
            ->from(array('richitems', 'ri'));

        if ($richitem_type)
            $results->where('richitem_type', '=', $richitem_type);

        $results = $results->order_by('richitem_media')
            ->execute($this->client['database'])
            ->as_array();

        if ($results)
        {
            $status = true;


            $data = $results;
            $message = "Promo details successfully recieved";
        }
        else
        {
            $message = "No promos could be recieved";
        }

        $output = PancakeResponse::out($status, $message, $data);
        if ($internal)
            return $data;
        $this->template->content = $output;
    }

    public function action_addMenuItem()
    {
        $data = array();
        $status = false;
        $message = null;


        $menuitem_title = Arr::get($_POST, 'add_menuitem', null);
        $menuid = Arr::get($_POST, 'menuid', null);


        if ($menuitem_title != null)
        {
            $menuitem = DB::select('mi.*')
                ->from(array('menuitems', 'mi'))
                ->where('menuitem_title', '=', $menuitem_title)
                ->execute($this->client['database'])
                ->as_array();

            if ($menuitem[0]['menuitem_id'] == '')
            {
                $message = 'That menu item does not exist, please select an existing menu item.';
            }
            else
            {
                $results = DB::select()
                    ->from('menuitem_menu')
                    ->where('menuitem_id', '=', $menuitem[0]['menuitem_id'])
                    ->where('menu_id', '=', $menuid)
                    ->execute($this->client['database']);

                $count = count($results);
                if ($count > 0)
                {
                    $message = 'The menu item already exists in this menu.';
                }
                else
                {
                    $results = DB::insert('menuitem_menu', array('menuitem_id', 'menu_id'))
                        ->values(array($menuitem[0]['menuitem_id'], $menuid))
                        ->execute($this->client['database']);
                    $message = 'Added successfully.';
                    $status = true;
                }
            }
        }
        else
        {
            $message = "Item not provided. Please include an item.";
        }


        $this->template->content = PancakeResponse::out($status, $message, $data);
    }

    private function getRichItemIDFromPOSTRequest($should_create_non_existant_richitem = false)
    {// Looks at the POST request and returns the rich item ID (or looks it up by the provided type and URL).
        $richitem_id = Arr::get($_POST, 'richitem_id');
        if (!$richitem_id)
        {
            $type = Arr::get($_POST, 'type');
            $url = Arr::get($_POST, 'url');
            if (!empty($type) and !empty($url))
            {
                $richitem_in_db = DB::select('ri.*')
                    ->from(array('richitems', 'ri'))
                    ->where('richitem_type', '=', $type)
                    ->and_where('richitem_media', '=', $url)
                    ->execute($this->client['database'])
                    ->as_array();
                $richitem_id = ($richitem_in_db and $richitem_in_db[0] and $richitem_in_db[0]['richitem_id']) ? $richitem_in_db[0]['richitem_id'] : NULL;
                if (!$richitem_id)
                {// Add a new row to the richitems table
                    if ($should_create_non_existant_richitem === true)
                    {
                        $new_richitem_in_db = DB::insert('richitems', array('richitem_media', 'richitem_type'))
                            ->values(array($url, $type))
                            ->execute($this->client['database']);
                        if (isset($new_richitem_in_db[0]))
                        {
                            return $new_richitem_in_db[0];
                        }
                    }
                }
            }
            else
            {
                $this->template->content = PancakeResponse::out(false, 'The promo type and url were not specified.');
            }
        }
        return $richitem_id;
    }

    private function addRichItemWithIDToRichContentWithID($richitem_id, $richcontent_id)
    {
        $richcontent_richitem_in_db = DB::select('rirc.*')
            ->from(array('richitem_richcontent', 'rirc'))
            ->where('richcontent_id', '=', $richcontent_id)
            ->and_where('richitem_id', '=', $richitem_id)
            ->execute($this->client['database'])
            ->as_array();
        if (!$richcontent_richitem_in_db or !$richcontent_richitem_in_db[0] or !$richcontent_richitem_in_db[0]['richitem_enabled'])
        {// Add a new row to the richitem_richcontent table if it doesn't already exist.
            DB::insert('richitem_richcontent', array('richcontent_id', 'richitem_enabled', 'richitem_id'))
                ->values(array($richcontent_id, 1, $richitem_id))
                ->execute($this->client['database']);
        }
    }

    public function action_addPromoToMenus()
    {
        $richitem_id = $this->getRichItemIDFromPOSTRequest(true);
        $message = 'Successfully added relationships';
        $status = true;
        if ($richitem_id)
        {
            $menu_ids = Arr::get($_POST, 'menu_ids');
            foreach ($menu_ids as $menu_id)
            {
                $menus_in_db = DB::select('rc.*')
                    ->from(array('richcontent', 'rc'))
                    ->where('menu_id', '=', $menu_id)
                    ->execute($this->client['database'])
                    ->as_array();
                if (isset($menus_in_db[0]))
                {
                    $this->addRichItemWithIDToRichContentWithID($richitem_id, $menus_in_db[0]['richcontent_id']);
                }
                else
                {
                    $message = "Menu was not found in database";
                    $status = false;
                }
            }
        }
        $this->template->content = PancakeResponse::out($status, $message);
    }

    public function action_addPromoToStands()
    {
        $richitem_id = $this->getRichItemIDFromPOSTRequest(true);
        $message = 'Successfully added relationships';
        $stand_ids = Arr::get($_POST, 'stand_ids');
        if ($richitem_id)
        {
            $status = true;
            foreach ($stand_ids as $stand_id)
            {
                $stand_in_db = DB::select('rc.*')
                    ->from(array('richcontent', 'rc'))
                    ->where('stand_id', '=', $stand_id)
                    ->and_where('richcontent_type', '=', 'visual')
                    ->execute($this->client['database'])
                    ->as_array();
                if (isset($stand_in_db[0]))
                {
                    $this->addRichItemWithIDToRichContentWithID($richitem_id, $stand_in_db[0]['richcontent_id']);
                }
                else
                {
                    $message = "Stand was not found in database";
                    $status = false;
                }
            }
        }
        $this->template->content = PancakeResponse::out($status, $message);
    }

    private function setEnabledStateForRichItemWithIDAndRichContentWithID($enabled_state, $richitem_id, $richcontent_id)
    {
        DB::update('richitem_richcontent')
            ->set(array('richitem_enabled' => ($enabled_state) ? '1' : '0'))
            ->where('richitem_id', '=', $richitem_id)
            ->and_where('richcontent_id', '=', $richcontent_id)
            ->execute($this->client['database']);
    }

    private function setEnabledStateForRichItemAndMenusInPOSTRequest($enabled_state)
    {
        $richitem_id = $this->getRichItemIDFromPOSTRequest();
        $message = 'Successfully disabled promo';
        $status = true;
        if ($richitem_id)
        {
            $menu_ids = Arr::get($_POST, 'menu_ids');
            foreach ($menu_ids as $menu_id)
            {
                $menus_in_db = DB::select('rc.*')
                    ->from(array('richcontent', 'rc'))
                    ->where('menu_id', '=', $menu_id)
                    ->execute($this->client['database'])
                    ->as_array();
                if (isset($menus_in_db[0]))
                {
                    $this->setEnabledStateForRichItemWithIDAndRichContentWithID($enabled_state, $richitem_id, $menus_in_db[0]['richcontent_id']);
                }
                else
                {
                    $message = "Menu was not found in database";
                    $status = false;
                }
            }
        }
        $this->template->content = PancakeResponse::out($status, $message);
    }

    private function setEnabledStateForRichItemAndStandsInPOSTRequest($enabled_state)
    {
        $message = 'Successfully added relationships';
        $status = true;
        $richitem_id = $this->getRichItemIDFromPOSTRequest(true);
        if ($richitem_id)
        {
            $stand_ids = Arr::get($_POST, 'stand_ids');
            foreach ($stand_ids as $stand_id)
            {
                $stand_in_db = DB::select('rc.*')
                    ->from(array('richcontent', 'rc'))
                    ->where('stand_id', '=', $stand_id)
                    ->and_where('richcontent_type', '=', 'visual')
                    ->execute($this->client['database'])
                    ->as_array();
                if (isset($stand_in_db[0]))
                {
                    $this->setEnabledStateForRichItemWithIDAndRichContentWithID($enabled_state, $richitem_id, $stand_in_db[0]['richcontent_id']);
                }
                else
                {
                    $message = "Stand was not found in database";
                    $status = false;
                }
            }
        }
        $this->template->content = PancakeResponse::out($status, $message);
    }

    public function action_disablePromoInMenus()
    {
        $this->setEnabledStateForRichItemAndMenusInPOSTRequest(false);
    }

    public function action_enablePromoInMenus()
    {
        $this->setEnabledStateForRichItemAndMenusInPOSTRequest(true);
    }

    public function action_disablePromoInStands()
    {
        $this->setEnabledStateForRichItemAndStandsInPOSTRequest(false);
    }

    public function action_enablePromoInStands()
    {
        $this->setEnabledStateForRichItemAndStandsInPOSTRequest(true);
    }

    private function removeRichItemWithIDFromRichContentWithID($richitem_id, $richcontent_id)
    {
        DB::delete('richitem_richcontent')
            ->where('richcontent_id', '=', $richcontent_id)
            ->where('richitem_id', '=', $richitem_id)
            ->execute($this->client['database']);
    }

    public function action_removePromoFromMenus()
    {
        $menu_ids = Arr::get($_REQUEST, 'menu_ids', false);
        if ($menu_ids)
        {
            $richitem_id = $this->getRichItemIDFromPOSTRequest();
            if ($richitem_id)
            {
                foreach ($menu_ids as $menu_id)
                {
                    $menus_in_db = DB::select('rc.*')
                        ->from(array('richcontent', 'rc'))
                        ->where('menu_id', '=', $menu_id)
                        ->execute($this->client['database'])
                        ->as_array();
                    if (isset($menus_in_db[0]))
                    {
                        $this->removeRichItemWithIDFromRichContentWithID($richitem_id, $menus_in_db[0]['richcontent_id']);
                    }
                    else
                    {
                        $message = "Menu was not found in database";
                        $status = false;
                    }
                }
            }
            $this->template->content = PancakeResponse::out(TRUE, 'Removed promo from menus successfully.');
        }
        else
        {
            $this->template->content = PancakeResponse::out(FALSE, 'No menus were found.');
        }
    }

    public function action_removePromoFromStands()
    {
        $richitem_id = $this->getRichItemIDFromPOSTRequest();
        if ($richitem_id)
        {
            $stand_ids = Arr::get($_POST, 'stand_ids');
            foreach ($stand_ids as $stand_id)
            {
                $stand_in_db = DB::select('rc.*')
                    ->from(array('richcontent', 'rc'))
                    ->where('stand_id', '=', $stand_id)
                    ->and_where('richcontent_type', '=', 'visual')
                    ->execute($this->client['database'])
                    ->as_array();
                if (isset($stand_in_db[0]))
                {
                    $this->removeRichItemWithIDFromRichContentWithID($richitem_id, $stand_in_db[0]['richcontent_id']);
                }
            }
        }
        $this->template->content = PancakeResponse::out(true, "Promo successfully removed.");
    }

    public function action_getGlobalStands()
    {
        $result = DB::select('*')
            ->from('stands')
            ->join('richcontent')
            ->on('richcontent.stand_id', '=', 'stands.stand_id')
            ->where('richcontent.richcontent_type', '=', 'visual')
            ->execute($this->client['database'])
            ->as_array();
        if ($result)
            $output = PancakeResponse::out(TRUE, 'Retrieved Successfully', $result);
        else
            $output = PancakeResponse::out(FALSE, 'Failed to retrieve stands');
        $this->template->content = $output;
    }

    public function action_addGlobalItem()
    {
        $data = array();
        $status = false;
        $message = null;

        $price = Arr::get($_POST, 'price', null);
        $title = Arr::get($_POST, 'title', null);

        $item_id = DB::insert('menuitems', array('menuitem_title', 'menuitem_price'))
            ->values(array($title, $price))
            ->execute($this->client['database']);

        if ($item_id)
        {
            $status = true;
            $data = array();
            $message = "successfully created new item";
        }
        else
        {
            $message = "There was an issue with item creation. Please check Database.";
        }

        $output = PancakeResponse::out($status, $message, $data);

        echo $output;
        exit;
    }

    public function action_deleteMenuItem()
    {
        $data = array();
        $status = false;
        $message = null;
        $all_deleted = false;
        $menuitem_titles = json_decode(Arr::get($_POST, 'menuitem_title', null), true);
        $menu_ids = json_decode(Arr::get($_POST, 'menu_id', null), true);


        $subindex = 0;

        $menuitems = array();
        foreach ($menuitem_titles as $menuitem_title)
        {
            $menuitem_id = DB::select('mi.*')
                ->from(array('menuitems', 'mi'))
                ->where('menuitem_title', '=', $menuitem_title)
                ->execute($this->client['database'])
                ->as_array();
            $menuitems [] = $menuitem_id;
        }

        foreach ($menuitems as $menus => $menu)
        {
            $deleted = DB::delete('menuitem_menu')
                ->where('menuitem_id', '=', $menu[0]['menuitem_id'])
                ->where('menu_id', '=', $menu_ids[$subindex])
                ->execute($this->client['database']);
            $subindex++;

            if ($deleted == false)
            {
                $all_deleted = false;
            }
        }

        if ($all_deleted)
        {
            $message = "Menu Item successfully deleted.";
            $status = true;
        }
        else
        {
            $message = "There was an issue with your request, please try again later.";
        }

        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
    }

    public function action_deletePromosFromMenu()
    {
        $promo_data = json_decode(Arr::get($_POST, 'promo_data'), true);
        foreach ($promo_data as $one_promo_data)
        {// TODO: we should also probably delete the promo item if it's being deleted from the last menu with which it's associated
            $one_promo_data_split = explode('-', $one_promo_data);
            $deleted = DB::delete('richitem_richcontent')
                ->where('richcontent_id', '=', $one_promo_data_split[0])
                ->and_where('richitem_id', '=', $one_promo_data_split[1])
                ->execute($this->client['database']);
            if ($deleted == false)
            {
                echo PancakeResponse::out(false, "There was an issue with your request, please try again later.");
                exit;
            }
        }

        echo PancakeResponse::out(true, "Promo Item successfully deleted.");
        exit;
    }

    public function action_getMenuItems()
    {
        $data = array();
        $status = false;
        $message = null;

        $term = Arr::get($_POST, 'term', null);

        $menuitems = DB::select('mi.*')
            ->from(array('menuitems', 'mi'))
            ->where('menuitem_title', 'like', '%' . $term . '%')
            ->order_by('menuitem_title')
            ->execute($this->client['database'])
            ->as_array();

        if ($menuitems)
        {
            $arraystring = '[';
            $firstRun = true;
            foreach ($menuitems as $menuitem)
            {
                if ($firstRun)
                {
                    $firstRun = false;
                    $arraystring .= '"' . $menuitem['menuitem_title'] . '"';
                }
                else
                {
                    $arraystring .= ',"' . $menuitem['menuitem_title'] . '"';
                }
            }
            $arraystring .= ']';

            $data = array("menuitems" => $arraystring);
            $status = true;
            $message = "Menu Item Found";
        }
        else
        {
            $message = "No Menu Items Found";
        }

        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
    }

    public function action_getStandId($_stand_name)
    {
        $stand_name = $_stand_name;
        $status = false;
        $data = array();
        $message = null;

        $stand_id = DB::select('s.*')
            ->from(array('stands', 's'))
            ->where('stand_name', '=', $stand_name)
            ->execute($this->client['database'])
            ->as_array();
        if ($stand_id)
        {
            $status = true;
            $message = 'Recieved ID';
            $data = $stand_id;
        }
        else
        {
            $message = 'No stand found by that name';
        }

        return $data;
        /* $output = PancakeResponse::out($status, $message, $data);
          echo $output;
          exit; */
    }

    public function action_getStandDetails()
    {
        $stand_name = Arr::get($_REQUEST, 'stand', 0);
        $status = false;
        $data = array();
        $message = null;

        $stand_id_results = DB::select('s.*')
            ->from(array('stands', 's'))
            ->where('stand_name', '=', $stand_name)
            ->execute($this->client['database'])
            ->as_array();

        $results = DB::select('m.*')
            ->from(array('menus', 'm'))
            ->where('stand_id', '=', $stand_id_results[0]['stand_id'])
            ->execute($this->client['database'])
            ->as_array();
        if ($results)
        {
            $menuitems = array();
            $menupromos = array();
            $items = array();
            foreach ($results as $menu)
            {
                $items = DB::select('m.*', 'mim.*', 'mi.*')
                    ->distinct(true)
                    ->from(array('menus', 'm'))
                    ->join(array('menuitem_menu', 'mim'))
                    ->on('m.menu_id', '=', 'mim.menu_id')
                    ->join(array('menuitems', 'mi'))
                    ->on('mi.menuitem_id', '=', 'mim.menuitem_id')
                    ->where('m.menu_id', '=', $menu['menu_id'])
                    ->order_by('mim.position')
                    ->execute($this->client['database'])
                    ->as_array();
                foreach ($items as $item)
                {
                    $menuitems [] = $item;
                }
                $promos = DB::select('ri.*', 'rc.*', 'rirc.*')
                    ->distinct(true)
                    ->from(array('richcontent', 'rc'))
                    ->join(array('richitem_richcontent', 'rirc'))
                    ->on('rirc.richcontent_id', '=', 'rc.richcontent_id')
                    ->join(array('richitems', 'ri'))
                    ->on('rirc.richitem_id', '=', 'ri.richitem_id')
                    ->where('rc.menu_id', '=', $menu['menu_id'])
                    ->execute($this->client['database'])
                    ->as_array();
                foreach ($promos as $promo)
                {
                    $menupromos[] = $promo;
                }
            }

            $status = true;
            $data = array('menus' => $results,
                'stand' => $stand_id_results,
                'menuitems' => $menuitems,
                'menupromos' => $menupromos
            );
            $message = "Stand details successfully recieved";
        }
        else
        {
            $message = "No stands could be recieved";
        }

        $output = PancakeResponse::out($status, $message, $data);

        echo $output;
        exit;
    }

    public function action_retrieveStandInfo()
    {
        $data = null;
        $message = "";
        $status = false;

        $stand_name = $_REQUEST["stand_name"];

        $stand_id_result = $this->action_getStandId($stand_name);
        $stand_id = $stand_id_result[0];
        if ($stand_id)
        {
            $menus = $this->_getMenusForStandWithID($stand_id['stand_id']);
            $promo = $this->_getEnabledPromosForStandWithID($stand_id['stand_id']);

            $zone = array();
            $zone_number = 1;
            $zones['zone' . $zone_number++]['menus'] = array('menu1' => $menus[0], 'menu2' => $menus[1]);

            if (isset($promo) && !empty($promo))
            {
                $zones['zone' . $zone_number++]['large_promo'] = array('promo1' => $promo);
            }
            if (count($menus) > 2)
            {
                $zones['zone' . $zone_number++]['menus'] = array('menu1' => $menus[2], 'menu2' => $menus[3]);
            }

            $stand_array = array(
                'stand_name' => $stand_id['stand_description'],
                'footer' => 'ALL PRICES INCLUDE SALES TAX',
                'zones' => $zones,
                'bg_image' => $stand_id['stand_bg_image'],
                'message' => $stand_id['stand_message']
            );

            if (!$promo)
            {
                unset($stand_array["promo"]);
            }
            else
            {
                if ($promo['bg_image'] == null || $promo['bg_image'] == '' || empty($promo['bg_image']))
                {
                    unset($stand_array['promo']);
                }
            }

            $message = "Stand successfully built.";
            $status = true;
            $data = array("stand_info" => $stand_array);
        }
        else
        {
            $message = "No Stand Could Be Found with name : " . Arr::get($_GET, "stand_name", null);
        }
        header('Content-type: application/json');
        $this->template->content = addslashes(json_encode($data));
    }

}
?>