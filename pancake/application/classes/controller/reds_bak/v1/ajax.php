<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Reds_v1_Ajax extends Controller_Templates_APIv1
{

    public function action_getPromoArray()
    {
        $status = false;
        $message = null;
        $data = array();

        $stand_id = Arr::get($_REQUEST, 'stand_id', null);

        $promoArray = DB::select('rc.richcontent_bg_image', 'rc.richcontent_fg_image', 'ri.richitem_media', 'ri.richitem_type')
            ->from(array('richcontent', 'rc'))
            ->join(array('richitem_richcontent', 'rirc'))
            ->on('rirc.richcontent_id', '=', 'rc.richcontent_id')
            ->join(array('richitems', 'ri'))
            ->on('rirc.richitem_id', '=', 'ri.richitem_id')
            ->where('rc.stand_id', '=', $stand_id)
            ->where('rc.richcontent_type', '=', 'visual')
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

        $output = PancakeResponse::out($status, $message, $data);

        echo $output;

        exit;
    }

    public function action_getMenusArray()
    {
        $status = false;
        $message = null;
        $data = array();

        $stand_id = Arr::get($_REQUEST, 'stand_id', null);

        $menus = DB::select('menus.*')
            ->from('menus')
            ->where('stand_id', '=', $stand_id)
            ->execute($this->client['database'])
            ->as_array();

        foreach ($menus as $menu)
        {

            $items = $this->getMenuItemsInMenu($menu['menu_id']);
            $richContent = $this->getRichContentInMenu($menu['menu_id']);

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
        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
    }

    public function getRichContentInMenu($menu_id)
    {

        $results = DB::select('ri.*', 'rc.*', 'rirc.*')
            ->distinct(true)
            ->from(array('richcontent', 'rc'))
            ->join(array('richitem_richcontent', 'rirc'))
            ->on('rirc.richcontent_id', '=', 'rc.richcontent_id')
            ->join(array('richitems', 'ri'))
            ->on('rirc.richitem_id', '=', 'ri.richitem_id')
            ->where('rc.menu_id', '=', $menu_id)
            ->execute($this->client['database'])
            ->as_array();

        $icons = array();
        $images = array();

        foreach ($results as $result)
        {
            switch ($result['richitem_type'])
            {
                case "icon":
                    $icons[] = $result['richitem_media'];
                    break;

                case "promo":
                    $images[] = $result['richitem_media'];
                    break;

                default:
                    die('invalid type for menu. check database integrity');
                    break;
            }
        }


        return array(
            'icons' => $icons,
            'images' => $images,
            'colors' => array(
                'text' => $result['richcontent_text'],
                'bar' => $result['richcontent_bar'],
            ),
        );
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

    public function getMenuItemsInMenu($menu_id)
    {
        $results = DB::select('m.*', 'mim.*', 'mi.*')
            ->distinct(true)
            ->from(array('menus', 'm'))
            ->join(array('menuitem_menu', 'mim'))
            ->on('m.menu_id', '=', 'mim.menu_id')
            ->join(array('menuitems', 'mi'))
            ->on('mi.menuitem_id', '=', 'mim.menuitem_id')
            ->where('m.menu_id', '=', $menu_id)
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

        if ($results >= 0)
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
            // This is for stand/menu id specific menu items
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

        echo $encoded_result;
        exit;
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

        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
    }

    public function action_getGlobalMenus()
    {
        $status = false;
        $message = null;
        $data = array();

        $results = DB::select('m.*')
            ->from(array('menuitems', 'm'))
            ->order_by('m.menuitem_title')
            ->execute($this->client['database'])
            ->as_array();

        if ($results)
        {
            $status = true;
            $message = "Menus successfully recieved.";
            $data = $results;
        }
        else
        {
            $message = "There are no menus to recieve";
        }

        $output = PancakeResponse::out($status, $message, $data);

        echo $output;
        exit;
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


        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
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
        $menuitem_titles = Arr::get($_POST, 'menuitem_title', false);
        $menu_ids = Arr::get($_POST, 'menu_id', null);

        $menuitem_titles = ($menuitem_titles) ? json_decode($menuitem_titles, TRUE) : FALSE;
        $menu_ids = ($menu_ids) ? json_decode($menu_ids, TRUE) : FALSE;

        if ($menuitem_titles && $menu_ids)
        {
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
        else
        {
            $output = PancakeResponse::out(TRUE, "Nothing to delete.");
            echo $output;
            exit;
        }
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

    public function action_getStandId()
    {
        $stand_name = Arr::get($_POST, 'stand_name', null);
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

        $output = PancakeResponse::out($status, $message, $data);
        echo $output;
        exit;
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
            }

            $status = true;
            $data = array('menus' => $results,
                'stand' => $stand_id_results,
                'menuitems' => $menuitems
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

}
?>