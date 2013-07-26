<?php echo HTML::script('js/patriots/icg.js'); ?>
<input type="hidden" id="parent_theme_disclaimer" value="<?php echo $all_active_menu_items ?>" />
    
<?php
if ($subtheme_info)
{
	ob_start();
	?>
	<script type="text/javascript">
		function toTitleCase(str)
		{
			return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
		
		function sortZoneIcons() {
			var i = 1;
			$('.zone-icon').each(function(){
				$(this).children('.sort-number').html(i);
				i++;
			});
		}
		
		$(document).ready(function(){
			
			$('#add-zone-btn').click(function(){
				var zoneId;
				
				$.ajax({
					url:"/c/patriots/ajax/zones/add",
					type:"POST",
					async:false,
					data:{
						"type":$('#zone-type-select').val(),
						"subtheme":'<?php echo $subtheme; ?>',
						"sort":$('.zone-icon').length,
						"css_class" : '<?php echo $theme->css_class; ?>'
					},
					success:function(data)
					{
						zoneId = data;
					}
				});
				
				if($('#zone-type-select').val() == 'menus')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + zoneId + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Menus</div></div></li>');
				}
				else if($('#zone-type-select').val() == 'promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + zoneId + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Promo</div></div></li>');
				}
				else if($('#zone-type-select').val() == 'large-promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon zone-icon-large btn" zone_id="' + zoneId + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Large Promo</div></div></li>');
				}
				$('.remove-zone-icon').off('click');
				$('.zone-icon').off('click');
				$('.remove-zone-icon').click(function(){
					$(this).closest('li').remove();
					$('.zone-edit-container').empty();
					sortZoneIcons();
				});
				addZoneIconClickEvent();
				addRemoveZoneIconEvent();
			});
			
			$('.preview-edit').click(function(){
				if($(this).children('i').hasClass('icon-search'))
				{
					$('.delete-btn').fadeOut(500);
					$('.icg-tooltip').fadeOut(500);
					$('.remove-menu-btn').fadeOut(500);
					$('.sample-text').fadeOut(500);
					$('.add-menu-btn').fadeOut(500);
					$(this).children('i').removeClass('icon-search');
					$(this).children('i').addClass('icon-edit');
				}
				else{
					$('.delete-btn').fadeIn(500);
					$('.icg-tooltip').fadeIn(500);
					$('.remove-menu-btn').fadeIn(500);
					$('.sample-text').fadeIn(500);
					$('.add-menu-btn').fadeIn(500);
					$(this).children('i').removeClass('icon-edit');
					$(this).children('i').addClass('icon-search');
				}
			});
		});
						
							
		//All of the javascript on this page can be put into functions, will definitely need cleanup in the near future
											
		var subtheme_info = <?php echo json_encode($subtheme_info); ?>;
                
		/**
		 * Loads New subtheme info
		 */
		function getSubthemeContent() {
			$.ajax({
				url:"/c/patriots/api/get_subtheme_content",
				type:"POST",
				data: {
					"subtheme_id" : '<?php echo $subtheme; ?>'
				},
				async:false,				
				success:function(data){
					subtheme_info = jQuery.parseJSON(data);
				}
			});
			
			/*$.ajax({
				async:false,
				url:"/c/patriots/ajax/event/get_active",
				success:function(data)
				{*/
                                source = JSON.parse(<?php echo $all_active_menu_items ?>);
                              
                                for(var i = 0; i < source.length; i++)
				{
                                    if(source[i].title != 'Menu Item Title')
                                    {
                                        menuItems[menuItems.length] = [toTitleCase(source[i].title), source[i].price, source[i].id, source[i].description];
                                    }
                                }

                                // Generate the sourcefor autocomplete
    				autocompleteItems = [];
                                
                                for(var i = 0; i < menuItems.length; i++) 
                                {
                                    if(menuItems[i] instanceof Array) 
                                    {
                                        var label = menuItems[i][0];
                                        var value = menuItems[i][2];
                                        var newElement = {};

                                        newElement['label'] = label;
                                        newElement['value'] = value;
                                        autocompleteItems.push(newElement);
                                    }
                                }	  
                                
                                /*
					  $.ajax({
							async:false,
							type:"POST",
							data:{
								  "event_id": eventId, 
								  "titles_only": false
							},
							url:"/c/patriots/ajax/event/get_all_active_menu_items",
							success:function(data)
							{
								  source = $.parseJSON(data);
								  for(var i = 0; i < source.length; i++)
								  {
										if(source[i].title != 'Menu Item Title')
										{
											  menuItems[menuItems.length] = [toTitleCase(source[i].title), source[i].price];
										}
								  }
							}
					  });
                                          */
				//}
		 // });
				}
												
		

												
		/**
		 * Creates a Menu
		 */
		function createMenu(zoneId) {
			var menuid;
            var type_detail = $('#menu_column_select').val();
                        
			$.ajax({
				url:"/c/patriots/ajax/menus/add_menu",
				type:"POST",
				data:{
                    "type_detail": type_detail,
					"zone_id" : zoneId,
					"title": "ENTREES"
				},
				async:false,
				success:function(data){
					menuid = data;		
				}
			});
			return menuid;
		}
											
											
		/**
		 * Adds a menu item
		 */
		function addMenuItemToDb(menuId) {
			var id;
			$.ajax({
				url:"/c/patriots/ajax/menuitems/add_menu_item",
				type:"POST",
				data:{
					"menu_id" : menuId
				},
				async:false,
				success:function(data){
					id = data;	
				}
			});
			return id;
		}
												
		/**
		 * Deletes a zone
		 */
		function removeMenuFromDb(zoneId, menuId) {
			var returnvalue = false;
			$.ajax({
				url:"/c/patriots/ajax/menus/remove_menu",
				type:"POST",
				async:false,
				data:{
					"menu_id": menuId,
					"zone_id": zoneId
				},
				success:function(data){
					if(data == 'true')
					{
						returnvalue = true;
					}
				}
			});
			return returnvalue;
		}
											
		function removeMenuItemFromDb(id) {
			$.ajax({
				url:"/c/patriots/ajax/menuitems/remove_menu_item",
				type:"POST",
				async:false,
				data:{
					"id": id
				},
				success:function(data){
				}
			});
		}
						
		/**
		 * saves the menu item changes
		 */
		function changeMenuItem(original, m_id, menuItemTitle, mi_id) {
			$.ajax({
				url:"/c/patriots/ajax/menuitems/save_menu_item",
				type:"POST",
				async:false,
				data:{
                    "mi_id": mi_id,
					"m_id": m_id,
					"original": original,
					"title": menuItemTitle
				},
				success:function(data){
				}
			});
		}
		
                /*
		* saves the sorting order of menu items
		*/
		function saveMenuItemSort(menuId) {
			var menuItems = [];
              
			$('#' + menuId).find('.menu-item-container').each(function(){
				if(!$(this).hasClass('sample-text'))
				{
					menuItems[menuItems.length] = $(this).find('.editable-input').val();
				}
			});
			
			menuId = menuId.split('m')[1];
			$.ajax({
				url:"/c/patriots/ajax/menuitems/change_sort",
				type:"POST",
				async:false,
				data:{
					"menu_id" : menuId,
					"sort_values" : menuItems
				},
				success:function(data){
				}
			});
		}
		
		/**
		* saves the sorting for menus
		*/
		function saveMenuSort() {
			var menus = [];
			$('.menu').each(function(){
				menus[menus.length] = $(this).attr('id').split('m')[1];
			});
			zoneId = $('.active-zone-icon').attr('zone_id');
			$.ajax({
				url:"/c/patriots/ajax/menus/change_sort",
				type:"POST",
				async:false,
				data:{
					"zone_id": zoneId,
					"menus" : menus
				},
				success:function(data){
				}
			});
		}
			
		/**
		 * adds event to remove zone icons
		 */
		function addRemoveZoneIconEvent() {
			$('.remove-zone-icon').off('click');
			$('.zone-icon').off('click');
			$('.remove-zone-icon').click(function(){
				var r=confirm('This will permananently delete the zone. Are you sure you want to continue?');
				if(r == false)
				{
					return false;
				}
				var ajaxsuccess = true;
				$.ajax({
					url:"/c/patriots/ajax/zones/remove",
					type:"POST",
					async:false,
					data:{
						"id":$(this).parents('.zone-icon').attr('zone_id')
					},
					async:false,
					success:function(successful){
						if(successful != 'true')
						{
							alert('The zone could not be deleted. Please contact ICG to resolve this issue.');
							ajaxsuccess = false;
						}
					}
				});
				if(ajaxsuccess == false)
				{
					return false;
				}
				$(this).closest('li').remove();
				$('.zone-edit-container').empty();
				sortZoneIcons();
			});
		}
		
		/**
		 * Adds sortable to zone icons
		 */
		function addZoneIconsSortable() {
			$('.zone-icon-container').sortable({
				start:function(){
					$('.zone-icon').off('click');
				},
				stop: function(){
					var zones = [];
					$('.zone-icon').each(function(){
						zones[zones.length] = $(this).attr('zone_id');
					});

					$.ajax({
						url:"/c/patriots/ajax/zones/change_sort",
						type:"POST",
						data:{
							"zones" : zones
						},
						success:function(data){
						}
					});

					sortZoneIcons();
					addZoneIconClickEvent();
				}
			});
			$('.zone-icon-container').disableSelection();
		}

		/**
		 * adds click event to zone icons
		 */
		function addZoneIconClickEvent() {
			$('.zone-icon').click(function() {
				if($(this).attr('data') == 'disabled')
				{
					return false;
				}
                                /*
				if($(this).hasClass('active-zone-icon'))
				{
					$('.active-zone-icon').removeClass('active-zone-icon');
					$('.preview-edit').hide();
					$('.menu-container').fadeOut(500, function(){
						$('.menu-container').remove();
					});
				}
                                */
				else
				{
					$('.active-zone-icon').removeClass('active-zone-icon');
					$('.zone-edit-container').empty();
					$(this).addClass('active-zone-icon');
				
				if(($(this).children('.zone-desc').html() == 'Promo' || $(this).children('.zone-desc').html() == 'Large Promo'))
				{
                                        // Hide the column select drop down
                                        $('.add-menu-column-select').hide();
                                        
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
							url:"/c/patriots/ajax/promos/generate",
							async: false,
							data: {
								'type':type, 'theme':'<?php echo $theme->css_class; ?>',
								"subtheme":"<?php echo $subtheme; ?>",
								"consumer_key": '<?php echo md5('patriots'); ?>',
								"session_id" : '<?php echo Cookie::get('session_id'); ?>'
							},

							type: 'POST',
							success:function(data){
								$('.promo-container').append(data);
								$('.zone-edit-container').show();
							}
						});
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
					$('.preview-edit').show();
					if($('.menu-item-container').length == 0 && $(this).hasClass('active-zone-icon'))
					{
						$('.zone-edit-container').hide();
						$('.zone-edit-container').append('<div class="menu-container zone-container" style="-pie-background:url(\'/c/assets/patriots/<?php echo $theme->css_class; ?>/menu-bg2.jpg\'); background-image:url(\'/c/assets/patriots/<?php echo $theme->css_class; ?>/menu-bg2.jpg\'); behavior:url(\'../PIE/PIE.php\');">\n\
                                                                                  <div class="btn add-menu-btn">Click to add a menu</div>\n\
                                                                                  <select id="menu_column_select" class="add-menu-column-select">\n\
                                                                                    <option value="one_column">One Column</option>\n\
                                                                                    <option value="two_column">Two Column</option>\n\
                                                                                  </select></div>');
                                                $('.add-menu-column-select').show();                                                
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
									var menuHtml = '<div class="single-menu-container"><div class="menu menu-<?php echo $theme->css_class; ?>" id="m' + subtheme_info['zones'][menuIndexes[j]]['menus'][i]['id'] + '"><div class="remove-menu-btn btn"><i class=" icon-remove-sign"></i></div><div class="header" title="Click to edit the title of the menu..."><div class="value"><input type="text" value="' + subtheme_info['zones'][menuIndexes[j]]['menus'][i]['title'].toUpperCase() + '" class="editable-input" /></div></div><div class="menu-items"><div class="menu-item-container sample-text"><div class="menu-item-title"><div class="btn"><i class="icon-plus-sign"></i>Click to add a menu item...</div></div></div></div><div class="footer"></div></div></li>';
									
									$('.menu-container').append(menuHtml);
									
                                                                        
									if($('.menu').length % 2 == 0)
									{
										$('.menu').eq($('.menu').length - 1).addClass('menu2');
									}
									//generates menu items based on api data
									for(var k = 0; k < subtheme_info['zones'][zone_index]['menus'][i]['menu_items'].length; k++)
									{
                                                                                var description = subtheme_info['zones'][zone_index]['menus'][i]['menu_items'][k]['description'];
										var title = subtheme_info['zones'][zone_index]['menus'][i]['menu_items'][k]['title'];
										var price = parseFloat(subtheme_info['zones'][menuIndexes[j]]['menus'][i]['menu_items'][k]['price']).toFixed(2);
										var id = parseFloat(subtheme_info['zones'][menuIndexes[j]]['menus'][i]['menu_items'][k]['mmi_id']);
										var mi_id = parseFloat(subtheme_info['zones'][menuIndexes[j]]['menus'][i]['menu_items'][k]['mi_id']);
										var l = 0;
                                                                                
										$('.sample-text').each(function(){
											if(l == i){
												var menuItemhtml = '<div class="menu-item-container" id="mi' + id +'"><div class="btn delete-btn"><i class="icon-remove-sign"></i></div><div class="menu-item-title" title="Click to edit the title of the menu item..."><div class="value"><input id="'+mi_id+'" type="text" value="' + title + '" mi_id="'+mi_id+'"  original_value="' + title + '" class="editable-input" /></div></div><div class="menu-item-price" title="Click to edit the title of the menu item price...">' + price + '</div><br /><div id="" class="menu-item-description">'+description+'</div><div class="clear-float"></div></div>';
												$(this).before(menuItemhtml);
												
											}
											l++;
										});
									}
								}
							}
							
							$('.remove-menu-btn').click(function(){
								$('.menu-container').sortable("destroy");
								var menuId = $(this).parents('.menu').attr('id').split('m')[1];
								var zoneId = $('.active-zone-icon').attr('zone_id');
								var remove = removeMenuFromDb(zoneId, menuId);
								if(remove)
								{
									$(this).parents('.menu').fadeOut(500, function(){
										$(this).remove();
										icg.resetMenuOrder();
									});
								}
								
								$('.menu-container').sortable();
								
							});
							
							$('.add-menu-btn').click(function(){
                                                                // Reset the column selection drop down to one column
                                                                $('.add-menu-column-select').val('one_column');
                                                                
                                                                var description = 'New Item';
                                                                
								$('.menu-container').sortable("destroy");
								var zoneId = $('.active-zone-icon').attr('zone_id');
								var menuId = createMenu(zoneId);
                                                                console.log('description2: ' + description);
								var menuHtml = '<div class="single-menu-container"><div class="menu menu-<?php echo $theme->css_class; ?>" id="m' + menuId + '"><div class="remove-menu-btn btn"><i class=" icon-remove-sign"></i></div><div class="header" title="Click to edit the title of the menu..."><div class="value"><input type="text" value="ENTREES" class="editable-input" /></div></div><div class="menu-items"><div class="menu-item-container sample-text"><div class="menu-item-title"><div class="btn"><i class="icon-plus-sign"></i>Click to add a menu item...</div><br /><div id="" class="menu-item-description">'+description+'</div></div></div></div><div class="footer"></div></div></li>';
								
								$('.menu-container').sortable();
								attachMenuEvents($('.single-menu-container').last());
								$('.single-menu-container').last().fadeIn(500);
                                                                
                                                                // Trigger a click on the zone icon
                                                                $('.active-zone-icon').trigger('click');
							});
							
							$('.editable-input').autoGrowInput({
								comfortZone: 20,
								minWidth: 50,
								maxWidth: 560
							});
						
							$('.header .value .editable-input').autoGrowInput({
								comfortZone: 30,
								minWidth: 50,
								maxWidth: 560
							});
		
							$('.menu').each(function(){
								$(this).show(0, function(){
									$(this).find('.value').each(function(){
										icg.createTooltip($(this));
									});
									$(this).find('.editable-input').each(function(){
										$(this).blur();
									});
								});
							});
							
														
							$('.editable-input').click(function(){
								$(this).focus().select();
							});
							
							$('.editable-input').focus(function(){
								$(this).siblings('.icg-tooltip').hide();
							});

							$('.editable-input').blur(function(){
								$(this).siblings('.icg-tooltip').fadeIn(500);
							});
							
							$('.header .editable-input').focus(function(){
								$('.menu-container').sortable("disable");
							});
							
							$('.header .editable-input').change(function(event){
								$('.menu-container').sortable("enable");
								saveMenuTitle($(this).parents('.menu').attr('id').split('m')[1] ,$(this).val());
							});
							
							$('.menu-container, .menu-items, .menu').mousedown(function(){
								document.activeElement.blur();
							  });
							
							$('.menu-container').sortable({
								stop:function(){
									icg.resetMenuOrder();
									saveMenuSort();
								}
							});

							$('.menu-items').sortable({
								stop:function(){
									saveMenuItemSort($(this).parents('.menu').attr('id'));
								}
							});

							addAutoComplete($('.menu-items .editable-input'));
							  $('.menu-items .editable-input').on('blur', function(){
								  if($(this).val() == '') $(this).val($(this).attr('original_value'));
								$(this).siblings('.icg-tooltip').fadeIn(500);
							  });
							  
							  $('.delete-btn').click(function(){
                                                                  // Remove item description
                                                                  $(this).parent().siblings('.menu-item-description').remove();
                                                                  
								  removeMenuItemFromDb($(this).parent('.menu-item-container').attr('id').split('mi')[1]);
								  $(this).parent('.menu-item-container').remove();
                                                                  
                                                                  // Remove item description
                                                                  //$(this).parent().next().remove();
							  });
							  
							  $('.sample-text').click(function(){
								var menuId = $(this).parents('.menu').attr('id').split('m');
								var menuItemId = addMenuItemToDb(menuId[1]);
                                                                var description = '';
                                                                
								$(this).before('<div class="menu-item-container" id="mi' + menuItemId +'"><div class="btn delete-btn"><i class="icon-remove-sign"></i></div><div class="menu-item-title" title="Click to edit the title of the menu item..."><div class="value"><input type="text" value="Menu Item Title"  original_value="Menu Item Title" class="editable-input" /></div></div><div class="menu-item-price" title="Click to edit the title of the menu item price..."></div><br /><div id="" class="menu-item-description">'+description+'</div><div class="clear-float"></div></div>');
								addAutoComplete($('#mi' + menuItemId).find('.editable-input'));
								$('#mi' + menuItemId).find('.editable-input').autoGrowInput({
									comfortZone: 20,
									minWidth: 50,
									maxWidth: 560
								});
								icg.createTooltip($('#mi' + menuItemId).find('.value'));
								$('#mi' + menuItemId).find('.editable-input').click(function(){
									$(this).focus().select();
								});

								$('#mi' + menuItemId).find('.editable-input').focus(function(){
									$(this).siblings('.icg-tooltip').hide();
								});

								$('#mi' + menuItemId).find('.editable-input').blur(function(){
									$(this).siblings('.icg-tooltip').fadeIn(500);
								});
								$('#mi' + menuItemId).find('.editable-input').blur().focus().select();
								
								$('#mi' + menuItemId).find('.delete-btn').click(function(){
									removeMenuItemFromDb($(this).parent('.menu-item-container').attr('id').split('mi')[1]);
									$(this).parent('.menu-item-container').remove();
								});
							  });
						});
					}
				}
				
				}
			});
		}
		
	
		/**
		 * Adds autcomplete to a single menu item or a group of menu items
		 * Also loads correct price change
		 */
		function addAutoComplete(element) {

			$(element).autocomplete({
                    source:autocompleteItems, 
                    close:function(){
                            $(this).blur();
                    }
            });

            $(element).on('autocompletechange', function( event, ui) { 

                // Update the id attribute with the new id
                $(this).attr('id', ui.item.value);
                $(this).attr('mi_id', ui.item.value);

                // Change the description
                //var description = getMenuItemDescription(ui.item.value, false);
                //console.log('new description: ' + description + ':: menu_item id: ' + ui.item.value);
                //$(this).parents('.menu-item-container').children('.menu-item-description').html(description);

					if(ui.item == null)
					{
						alert('The menu item does not exist. Please select a valid menu item from the list');
						$(this).siblings('.icg-tooltip').hide();
						$(this).val('').focus().select();
					}
					else
					{
                    
                    var menuId = $(this).parents('.menu').attr('id').split('m')[1];
                        
                    if($(this).attr('original_value') != ui.item.label)
						{
                        changeMenuItem($(this).attr('original_value'), menuId, ui.item.label, ui.item.value);
						}

                    $(this).val(toTitleCase(ui.item.label));

						var price = 0;
                    for(var c = 0; c < menuItems.length; c++)
						{
							if($(this).val() == menuItems[c][0])
							{
								price = parseFloat(menuItems[c][1]).toFixed(2);
								break;
							}
						}

                    console.log(JSON.stringify(menuItems[c]));

                    $(this).parents('.menu-item-container').children('.menu-item-description').html(menuItems[c][3]);
						$(this).parents('.menu-item-title').siblings('.menu-item-price').html(price);
						$(this).focus().blur();
					}
            });
				}
	
        /**
        * Get menu item description
        */
        function getMenuItemDescription(menu_item_id, is_menus_menus_items_id) {
                
            $.ajax({
                url:"/c/patriots/ajax/menus/get_menu_item_description",
                type:"POST",
                data: { "menu_item_id": menu_item_id,
                        "is_menus_menus_items_id": is_menus_menus_items_id
                },
                success:function(data){
                    if(data) 
                    {
                        return '';
                    }   
                    else
                    {
                    return data;
                }
                }
		  });
		}
		
		/**
	* attaches events to menus
	*/
	function attachMenuEvents(element) {
		element.find('.editable-input').autoGrowInput({
			comfortZone: 30,
			minWidth: 50,
			maxWidth: 560
		});
		element.find('.editable-input').click(function(){
			$(this).focus().select();
		});
		element.find('.value').each(function(){
			icg.createTooltip($(this));
		});
		element.find('.editable-input').focus(function(){
			$(this).siblings('.icg-tooltip').hide();
		});

		element.find('.editable-input').blur(function(){
			$(this).siblings('.icg-tooltip').fadeIn(500);
		});
		element.find('.editable-input').blur();
		element.find('.remove-menu-btn').click(function(){
			$('.menu-container').sortable("destroy");
			var menuId = $(this).parents('.menu').attr('id').split('m')[1];
			var zoneId = $('.active-zone-icon').attr('zone_id');
			var remove = removeMenuFromDb(zoneId, menuId);
			if(remove)
			{
				$(this).parents('.menu').fadeOut(500, function(){
					$(this).remove();
				});
			}

			$('.menu-container').sortable();
			icg.resetMenuOrder();
		});
		element.find('.header .editable-input').focus(function(){
			$('.menu-container').sortable("disable");
		});
							
		element.find('.header .editable-input').change(function(event){
			$('.menu-container').sortable("enable");
			saveMenuTitle($(this).parents('.menu').attr('id').split('m')[1] ,$(this).val());
		});
		
		element.find('.sample-text').click(function(){
			var menuId = $(this).parents('.menu').attr('id').split('m');
			var menuItemId = addMenuItemToDb(menuId[1]);
                    var description = getMenuItemDescription(menuItemId, true);
                    
			$(this).before('<div class="menu-item-container" id="mi' + menuItemId +'"><div class="btn delete-btn"><i class="icon-remove-sign"></i></div><div class="menu-item-title" title="Click to edit the title of the menu item..."><div class="value"><input type="text" value="Menu Item Title"  original_value="Menu Item Title" class="editable-input" /></div></div><div class="menu-item-price" title="Click to edit the title of the menu item price..."></div><div class="clear-float"></div></div>');
			addAutoComplete($('#mi' + menuItemId).find('.editable-input'));
			$('#mi' + menuItemId).find('.editable-input').autoGrowInput({
				comfortZone: 20,
				minWidth: 50,
				maxWidth: 560
			});
			icg.createTooltip($('#mi' + menuItemId).find('.value'));
			$('#mi' + menuItemId).find('.editable-input').click(function(){
				$(this).focus().select();
			});

			$('#mi' + menuItemId).find('.editable-input').focus(function(){
				$(this).siblings('.icg-tooltip').hide();
			});

			$('#mi' + menuItemId).find('.editable-input').blur(function(){
				$(this).siblings('.icg-tooltip').fadeIn(500);
			});
			$('#mi' + menuItemId).find('.editable-input').blur().focus().select();

			$('#mi' + menuItemId).find('.delete-btn').click(function(){
				removeMenuItemFromDb($(this).parent('.menu-item-container').attr('id').split('mi')[1]);
                            
                           
				$(this).parent('.menu-item-container').remove();
			});
		  });
	}
		
		/**
		* Saves the header of the menu
		*/
		function saveMenuTitle(menuId, title) {
			$.ajax({
				url:"/c/patriots/ajax/menus/save_menu_title",
				type:"POST",
				data:{
					"menu_id": menuId,
					"title": title
				},
				success:function(data){
				}
			});
		}
		
		/**
		 * adds menu deletion event
		 */
		function addRemoveMenuEvent(menu) {
			
		}
		
		/**
		 * adds menu item addition event to add menu btn
		 */
		function addAddMenuItemEvent(addBtn) {
			
		}
		
		/**
		 * adds menu item deletion event
		 */
		function addRemoveMenuItemEvent(menuitem) {
			
		}
		
		/**
		 * adds a menu addition event to the add menu btn
		 */
		function addAddMenuEvent(addBtn) {
			
		}
			
		/**
		 * Loads zones
		 */
		function loadZones() {
			getSubthemeContent();
		
			for(var zoneIndex = 0; zoneIndex < subtheme_info['zones'].length; zoneIndex++)
			{
				//Adds zone Icons		
				if(subtheme_info['zones'][zoneIndex]['type'] == 'menu')
				{
                                        $('.add-menu-column-select').hide();
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Menus</div></div></li>');
				}
				else if(subtheme_info['zones'][zoneIndex]['type'] == 'promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Promo</div></div></li>');
				}
				else if(subtheme_info['zones'][zoneIndex]['type'] == 'large_promo')
				{
					$('.zone-icon-container').append('<li><div class="zone-icon zone-icon-large btn" zone_id="' + subtheme_info['zones'][zoneIndex]['id'] + '"><i class="remove-zone-icon icon-remove-sign"></i><div class="sort-number">' + ($('.zone-icon').length + 1) + '</div><div class="zone-desc">Large Promo</div></div></li>');
				}
			}
			addRemoveZoneIconEvent();
			addZoneIconsSortable();
			addZoneIconClickEvent();
		}

		$(document).ready(function(){
                        
                        /*
                        * Save disclaimer
                        */
                        function saveDisclaimer() 
                        {

                            var theme_id =$('.selected').children('a').attr('id');
                            var disclaimer = $('#disclaimer_input').val();

                            $.ajax({
                                    url:"/c/patriots/ajax/zones/set_disclaimer",
                                    type:"POST",
                                    async:false,
                                    data:{
                                            "disclaimer": disclaimer,
                                            "theme_id": theme_id
                                    },
                                    success:function(data){
                                        return true;
                                    }
                            });
                        }
                        
                        $('#save_disclaimer_btn').click(function () {
                            saveDisclaimer();
                        });
			loadZones();
		});
	</script>
	<?php
}
?>
<div class="wrapper">
	<div class="arrow-wrapper"><div class="icon-circle-arrow-right-big"></div></div>
	<h1 class="title">Edit Subtheme</h1>
	<div class="form-line">
		<div class="input-label">Add a zone:</div>
		<div class="input-wrapper">
			<select id="zone-type-select">
				<option value="menus">Menus</option>
				<option value="promo">Promo</option>
				<option value="large-promo">Large Promo</option>
			</select>
                        
			<div class="btn" id="add-zone-btn">Add</div>
			<div class="preview-edit btn"><i class="icon-search"></i></div>
		</div><br /><br />
					
                <div class="input-label">Disclaimer:</div>
		<div class="input-wrapper">
                        <input type="text" id="disclaimer_input" name="disclaimer_input" value="<?php echo $subtheme_info['subtheme_info'][0]['disclaimer'] ?>" />
			<div class="btn" id="save_disclaimer_btn">Save</div>
	</div>
	</div><br /><br /><br />
	<h2 class="subtitle">Zones</h2>

	<ul class="zone-icon-container"></ul>
	<div class="zone-edit-container"></div>
</div>

