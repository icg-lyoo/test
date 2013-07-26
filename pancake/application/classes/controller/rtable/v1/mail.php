<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**

 * Pancake Controller mail

 * 

 * Created Oct 17, 2012 3:03:32 PM

 * @author equemuel

 */
class Controller_Rtable_v1_Mail extends Controller_Templates_APIv1
{
	private $_send_to;
	private $_send_from = "events@RoundTablePizza.com";
	private $_email_content = "";
	private $_content = "";
	private $_subject;
	private $_reply_to = "events@RoundTablePizza.com";

	public function mail_header()
	{
		return $content;
	}

	public function mail_footer($data = "")
	{
		$content = "<br/>";
		$content .= $data == "" ? "Copyright RoundTablePizza" : $data;
		return $content;
	}

	public function set_headers($to, $from, $subject, $reply_to)
	{
		$this->_send_to = $to;
		$this->_send_from = $from;
		$this->_subject = stripslashes($subject);
		$this->_reply_to = $reply_to;
	}

	private function _send_mail()
	{
		$content = "<html>";
		$content .= stripcslashes($this->_content);
		$content .= "</html>";
		$all_headers = 'To: ' . $this->_send_to . ' <' . $this->_send_to . '>' . "\r\n";
		$all_headers .= 'From: ' . $this->_send_from . ' <icgtest@icg.icgtest.info>' . "\r\n";
		$all_headers .= 'MIME-Version: 1.0 ' . "\r\n";
		$all_headers .= 'Content-Type: text/html; charset=iso-8859-1' . "\r\n";
		$all_headers .= "Reply-To: " . $this->_reply_to;

		if (mail($this->_send_to, $this->_subject, $content, $all_headers))
		{
			return true;
		}

		return false;
	}

	public function action_send_test_view()
	{
		$this->set_headers('equemuel@icginfo.com', $this->_send_from, 'test', $this->_reply_to);
		$view = View::factory('mail/test');
		$this->_content = $view;
		$status = FALSE;
		if ($this->_send_mail())
		{
			$status = TRUE;
			$message = 'Sent mail for event creation';
		}
		else
		{
			$message = 'Error sending mail for event creation';
		}
		$output = PancakeResponse::out($status, $message);
		$this->template->content = $output;;
		
	}

	public function action_event_approval()
	{
		$get = $this->request->query();
		$event_id = $get['event_id'];
		$results = $this->_get_consumer_event_info($event_id);
		$status = FALSE;
		if ($event_id)
		{
			$view = View::factory('mail/rtable/email');
			$view->assets_path = "http://icgtest.info/c/assets/rtable/email/";
			$view->media_path = "http://icgtest.info/c/media/rtable/";
			$view->email_header_bg = "header_bg_scheduled.gif";
			$view->customer_name = $results['name'];
			$view->email_message = "Your event at Round Table Clubhouse has been scheduled. We offer a digital welcome message for each reservation, please click <a href='#'><font color='#8ea125'>here</font></a> to customize yours!.<br /><br /> ";
			$view->action = "http://icgtest.info/c/rtable/events/login";
			$view->email_action_btn = "action_customize.gif";
			$view->event_name = $results['title'];
			$view->event_date = date('m/d/Y', $results['date']);
			$view->event_message = $results['description'];
			$view->event_email = $results['email'];
			$view->event_code = $results['event_code'];
			$content = $view;
			$this->set_headers($results['email'], $this->_send_from, "Event created for Round Table Pizza event: " . $results['title'], $this->_reply_to);

			$this->_content = $content;

			if ($this->_send_mail())
			{
				$status = TRUE;
				$message = 'Sent mail for event creation';
			}
			else
			{
				$message = 'Error sending mail for event creation';
			}
		}
		else
		{
			$message = 'event id cannot empty';
		}

		$output = PancakeResponse::out($status, $message);
		$this->template->content = $output;;
	}

	private function _get_consumer_event_info($event_id)
	{
		$results = DB::select('c.*', 'e.*')
			->from(array('event', 'e'))
			->join(array('consumer_has_event', 'che'))
			->on('e.id', '=', 'che.event_id')
			->join(array('consumer', 'c'))
			->on('c.id', '=', 'che.consumer_id')
			->where('e.id', '=', $event_id)
			->execute(PancakeClient::database_instance(4))
			->as_array();

		$media_results = DB::select('m.*')
			->from(array('media', 'm'))
			->join(array('event_has_media', 'ehm'))
			->on('ehm.media_id', '=', 'm.id')
			->where('ehm.event_id', '=', $results[0]['id'])
			->execute(PancakeClient::database_instance(4))
			->as_array();

		$results[0]['media'] = ($media_results) ? $media_results[0] : array();

		return $results[0];
	}

