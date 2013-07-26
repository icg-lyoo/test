<?php echo HTML::script('js/patriots/icg.js'); ?>
<?php echo HTML::style('css/patriots/editable.css') ?>
<?php
if ($subtheme_info)
{
	ob_start();
	?>
	<script type="text/javascript">
								
		//All of the javascript on this page can be put into functions, will definitely need cleanup in the near future
								
		var subtheme_info = <?php echo json_encode($subtheme_info); ?>;
								
		/**
		 * Loads New subtheme info
		 */
		function getSubthemeContent() {
			$.ajax({
				url:"/pancake/patriots/v1/theme/get_content",
				type:"POST",
				data: {
					"subtheme_id" : '<?php echo $subtheme; ?>',
					"consumer_key": '<?php echo md5('patriots'); ?>',
					"session_id" : '<?php echo Cookie::get('session_id');?>'
				},
				async:false,				
				success:function(data){
					subtheme_info = data;
				}
											
			});
		}
									
		function toTitleCase(str)
		{
			return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
			
									
		/**
		 * Loads all elements and content in the subtheme
		 */
		function loadSubtheme() {
			getSubthemeContent();
			for(var zoneIndex = 0; zoneIndex < subtheme_info['zones'].length; zoneIndex++)
			{
				//Adds zone Icons		
				if(subtheme_info['zones'][zoneIndex]['type'] == 'menu')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Menus</div></div></li>');
				}
				else if(subtheme_info['zones'][zoneIndex]['type'] == 'promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Promo</div></div></li>');
				}
				else if(subtheme_info['zones'][zoneIndex]['type'] == 'large_promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon zone-icon-large btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Large Promo</div></div></li>');

				}
			}
				
					
					
			//Adds click event to remove zone icons
			$('.zone-icon').off('click');
											
			//Adds Click event to manipulate subthemes
			$('.zone-icon').click(function(){
												
				getSubthemeContent();

				if($(this).attr('data') == 'disabled')
				{
					return false;
				}
				if($(this).hasClass('active-zone-icon'))
				{
					$('.active-zone-icon').removeClass('active-zone-icon');
				}
				else
				{
					$('.active-zone-icon').removeClass('active-zone-icon');
					$('.zone-edit-container').empty();
					$(this).addClass('active-zone-icon');
				}
				if($(this).children('.zone-desc').html() == 'Promo' || $(this).children('.zone-desc').html() == 'Large Promo')
				{
					icg.promo.stop = false;
					var type = 'promo';
					if($(this).children('.zone-desc').html() == 'Large Promo')
					{
						type = 'large_promo';
					}
														
					if($('.menu-item-container').length == 0 && $(this).hasClass('active-zone-icon'))
					{
						$('.zone-edit-container').hide();
						$('.zone-edit-container').append('<div class="zone-container promo-container"></div>');
						$.ajax({
							url:"ajax/generatePromo",
							async: false,
							data: {'type':type, 'theme':'<?php echo $theme->css_class; ?>', "subtheme":"<?php echo $subtheme; ?>"},
							type: 'POST',
							success:function(data){
								$('.promo-container').append(data);
								$('.zone-edit-container').show();
							}
						});
						
						$('.media-container').remove();
					}
					else
					{
						$('.promo-container').fadeOut(1000, function(){
							$('.promo-container').remove();
						});
					}
				}
				else if($(this).children('.zone-desc').html() == 'Menus')
				{
					icg.promo.stop = true;
					if($('.menu-item-container').length == 0 && $(this).hasClass('active-zone-icon'))
					{
						$('.zone-edit-container').hide();
						$('.zone-edit-container').append('<ul class="menu-container zone-container" style="-pie-background:url(\'../assets/patriots/<?php echo $theme->css_class; ?>/menu-bg2.jpg\'); background-image:url(\'../assets/patriots/<?php echo $theme->css_class; ?>/menu-bg2.jpg\'); behavior:url(\'../PIE/PIE.php\');"></ul>');
						$('.zone-edit-container').fadeIn(1000, function(){
														
							menuIndexes = [];
							for (var i = 0; i < subtheme_info['zones'].length; i++)
							{
								if(subtheme_info['zones'][i]['menus'].length > 0 && subtheme_info['zones'][i]['id'] == $('.active-zone-icon').attr('zone_id'))
								{
									menuIndexes[menuIndexes.length] = i;
								}
							}
	                                                                                
							var zone_index;
	                                                                                
							for(var j = 0; j < menuIndexes.length; j++)
							{
								//generates menus base on api data
	                                                                                          
								zone_index = menuIndexes[j];

								for(var i = 0; i < subtheme_info['zones'][zone_index]['menus'].length; i++)
								{
									var menuHtml = '<li><div class="menu menu-<?php echo $theme->css_class; ?>" id="m' + subtheme_info['zones'][menuIndexes[j]]['menus'][i]['id'] + '"><div class="remove-menu-btn btn"><i class=" icon-remove-sign"></i></div><div class="header" title="Click to edit the title of the menu...">' + subtheme_info['zones'][menuIndexes[j]]['menus'][i]['title'].toUpperCase() + '</div><div class="menu-items"><div class="menu-item-container sample-text"><div class="menu-item-title"><div class="btn"><i class="icon-plus-sign"></i>Click to add a menu item...</div></div></div></div><div class="footer"></div></div></li>';
									$('.menu-container').append(menuHtml);
									if($('.menu').length % 2 == 0)
									{
										$('.menu').eq($('.menu').length - 1).addClass('menu2');
									}
									//generates menu items based on api data
									for(var k = 0; k < subtheme_info['zones'][zone_index]['menus'][i]['menu_items'].length; k++)
									{
										var title = subtheme_info['zones'][zone_index]['menus'][i]['menu_items'][k]['title'];
										var price = parseFloat(subtheme_info['zones'][menuIndexes[j]]['menus'][i]['menu_items'][k]['price']);
										var id = parseFloat(subtheme_info['zones'][menuIndexes[j]]['menus'][i]['menu_items'][k]['mmi_id']);
										var l = 0;
										$('.sample-text').each(function(){

											if(l == i){
												var menuItemhtml = '<div class="menu-item-container" id="mi' + id +'"><div class="menu-item-title"><div class="value"><div class="menu-item-title-preview">' + title + '</div></div></div><div class="menu-item-price">' + price.toFixed(2) + '</div><div class="clear-float"></div></div>';
												$(this).before(menuItemhtml);
												
											}
											l++;
										})
									}
																
								}
							}
							
							$('.icg-tooltip').remove();	
							$('.menu-item-title').off('click');
							$('.delete-btn').remove();
							$('.remove-menu-btn').remove();
							$('.sample-text').remove();
							$('.menu').fadeIn(500);
														
						});
					}
					else
					{
						$('.menu-container').fadeOut(1000, function(){
							$('.menu-container').remove();
						})
																
					}
				}
			});
		}

		$(document).ready(function(){
			loadSubtheme();
		});
	</script>
	<?
}
?>


<script>
	function correctArrowLeft(){
		$('.arrow-left').css('left', '44px');
	}
</script>


<div class="wrapper">
	<div class="arrow-wrapper"><div class="icon-circle-arrow-right-big"></div></div>
	<h1 class="title">Edit Subtheme</h1>

	<h2 class="subtitle">Zones</h2>

	<ul class="zone-icon-container">
	</ul>

	<div class="zone-edit-container">

	</div>
</div>
