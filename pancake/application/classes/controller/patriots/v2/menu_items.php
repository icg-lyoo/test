<?php ?>
<div class="modal fade hide" id="add-menu-modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3></h3>
    </div>

    <div class="modal-body">
        <div id="modal-body-msg"></div>
        <form id="menu-item-add">
        </form>
    </div>

    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary submit-menu-add">Save changes</a>
    </div>
</div>


<div class="ui-hold"><div class="ui-title">MENU ITEMS</div>



    <form id="menu-item-edit">
		<input type="hidden" id="form_event_id" name="event_id"/>
		<div class="form-ui-wrapper">
			<div class="ui-text">Event</div>
			<div class="ui-container ui-event"> 
				<div class="ui-wrap ui-wrap-menu-event">



					<select name="change-event" >

						<option value="all">All </option>                  

						<?php foreach ($events as $event): ?>
							<option value="<?php print $event->id; ?>" <?php // print ($active_event == $event->id) ? 'selected="selected"' : '';      ?>>
								<?php print ucfirst($event->name); ?></option>

						<?php endforeach; ?>

					</select>

					<a class="add-menu btn" data-toggle="modal" href="#myModal"><i class="icon-plus"></i>Add menu item to event..</a>

					<div class="button-wrap"> <button id="itembtn" class="btn save" type="submit"><i>Save</i></button></div>

				</div>

				<div id="menu_items_result">

				</div>

			</div>

    </form>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
		
		/**
		 * gets menu items based on the event
		 */
		function getMenuItems(event_id) {
			var menu_items;
			$.ajax({
				url:'ajax/menuitems/get_menuitems_for_event',
				async:false,
				data:'event_id='+event_id,
				type:"GET",
				success:function(data){
					data_object = $.parseJSON(data);

					if(data_object.length>0)
					{
						menu_items = data_object
					}
					else{
						menu_items = false;
					}
				}
			});
			
			return menu_items;
		}
			/**
				* Adds a menu item
				*/
			function getMenuItemHtml(event_id, id, title, price, enabled, subtitles) {
				
				menu_item_html = '<div class="stand-wrap">\n\
								<div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Title</span>\n\
									<input type="text" '+(event_id=='all'?'':'disabled="disabled"')+' name="mi_title_'+id+'" value="'+title+'">\n\
								</div>\n\
								<div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">'+(event_id=='all'?'Default Price $':'Event Price $')+'</span>\n\
									<input type="text" name="'+(event_id=='all'?'mi':'mip')+'_price_'+id+'" value="'+parseFloat(price).toFixed(2)+'" />\n\
								</div>\n\
								<div class="radio-wrap">\n\
									<input type="radio" value="1" id="'+ id + '-disabled" name="'+ id + '_enabled" '+(enabled==1?'checked':'')+'/>\n\
									<label for="'+ id + '-enabled">Enabled</label>\n\
								</div>\n\
								<div class="radio-wrap">\n\
									<input type="radio" value="0" id="'+ id + '-disabled" name="'+ id + '_enabled" '+(enabled==0?'checked':'')+'/>\n\
									<label for="'+ id + '-disabled">Disabled</label>\n\
								</div>\n\
								<div class="btn add-subtitle-btn">Add new subtitle</div>';

				if(subtitles && subtitles.length > 0)
				{
					for(var i =0; i <subtitles.length; i++)
					{
						menu_item_html += getSubtitleHtml(subtitles[i], id);
					}

				}
				menu_item_html += '</div>';

				return menu_item_html;

			}

			/**
				* adds a subtitle to a menu item
				*/
			function getSubtitleHtml(subtitle,id) {
				var name = id+'_enabled';
				subtitle_html += '<div class="input-prepend input-title input-subtitle ui-wrap ui-wrap-active-event">\n\
								<span class="add-on ui-text">Subtitle</span>\n\
								<input type="text" name="mi_subtitle_'+id+'" value="'+subtitle+'" />\n\
								<div class="radio-wrap-stacked">\n\
								<input type="radio" value="0" id="'+subtitle.id + '-inline" name="'+ name+'_stacked" '+(subtitle.stacked==0?'checked="checked"':'')+' />\n\
								<label for="'+ value.id + '-disabled">Inline</label></div>\n\
								<div class="radio-wrap-stacked">\n\
								<input type="radio" value="1" id="'+ subtitle.id + '-stacked" name="'+ name+'_stacked" '+(subtitle.stacked==1?'checked="checked"':'')+' />\n\
								<label for="'+ id + '-disabled">Stacked</label></div>\n\
							</div>';
				return subtitle_html;
			}

			/**
				* Comment
				*/
			function addAlertMessage(message, div) {
				alertDiv = div;
				$(alertDiv).html = message;
				alertDiv = '<div class="alert alert-error"></div>';
				final_menu_item_html += '<div class="alert alert-error">CAUTION: editing the price here will change the price for all events</div>';
			}

			/**
				* add click even tot subtitle
				*/
			function addSubtitleClickEvent(subtitle_btn) {
				subtitle_btn.click(function(){

				});
			}
			
			/**
				* adds menuitem html to given div
				*/
			function addMenuItems(div) {
				event_id = $('select[name="change-event"]').val();
				$('#form_event_id').val(event_id);
				var menuItems = getMenuItems(event_id);
//				add_html = '<a class="add-menu btn" data-toggle="modal" href="#myModal"><i class="icon-plus"></i>Add menu item to event..</a>';
				var html = ((event_id == 'all') ? '<div class="alert alert-error">CAUTION: editing the price here will change the price for all events</div>' : '');
//				html += add_html;
				if(menuItems != false)
				{
					
					for(var index =0; index < menuItems.length; index++)
					{
						if(menuItems[index].title != 'Menu Item Title' && menuItems[index].id != 0)
						{
							html += getMenuItemHtml(event_id, menuItems[index].id, menuItems[index].title, menuItems[index].price, menuItems[index].enabled, menuItems[index].subtitle);
						}
					}
				}
				else
				{
					html += 'No menu items associated with this event.';
				}
				$(div).html(html);
				addBlurFocusSaveBtnEvent();
			}
			
			/**
				* Adds blur events to inputs to cause the save button to appear/dissapear
				*/
			function addBlurFocusSaveBtnEvent() {
				console.log('function called');
				$('.stand-wrap input').on('focus', function(){
					console.log('focus called.');
					if($(this).attr('original_value') == undefined){
						$(this).attr('original_value', $(this).val());
					}
					var original_value = $(this).attr('original_value');
					$(this).on('keyup', function(){
						console.log('keypress called.');
						if($(this).parents('.stand-wrap').children('.button-wrap').length == 0)
						{
							$(this).parents('.stand-wrap').append('<div class="button-wrap"> <div class="btn save" id="itembtn"><i>Save</i></div></div>');
							console.log('asdf');
							addSaveBtnEvent($(this).parents('.stand-wrap').children('.button-wrap').children('btn'));
						}
						if($(this).val() == original_value)
						{
							$(this).parents('.stand-wrap').children('.button-wrap').remove();
						}
						$(this).on('blur', function(){
							if($(this).val() == original_value && $(this).parents('.stand-wrap').children('.button-wrap').length > 0)
							{
								$(this).parents('.stand-wrap').children('.button-wrap').remove();
							}
						});
					});
				});
			}
			
			/**
				* adds a save event to the save button
				*/
			function addSaveBtnEvent(button) {
				var key_title = $(button).siblings('.input-title').children('input').attr('name');
				var title = $(button).siblings('.input-title').children('input').val();
				var key_price = $(button).siblings('.input-price').children('input').attr('name');
				var price = $(button).siblings('.input-price').children('input').val();
				var enabled_key;
				var enabled = false;
				
				$(this).siblings('.radio-wrap').children('input').each(function(){
					if($(this).attr('checked'))
					{
						enabled_key = $(this).attr('name');
						enabled = $(this).val();
					}
				});
				$(button).off.on('click', function(){
					console.log('adsf');
					$.ajax({
						url:"ajax/set_menu_items_for_event",
						type:"POST",
						async:false,
						data:{
							'event_id': event_id,
							key_title: title,
							key_price: price,
							enabled_key: enabled
						},
						success:function(data){
							console.log(data);
						}
					});
				});
				return false;
			}
			
			/**
				* adds html for create a new menu item
				*/
			function addNewMenuItemModal() {
				
				menuItems = getMenuItems();
				
				$('#menu_items_result').fadeOut('500', function(){
					$(this).empty();
					
					$('#add-menu-modal').modal();
				
					//get content for adding new menu
					$('#add-menu-modal .modal-header h3').html('Add a New Menu Item');

					//get content for adding new menu
					add_form = '<div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
								<span class="add-on ui-text">Title</span>\n\
								<input type="text" name="new_menuitem_title" value="">\n\
							</div>\n\
							<div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
							<span class="add-on ui-text">Default Price $</span>\n\
							<input type="text" name="new_menu_item_price" value="">\n\
							</div>';

					$('#add-menu-modal .modal-body form').html(add_form);
					
					$('#add-menu-modal').on('hidden', function(){
						addMenuItems($('#menu_items_result'));
						$('#menu_items_result').fadeIn(500);
					});
					
					$('#add-menu-modal .submit-menu-add').die('click').live('click', function(){
						add_menu_form_data = $('#menu-item-add').serialize();
						$.ajax({
							url:'ajax/menuitems/add_new_menuitem',
							async:false,
							data:add_menu_form_data,
							type:"POST",
							success:function(data){
								$('#modal-body-msg').append('<div class="alert alert-success">New Menu Item has been Added Successfully</div>')
							}
						});
						event_id = $('#form_event_id').val();
						
						$('#add-menu-modal').modal('hide');
						
						addMenuItems($('#menu_items_result'));
						$('#menu_items_result').fadeIn(500);
					});
				});
				
				

			}
			
			/**
				* adds html for creating a new subtitle
				*/
			function addSubtitlesModal(menu_item_id){
				
				menuItems = getMenuItems();
				
				$('#menu_items_result').fadeOut('500', function(){
					$(this).empty();
					
					$('#add-menu-modal').modal();

					$('#add-menu-modal .modal-header h3').html('Add a Subtitle');

					add_form = '<div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
								<span class="add-on ui-text">Subtitle</span>\n\
								<input type="text" name="subtitle">\n\
							</div>\n\ ';
					$('#add-menu-modal .modal-body form').html(add_form);
					
					$('#add-menu-modal').on('hidden', function(){
						addMenuItems($('#menu_items_result'));
						$('#menu_items_result').fadeIn(500);
					});
					
					$('#add-menu-modal .submit-menu-add').die('click').live('click', function(){
						add_menu_form_data = $('#menu-item-add').serialize();
						subtitle = $('#menu-item-add').children('.input-prepend').children('input').val();
						$.ajax({
							url:"ajax/menuitems/add_subtitle",
							async:false,
							type:"POST",
							data:{
								'menu_item_id': menu_item_id,
								'subtitle': subtitle
							},
							success:function(data){
								if(data == false)
								{
									alert('There was an error adding a subtitle');
								}
							}
						});
						
						$('#add-menu-modal').modal('hide');
						
						addMenuItems($('#menu_items_result'));
						$('#menu_items_result').fadeIn(500);
					});
				});
				
			}
			
			function addExistingMenuItemsModal(menu_item_id)
			{
				$('#menu_items_result').fadeOut('500', function(){
					$(this).empty();
					
					$('#add-menu-modal').modal();
					$('#add-menu-modal .modal-header h3').html('Add an Existing Menu Item to an Event');
					add_menu_for_event_form = '';

					var menuItems = getMenuItems();

					if(menuItems != false)
					{
						add_menu_for_event_form += '<select id="add-available-menu-select" size="10" multiple="multiple">';
						for(var z = 0; z < menuItems.length; z++)
						{
							add_menu_for_event_form += '<option id="mi_'+menuItems[z].id+'" value="'+menuItems[z].title+'">'+menuItems[z].title+'</option>';
						}

						add_menu_for_event_form += '</select>';

						add_menu_for_event_form += '<div class="add-menu-button-container"><div class="btn add-menu-btn"><i class="icon-arrow-right"></i></div><div class="btn add-menu-btn remove-menu-btn"><i class="icon-arrow-left"></i></div></div>';

						add_menu_for_event_form += '<form id="add-menu-to-event-selected"><select id="selected-menu-select" size="10" multiple="multiple"></form>';

						add_menu_for_event_form += '</select>';

						$('.add-menu-btn').on('click', function(){
						$("#add-available-menu-select option:selected").each(function(){
								$(this).appendTo($('#selected-menu-select'));
							});

							menu_event_data = [];

							$('#selected-menu-select option').each(function(){
								menu_event_data[$(this).attr('id')] = $(this).val();
							});

						});

						$('.remove-menu-btn').on('click', function(){
							$("#selected-menu-select option:selected").each(function(){
								$(this).appendTo($('#add-available-menu-select'));
							});

							data = [];

							$('#selected-menu-select option').each(function(){
								menu_event_data[$(this).attr('id')] = $(this).val();
							});
						});
					}

					$('#add-menu-modal .modal-body form').html(add_menu_for_event_form);
				
				});
			}
			
			var menuItemsResultDiv =$('#menu_items_result');
			addMenuItems(menuItemsResultDiv);
			
			$('select[name="change-event"]').change(function(){
				menuItemsResultDiv.fadeOut(500, function(){
					addMenuItems(menuItemsResultDiv);
					menuItemsResultDiv.fadeIn(500);
				})
				addMenuItems(menuItemsResultDiv);
			});
			
			$('.add-menu').die('click').live('click', function(){
				addNewMenuItemModal();
			});
			
			$('.add-subtitle-btn').die('click').live('click', function(){		
				var menu_item_id = $('#add-menu-modal').find('input').attr('name').split('_')[0];
				
				addSubtitlesModal(menu_item_id);
			});
			
			$('.add-menu-btn').die('click').live('click', function(){
				var event_id = $('select[name="change-event"]').val();
				var menu_item_id = $('#add-menu-modal').find('input').attr('name').split('_')[0];
				
				if(event_id == 'all')
				{
					addNewMenuItemModal();
				}
				else
				{
					addExistingMenuItemModal(menu_item_id);
				}
			});
		
		$('.hero-unit-style').fadeIn(500);
});
</script>





