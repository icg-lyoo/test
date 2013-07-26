<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v1_Push extends Controller_Templates_APIv1 {

      //Actions:
      // 1 - update
      // 2 - screenshot
      // 3 - tv control

      public function action_profile_all() {
            $action = Arr::get($_POST, 'action', 1); // Default is 1 = update
            $zone = Arr::get($_POST, 'zone', 'MMS');
            $room = Arr::get($_POST, 'room', $this->user['system_name']);
            $data = Arr::get($_POST, 'data', array());
            $output = '';

            $output = $this->execute_oatmeal('all', $data, $action, $zone, $room);
            $this->template->content = $output;
      }

      public function action_profile() {
            $profile_name = Arr::get($_POST, 'profile', '');
            $action = Arr::get($_POST, 'action', 1); // Default is 1 = update
            $zone = Arr::get($_POST, 'zone', 'MMS');
            $room = Arr::get($_POST, 'room', $this->user['system_name']);
            $data = Arr::get($_POST, 'data', array());

            $output = '';

            if (!empty($profile_name)) {
                  $client_id = $this->user['id'];
                  $client_db = PancakeClient::database_instance($client_id);

                  // Check if the profile exists
                  $profile_exists = DB::select('id')
                          ->from('waffle_profiles')
                          ->where('name', '=', $profile_name)
                          ->execute($client_db)
                          ->count();

                  if ($profile_exists > 0) {
                        // Get all hardware names using the profile name
                        $hardware_results = DB::select('h.name')
                                ->from(array('hardware', 'h'))
                                ->join(array('waffle_profile_map', 'wpm'))
                                ->on('wpm.hardware_id', '=', 'h.id')
                                ->join(array('waffle_profiles', 'wp'))
                                ->on('wp.id', '=', 'wpm.profile_id')
                                ->where('wp.name', '=', trim($profile_name))
                                ->execute($client_db)
                                ->as_array();

                        $hardwares = array();

                        if (count($hardware_results) > 0) {
                              foreach ($hardware_results as $hr) {
                                    $hardwares[] = $hr['name'];
                              }

                              $hardware_string = implode(',', $hardwares);

                              // Get profile id
                              $profile_id = DB::select('id')
                                      ->from('waffle_profiles')
                                      ->where('name', '=', $profile_name)
                                      ->execute($client_db)
                                      ->get('id');

                              $data = (empty($data)) ? array('pid' => intval($profile_id)) : $data;
                              $output = $this->execute_oatmeal($hardware_string, $data, $action, $zone, $room);
                        } else {
                              $output = PancakeResponse::out(FALSE, Kohana::message('waffle/push', 'no_hardware_profile'));
                        }
                  } else {
                        $output = PancakeResponse::out(FALSE, Kohana::message('waffle/push', 'no_profile'));
                  }
            } else {
                  $output = PancakeResponse::out(FALSE, Kohana::message('waffle/push', 'no_profile_name'));
            }

            $this->template->content = $output;
      }

      private function execute_oatmeal($hardware_string = 'all', $data = array(), $action = 1, $zone = 'MMS', $room = NULL) {
            $room = ($room == NULL) ? $this->user['system_name'] : $room;
            $data = addslashes(json_encode($data));
            $exec = sprintf('/home/scripts/oatmeal.sh %s %s %s %s %s', $hardware_string, $action, $data, $zone, $room);
            $exec_output = array();
            $exec_return = 0;

            exec($exec, $exec_output, $exec_return);

            if (true || $exec_return === 0) {
                  $output = PancakeResponse::out(TRUE, implode("\n", $exec_output));
            } else {
                  $output = PancakeResponse::out(FALSE, Kohana::message('waffle/push', 'exec_failed'));
            }
            return $output;
      }

}