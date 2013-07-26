<?php ?>
<div class="modal fade hide" id="add-menu-modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
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
							<option value="<?php print $event->id; ?>" <?php // print ($active_event == $event->id) ? 'selected="selected"' : '';     ?>>
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
		 * add click even tot subtitle
		 */
		function addSubtitleClickEvent(subtitle_btn) {
			subtitle_btn.click(function(){
				
			});
		}
        
        
        //initialise when the user first opens page
        initial_event_id = $('select[name="change-event"]').val();
        $('#form_event_id').val(initial_event_id);
        $.ajax({
			url:'/c/patriots/ajax/menuitems/get_menuitems_for_event',
			async:false,
			data:'event_id='+initial_event_id,
			type:"GET",
			success:function(data){
				data_object = $.parseJSON(data);
				final_menu_item_html = '';

				if(data_object.length>0)
				{
					if(initial_event_id == 'all')
					{
						final_menu_item_html += '<div class="alert alert-error">CAUTION: editing the price here will change the price for all events</div>';
					}
                            
					$.each(data_object, function(key,value){
						if(value.title=="Menu Item Title" || value.id==0)
						{

						}
						else
						{
							if(initial_event_id == 'all')
							{
								temp_menu_item_html = '\
								<div class="stand-wrap">\n\
                                                                    <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Title</span>\n\
									<input type="text" '+(initial_event_id=='all'?'':'disabled="disabled"')+' name="mi_title_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+value.title+'">\n\
								</div>\n\
                                                                    <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                                                                        <span class="add-on ui-text">Description</span>\n\
                                                                        <input type="text" name="mi_description_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+(!value.description?'':value.description)+'" /><br />\n\
                                                                        <span style="margin: 5px 0 5px 0; float: left;" class="add-on ui-text">Description 2</span>\n\
                                                                        <input style="margin-top: 5px;" id="descriptionextra" type="text" name="mi_descriptionextra_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+(!value.description_extra?'':value.description_extra)+'">\n\
                                                                    </div>\n\
								<div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">'+(initial_event_id=='all'?'Default Price $':'Event Price $')+'</span>\n\
									<input type="text" name="'+(initial_event_id=='all'?'mi':'mip')+'_price_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+value.price+'"></div><div class="radio-wrap"><input type="radio" value="1" id="'+ value.id + '-disabled" name="'+ value.id + '_enabled" '+(value.enabled==1?'checked':'')+'/><label for="'+ value.id + '-enabled">Enabled</label></div><div class="radio-wrap"><input type="radio" value="0" id="'+ value.id + '-disabled" name="'+ value.id + '_enabled" '+(value.enabled==0?'checked':'')+'/><label for="'+ value.id + '-disabled">Disabled</label></div>';
																	if(value.subtitle && value.subtitle.length > 0)
																	{
																		for(var i =0; i <value.subtitle.length; i++)
																		{
																			temp_menu_item_html += '<div class="input-prepend input-title input-subtitle ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Subtitle</span>\n\
									<input type="text" name="mi_subtitle_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+value.subtitle[i]+'" />\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="0" id="'+ value.subtitle.id + '-inline" name="'+ name+'_stacked" '+(value.subtitle.stacked==0?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Inline</label></div>\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="1" id="'+ value.subtitle.id + '-stacked" name="'+ name+'_stacked" '+(value.subtitle.stacked==1?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Stacked</label>\n\
                                                                    </div>\n\
								</div>'
																		}
																			
																	}
																	temp_menu_item_html += '</div>';
																}
																else
																{
																	temp_menu_item_html = '\
                                <div class="stand-wrap"><div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                                    <span class="add-on ui-text">Title</span>\n\
                                    <input type="text" name="mi_title_'+value.menus_items_id+'" value="'+value.title+'">\n\
                                </div>\n\
                                <div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
                                    <span class="add-on ui-text">Price $</span>\n\
                                    <input type="text" name="'+(initial_event_id=='all'?'mi':'mip')+'_price_'+(initial_event_id=='all'?value.menus_items_id:value.id)+'" value="'+value.price+'"></div></div>';
																}
											
																final_menu_item_html +=temp_menu_item_html;
															}
														});
                            
													}
													//data object is empty
													else
													{
														final_menu_item_html = 'No Menus Associated with this event';
													}

													$('#menu_items_result').html(final_menu_item_html);
												}
											});


											//change content when user changes content
											$('select[name="change-event"]').change(function(){
												event_id = $(this).val();
												$('#form_event_id').val(event_id);
												$.ajax({
													url:'/c/patriots/ajax/menuitems/get_menuitems_for_event',
													async:false,
													data:'event_id='+event_id,
													type:"GET",
													success:function(data){
														data_object = $.parseJSON(data);
														final_menu_item_html = '';
														if(data_object.length>0)
														{
                            
                            
															if(event_id == 'all')
															{
																final_menu_item_html += '<div class="alert alert-error">CAUTION: editing the price here will change the price for all events</div>';
															}
                            
															$.each(data_object, function(key,value){
																
																if(value.title=="Menu Item Title" || value.id==0)
																{

																}
																else
																{
																	if(event_id == 'all')
																	{
																		var name = value.id+'_enabled';//+Math.random();
																		temp_menu_item_html = '\
								<div class="stand-wrap"><div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Title</span>\n\
									<input type="text" '+(event_id=='all'?'':'disabled="disabled"')+' name="mi_title_'+(event_id=='all'?value.id:value.id)+'" value="'+value.title+'" />\n\
								</div>\n\
								<div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">'+(event_id=='all'?'Default Price $':'Event Price $')+'</span>\n\
									<input type="text" name="'+(event_id=='all'?'mi':'mip')+'_price_'+(event_id=='all'?value.id:value.id)+'" value="'+value.price+'" /></div>\n\
									<div class="radio-wrap-stacked"><input type="radio" value="1" id="'+ value.id + '-enabled" name="'+ name + '_enabled" '+(value.enabled==1?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-enabled">Enabled</label></div>\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="0" id="'+ value.id + '-disabled" name="'+ name+'_enabled" '+(value.enabled==0?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Disabled</label></div><div class="btn add-subtitle-btn">Add new subtitle</div>';
																		if(value.subtitle && value.subtitle.length > 0)
																		{
																			for(var i =0; i <value.subtitle.length; i++)
																			{
																				temp_menu_item_html += '<div class="input-prepend input-title input-subtitle ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Subtitle</span>\n\
									<input type="text" name="mi_subtitle_'+(event_id=='all'?value.id:value.id)+'" value="'+value.subtitle[i]+'" />\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="0" id="'+ value.subtitle.id + '-inline" name="'+ name+'_stacked" '+(value.subtitle.stacked==0?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Inline</label></div>\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="1" id="'+ value.subtitle.id + '-stacked" name="'+ name+'_stacked" '+(value.subtitle.stacked==1?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Stacked</label></div>\n\
								</div>'
																			}
																			
																		}
																		temp_menu_item_html += '</div>';
																	}
																	else
																	{
																		temp_menu_item_html = '\
                                <div class="stand-wrap"><div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                                    <span class="add-on ui-text">Title</span>\n\
                                    <input type="text" name="mi_title_'+value.menus_items_id+'" value="'+value.title+'">\n\
                                </div>\n\
                                <div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
                                    <span class="add-on ui-text">Price $</span>\n\
                                    <input type="text" name="'+(event_id=='all'?'mi':'mip')+'_price_'+(event_id=='all'?value.menus_items_id:value.id)+'" value="'+value.price+'"></div></div>';
																	}

																	final_menu_item_html +=temp_menu_item_html;
																}
															});
                            
														}
														else
														{
															add_html = '<a class="add-menu btn" data-toggle="modal" href="#myModal"><i class="icon-plus"></i>Add menu item to event..</a>';
															final_menu_item_html = 'No Menus Associated with this event';
														}
														$('#menu_items_result').html(final_menu_item_html);

													}
												});

											});
        
		
											//add subtitle to menu item
											$('.add-subtitle-btn').die('click').live('click', function(){
												var event_id = $('select[name="change-event"]').val();
												var menu_item_id = $(this).siblings('.input-title').children('input').attr('name');
													
												menu_item_id = menu_item_id.split('_')[2];
												$('#add-menu-modal').modal();
												
												$('#add-menu-modal').on('hidden', function () {
													$('#add-menu-modal .modal-header h3').html('');
													$('#add-menu-modal .modal-body').html('<div id="modal-body-msg"></div><form id="menu-item-add"></form>');
													
													$('#form_event_id').val(event_id);
													$.ajax({
														url:'/c/patriots/ajax/menuitems/get_menuitems_for_event',
														async:false,
														data:'event_id='+event_id,
														type:"GET",
														success:function(data){
															data_object = $.parseJSON(data);
															final_menu_item_html = '';
															if(data_object.length>0)
															{

																add_html = '<a class="add-menu btn" data-toggle="modal" href="#myModal"><i class="icon-plus"></i>Add menu item to event..</a>';

																$.each(data_object, function(key,value){
																	
																	var name = value.id+'_enabled';//+Math.random();
																	temp_menu_item_html = '\
								<div class="stand-wrap"><div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Title</span>\n\
									<input type="text" '+(event_id=='all'?'':'disabled="disabled"')+' name="mi_title_'+(event_id=='all'?value.id:value.id)+'" value="'+value.title+'" /><br /><br />\n\
								</div>\n\\n\
                                                                <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                                                                        <span class="add-on ui-text">Description</span>\n\
                                                                        <input type="text" name="mi_description_'+(initial_event_id=='all'?value.id:value.id)+'" value="'+(!value.description?'':value.description)+'" />\n\
								</div>\n\
								<div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">'+(event_id=='all'?'Default Price $':'Event Price $')+'</span>\n\
									<input type="text" name="'+(event_id=='all'?'mi':'mip')+'_price_'+(event_id=='all'?value.id:value.id)+'" value="'+value.price+'" /></div>\n\
									<div class="radio-wrap"><input type="radio" value="1" id="'+ value.id + '-enabled" name="'+ name + '_enabled" '+(value.enabled==1?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-enabled">Enabled</label></div>\n\
									<div class="radio-wrap">\n\
									<input type="radio" value="0" id="'+ value.id + '-disabled" name="'+ name+'_enabled" '+(value.enabled==0?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Disabled</label></div><div class="btn add-subtitle-btn">Add new subtitle</div>';
																	if(value.subtitle != 'undefined' && value.subtitle.length > 0)
																	{
																		for(var i =0; i <value.subtitle.length; i++)
																		{
																			temp_menu_item_html += '<div class="input-prepend input-title input-subtitle ui-wrap ui-wrap-active-event">\n\
									<span class="add-on ui-text">Subtitle</span>\n\
									<input type="text" name="mi_subtitle_'+(event_id=='all'?value.id:value.id)+'" value="'+value.subtitle[i]+'" />\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="0" id="'+ value.subtitle.id + '-inline" name="'+ name+'_stacked" '+(value.subtitle.stacked==0?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Inline</label></div>\n\
									<div class="radio-wrap-stacked">\n\
									<input type="radio" value="1" id="'+ value.subtitle.id + '-stacked" name="'+ name+'_stacked" '+(value.subtitle.stacked==1?'checked="checked"':'')+' />\n\
									<label for="'+ value.id + '-disabled">Stacked</label></div>\n\
								</div>'
																		}
																			
																	}
																	temp_menu_item_html += '</div>';

																	final_menu_item_html +=temp_menu_item_html;

																});

																final_menu_item_html += add_html;
															}
															else
															{
																final_menu_item_html = 'No Menus Associated with this event';
															}
															$('#menu_items_result').html(final_menu_item_html);



														}
													});
												});
												
												if(event_id == 'all')
												{
													$('#add-menu-modal .modal-header h3').html('Add a Subtitle');
													//get content for adding new menu
													add_form = '\
                            <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                            <span class="add-on ui-text">Subtitle</span>\n\
                            <input type="text" name="' + menu_item_id + '_subtitle">\n\
                        </div>\n\ ';
                                            
											$('#add-menu-modal .modal-body form').html(add_form);                          

										}
									});
        
									//add menu item to a specific stand (pick a specific menu item in library)
        
									//add menu item globally (a brand new menu item from scratch)
									$('.add-menu').die('click').live('click', function(){
                                                                            console.log('adding new menu item');
                                                                          
                                                                                
										event_id = $('#form_event_id').val();
             
										$('#add-menu-modal').modal();
             
										$('#add-menu-modal').on('hidden', function () {
                        
                                            // Reload the menu items when the "Add menu to event" modal is closed
                                            var postdata = '';
                                            var url = '/c/patriots/home/menu_items ';
                                            $('.hero-unit-style').fadeOut(250, function(){
											$.ajax({
                                                url:url,
												async:false,
                                                data:postdata,
                                                type:"POST",
												success:function(data){
                                                            $('.hero-unit').html(data);
                                                            $('.hero-unit-style').fadeIn(250);
														}
                                                    });
                                                });

																			
											$('#add-menu-modal .modal-header h3').html('');
											$('#add-menu-modal .modal-body').html('<div id="modal-body-msg"></div><form id="menu-item-add"></form>');




													});
                     
												//this is adding brand new menu items
												if(event_id == 'all')
												{
													$('#add-menu-modal .modal-header h3').html('Add a New Menu Item');
													//get content for adding new menu
													add_form = '\
                            <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                            <span class="add-on ui-text">Title</span>\n\
                            <input type="text" name="new_menuitem_title" value="">\n\
                        </div>\n\
                        <div class="input-prepend input-price ui-wrap ui-wrap-active-event">\n\
                            <span class="add-on ui-text">Default Price $</span>\n\
                            <input type="text" name="new_menu_item_price" value="">\n\
                        </div>\n\
                        <div class="input-prepend input-title ui-wrap ui-wrap-active-event">\n\
                            <span class="add-on ui-text">Description</span>\n\
                            <input type="text" name="new_menu_item_description" value="">\n\
                        </div>';
                                            
											$('#add-menu-modal .modal-body form').html(add_form);                          

										}
										//this is adding a existing menu item to an event
										else
										{
											$('#add-menu-modal .modal-header h3').html('Add an Existing Menu Item to an Event');
											add_menu_for_event_form = '';
                
											$.ajax({
												url:'/c/patriots/ajax/menuitems/get_menuitems_for_event',
												async:false,
												data:'event_id=all',
												type:"GET",
												success:function(data){
													data_object = $.parseJSON(data);
                        
													if(data_object.length>0)
													{
														add_menu_for_event_form += '<select id="add-available-menu-select" size="10" multiple="multiple">';
														$.each(data_object, function(key,value){
															add_menu_for_event_form += '<option id="mi_'+value.id+'" value="'+value.title+'">'+value.title+'</option>';
                                
														});
														add_menu_for_event_form += '</select>';

														add_menu_for_event_form += '<div class="add-menu-button-container"><div class="btn add-menu-btn"><i class="icon-arrow-right"></i></div><div class="btn add-menu-btn remove-menu-btn"><i class="icon-arrow-left"></i></div></div>';
                            
														add_menu_for_event_form += '<form id="add-menu-to-event-selected"><select id="selected-menu-select" size="10" multiple="multiple"></form>';
                            
														add_menu_for_event_form += '</select>';
                            

													}
												}
											});
                
											$('#add-menu-modal .modal-body form').html(add_menu_for_event_form);                          
											//                  $('#add-menu-modal .modal-body form').html(add_form);
										}
            
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
            
										return false;
            
									});
									
									
        
									//modal box submit different action dpending on different modal box.
									$('#add-menu-modal .submit-menu-add').die('click').live('click', function(){
										var menu_item_id = $('#add-menu-modal').find('input').attr('name').split('_')[0];
										var subtitle = $('#menu-item-add').children('.input-prepend').children('input').val();
										if($('.modal-header').children('h3').html() == 'Add a Subtitle')
										{
											$.ajax({
												url:"/c/patriots/ajax/menuitems/add_subtitle",
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
										}
										else
										{
										//serializes all the form data. Send to corresponding url depending on the event_id
									
										add_menu_form_data = $('#menu-item-add').serialize();
              
										event_id = $('#form_event_id').val();
              
										if(event_id == 'all')
										{
                  
											$.ajax({
												url:'/c/patriots/ajax/menuitems/add_new_menuitem',
												async:false,
												data:add_menu_form_data,
												type:"POST",
												success:function(data){
													$('#modal-body-msg').append('<div class="alert alert-success">New Menu Item has been Added Successfully</div>')
												}
											});


										}
										else
										{
                
											serialized_string = '';
                
											$('#selected-menu-select option').each(function(i){
												serialized_string += $(this).attr('id')+'='+$(this).val()+'&';

											});                        
                
                
                
											$.ajax({
												url:'/c/patriots/ajax/menuitems/add_menuitems_to_event',
												async:false,
												data:'event_id='+event_id+'&'+serialized_string,
												type:"POST",
												success:function(data){
													$('#modal-body-msg').append('<div class="alert alert-success">New Menu Item has been Added Successfully</div>')
												}
											});
                  
										}
              
              
              
										}
									});
        
									//after changes users submit the data via ajax
									$('#menu-item-edit').submit(function(){
									if($('.modal-header').html() == 'Add a Subtitle')
										{
//											$.ajax({
//												url:"ajax/menuitems/add_subtitle",
//												async:false,
//												
//											});
										}
										else
										{
										event_id = $('#form_event_id').val();
										r = true;
            
										//prompt box to affirm if global price change is good.
										if(event_id == 'all')
										{
											r=confirm('This is a global price change. These changes will affect all stands. Are you sure you want to continue?')
										}
            
										if(r==true)
										{
            
											form_data = $(this).serialize();

											$.ajax({
												url:'/c/patriots/ajax/menuitems/set_menuitems_for_event',
												async:true,
												data:form_data,
												type:"POST",
												success:function(data){
                                                                                                        console.log('Saving');
													data_object = $.parseJSON(data);
													final_menu_item_html = '';
													if(!$.isEmptyObject(data_object))
													{
														$('#menu_items_result').prepend('<div class="alert alert-success">'+data_object.meta.message+'</div>');
                                                        $('.alert-success').delay(3000).fadeOut(1000);

													}
												}
											});
										}
										else
										{
											//do nothing, user press cancel   
										}
            
            
										return false;
										}
									});
        
        
								});
            
</script>





