<?php defined('SYSPATH') OR die('No direct access allowed.');
 
/**
 * Pancake Controller media
 * 
 * Created Oct 11, 2012 11:01:29 AM
 * @author equemuel
 */

class Controller_Rtable_v1_Media extends Controller_Templates_APIv1
{
	
	public function action_save()
	{
		$path = Arr::get($_REQUEST, 'path', NULL);
		$preview_path  = Arr::get($_REQUEST, 'preview_path', NULL);
		$type = Arr::get($_REQUEST, 'type', NULL);
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$title = Arr::get($_REQUEST, 'title', '');
		
		$status = FALSE;
		
		if($path == NULL) $message = 'Path cannot be empty.';
		elseif($type != 'image' && $type != 'video') $message = 'Type must be either "image" or "video".';
		elseif($event_id == NULL) $message = 'Event id cannot be empty.';
		else
		{
			$mediaIds = DB::select('media_id')
				->from('event_has_media')
				->where('event_id', '=', $event_id)
				->execute($this->client['database'])
				->as_array();
			if($mediaIds)
			{
				$del_rel_result = DB::delete('event_has_media')
					->where('event_id', '=', $event_id)
					->execute($this->client['database']);
				if($del_rel_result)
				{
					$del_result = DB::delete('media');
					foreach($mediaIds as $mediaId)
					{
						$del_result->where('id', '=', $mediaId['media_id']);
					}
					$del_result->execute($this->client['database']);
				}
			}
			$active = ($type == 'image') ? 1 : 0;
			$media_id = DB::insert('media', array('path', 'type', 'title', 'approved', 'active', 'preview_path'))
				->values(array($path, $type, $title, 0, $active, $preview_path))
				->execute($this->client['database']);
			$media_id = $media_id[0];

			if(!$media_id) $message = 'Error populating info for the media';
			else
			{
				$rel_result = DB::insert('event_has_media', array('event_id', 'media_id'))
				->values(array($event_id, $media_id))
				->execute($this->client['database']);

				if($rel_result)
				{
					$status = TRUE;
					$message = 'Successfully populated the video information.';
				}
				else
				{
					DB::delete('media')
						->where('media_id', '=', $media_id)
						->execute($this->client['database']);
					$message = 'Error relating the media to the event';
				}
			}
		}
		$output = PancakeResponse::out($status, $message);
		echo $output;
		exit;
//		$this->template->output = $output;
	}
	
	public function action_change_title()
	{
		$media_id = Arr::get($_REQUEST, 'media_id', NULL);
		$title = Arr::get($_REQUEST, 'title', NULL);
		$status = FALSE;
		if($media_id)
		{
		
			$result = DB::update('media')
				->set(array('title' => $title))
				->where('id', '=', $media_id)
				->execute($this->client['database']);
			if($result >= 0)
			{
				$message = "Updated the title successfully";
				$status = TRUE;
			}
		}
		else
		{
			$message = "Media id is required";
		}
		
		$output = PancakeResponse::out($status, $message);
		echo $output;
		exit;
	}
	
	public function action_approve()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$status = FALSE;
		if($event_id)
		{
			$media_id = DB::select('m.id')
				->from(array('media', 'm'))
				->join(array('event_has_media', 'ehm'))
				->on('m.id', '=', 'ehm.media_id')
				->where('ehm.event_id', '=', $event_id)
				->execute($this->client['database'])
				->as_array();
			$media['id'] = $media_id[0]['id'];
			if($media_id)
			{
				$approve_result = DB::update('media')
					->set(array(
						'approved' => 1
					))
					->where('id', '=', $media_id)
					->execute($this->client['database']);
				
				if($approve_result)
				{
					$status = TRUE;
					$message = 'Approved successfully';
					$encoded_result = Request::factory("rtable/v1/mail/media_approve")->query('event_id', $event_id)->execute()->body();
					$result = json_decode($encoded_result, TRUE);
					if($result['meta']['status'] == 1)
					{
						$message = 'Approved successfully';
					}
					else
					{
						$message = 'Approved successfully, but failed to send email'.$encoded_result;
					}
				}
				else
				{
					$message = 'Error approving the media';
				}
			}
			else
			{
				$message = 'Error finding the media to approve';
			}
		}
		else
		{
			$message = 'Event id cannot be empty';
		}
		$output = PancakeResponse::out($status, $message);
		echo($output);
		exit;
		$this->template->content = $output;
	}
	
	public function action_activate()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$path = Arr::get($_REQUEST, 'path', NULL);
		$preview_path = Arr::get($_REQUEST, 'preview_path', NULL);
		$status = FALSE;
		if($event_id)
		{
			$media_id = DB::select('m.id')
				->from(array('media', 'm'))
				->join(array('event_has_media', 'ehm'))
				->on('m.id', '=', 'ehm.media_id')
				->where('ehm.event_id', '=', $event_id)
				->execute($this->client['database'])
				->as_array();
			$media_id = $media_id[0]['id'];
			
			if($media_id)
			{
				$approve_result = DB::update('media')
					->set(array(
						'preview_path' => $preview_path,
						'path' => $path,
						'active' => 1
					))
					->where('id', '=', $media_id)
					->execute($this->client['database']);
				
				if($approve_result != -1)
				{
					$status = TRUE;
					$message = 'Approved successfully';
					$encoded_result = Request::factory("rtable/v1/mail/encoding_success")->query('event_id', $event_id)->execute()->body();
					$result = json_decode($encoded_result, TRUE);
					if($result['meta']['status'] == 1)
					{
						$message = 'Approved successfully'.$encoded_result;
					}
					else
					{
						$message = 'Approved successfully, but failed to send email';
					}
				}
				else
				{
					$message = 'Error approving the media';
				}
			}
			else
			{
				$message = 'Error finding the media to approve';
			}
		}
		else
		{
			$message = 'Event id cannot be empty';
		}
		$output = PancakeResponse::out($status, $message);
		echo $output;
		exit;
		$this->template->content = $output;
	}
	
	public function action_delete()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$status = FALSE;
		if($event_id)
		{
			$media_id = DB::select('media_id')
				->from('event_has_media')
				->where('event_id', '=', $event_id)
				->execute($this->client['database'])
				->as_array();
			$media_id = $media_id[0];
			
			$rel_delete_result = DB::delete('event_has_media')
				->where('media_id', '=', $media_id)
				->where('event_id', '=', $event_id)
				->execute($this->client['database']);
			
			$media_delete = DB::delete('media')
				->where('id', '=', $media_id)
				->execute($this->client['database']);
			if($media_delete)
			{
				$status = TRUE;
				$message = 'Deleted successfully';
			}
			else
			{
				$message = 'Error deleting media';
			}
			
			
			$output = PancakeResponse::out($status, $message);
			echo $output;
			exit;
		}
	}
}