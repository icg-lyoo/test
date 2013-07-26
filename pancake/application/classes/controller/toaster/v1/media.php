<?php

defined('SYSPATH') OR die('No direct access allowed.');

/** * Pancake Controller media *  * Created Oct 17, 2012 1:57:17 PM * @author equemuel */
class Controller_Toaster_v1_Media extends Controller
{

    public function action_save()
    {
        $ec2_instance_id = Arr::get($_REQUEST, 'ec2_instance_id', NULL);
        $config = Arr::get($_REQUEST, 'ffmpeg_opts', NULL);
        $status = Arr::get($_REQUEST, 'status', NULL);
        $encode_start = Arr::get($_REQUEST, 'encode_start', NULL);
        $client_media_id = Arr::get($_REQUEST, 'client_media_id', NULL);
        $media_name = Arr::get($_REQUEST, 'media_name', NULL);
        $client_name = Arr::get($_REQUEST, 'client_name', NULL);
        $return_url = Arr::get($_REQUEST, 'return_url', NULL);
        $pancake_status = FALSE;
        $data = array();
        if ($ec2_instance_id && $config && $status && $encode_start && $client_media_id && $media_name && $client_name && $return_url)
        {
            $result = DB::insert('media', array('ec2_instance_id', 'config', 'status', 'encode_start', 'client_media_id', 'media_name', 'client_name', 'return_url'))
                ->values(array($ec2_instance_id, $config, $status, $encode_start, $client_media_id, $media_name, $client_name, $return_url))
                ->execute('toaster');
            if ($result)
            {
                $pancake_status = TRUE;
                $message = 'Media info saved successfully';
                $data['id'] = $result[0];
            }
            else
            {
                $message = 'Error saving media info';
            }
        }
        else
        {
            $message = 'All parameters must be set. ' . json_encode($_REQUEST);
        }
        $output = PancakeResponse::out($pancake_status, $message, $data);
        $this->response->body($output);
    }

    public function action_get()
    {
        $id = Arr::get($_REQUEST, 'id', NULL);
        $status = FALSE;
        $data = array();
        if ($id)
        {
            $results = DB::select('*')
                ->from('media')
                ->where('id', '=', $id)
                ->execute('toaster')
                ->as_array();
            if ($results)
            {
                $message = 'Successfully retrieved video data';
                $status = TRUE;
                $data = $results[0];
            }
            else
            {
                $message = 'Error retrieving data';
            }
        }
        else
        {
            $message = "Media id is not set.";
        }
        $output = PancakeResponse::out($status, $message, $data);
        $this->response->body($output);
    }

    public function action_update()
    {
        $id = Arr::get($_REQUEST, 'id', NULL);
        $fields = array();
        $status = Arr::get($_REQUEST, 'status', NULL);
        if ($status)
            $fields['status'] = $status;
        $encode_start = Arr::get($_REQUEST, 'encode_start', NULL);
        if ($encode_start)
            $fields['encode_start'] = $encode_start;
        $encode_end = Arr::get($_REQUEST, 'encode_end', NULL);
        if ($encode_end)
            $fields['encode_end'] = $encode_end;
        $ec2_instance_id = Arr::get($_REQUEST, 'ec2_instance_id', NULL);
        if ($ec2_instance_id)
            $fields['ec2_instance_id'] = $ec2_instance_id;
        $pancake_status = FALSE;
        if (!empty($fields))
        {
            $result = DB::update('media')
                ->set($fields)
                ->where('id', '=', $id)
                ->execute('toaster');
            if ($result != -1)
            {
                $message = 'Successfully updated media';
                $pancake_status = TRUE;
            }
            else
            {
                $message = 'Error updating media';
            }
        }
        else
        {
            $message = 'No fields to update';
        }
        $output = PancakeResponse::out($pancake_status, $message);
        $this->response->body($output);
    }

    public function action_is_processing()
    {
        $beginning_time = mktime(0, 0, 0, date('n'), date('j'), date('Y'));
        $end_time = mktime(23, 59, 59, date('n'), date('j'), date('Y'));
        
        $all_processing = DB::select('*')
            ->from('media')
            ->where('status', '=', 'processing')
            ->where('encode_start', '>=', $beginning_time)
            ->where('encode_start', '<=', $end_time)
            ->execute('toaster')
            ->as_array();
        $is_processing = (!empty($all_processing)) ? TRUE : FALSE;
        $output = PancakeResponse::out(TRUE, NULL, $is_processing);
        $this->response->body($output);
    }

}

