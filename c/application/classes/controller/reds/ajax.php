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
 * @modifying author iBrown
 */
class Controller_Reds_Ajax extends Controller_Icg_v1_Icg {

    protected $_auth_required = FALSE;

    public function action_submit() {

        //updates menu item for a specific menu for a specific stand
        $stand_name = Arr::get($_POST, 'stand_name', '');
        if (!empty($stand_name))
            unset($_POST['stand_name']);
        $post_data = $_POST;
        array_pop($post_data);

        $temp_menu_id = '';
        $dataToChange = array('post_data' => json_encode($post_data));
        $encoded_result = $this->_pancake_call('reds', 'ajax', 'submitChanges', $dataToChange);
        $decoded_result = json_decode($encoded_result, true);

        if ($decoded_result['meta']['status']) {
            echo $encoded_result;
            if (!empty($stand_name)) {
                $result = $this->_pancake_call('waffle', 'push', 'profile', array('client_id' => 5, 'profile_names' => $stand_name), 2, TRUE);
            }
        } else {
            echo $decoded_result['meta']['message'];
        }
    }

    public function action_push_all() {
        $encoded_result = $this->_pancake_call('waffle', 'push', 'all_by_client_id', array(
            'client_id' => 5,
                ), 2, FALSE);
        echo $encoded_result;
    }

    public function action_menuitems() {

        $term = Arr::get($_GET, 'term', null);
        if ($term != null) {
            $data = array('term' => $term);
            $encoded_result = $this->_pancake_call('reds', 'ajax', 'getMenuItems', $data);
            $decoded_result = json_decode($encoded_result, true);
            if ($decoded_result['meta']['status'] == 1) {
                echo $decoded_result['data']['menuitems'];
            } else {
                echo $decoded_result['meta']['message'];
            }
        }
    }

    public function action_add() {
        $resultmsg = '';

        $menuitem = Arr::get($_POST, 'add_menuitem', null);
        $newItem = '';
        $menuid = '';
        foreach ($menuitem as $key => $value) {
            if (!empty($value)) {
                $newItem = $value;
                $menuid = $key;
            }
        }

        if ($newItem != '') {
            $data = array('add_menuitem' => $newItem, 'menuid' => $menuid);
            $encoded_result = $this->_pancake_call('reds', 'ajax', 'addMenuItem', $data);
            $decoded_result = json_decode($encoded_result, true);
            if ($decoded_result['meta']['status'] == 1) {
                echo "Added successfully.";
            } else {
                echo $decoded_result['meta']['message'];
            }
        } else {
            echo "Please include an item to add.";
        }
    }

    public function action_ajaxGetPromoWithType() {
        $decoded_result = json_decode($this->_pancake_call('reds', 'ajax', 'getGlobalPromos', array("type" => Arr::get($_POST, 'type', null))), TRUE);

        if ($decoded_result['meta']['status'] == 1) {
            echo json_encode($decoded_result['data']);
        } else {
            echo json_encode(false);
        }
    }

    private function makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess($action, $data = array(), $message = '') {// Makes a Pancake call with the given action, data, and success message.
        $data['type'] = Arr::get($_POST, 'type');
        $data['url'] = Arr::get($_POST, 'url');
        $encoded_result = $this->_pancake_call('reds', 'ajax', $action, $data);
        $decoded_result = json_decode($encoded_result, true);
        if ($decoded_result['meta']['status'] == 1) {
            echo $message;
        } else if ($decoded_result['meta']['status'] == 0 and $decoded_result['meta']['message']) {
            echo $decoded_result['meta']['message'];
        } else {
            echo $encoded_result;
        }
    }