	public function action_encoding_success()
	{
		$get = $this->request->query();
		$event_id = $get['event_id'];

		$results = $this->_get_consumer_event_info($event_id);

		$this->set_headers($results['email'], $this->_send_from, "Video Encoding for Round Table Pizza Event: " . $results['title'], $this->_reply_to);
		$view = View::factory('mail/rtable/email');
		$view->assets_path = "http://icgtest.info/c/assets/rtable/email/";
		$view->media_path = "http://icgtest.info/c/";
		$view->email_header_bg = "header_bg_uploaded.gif";
		$view->email_media_preview = $results['media']['preview_path'];
		$view->customer_name = $results['name'];
		$view->email_message = "Your video has been uploaded for your event. Please review your video and customize your event name and message <a href='http://icgtest.info/c/rtable/events/login'><font color='#8ea125'>here</font></a> to customize yours!.<br /><br /> ";
		$view->action = "http://icgtest.info/c/rtable/events/login";
		$view->email_action_btn = "action_preview.gif";
		$view->event_name = $results['title'];
		$view->event_date = date('m/d/Y', $results['date']);
		$view->event_message = $results['description'];
		$view->event_email = $results['email'];
		$view->event_code = $results['event_code'];
		$content = $view;
		$this->_content = $content;

		if ($this->_send_mail())
		{
			$status = TRUE;
			$message = "Sent Encoding Email";
			
			$this->set_headers('admin@rtpclubhouse.com', $this->_send_from, "A new event has media to approve: " . $results['title'], $this->_reply_to);
			$view = View::factory('mail/rtable/email');
			$view->assets_path = "http://icgtest.info/c/assets/rtable/email/";
			$view->media_path = "http://icgtest.info/c/";
			$view->email_header_bg = "header_bg_need_approval.gif";
			$view->email_media_preview = $results['media']['preview_path'];
			$view->customer_name ="Admin";
			$view->email_message = "Please decline or approve the newly uploaded media for the event: " . $results['title'] . " <a href='http://icgtest.info/c/rtable/events/login'><font color='#8ea125'>here</font></a><br /><br /> ";
			$view->action = "http://icgtest.info/c/rtable/events/login";
			$view->email_action_btn = "action_preview.gif";
			$view->event_name = $results['title'];
			$view->event_date = date('m/d/Y', $results['date']);
			$view->event_message = $results['description'];
			$view->event_email = $results['email'];
			$view->event_code = $results['event_code'];
			$content = $view;
			$this->_content = $content;
			
			if ($this->_send_mail())
			{
				$status = TRUE;
				$message = "Sent Encoding Email";
			}
		}
		$output = PancakeResponse::out($status, $message);
		$this->template->content = $output;;
		
	}

	public function action_media_approve()
	{
		$get = $this->request->query();
		$event_id = $get['event_id'];
		$status = FALSE;
		$results = $this->_get_consumer_event_info($event_id);

		$this->set_headers($results['email'], $this->_send_from, "Media Approval for Round Table Pizza Event: " . $results['title'], $this->_reply_to);

		$view = View::factory('mail/rtable/email');
		$view->assets_path = "http://icgtest.info/c/assets/rtable/email/";
		$view->media_path = "http://icgtest.info/c/";
		$view->email_header_bg = "header_bg_approved.gif";
		$view->email_media_preview = $results['media']['preview_path'];
		$view->customer_name = $results['name'];
		$view->email_message = "Your video has been approved by Round Table Clubhouse. You may still customize the message or upload a new video <a href='#'><font color='#8ea125'>here.</font></a><br /><br /> ";
		$view->action = "http://icgtest.info/c/rtable/events/login";
		$view->email_action_btn = "action_preview.gif";
		$view->event_name = $results['title'];
		$view->event_date = date('m/d/Y', $results['date']);
		$view->event_message = $results['description'];
		$view->event_email = $results['email'];
		$view->event_code = $results['event_code'];
		$content = $view;
		$this->_content = $content;
		if ($this->_send_mail())
		{
			$status = TRUE;
			$message = 'Sent approval email';
		}
		$output = PancakeResponse::out($status, $message);
		$this->template->content = $output;;
		
	}

}