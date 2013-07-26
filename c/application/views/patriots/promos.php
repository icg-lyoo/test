<div id="promo-edit-wrapper">
	<?php
	if($large==1)
	{
	echo '<input type="hidden" id="large_or_small_promo" name="large_or_small_promo" value=1 />';

	}
	else
	{
	echo '<input type="hidden" id="large_or_small_promo" name="large_or_small_promo" value=0 />';
	}
	?>
	<div class="ui-promo-select"><div class="ui-title"><?php echo ($large==1)?'LARGE PROMOS':'PROMOS'; ?></div>

		<div class="form-ui-wrapper"><div class="ui-text">Event and Theme</div><div class="ui-container ui-event">

				<div class="ui-wrap">
					<li>
						<i class="icon-info-sign"></i>
						Select a Event below
					</li>
				</div>

				<form id="promo-edit-event-theme-form">

					<div id="promo-edit-event-select-wrapper" class="ui-wrap">
						<div class="sub-wrap">Event</div>
						<div id ="promo-edit-event-select-box" class="sub-wrap form-wrap">
							<select name="event">

								<option value="all">All </option>                  



								<?php foreach ($events as $event): ?>
								<option value="<?php print $event->id; ?>" <?php print ($active_event == $event->id)?'selected="selected"':''; ?>>
									<?php print $event->name; ?></option>

								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="ui-wrap">
						<li>
							<i class="icon-info-sign"></i>
							Select a Theme below
						</li>
					</div>

					<div id="promo-edit-theme-select-wrapper" class="ui-wrap">
						<div class="sub-wrap">Theme</div>
						<div id="promo-edit-theme-select-box" class="sub-wrap form-wrap">
							<select id="promo-edit-theme-select" name="theme">
								<option value="test">test</option>
								<option value="test2">test2</option>
								<option value="test3">test3</option>
							</select>
						</div>
					</div>

					<input type="hidden" id="selected_event_id" name="event_id" value="<?php print $active_event; ?>"/>
					<input type="hidden" id="selected_theme_id" name="theme_id"/>


				</form><!-- end of promo-edit-event-theme-form -->
			</div>
		</div>
	</div>

	<div class="form-ui-wrapper"><div class="ui-text">Promo Select</div><div class="ui-container ui-event">
			<div id="promo-slides-wrapper" class="ui-icon-wrapper"> 
				<div class="form-ui-wrapper"><div class="ui-container ui-event">


						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>

						<div class="ui-icon-container"><div class="x-close"></div>
							<div class="ui-icon "><div class="ui-icon-hover"></div></div>
							<div class="ui-icon-text">Premium Draft Beer</div>
						</div>



						<div class="ui-icon-container add-container">
							<div class="ui-icon add-promo"><div class="ui-add-hover"></div></div>
							<div class="ui-icon-text">Add Promo</div>
						</div>

					</div></div></div></div></div>



	<div class="modal fade hide" id="add-promo-modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3></h3>
		</div>

		<div class="modal-body">
			<form id="menu-item-add">
			</form>
		</div>

		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary submit-promo-add">Save changes</a>
		</div>
	</div>



	<div id="selected-promo-content" class="ui-promo-select-wrapper">

	</div>



</div> <!-- end of promo-edit-wrapper -->

<!--<div class="modal fade hide" id="add-promo-modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3></h3>
    </div>
	
    <div class="modal-body">
        <div id="modal-body-msg"></div>
        <form id="promo-add-form">
			
        <div class="ui-promo-select-wrapper">
                <div class="form-ui-wrapper">
                    <div class="ui-wrap">
                        <li>
                            <i class="icon-info-sign"></i>
                             Upload a Promo below
                        </li>
                    </div>  
                 <div class="ui-wrap">
                        <div class="sub-wrap">Upload File</div>
                        <div class="sub-wrap sub-wrap-right-float">
                           <input type="text" maxlength="30" name="add_title">
                    </div>
                 </div>

                <div class="ui-wrap">
                                <li>
                    <i class="icon-info-sign"></i>
                     Enter a Title below
                    </li>
                </div>  
                 <div class="ui-wrap">
                        <div class="sub-wrap">Title</div>
                        <div class="sub-wrap sub-wrap-right-float">
                           <input type="text" maxlength="30" name="add_title">
                    </div></div>


                   <div class="ui-wrap">
                    <li>
                        <i class="icon-info-sign"></i>
                        Enter a Description below
                    </li>
                    </div>
                 <div class="ui-wrap">
                    <div class="sub-wrap">Description</div>

                    <div class="sub-wrap sub-wrap-right-float">
                        <input type="text" maxlength="30" name="add_title">
                    </div>

                </div>


               </div> 
            </div>
			
        </form>
    </div>
	
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary submit-promo-add">Save changes</a>
    </div>
