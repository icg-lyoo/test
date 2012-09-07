<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Data_MenuBoard_MCDV1
 *
 * @author ericjohnson
 */
include_once './include/Data_MenuBoard.php';

class Data_MenuBoard_MCDV1 extends Data_MenuBoard {

      //put your code here

      public static $schedule_data;
      public static $schedule_id;
      public static $mod_data_path = './mod.json'; //this is added as a blank file through the update.sh shell script
      
      const RESPONSE_STORE_CLOSED = 1111;

      public function __construct() {
            parent::_get();
      }

      protected function config() {
            if (isset(Data::$json_content['timezone'])) {
                  date_default_timezone_set(Data::$json_content['timezone']);
                  MenuBoard::$ts = time();
            }

            return true;
      }

      public function get() {
            if (isset($this->_raw_content) && $this->config()) {
                  return $this->getScheduleData();
            }

            return 'no content';
      }

      private function getScheduleData() {

            self::$schedule_data = self::$json_content['schedules'];

            $scheduleId = self::getScheduleID(MenuBoard::$ts);

            if (is_string($scheduleId)) {
                  self::$schedule_id = $scheduleId;

                  $r = self::$json_content['dp_data'][self::$schedule_id];
            } else {
                  
                  $r = $scheduleId;
            }

            return $r;
      }

      public static function getScheduleID($ts = false) {
            $time = ($ts) ? $ts : MenuBoard::$ts;

            $first_schedule_ts = null;
            $last_schedule_ts = null;

            /*
             * Start checking for schedule with MenuBoard timestamp
             */
            foreach (self::$schedule_data as $dp_key => $dp_start_end_arrays) {
                  // if data is present in json, this code is executed
                  if (empty($dp_start_end_arrays)) {
                        Log::write('No scheduled data', Log::$TYPE_ERROR);
                        Response::out('No Scheduled Data', Response::STATUS_ERROR);
                        exit;
                  }
                  foreach ($dp_start_end_arrays as $start_end_str => $value) {

                        $start_end_arr = explode('-', $start_end_str);
                        $start = $start_end_arr[0];
                        $end = $start_end_arr[1];

                        if (empty($first_schedule_ts)) {
                              $first_schedule_ts = $start;
                        } elseif ($first_schedule_ts > $start) {
                              $first_schedule_ts = $start;
                        }

                        if (empty($last_schedule_ts)) {
                              $last_schedule_ts = $end;
                        } elseif ($last_schedule_ts < $end) {
                              $last_schedule_ts = $end;
                        }

                        if ($start <= $time && $end >= $time) {

                              return $dp_key;
                        }
                  }
            }

            if ($time > $first_schedule_ts && $time < $last_schedule_ts) {
                  //current time is within the current schedule timeframe
                  // usually this happens when the store is closed and there 
                  // is no content schedule for the current time even though there is a active schedule
                  $msg = 'There is a Gap in the schedules, currently at ' . date('m/d/y h:i:s', $time) . ' there is no schedule, Check if the store is closed.';
                  Log::write($msg, Log::$TYPE_WARNING);
                  return Response::out($msg, self::RESPONSE_STORE_CLOSED, 'array', array('return' => true));
            }

            /*
             * End Checking for schedule
             * - Schedule was not found so we need to adjust timestamp
             */

            $sec_in_week = 604800; // 24*7*60*60  1 weeks time. 
            if ($time < $first_schedule_ts) {
                  $msg = 'System time is off because the current time is < first scheduled timestamp';
                  Log::write($msg, Log::$TYPE_WARNING);
                  //move forward a week to check if there are any schedules in the future according to the MMS time
                  MenuBoard::$ts = $time + $sec_in_week;
                  return self::getScheduleID();
            } else {
                  // if data is not present in json, it goes one week back.
                  $time = $time - $sec_in_week;
            }

            $sec_in_day = 86400; // one day's timestamp  24* 60 * 60 = 86400												
            //Check if adjusted time is smaller that the earliest timestamp in the schedule
            if ($time < $first_schedule_ts) {
                  // if while going week back the current time becomes less than the smallest timestamp, then the time should increment by one day and find schedules. 

                  foreach (self::$schedule_data as $dp_key => $dp_start_end_arrays) {

                        foreach ($dp_start_end_arrays as $start_end_str => $value) {
                              $ts = $time + $sec_in_day;
                              $start_end_arr = explode('-', $start_end_str);
                              $start = $start_end_arr[0];
                              $end = $start_end_arr[1];


                              if ($ts <= $time && $end >= $time) {
                                    var_dump($dp_key);
                                    return $dp_key;
                              }
                        }
                  }

                  Log::write('Schedule wasnt found when incrementing by days at a time', Log::$TYPE_WARNING);

                  $time = $ts;
            }

            return self::getScheduleID($time);
      }

}

?>
