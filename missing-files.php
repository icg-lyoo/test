<?php
      $deploy_path = 'C:\\inetpub\\wwwroot\\deploy-mcd-mb\\';
      $json_path = $deploy_path.'data.json';
      if(file_exists($json_path))
      {
          $content = file_get_contents($json_path);

          $matches = array();
          preg_match_all("/\"media\":\"([^.|^\"]+\.(gif|jpg|png|f4v|flv))/", $content, $matches);

          //remove duplicate entries
          $matches[1] = array_unique($matches[1]);

          
          
          if($matches[1])
          {
              //if file is found at least once, set to true. if false display that all files were found
              $file_missing = false;
              echo "\n";
              echo "-------------------------------------------------------------------";
              echo "\n";
              foreach ($matches[1] as $m){
                    if(!file_exists($deploy_path.'\\media\\'.$m)){
                        $file_missing = true;

                        print_r($m);

                        echo "\n";
                    }
              }
              
              
              
              
              if(!$file_missing)
              {
                  echo 'No missing media files. All media files exist in the media folder';
                  
              }
              
              echo "-------------------------------------------------------------------";
              
          }
          else
          {
              echo 'No media found in JSON';
          }
      }
      else
      {
          echo 'JSON does not exist at '.$json_path;
          
      }
      
      
?>