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
class Controller_Patriots_Ajax extends Controller_ICG_v1_ICG
{

	public function action_generatePromo()
	{
		ob_start();
		$id = time();
		$bg = '../assets/patriots/' . $_POST['theme'] . '/promo-bg.png';
		if ($_POST['type'] == 'large_promo')
		{
			$bg = '../assets/patriots/' . $_POST['theme'] . '/large-promo-bg-preview.png';
		}

		$scalable = ($_POST['type'] == 'large_promo') ? true : false;
		$flashvars = array(
			'mediaPath' => '/c/media/patriots/',
			'bgImg' => $bg,
			'promoOffset' => '0,0',
			'scalable' => $scalable,
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
				url:"ajax/event/get_active",
				async:false,
				success:function(data)
				{
					data = jQuery.parseJSON(data);
					event_id = data.id;
				}
			});
							
			$.ajax({
				url:"ajax/theme/get_parent_id",
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
				url:"ajax/promos/get_promos_from_zone",
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
				url:"ajax/promos/get_promos_by_event_and_theme",
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
					url:'ajax/generatePromoJson',
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
							url:"ajax/promos/add_promo_to_zone",
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
							url:"ajax/promos/remove_promo_from_zone",
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
?>