    public function action_addPromoToMenus() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('addPromoToMenus', array(
            'menu_ids' => explode(',', Arr::get($_POST, 'menu_ids')),
                ), "Added successfully.");
    }

    public function action_addPromoToStands() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('addPromoToStands', array(
            'stand_ids' => explode(',', Arr::get($_POST, 'stand_ids'))
                ), "Added successfully.");
    }

    public function action_disablePromoInMenus() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('disablePromoInMenus', array(
            'menu_ids' => explode(',', Arr::get($_POST, 'menu_ids'))
                ), "Disabled successfully.");
    }

    public function action_disablePromoInStands() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('disablePromoInStands', array(
            'stand_ids' => explode(',', Arr::get($_POST, 'stand_ids'))
                ), "Disabled successfully.");
    }

    public function action_enablePromoInMenus() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('enablePromoInMenus', array(
            'menu_ids' => explode(',', Arr::get($_POST, 'menu_ids'))
                ), "Enabled successfully.");
    }

    public function action_enablePromoInStands() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('enablePromoInStands', array(
            'stand_ids' => explode(',', Arr::get($_POST, 'stand_ids'))
                ), "Enabled successfully.");
    }

    public function action_removePromoFromMenus() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('removePromoFromMenus', array(
            'menu_ids' => explode(',', Arr::get($_POST, 'menu_ids'))
                ), "Removed successfully.");
    }

    public function action_removePromoFromStands() {
        $this->makePromoManagementPancakeCallWithActionAndDataAndMessageOnSuccess('removePromoFromStands', array(
            'stand_ids' => explode(',', Arr::get($_POST, 'stand_ids'))
                ), "Removed successfully.");
    }

    public function action_addglobal() {
        $title = trim(Arr::get($_POST, 'add_title', null));
        $price = trim(Arr::get($_POST, 'add_price', null));

        $data = array(
            'title' => $title,
            'price' => $price
        );

        if ($title != null && $price != null) {
            $encoded_result = $this->_pancake_call('reds', 'ajax', 'addGlobalItem', $data);
            $decoded_result = json_decode($encoded_result, true);
            if ($decoded_result['meta']['status'] == 1) {
                echo 'Added Successfully.';
            } else {
                echo $decoded_result['meta']['message'];
            }
        }
    }

    public function action_deleteglobal() {
        $menuitem_id = Arr::get($_POST, 'menuitem_id', null);
        $encoded_result = $this->_pancake_call('reds', 'ajax', 'deleteGlobal', array('menuitem_id' => $menuitem_id));
        $decoded_result = json_decode($encoded_result, true);
        if ($decoded_result['meta']['status'] == 1) {
            echo "Successfully deleted";
        } else {
            echo $decoded_result['meta']['message'];
        }
    }

    public function action_delete() {
        $menu_ids = Arr::get($_POST, 'menu_id', null);
        $menuitem_titles = Arr::get($_POST, 'menuitem_title', null);

        $data = array('menu_id' => json_encode($menu_ids), 'menuitem_title' => json_encode($menuitem_titles));

        $encoded_result = $this->_pancake_call('reds', 'ajax', 'deleteMenuItem', $data);
        $decoded_result = json_decode($encoded_result, true);

        if ($decoded_result['meta']['status'] != 1) {
            echo "There was an issue with your request, please try again later.";
        } else {
            echo $decoded_result['meta']['message'];
        }
    }

    public function action_deletePromosFromMenu() {
        $decoded_result = json_decode($this->_pancake_call('reds', 'ajax', 'deletePromosFromMenu', array('promo_data' => json_encode(Arr::get($_POST, 'promo_data', null)))), true);
        if ($decoded_result['meta']['status'] != 1) {
            echo "There was an issue with your request, please try again later.";
        } else {
            echo $decoded_result['meta']['message'];
        }
    }

    public function action_query() {
        if (isset($_GET['stand']) && $_GET['stand'] === 'display-control-panel') {
            $client_id_decoded_result = $this->_pancake_call('waffle', 'clients', 'get_by_system_name', array('system_name' => 'reds'), 2, TRUE);
            $mmses_decoded_result = $this->_pancake_call('waffle', 'hardware', 'get_all_by_client_id', array('client_id' => $client_id_decoded_result['data']['client_id']), 2, TRUE);
            $all_profile_names = array();
            $all_profile_tv_models = array();
            foreach ($mmses_decoded_result['data'] as $mms) {
                foreach ($mms['profiles'] as $profile) {
                    $all_profile_names[] = $profile['name'];
                    if (isset($mms['tv'])) {
                        $all_profile_tv_models[] = $mms['tv']['model'];
                    }
                }
            }
            $view = View::factory('reds/display-control-panel');
            $view->all_profile_names = $all_profile_names;
            $view->all_profile_tv_models = $all_profile_tv_models;
            $view->client_id = $client_id_decoded_result['data']['client_id'];
            $view->mmses = $mmses_decoded_result['data'];
            echo $view;
        } else if (isset($_GET['stand']) && $_GET['stand'] === 'global') {
            $encoded_result = $this->_pancake_call('reds', 'ajax', 'getGlobalMenus', $data = array("getPromos" => true, "getMenus" => true));
            $decoded_result = json_decode($encoded_result, true);
            $encoded_stands_result = $this->_pancake_call('reds', 'ajax', 'getGlobalStands');
            $decoded_stands_result = json_decode($encoded_stands_result, true);
            $view = View::factory('reds/stand');
            $view->menu_promos = $decoded_result['data']['promos']["menu_promos"];
            $view->center_promos = $decoded_result['data']['promos']["center_promos"];
            $view->menuitems = $decoded_result['data']["menuitems"];
            $view->menus = $decoded_result['data']['menus'];
            $view->stands = $decoded_stands_result['data'];
            echo $view;
        } else {
            $view = View::factory('reds/standdetails');

            $decoded_result = json_decode($this->_pancake_call('reds', 'ajax', 'getStandDetails', array(
                        'stand' => Arr::get($_GET, 'stand', 0)
                    )), true);
            $view->stand = $decoded_result['data']['stand'][0];
            $view->menus = $decoded_result['data']['menus'];
            $view->menuitems = $decoded_result['data']['menuitems'];
            $view->menupromos = $decoded_result['data']['menupromos'];

            $rich_items = json_decode($this->_pancake_call('reds', 'ajax', 'getGlobalPromos', array()), true);
            $view->rich_items = $rich_items['data'];

            $stand_promos = json_decode($this->_pancake_call('reds', 'ajax', 'getStandPromos', array(
                        'stand_id' => $decoded_result['data']['stand'][0]['stand_id']
                    )), true);
            $view->stand_promos = $stand_promos['data'];

            echo $view;
        }
    }

    public function action_runRS232Command() {
        $command_id = Arr::get($_POST, 'command_id');
        if ($command_id) {
            $profile_names = explode(',', Arr::get($_POST, 'profile_names', ''));
            $profile_tv_models = Arr::get($_POST, 'tv_models');
            $profile_tv_models = ($profile_tv_models) ? explode(',', $profile_tv_models) : NULL;
            foreach ($profile_names as $i => $profile_name) {
                $rs_232_command = '';
                $tv_model = ($profile_tv_models and $profile_tv_models[$i]) ? $profile_tv_models[$i] : Arr::get($_POST, 'tv_model');
                if ($tv_model === 'lg') {
                    if ($command_id === 'powerOff') {
                        $rs_232_command = 'COM1 "0x6B 0x61 0x20 0x30 0x30 0x20 0x30 0x30 0x0D"';
                    } else if ($command_id === 'powerOn') {
                        $rs_232_command = 'COM1 "0x6B 0x61 0x20 0x30 0x30 0x20 0x30 0x31 0x0D"';
                    }
                } else if ($tv_model === 'philips') {
                    if ($command_id === 'powerOff') {
                        $rs_232_command = 'COM1 "0x05 0x00 0x18 0x01 0x1C"';
                    } else if ($command_id === 'powerOn') {
                        $rs_232_command = 'COM1 "0x05 0x00 0x18 0x02 0x1F"';
                    }
                } else if ($tv_model === 'sharp') {
                    if ($command_id === 'changeInput') {
                        $rs_232_command = 'COM1 "0x78 0x3' . Arr::get($_POST, 'input_id') . ' 0x41 0x56 0x78 0x31 0x2C 0x78 0x32 0x2C 0x78 0x33 0x2C 0x78 0x34 0x2C 0x78 0x35 0x2C 0x78 0x36 0x2C 0x78 0x37 0x2C 0x78 0x38 0x0D" -baud-rate=115200'; // 3x3
                    } else if ($command_id === 'powerOff') {
                        $rs_232_command = 'COM1 "0x50 0x57 0x4F 0x46 0x46 0x0D" -baud-rate=115200'; // 3x3
                    } else if ($command_id === 'powerOn') {
                        $rs_232_command = 'COM1 "0x50 0x57 0x4F 0x4E 0x0D" -baud-rate=115200'; // 3x3
                    }
                } else if ($tv_model === 'sharp-matrix') {
                    if ($command_id === 'powerOff') {
                        $rs_232_command = 'COM2 "0x52 0x53 0x32 0x33 0x32 0x7A 0x6F 0x6E 0x65 0x32 0x5B 0x05 0x00 0x18 0x01 0x1C 0x5D 0x0D" -baud-rate=115200'; // 5x4
                    } else if ($command_id === 'powerOn') {
                        $rs_232_command = 'COM2 "0x52 0x53 0x32 0x33 0x32 0x7A 0x6F 0x6E 0x65 0x32 0x5B 0x05 0x00 0x18 0x02 0x1F 0x5D 0x0D" -baud-rate=115200'; // 5x4
                    }
                }
                if (!empty($rs_232_command)) {
                    $decoded_result = $this->_pancake_call('waffle', 'push', 'profile', array(
                        'actions' => json_encode(array(array(
                                'code' => 2,
                                'data' => array(
                                    'command' => addslashes('"C:\Program Files\Waffle\utils\rs232.exe" ' . $rs_232_command)
                                )
                                ))),
                        'client_id' => Arr::get($_POST, 'client_id'),
                        'profile_names' => $profile_name
                            ), 2, TRUE);
                    if ($decoded_result['meta']['status'] == 1) {
                        echo json_encode($decoded_result['data']);
                    } else {
                        echo $decoded_result['meta']['message'];
                    }
                }
            }
        } else {
            echo 'Please include a command to run as the command_id parameter.';
        }
    }

    public function getPromoArray($stand_id) {

        $data = array('stand_id' => $stand_id);

        $encoded_result = $this->_pancake_call('reds', 'ajax', 'getPromoArray', $data);
        $decoded_result = json_decode($encoded_result, true);

        return $decoded_result['meta']['status'] ? $decoded_result['data'] : false;
    }

    public function getMenusArray($stand_id) {

        $encoded_result = $this->_pancake_call('reds', 'ajax', 'getMenusArray', array('stand_id' => $stand_id));
        $decoded_result = json_decode($encoded_result, true);

        if ($decoded_result['meta']['status'] == 1) {
            echo $decoded_result['meta']['message'];
            return $decoded_result['data'];
        }
    }

    public function retrieveStandArray($stand_name) {
        //$stand = ORM::factory('stand')->where('stand_name', '=', $stand_name)->find();

        $encoded_result = $this->_pancake_call('reds', 'ajax', 'getStandId', array('stand_name' => $stand_name));
        $decoded_result = json_decode($encoded_result, true);
        $stand_id;
        if ($decoded_result['meta']['status'] == 1) {
            $stand_id = $decoded_result['data'][0];

            $menus = $this->getMenusArray($stand_id['stand_id']);
            $promo = $this->getPromoArray($stand_id['stand_id']);

            $zone = array();
            $zone_number = 1;
            $zones['zone' . $zone_number++]['menus'] = array('menu1' => $menus[0], 'menu2' => $menus[1]);

            if (isset($promo) && !empty($promo)) {
                $zones['zone' . $zone_number++]['large_promo'] = array('promo1' => $promo);
            }

            if (count($menus) > 2) {
                $zones['zone' . $zone_number++]['menus'] = array('menu1' => $menus[2], 'menu2' => $menus[3]);
            }
        } else {
            echo $decoded_result['meta']['message'];
            return false;
        }

        $stand_array = array(
            'stand_name' => $stand_id['stand_description'],
            'footer' => 'ALL PRICES INCLUDE SALES TAX',
            'zones' => $zones,
            'bg_image' => $stand_id['stand_bg_image'],
            'message' => $stand_id['stand_message']
        );

        if ($promo['bg_image'] == null || $promo['bg_image'] == '' || empty($promo['bg_image'])) {
            unset($stand_array['promo']);
        }
        return $stand_array;
    }

    public function action_getJSON() {
        $this->get_FinalArray(Arr::get($_GET, 'name', null));
    }

    function get_FinalArray($stand_name) {
        $beer_icons = array(
            'images/bud-light.png',
            'images/budweiser.png',
            'images/micheloblight.png',
            'images/molson-golden.png',
            'images/budweiserselect.png',
            'images/millerlite.png',
            'images/shocktop.png',
            'images/yuengling.png',
            'images/coorslight.jpg',
            'images/budlime.png',
            'images/leinenkugel.png',
            'images/50/bud-light_50.png',
            'images/50/budweiser_50.png',
            'images/50/budlime_50.png',
            'images/50/shocktop_50.png',
            'images/50/leinenkugel_50.png',
            'images/50/gooseisland_50.png',
            'images/50/moerleinhelles_50.png',
            'images/50/millerlite_50.png',
            'images/50/stellaartois_50.png',
            'images/50/moerleinotr_50.png',
            'images/50/hudyamber_50.png',
        );

        // $stands = array(
        // 	$stand_name => $this->retrieveStandArray($stand_name),
        // );

        $final = array('beerIcons' => $beer_icons, 'stand_info' => $this->retrieveStandArray($stand_name));
        echo "<pre>";
        print_r($final);
        echo "</pre>";
        echo stripslashes(json_encode($final));
    }

    public function action_logout() {
        $result = json_decode($this->_pancake_call('auth', 'user', 'logout'), false);
        echo $result;
        exit;
        if ($result['meta']['status'] == 1) {
            Cookie::set('session_id', NULL);
            $output = "true";
        } else {
            $output = "false";
        }
        echo $output;
    }

}

?>