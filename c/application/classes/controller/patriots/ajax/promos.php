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
 */
class Controller_Patriots_Ajax_Promos extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;

	public function action_get_theme_by_event()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');

		$pancake_response = $this->_pancake_call('patriots', 'promos', 'get_theme_by_event', array('event_id' => $event_id));

		echo $pancake_response;
	}
    
    public function action_remove_promo_from_zone()
	{
        $data = array();
   		$data['zone_id'] = Arr::get($_REQUEST, 'zone_id');
        $data['items'] = Arr::get($_REQUEST, 'items');
		$pancake_response = $this->_pancake_call('patriots', 'promos', 'remove_promo_from_zone', $data);

		echo $pancake_response;
	}
    
    public function action_add_promo_to_zone()
	{
        $data = array();
   		$data['zone_id'] = Arr::get($_REQUEST, 'zone_id');
        $data['items'] = Arr::get($_REQUEST, 'items');
		$pancake_response = $this->_pancake_call('patriots', 'promos', 'add_promo_to_zone', $data);

		echo $pancake_response;
	}
	
	public function action_get_promos_from_zone()
	{
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$pancake_response = $this->_pancake_call('patriots', 'promos', 'get_promos_from_zone', array('zone_id' => $zone_id));
		echo $pancake_response;
	}

	public function action_get_promos_by_event_and_theme()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$large = Arr::get($_REQUEST, 'large');

		$pancake_response = $this->_pancake_call('patriots', 'promos', 'get_promos_by_event_and_theme', array('event_id' => $event_id, 'theme_id' => $theme_id, 'large' => $large));

		echo $pancake_response;
	}

	public function action_get_promo_details()
	{
		$promo_id = Arr::get($_REQUEST, 'promo_id');

		$pancake_response = $this->_pancake_call('patriots', 'promos', 'get_promo_details', array('promo_id' => $promo_id));

		echo $pancake_response;
	}

	public function action_promo_media_upload()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', 0);
		$theme_id = Arr::get($_REQUEST, 'theme_id', 0);
		$overwrite = Arr::get($_REQUEST, 'overwrite', 1);

		$write_directoy = $_SERVER['DOCUMENT_ROOT'] . '/c/media/patriots/';

		//cancel, don't do anything, return json indicating this is canceled
		if ($overwrite == 99)
		{
			$cancel_msg = array('status' => 99);
			echo json_encode($cancel_msg);
			return false;
		}

		//if directory doesn't exist, create the directoy
		if (!file_exists($write_directoy))
		{
			mkdir($write_directoy);
		}
		try
		{
			include_once($_SERVER['DOCUMENT_ROOT'] . '/c/modules/uploadhandler/classes/UploadHandler.php');
		}
		catch (Exception $e)
		{
			print_r($e->getMessage());
                           exit;
		}

		$upload_handler = new UploadHandler(array('upload_dir' => $write_directoy));
		$result = '';
		header('Pragma: no-cache');
		header('Cache-Control: private, no-cache');
		header('Content-Disposition: inline; filename="files.json"');
		header('X-Content-Type-Options: nosniff');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
		header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

		switch ($_SERVER['REQUEST_METHOD'])
		{
			case 'OPTIONS':
				break;
			case 'HEAD':
			case 'GET':
				$upload_handler->get();
				break;
			case 'POST':
				$result = $upload_handler->post($overwrite);

				break;
			case 'DELETE':
				$upload_handler->delete();
				break;
			default:
				header('HTTP/1.1 405 Method Not Allowed');
		}




		echo json_encode($result);
	}

	public function action_check_file_exists()
	{
		$filename = Arr::get($_REQUEST, 'filename');

		$media_directoy = $_SERVER['DOCUMENT_ROOT'] . 'c/media/patriots/';

		if (file_exists($media_directoy . $filename))
		{
			//status 1 means the file exists
			echo json_encode(array('status' => 1, 'filename' => $filename));
		}
		else
		{
			//status 0 means file doesn't exist
			echo json_encode(array('status' => 0, 'filename' => $filename));
		}
	}

	public function action_add_new_promoitem()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$promo_desc = Arr::get($_REQUEST, 'promo_desc');
		$promo_title = Arr::get($_REQUEST, 'promo_title');
		$media = Arr::get($_REQUEST, 'uploaded_media_filename');
		$large = Arr::get($_REQUEST, 'large');

		$pancake_response = $this->_pancake_call('patriots', 'promos', 'add_new_promoitem', array('event_id' => $event_id,
			'theme_id' => $theme_id,
			'promo_desc' => $promo_desc,
			'promo_title' => $promo_title,
			'uploaded_media_filename' => $media,
			'large' => $large));

		$file_path = $_SERVER['DOCUMENT_ROOT'] . '/c/media/patriots/' . $media;

		if (file_exists($file_path))
		{
			$file_upload_response = $this->_pancake_send_file(array(array('file' => $_SERVER['DOCUMENT_ROOT'] . '/c/media/patriots/' . $media, 'path' => 'media/', 'type' => 'image/jpg')), 'copy');
		}
		else
		{

			$response_obj = json_decode($pancake_response);
			$orig_msg = $response_obj->meta->message;
			$response_obj->meta->status = 0;
			$response_obj->meta->message = $orig_msg . '. File DOES NOT EXIST';
			$pancake_response = json_encode($response_obj);
		}






		echo $pancake_response;
	}

	public function action_delete_promoitem()
	{
		$delete_flag = false;

		$event_id = Arr::get($_REQUEST, 'event_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$promo_id = Arr::get($_REQUEST, 'promo_id');

		//delete the relationship and association
		$pancake_response = $this->_pancake_call('patriots', 'promos', 'delete_promoitem', array('promo_id' => $promo_id, 'event_id' => $event_id, 'theme_id' => $theme_id));


		//now delete the actual file if dependencies are deleted correctly
		$response_obj = json_decode($pancake_response);



		//dependencies have been deleted, delete the file now
		if ($response_obj->meta->status == 1 && isset($response_obj->data->media_path))
		{
			if ($response_obj->data->media_path)
			{
				$media_path = $response_obj->data->media_path;

				$delete_path = $_SERVER['DOCUMENT_ROOT'] . '/c/media/patriots/' . $media_path;


				if (file_exists($delete_path) && is_file($delete_path))
				{
					$delete_flag = unlink($delete_path);
				}
			}
		}

		if ($delete_flag)
		{
			$orig_msg = $response_obj->meta->message;
			$response_obj->meta->message = $orig_msg . '. File has been deleted from server also';
		}

		$pancake_response = json_encode($response_obj);

		echo $pancake_response;
	}

	public function action_edit_promoitem()
	{
		$promo_id = Arr::get($_REQUEST, 'promo_item_id');
		$promo_name = Arr::get($_REQUEST, 'promo_name');
		$promo_desc = Arr::get($_REQUEST, 'promo_desc');


		$pancake_response = $this->_pancake_call('patriots','promos', 'edit_promoitem', array('promo_item_id' => $promo_id, 'promo_name' => $promo_name, 'promo_desc' => $promo_desc));

		echo $pancake_response;
	}

	public function action_get_theme_css()
	{
		$theme_id = Arr::get($_REQUEST, 'theme_id');

		$pancake_response = $this->_pancake_call('patriots','theme', 'get', array('id' => $theme_id));

		$theme = json_decode($pancake_response);

		$css_class = $theme[0]->css_class;

		echo $css_class;
	}

	public function action_update_enable()
	{
		$id = Arr::get($_REQUEST, 'id');
		$enable = Arr::get($_REQUEST, 'enable');

		$pancake_response = $this->_pancake_call('patriots', 'promos', 'update_enable', array('id' => $id, 'enable' => $enable));

		echo $pancake_response;
	}
    
    public function action_generate()
    {
       
		ob_start();
		$id = time();
		$bg = '/c/assets/patriots/' . $_POST['theme'] . '/promo-bg.png';
		if ($_POST['type'] == 'large_promo')
		{
			$bg = '/c/assets/patriots/' . $_POST['theme'] . '/large-promo-bg.png';
		}

		$scalable = ($_POST['type'] == 'large_promo') ? true : false;
		$flashvars = array(
			'mediaPath' => '/c/media/patriots/',
			'bgImg' => $bg,
			'promoOffset' => '0,0',
			'scalable' => $scalable,
            'preview' => 0,
		);
		$width = 960;
		$height = 1080;
		if ($_POST['type'] == 'large_promo')
		{
			$width = 960;
			$height = 540;
		}
		?>
		<script type="text/javascript">
			var event_id;
			var theme_id;
			var availableMedia;
			var selectedMedia;
			$.ajax({
				url:"/c/patriots/ajax/event/get_active",
				async:false,
				success:function(data)
				{
					data = jQuery.parseJSON(data);
					event_id = data.id;
				}
			});
							
			$.ajax({
				url:"/c/patriots/ajax/theme/get_parent_id",
				async:false,
				type:"POST",
				data:{
					"theme_id":<?php echo $_POST['subtheme']; ?>,
				},
				success:function(data){
					theme_id = jQuery.parseJSON(data);
				}
			});
				
				
				
			$.ajax({
				url:"/c/patriots/ajax/promos/get_promos_from_zone",
				type:"POST",
				async:false,
				data:{
					'zone_id':$('.active-zone-icon').attr('zone_id')
				},
				async:false,
				success:function(data)
				{
					selectedMedia = jQuery.parseJSON(data);
				}
			});
		<?php
		if ($_POST['type'] == 'large_promo')
		{
			?>
					var large = 1;
			<?php
		}
		else
		{
			?>
					var large = 0;
			<?php
		}
		?>

			$.ajax({
				url:"/c/patriots/ajax/promos/get_promos_by_event_and_theme",
				data:{"event_id":event_id, "theme_id":theme_id, "large" : large},
				async:false,
				type:"POST",
				success:function(data)
				{
					data = jQuery.parseJSON(data);
					availableMedia = [];
					for (var i = 0;  i < data.length; i++) {
						var exists = false;
						for (var j = 0; j < selectedMedia.length; j++) {
							if(selectedMedia[j]['id'] == data[i]['id'])
							{
								exists = true;
							}
						}
						if(exists == false)
						{
							availableMedia[availableMedia.length] = data[i];
						}
					}
				}
			});
			function loadMedia(media){
				var json_data;
				$.ajax({
					url:'/c/patriots/ajax/generatePromoJson',
					data: {'promo_media':media, "consumer_key": '<?php echo md5('patriots'); ?>',
						"session_id" : '<?php echo Cookie::get('session_id'); ?>'},
					type: 'POST',
					async:false,
					success: function(data){
						json_data = data;
					}
				});
				icg.promo.data = [];
				icg.promo.data[icg.promo.data.length] = {'pid':<?php echo $id; ?>, 'data':json_data};
			};
		</script>
		<div class="promo">
			<div class="media-container">
				<div class="media">
					<div class="title">Available Media</div>
					<select id="available-media-select" size="10" multiple="multiple">

						<script type="text/javascript">
							for(var i = 0; i < availableMedia.length; i++)
							{
								$('#available-media-select').append('<option value="'+ availableMedia[i]['media'] +'">'+ availableMedia[i]['name'] +'</option>');
							}
						</script>

					</select>
				</div>
				<div class="media-button-container">
					<div class="btn media-btn add-media-btn"><i class="icon-arrow-right"></i></div>
					<div class="btn media-btn remove-media-btn"><i class="icon-arrow-left"></i></div>
				</div>
				<div class="media">
					<div class="title">Selected Media</div>
					<select id="selected-media-select" size="10" multiple="multiple">
						<script type="text/javascript">
							for(var i = 0; i < selectedMedia.length; i++)
							{
								$('#selected-media-select').append('<option value="'+ selectedMedia[i]['media'] +'">'+ selectedMedia[i]['name'] +'</option>');
							}
							if(selectedMedia.length > 0)
							{
								var data = [];
								for(var i = 0; i < selectedMedia.length; i++)
								{
									data[data.length] = selectedMedia[i]['media'];
								}
									
								loadMedia(data);
								icg.promo.start();
							}
						</script>
					</select>
				</div>
			</div>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" data="/c/promo.swf" width="<?php echo $width; ?>" height="<?php echo $height; ?>" id="<?php print $id; ?>-ie" align="middle">
				<param name="movie" value="/c/promo.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="gpu" />
				<param name="scale" value="scaletofit" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="lt" />
				<param name="flashvars" value="<?php echo http_build_query($flashvars); ?>" />
				<param name="allowScriptAccess" value="always" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="/c/promo.swf" id="<?php print $id; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">				
					<param name="movie" value="/c/promo.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="gpu" />
					<param name="scale" value="scaletofit" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="lt" />
					<param name="flashvars" value="<?php echo http_build_query($flashvars); ?>" />
					<param name="allowScriptAccess" value="always" />
					<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
					<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
			<script>
				
				$(document).ready(function(){
					
					$(document).bind('attemptPromoShow', function(event){
						for(var each in icg.promo.data){
							var promoID =icg.promo.data[each]['pid'];
							var pd = icg.promo.data[each]['data'];
							if(pd){
								icg.promo.show(promoID, pd);
							}
						}
					});
					var data = [];
					
					$('.add-media-btn').on('click', function(){
						var addSuccess = false;
						var itemNames = [];
						$("#available-media-select option:selected").each(function(){
							itemNames[itemNames.length] = $(this).val();
						});
						var zoneId = $('.active-zone-icon').attr('zone_id');
						console.log(itemNames);
						$.ajax({
							url:"/c/patriots/ajax/promos/add_promo_to_zone",
							type:"POST",
							data:{
								'items':itemNames,
								'zone_id':zoneId
							},
							async:false,
							success:function(data)
							{
								data = jQuery.parseJSON(data);
								if(data)
								{
									addSuccess = true;
								}
							}
						});
						if(!addSuccess)
						{
							return;
						}
						$("#available-media-select option:selected").each(function(){
							$(this).appendTo($('#selected-media-select'));
						});
						data = [];
						$('#selected-media-select option').each(function(){
							data[data.length] = $(this).val();
						});
						loadMedia(data);
						icg.promo.start();
					});
					$('.remove-media-btn').on('click', function(){
						
						var addSuccess = false;
						var itemNames = [];
						$("#selected-media-select option:selected").each(function(){
							itemNames[itemNames.length] = $(this).val();
						});
						var zoneId = $('.active-zone-icon').attr('zone_id');
						console.log(itemNames);
						$.ajax({
							url:"/c/patriots/ajax/promos/remove_promo_from_zone",
							type:"POST",
							data:{
								'items':itemNames,
								'zone_id':zoneId
							},
							async:false,
							success:function(data)
							{
								if(data)
								{
									addSuccess = true;
								}
							}
						});
						if(!addSuccess)
						{
							return;
						}
						
						$("#selected-media-select option:selected").each(function(){
							$(this).appendTo($('#available-media-select'));
						});
						data = [];
						$('#selected-media-select option').each(function(){
							data[data.length] = $(this).val();
						});
						loadMedia(data);
						icg.promo.start();
					});
				});
			</script>
		</div>
		<?php
		$result = ob_get_clean();
		echo $result;
	}

	public function action_generatePromoJson()
	{
		if (isset($_POST['promo_media']))
		{
			$media = $_POST['promo_media'];
		}
		else
		{
			$media = 'blank.png';
		}
		$result_array = array();
		$i = 1000;
		if (!is_array($media))
			$media = array($media);
		foreach ($media as $file)
		{
			$result_array[] = array(
				'pid' => $i,
				'media' => $file,
				'sort' => 0,
				'template' => 'something static',
				'templateConfig' => array(
					'x' => 475,
					'y' => 768,
					'textColor' => '0x000000',
					'delay' => 2,
					'pricing' => array()
				),
				'duration' => 10
			);
			$i++;
		}

		$result_array = json_encode($result_array);
		echo $result_array;
    }

}