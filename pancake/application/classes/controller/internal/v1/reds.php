<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Internal_v1_Reds extends Controller_Templates_InternalAPIv1 {

      private $_templatePath = '';
      private $_config;

      public function before() {
            $this->_config = Kohana::$config->load('internal/reds');
            $this->_allowed_ip = $this->_config['allowed_ip'];
            $this->_templatePath = $this->_config['template_path'];

            parent::before();
      }

      /**
       * Copies files uploaded to this endpoint to the specified locations based on a specific profile. Additional information on how to form the data for this call: http://joshhighland.com/blog/2010/11/27/using-curl-and-php-to-upload-files-through-a-form-post/
       * Doc: https://icgmanager.atlassian.net/wiki/x/bAAm
       */
      public function action_copy() {
            $unsaved_files = array();
            $profile_name = Arr::get($_POST, 'profile', 'base_media');

            if (isset($_FILES['files']) && count($_FILES['files']) > 0 && isset($_POST['targets']) && count($_POST['targets']) > 0) {
                  if (empty($profile_name))
                        $profile_name = 'base_media';

                  $files = $_FILES['files'];
                  $targets = $_POST['targets'];

                  $total_files = count($files['tmp_name']);

                  for ($i = 0; $i < $total_files; $i++) {
                        $target_path = $this->_templatePath . '/' . $profile_name;

                        // Check if target dir exists, create it if not
                        if (isset($targets[$i]) && !empty($targets[$i])) {
                              $target_path = $target_path . '/' . $targets[$i];
                              if (!file_exists($target_path))
                                    mkdir($target_path, 0777, TRUE);
                        }

                        $temp_file = $files['tmp_name'][$i];
                        $destination_file = $target_path . '/' . $files['name'][$i];

                        if ($files['error'][$i] == 0) {
                              if (!move_uploaded_file($temp_file, $destination_file)) {
                                    $unsaved_files[] = array('file' => $destination_file, 'error' => 'move failed');
                              }
                        } else {
                              $unsaved_files[] = array('file' => $destination_file, 'error' => $files['error'][$i]);
                        }
                  }

                  if (count($unsaved_files) == 0) {
                        $output = PancakeResponse::out(TRUE, null);
                  } else {
                        $output = PancakeResponse::out(FALSE, Kohana::message('internal', 'unsaved_files'), array('files' => $unsaved_files));
                  }
            } else {
                  if (count($_FILES) == 0) {
                        $output = PancakeResponse::out(FALSE, Kohana::message('internal', 'no_files'));
                  } elseif (!isset($_POST['targets']) || count($_POST['targets']) == 0) {
                        $output = PancakeResponse::out(FALSE, Kohana::message('internal', 'no_targets'));
                  } else {
                        $output = PancakeResponse::out(FALSE, null);
                  }
            }

            $this->template->content = $output;
      }

}