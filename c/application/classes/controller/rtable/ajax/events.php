<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Rtable_Ajax_Events extends Controller_Icg_v1_Icg
{

	private $_uploadDir = "media/rtable/";
	// public $_returnURL = "http://".BASE_URL."/c/rtable/ajax/media/recieve";

	public function action_createEvent()
	{
		$title 		 = Arr::get($_POST, 'event_title'		, null);
		$date 		 = Arr::get($_POST, 'event_date'		, null);
		$email 		 = Arr::get($_POST, 'consumer_email'	, null);
		$name 		 = Arr::get($_POST, 'consumer_name'		, null);
		$description = Arr::get($_POST, 'event_description' , null);

		$data = array(
			'title' 		 => $title,
			'date' 			 => $date,
			'consumer_email' => $email,
			'consumer_name'  => $name,
			'description'    => $description
		);

		$encoded_result = $this->_pancake_call('rtable', 'events','create', $data);

		echo $encoded_result;
	}

	public function action_editEvent()
	{
		$title 		 = Arr::get($_POST, 'event_title'		, null);
		$date 		 = Arr::get($_POST, 'event_date'		, null);
		$email 		 = Arr::get($_POST, 'consumer_email'	, null);
		$name 		 = Arr::get($_POST, 'consumer_name'		, null);
		$description = Arr::get($_POST, 'event_description' , null);
		$event_id 	 = Arr::get($_POST, 'event_id'			, null);

		$data = array(
			'title' 	  => $title,
			'date' 		  => $date,
			'email'  	  => $email,
			'name' 		  => $name,
			'description' => $description,
			'event_id' 	  => $event_id
		);

		$encoded_result = $this->_pancake_call('rtable', 'events','edit', $data);

		echo $encoded_result;
	}

	public function action_delete()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		if ($event_id)
		{
			$encoded_result = $this->_pancake_call('rtable', 'events','delete', array("event_id" => $event_id));
			$result = json_decode($encoded_result, TRUE);
			if ($result['meta']['status'] == 1)
			{
                $encoded_result = Request::factory("http://icgclients.com/c/rtable/ajax/waffle/push")->execute()->body();
				echo 'success';
			}
			else
			{
				echo 'failed';
			}
		}
		else
		{
			echo "failed";
		}
	}


	public function action_upload()
	{
		$file 				= $_FILES['media'];
		$event_id 			= Arr::get($_POST, 'event_id'      , null);
		$previous_file 		= Arr::get($_POST, 'existing_file' , null);
		$previous_th   		= explode("/",$previous_file);
		$previous_thumbnail = $this->_uploadDir."th_".end($previous_th);
		if ($event_id != "")
		{
			$validation = $this->_validateMediaType($file);
			
			if ($validation === true)
			{
				$tmp_name 	 	= $_FILES['media']['tmp_name'];
				$name 		 	= $_FILES['media']['name'];
				$mime_type 	 	= explode('/', $_FILES['media']['type']);
				$file_name 	 	= $this->get_file_name($name);
				$parsed_name 	= $this->replace_special_chars($file_name['file_name']) ."_". date('U') . "." . $file_name['ext'];
				$extension 	 	= $file_name["ext"];
				$full_path 	 	= $this->_uploadDir . $parsed_name;
				$thumbnail 	 	= "th_".$parsed_name;
				$thumbnail_path = $this->_uploadDir.$thumbnail;
				$file_type      = $_FILES['media']['type'] == 'application/octet-stream' ? "video" : $mime_type[0];

				if (move_uploaded_file($tmp_name, $full_path))
				{
					if($mime_type[0] == "image")
					{
						$this->_image_resize($full_path,$thumbnail_path, 128, 128, 0);		
						$this->_image_resize($full_path,$full_path,1280,720,1,0);		
					}
					
					$data = array(
						'path' 			=> $full_path,
						'ext' 			=> $file_name['ext'],
						'type' 			=> $file_type,
						'event_id' 		=> $event_id,
						'preview_path'  => $mime_type[0] == "image" ? $thumbnail_path : ""
					);

					$encoded_result = $this->_pancake_call('rtable','media','save',$data);
					$result 		= json_decode($encoded_result,true);

					if ($result['meta']['status'] == 1)
					{

						$response = $previous_file !== "" ? $this->_unlinkFile($previous_file) : "true";
						$this->_unlinkFile($previous_thumbnail); 
						$this->_unlinkFile(basename($previous_file,'.mp4').".jpg");

						if($mime_type[0] != "image")
						{

							$this->_respondToIframe($this->_getResponse($response));
							$data = array(
								'media' 	      => $full_path.";filename=".$parsed_name,
								'ffmpeg_opts'  	  => ' -s 1280x720 -strict experimental -vcodec libx264 ', 
								'client_media_id' => $event_id,
								'client_name'	  => 'rtable',
								'return_url'	  => "http://".BASE_URL."/c/rtable/ajax/media/recieve",
								'md5_hash'		  => md5_file($full_path),
								'encode_start'	  => time()
								);

							$Toaster = new Toaster($data);
							$this->_unlinkFile($full_path);	
						}
						else 
						{
							
							$files = array(
								array(
									'file' => $full_path,
									'path' => 'media/',
									'type' => $_FILES['media']['type']
								)
							);
							$send_call = $this->_pancake_send_file($files);
							$send_return = json_decode($send_call,true);
							
							if($send_return['meta']['status'] == 1)
							{
								$this->_respondToIframe($this->_getResponse($response));
							}
							else
							{
								$this->_respondToIframe($this->_getResponse("false"));
							}
						}
					}
					else
					{
						$unlink_file = $full_path;

						if ($this->_unlinkFile($unlink_file))
						{
							$this->_respondToIframe($this->_getResponse("false"));
						}
					}
				}
				else
				{
					$this->_respondToIframe($this->_getResponse("false"));
				}
			}
			else
			{	
				$this->_respondToIframe($this->_getResponse("format"));
			}
		}
		else
		{
			$this->_respondToIframe($this->_getResponse("empty"));
		}
	}

	private function _respondToIframe($hidden_response)
	{
		echo "<script type='text/javascript'>window.top.window.uploadResponse('" . $hidden_response . "');</script>";
	}

	public function replace_special_chars($name)
	{
		$newString = preg_replace('/[^a-z0-9]/i', '_', $name);
		return $newString;
	}

	public function get_file_name($file)
	{
		$name 		= $file;
		$extension  = pathinfo($name);
		$ext 		= $extension['extension'];
		$file_name  = $extension['filename'];

		return array('file_name' => $file_name, 'ext' => $ext);
	}

	private function _getResponse($unlink_result)
	{
		switch ($unlink_result)
		{
			case "true":
				return "success";
				break;

			case "false";
				return "failed";
				break;

			case "404":
				return "404";
				break;

			case "empty":
				return "empty";
				break;

			case "format":
				return "format";
				break;

			default:
				return "failed";
				break;
		}
	}

	private function _unlinkFile($path)
	{
		if (file_exists($path))
		{
			if (unlink($path))
			{
				return "true";
			}
			else
			{
				return "false";
			}
		}
		return "true";
	}

	private function _validateMediaType(&$file)
	{
		switch ($file['type'])
		{
			case "image/jpeg":
			case "image/png":
			case "image/gif":
			case "image/pjpeg":
			case "image/x-png":
				if ($file['size'] < 10490000)
				{
					return true;
				}
				else
				{
					return 'Image: Too Large';
				}
				break;
			case "application/octet-stream":
			case "application/x-mpegURL":	
			case "video/mp4":
			case "video/mov":
			case "video/flv":
			case "video/avi":
			case "video/wmv":
			case "video/x-ms-wmv":
			case "video/quicktime":
			case "video/x-flv":
			case "video/x-msvideo":
			case "video/f4v":
			case "video/quicktime":
			case "video/mpeg":
				if ($file['size'] < 104900000)
				{
					return true;
				}
				else
				{
					return 'Video: Too Large';
				}
				break;

			default:
				return false;
				break;
		}
	}

	private function _image_resize($src, $dst, $width, $height,$exact = 0, $crop=0){

	  if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";

	  $type = strtolower(substr(strrchr($src,"."),1));
	  if($type == 'jpeg') $type = 'jpg';
	  switch($type){
	    case 'bmp': $img = imagecreatefromwbmp($src); break;
	    case 'gif': $img = imagecreatefromgif($src); break;
	    case 'jpg': $img = imagecreatefromjpeg($src); break;
	    case 'png': $img = imagecreatefrompng($src); break;
	    default : return "Unsupported picture type!";
	  }

	  // resize
	  if($exact == 0)
	  {
		  if($crop){
		    // if($w < $width or $h < $height) return "Picture is too small!";
		    $ratio = max($width/$w, $height/$h);
		    $h = $height / $ratio;
		    $x = ($w - $width / $ratio) / 2;
		    $w = $width / $ratio;
		  }
		  else{
		    // if($w < $width and $h < $height) return "Picture is too small!";
		    $ratio = min($width/$w, $height/$h);
		    $width = $w * $ratio;
		    $height = $h * $ratio;
		    $x = 0;
		  }
	  }	
	  $new = imagecreatetruecolor($width, $height);

	  // preserve transparency
	  if($type == "gif" or $type == "png"){
	    imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
	    imagealphablending($new, false);
	    imagesavealpha($new, true);
	  }

	  imagecopyresampled($new, $img, 0, 0, 0, 0, $width, $height, $w, $h);

	  switch($type){
	    case 'bmp': imagewbmp($new, $dst); break;
	    case 'gif': imagegif($new, $dst); break;
	    case 'jpg': imagejpeg($new, $dst); break;
	    case 'png': imagepng($new, $dst); break;
	  }
	  return true;
	}


	private function _resizeImage($originalImage,$toWidth,$toHeight)
	{

	    list($width, $height) = getimagesize($originalImage);
	    $xscale=$width/$toWidth;
	    $yscale=$height/$toHeight;

	    if ($yscale>$xscale){
	        $new_width = round($width * (1/$yscale));
	        $new_height = round($height * (1/$yscale));
	    }
	    else {
	        $new_width = round($width * (1/$xscale));
	        $new_height = round($height * (1/$xscale));
	    }
	   
	   
	    $imageResized = imagecreatetruecolor($new_width, $new_height);
	    $imageTmp     = imagecreatefromjpeg ($originalImage);
	    imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	    return $imageResized;
	   

	} 
}

