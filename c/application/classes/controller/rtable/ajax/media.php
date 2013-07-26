<?php defined('SYSPATH') OR die('No direct access allowed.');

 /**
 * Pancake Controller media
 * 
 * Created Oct 15, 2012 5:40:10 PM
 * @author equemuel
 */

class Controller_Rtable_Ajax_Media extends Controller_Icg_v1_Icg
{
	private $_media_path = 'media/rtable/';

	public function before()
	{
		if ($this->request->action() != 'recieve')
		{
			parent::before();
		}
	}
	
	public function action_delete()
	{
		$data = array();

		$data['event_id'] = Arr::get($_REQUEST, 'event_id', NULL);
		$result 		  = $this->_pancake_call('rtable', 'media','delete', $data);

		$decoded_result = json_decode($result,true); 
		if($decoded_result['meta']['status'] == 1)
		{
            $encoded_result = Request::factory("http://icgclients.com/c/rtable/ajax/waffle/push")->execute()->body();
			echo 'success';
		}
		else
		{
			echo 'failed';
		}
	}

	public function action_previewChangeTitle()
	{
		$id 	= Arr::get($_POST, 'media_id' , null);
		$title  = Arr::get($_POST, 'title'    , null);
		$data   = array(
			'media_id' 	=> $id,
			'title' => $title
			);

		$result 		= $this->_pancake_call('rtable','media','change_title',$data);
		$decoded_result = json_decode($result,true); 

		if($decoded_result['meta']['status'] == 1)
		{
			echo 'success';
		}
		else
		{
			echo 'failed';
		}
	}

	public function action_approve()
	{
		$id = Arr::get($_POST,'event_id',null);
		if($id == null) 
			echo "failed"; 
		else
		$data = array(
			'event_id' => $id
			);
		$result = $this->_pancake_call('rtable','media','approve',$data);
        
		$decoded_result = json_decode($result,true);
		if($decoded_result['meta']['status'] == 1)
		{
            $encoded_result = Request::factory("http://icgclients.com/c/rtable/ajax/waffle/push")->execute()->body();
            //TODO:
            //Log functionality for pancake (for each client)
            //Log the "encoded result" to pancake
			echo "success";
		}
		else
		{
			echo "failed";
		}
	}

	public function action_recieve()
	{
		$client_name    = Arr::get($_POST, 'client_name'     , null);
		$media_id       = Arr::get($_POST, 'client_media_id' , null);
		$media 		    = $_FILES['media'];
		$media_basename = basename($media['name'],".zip");
	
		$media_path  = $this->_media_path;
		if($client_name != null && $media_id != null)
		{
			if($media['error'] == 0)
			{
				$data = array(
					'event_id' 		=> $media_id,
					'preview_path'  => $media_path.$media_basename.".jpg",
					'path'			=> $media_path.$media_basename.".mp4",
                    'consumer_key'  => md5('rtable'),
                    'salt'          => md5('rtable'),
					);

				$encoded_result = $this->_pancake_call('rtable','media','activate',$data);
				$result = json_decode($encoded_result,true);
				
				if($result['meta']['status'] == 1)
				{
					if(move_uploaded_file($media['tmp_name'],$media_path.$media['name']))
					{
						$this->unzip_files($media["name"]);
						unlink($this->_media_path.$media_basename.".zip");
						$files = array(
							array(
								'file' => $this->_media_path . $media_basename.'.mp4',
								'path' => 'media/',
								'type' => 'video/mp4'
							)
						);
						try{
							$send_call = $this->_pancake_send_file($files);
							$send_return = json_decode($send_call, TRUE);
							
						}catch(Exception $e)
						{
							file_put_contents('exception.txt', $e->getMessage());
							$send_return['meta']['status'] = false;
						}
						
						if($send_return['meta']['status'] == 1) 
						{
							echo "success";
						}
						else
						{
							echo "problem sending to waffle";
						}

					}
					else
					{
						echo "there was a problem with file move";
					}
				}
				else
				{
					echo "pancake didnt go through";
				}
			} 
			else
			{
				echo "There was a problem with your file transfer: ERROR CODE ".$media['error'];
			}
		}
		else
		{
			 echo "Please include all parameters.";
		}	
	}

	protected function unzip_files($folder_name) 
	{
		$command = 'cd ' . $this->_media_path . '; unzip -o '.$folder_name;
		exec($command, $output, $return);  
		echo "success";
	}
}