</div>    -->


<script type="text/javascript">

	
	


    function populateThemes()
    {
        event_id = $('#selected_event_id').val();
        $('#promo-edit-theme-select').html('');
		$.ajax({
			url:'/c/patriots/ajax/promos/get_theme_by_event',
			async:false,
			cache:false,
			data:'event_id='+event_id,
			type:"GET",
			success:function(data){
				data_object = $.parseJSON(data);
				var select = $('#promo-edit-theme-select');
				var options = select.attr('options');
                    
				$('option', select).remove();
                    
                    
				$.each(data_object, function(index, array) {
					select.append('<option value="'+array.theme_id+'">'+array.name+'</option>');
				});
			}
		});
    }
    
    function populatePromoSlides()
    {
        event_id = $('#selected_event_id').val();
        theme_id = $('#selected_theme_id').val();
        large_or_small = $('#large_or_small_promo').val();
        
        theme_css = '';
        //get css class for the theme
		$.ajax({
			url:'/c/patriots/ajax/promos/get_theme_css',
			async:false,
			cache:false,
			data:'theme_id='+theme_id,
			type:"GET",
			success:function(data){
				theme_css=data;
                    
			}
                
		});
        
        
		$.ajax({
			url:'/c/patriots/ajax/promos/get_promos_by_event_and_theme',
			async:false,
			cache:false,
			data:'event_id='+event_id+'&theme_id='+theme_id+'&large='+large_or_small,
			type:"GET",
			success:function(data){
				slide_html = '';
                    
				data_object = $.parseJSON(data);
				var promo_wrapper = $('#promo-slides-wrapper');
                    
				promo_wrapper.html('');
                    
				$.each(data_object, function(index, array) {
<?php

if ($large)
	echo 'var iconHtml = \'<div class="video-icon"></div>\';';
else
{
		echo 'var iconHtml = \'<img width="118px" src="/c/media/patriots/\'+array.media+\'" />\';';

}
?>
								slide_html = '<div id="promo_'+array.id+'" class="ui-icon-container <?php if (!$admin) echo 'unclickable'; ?>"><div class="x-close"></div>\n\
                                    <div class="promo-content-link ui-icon">\n\
                                    <div class="ui-icon-hover"></div>' + iconHtml +'</div><div class="promo-content-link ui-icon-text"><button id="icon-btn" class="btn" type="submit">'+array.name+'</button></div>\n\
                                    <div class="radio-promo"><input type="radio" id="'+array.id+'-enable"' + ((array.enabled == 1) ? 'checked="checked"' : '') + 'name="'+array.id+'" value="'+array.id+'-enable"/>Enable\n\
                                    <input type="radio" id="'+array.id+'-disable" name="'+array.id+'" value="'+array.id+'-disable" ' + ((array.enabled == 0) ? 'checked="checked"' : '') + '/>Disable</div></div>';
														promo_wrapper.append(slide_html);
													});
                    
													//add the add button
<?php
if ($admin)
{
	echo 'promo_wrapper.append(\'<div class="ui-icon-container add-container"><div class="ui-icon add-promo"><div class="ui-add-hover"></div></div><div class="ui-icon-text">Add Promo</div></div>\');';
}
?>
                    
						}
                
					});
            
				}
    
				function populatePromoSlideContent(promo_id)
				{
					$('#selected-promo-content').html('');
        
					$.ajax({
						url:'/c/patriots/ajax/promos/get_theme_css',
						async:false,
						cache:false,
						data:'theme_id='+theme_id,
						type:"GET",
						success:function(data){
							theme_css=data;
                    
						}
                
					});
        
					$.ajax({
						url:'/c/patriots/ajax/promos/get_promo_details',
						async:false,
						cache:false,
						data:'promo_id='+promo_id,
						type:"GET",
						success:function(data){
							data_object = $.parseJSON(data);
                    
							promo_content_html = '<div class="form-ui-wrapper"><div class="ui-text">Title And Description</div><div class="ui-container ui-event"><form id="menu-item-content-change-form">\n\
                                        <input type="hidden" name="promo_item_id" value="'+data_object[0].id+'"/>\n\
                                        <div class="ui-icon preview-icon"><img width="118px" src="/c/media/patriots/'+data_object[0].media+'" /></div>\n\
                                        <div class="ui-wrap"><li><i class="icon-info-sign"></i>Enter a Title below</li>\n\
                                        </div>  \n\
                                        <div class="ui-wrap"><div class="sub-wrap">Title</div>\n\
                                        <div class="sub-wrap sub-wrap-right-float"><input type="text" value="'+data_object[0].name+'" maxlength="40" name="promo_name">\n\
                                        </div></div>\n\
                                        <div class="ui-wrap"><li><i class="icon-info-sign"></i>Enter a Description below</li></div>\n\
                                        <div class="ui-wrap"><div class="sub-wrap">Description</div>\n\
                                        <div class="sub-wrap sub-wrap-right-float"><input type="text" maxlength="40" value="'+data_object[0].description+'" name="promo_desc"></div>\n\
                                        </div></div>\n\
<div class="button-wrap"> <button id="content-change-btn" class="btn save btn-primary" type="submit"><i>Save</i></button></div></form></div> ';
														promo_content_wrapper = $('#selected-promo-content');
                    
														//clear out previous content
														promo_content_wrapper.html('');
                    
														//add the add button
														promo_content_wrapper.append(promo_content_html);
													}
                
												});
        
        
											}
    


											$(document).ready(function(){

	
												//populate the theme select form
												initial_event_id = $('#promo-edit-event-select-box select').val();
												$('#selected_event_id').val(initial_event_id);
												populateThemes();
        
												//populate the promo slides
												initial_theme_id = $('#promo-edit-theme-select').val();
												$('#selected_theme_id').val(initial_theme_id);
												populatePromoSlides();
        
        
												$('#promo-edit-event-select-box select').change(function(){
													event_id = $(this).val();
													$('#selected_event_id').val(event_id);
            
													$('#promo-slides-wrapper').html('');
													$('#selected-promo-content').html('');
            
													populateThemes();
           
													theme_id = $('#promo-edit-theme-select').val();
													$('#selected_theme_id').val(theme_id);
           
													populatePromoSlides();
												});
        
        
        
												$('#promo-edit-theme-select-box select').change(function(){
													theme_id = $(this).val();
													$('#selected_theme_id').val(theme_id);

													$('#selected-promo-content').html('');


													populatePromoSlides();
													
													<?php
if (!$admin)
{
	echo '$(".x-close").remove();';
}
?>

												});
        
												//when user clicks the x, it deletes the relationship, promo needs to be detached from the event and theme
												$('.x-close').die('click').live('click', function(){
													theme_id = $('#selected_theme_id').val();
													event_id = $('#selected_event_id').val();
            
													promo_div_id = $(this).parent().attr('id');
													promo_exploded_string = promo_div_id.split('_');
													promo_id = promo_exploded_string[1];
            
													//            r=confirm('You are deleting promo:'+promo_id+' from theme:'+theme_id+', event:'+event_id);
            
													if(event_id=='all')
													{
														r=confirm('Are you sure you want to delete the promo from all events and themes? You will delete this promo from the library entirely and already scheduled promos will be deleted also');
													}
													else
													{
														r=confirm('Are you sure you want to delete the promo from this event and theme? Promos in other themes and event will not be altered');
                
													}
            
													if(r==true) //delete the promo id
													{
														param = 'theme_id='+theme_id+'&event_id='+event_id+'&promo_id='+promo_id;
                
														$.ajax({
															url:'/c/patriots/ajax/promos/delete_promoitem',
															async:false,
															data:param,
															type:"POST",
															success:function(data){
																console.log(data);
																populatePromoSlides();
																populatePromoSlideContent(promo_id);
															}
														});
                    
													}
													else
													{
														//user pressed cancel, don't do anything'
													}
            
												});
		
		
<?php
if ($admin)
{
	echo ' $(\'#promo-slides-wrapper .promo-content-link, #promo-slides-wrapper .promo-content-link\').die(\'click\').live(\'click\', function(){
            theme_id = $(\'#selected_theme_id\').val();
            event_id = $(\'#selected_event_id\').val();
            promo_div_id = $(this).parent().attr(\'id\');
            promo_exploded_string = promo_div_id.split(\'_\');
            promo_id = promo_exploded_string[1];
            
            //attach selected class to wrapping div
            
            
            
            populatePromoSlideContent(promo_id);
            
            
           
        });';
}
?>
        
        
        
				$('#add-promo-modal').modal('hide');
        
				$('.add-promo').die('click').live('click', function(){
            
					theme_id = $('#selected_theme_id').val();
					event_id = $('#selected_event_id').val();
            
					add_form_html = '<div id="modal-body-msg"></div><form id="promo-add-form"><div class="ui-promo-select-wrapper"><div class="form-ui-wrapper"><div class="ui-wrap"><li><i class="icon-info-sign"></i>Upload a Promo below</li></div>  <div class="ui-wrap"><div class="sub-wrap">Upload File</div><div class="sub-wrap sub-wrap-right-float"><input id="fileupload" type="file" name="files[]" multiple><input type="hidden" name="uploaded_media_filename" id="uploaded_media_filename"/></div><div id="upload-msg"></div></div><div class="ui-wrap"><li><i class="icon-info-sign"></i>Enter a Title below</li></div>  <div class="ui-wrap"><div class="sub-wrap">Title</div><div class="sub-wrap sub-wrap-right-float"><input type="text" maxlength="40" name="promo_title"></div></div><div class="ui-wrap"><li><i class="icon-info-sign"></i>Enter a Description below</li></div><div class="ui-wrap"><div class="sub-wrap">Description</div><div class="sub-wrap sub-wrap-right-float"><input type="text" maxlength="40" name="promo_desc"></div></div></div> </div></form><div class="fileupload-progress"></div><div id="progressbar"></div>';
            
					$('#add-promo-modal .modal-header h3').html('Add New Promo. Theme:'+theme_id+' Event:'+event_id);
					$('#add-promo-modal .modal-body').html(add_form_html);
					$('#add-promo-modal').modal('toggle');
            
					$('#add-promo-modal').die('hidden').live('hidden', function () {
						populatePromoSlides();
					});
            
            
					$('#promo-add-form').fileupload({
						dataType: 'json',
						url: '/c/patriots/ajax/promos/promo_media_upload?event_id='+event_id+'&theme_id='+theme_id,
						autoUpload: false,
						done: function (e, data)
						{
							$.each(
							data.result,
							function (index, file)
							{
								$('#uploaded_media_filename').val(file.name);
								$('#upload-msg').append('<div class="alert alert-success">'+file.name+' has been successfully uploaded</div>');

								//$('<p/>').text(file.name+' has been successfully uploaded').appendTo('#file_uploaded');
							}
						);
							//succss notification
							$('#progress').html(100);
							$('#progressbar').hide().progressbar({
								value:0
							});
						},
						progress: function (e, data)
						{
							var prog = parseInt((data.loaded / data.total) * 100, 10);
							//console.log("Progress: " + prog + "%");
							//$('#progress').html(prog);
							$('#progressbar').show().progressbar({
								value:prog
							});
						},
						start: function (e, data)
						{
							//console.log("Upload starting...");
							return false;
						},
						stop: function (e, data)
						{
							//console.log("Upload finished...");
						}
					});
            
            
				});
        
				$('#add-promo-modal .submit-promo-add').die('click').live('click', function(){
					theme_id = $('#selected_theme_id').val();
					event_id = $('#selected_event_id').val();
					large_or_small = $('#large_or_small_promo').val();
            
					add_promo_form_data = $('#promo-add-form').serialize();
            
					all_para = add_promo_form_data+'&theme_id='+theme_id+'&event_id='+event_id+'&large='+large_or_small;
					console.log(all_para);
            
					$.ajax({
						url:'/c/patriots/ajax/promos/add_new_promoitem',
						async:false,
						data:all_para,
						type:"POST",
						success:function(data){
							$('#modal-body-msg').append('<div class="alert alert-success">New Menu Item has been Added Successfully</div>')
						}
					});
            
            
        
				});
        
				$('#content-change-btn').die('click').live('click', function(){
        
					promo_id = $('#menu-item-content-change-form input[name="promo_item_id"]').val();
        
					content = $('#menu-item-content-change-form').serialize();
					console.log(promo_id); 
        
					//send the serialized data to pancake to edit
        
					$.ajax({
						url:'/c/patriots/ajax/promos/edit_promoitem',
						async:false,
						data:content,
						type:"POST",
						success:function(data){
							populatePromoSlides();
							populatePromoSlideContent(promo_id);
						}
					});
        
					<?php
if (!$admin)
{
	echo '$(".x-close").remove();';
}
?>
					return false;
                   
                   
            
				});
    
<?php
if (!$admin)
{
	echo '$(".x-close").remove();';
}
?>
        	
			$('.radio-promo').children('input[type="radio"]').on('change', function(){
				var id = $(this).attr('name');
				var enable = $(this).val().split('-');
				enable = ((enable[1] == 'enable') ? true : false);

				var result = updateEnable(id, enable);
				if(result !== true)
				{
					alert(result);
					return false;
				}
			});
        
	
        
		});
		/**
		 * Updates the enabled/disabled status on a promo
		 */
		function updateEnable(id, enable) {
			var result = false;
			$.ajax({
				url:"/c/patriots/promos/update_enable",
				async:false,
				type:"POST",
				data:{
					"id":id,
					"enable":enable
				},
				success:function(data){
					if(data == 'true')
					{
						result = true;
					}
					else
					{
						result = 'There was an error processing your request.';
					}
				}
			});
			return result;
		}
</script>