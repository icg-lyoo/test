<div class="ui-hold">
	<div class="ui-title">STANDS</div>
	<div class="form-ui-wrapper stands">
		<div class="ui-wrap">
            <li>
				<i class="icon-info-sign"></i>
				Select a Event below
            </li>
		</div>
		<div class="ui-container ui-event">
			<div id="stand-msg-box"></div>
			<div class="ui-wrap ui-wrap-stands-name <?php echo (($admin) ?  '' : 'wrap-no-admin'); ?>">

				<div class="ui-text">Stand Name</div>	
				<?php
				ob_start();
				foreach ($stands as $stand)
				{
					?>
					<div class="ui-active-event">
						<div class="ui-stand-wrap">
							<?php echo strtolower($stand['stand_name']); ?>
							<?php
							$stand_identifier =str_replace('-', '', str_replace(' ', '', strtolower($stand['stand_name']))). '-profile-' . $stand['stand_id'];
							?>
							<input class="hp-stand-name" type="hidden" value="<?php echo $stand_identifier; ?>"/>
						</div>
						<?php
						if($admin)
						{
							
						?>
						<button class="add-hardware-profile-btn btn btn-primary">Add Hardware and Profile</button>
						<button class="push-profile-btn btn btn-primary">Push Profile</button>
						<button class="auth-code-btn btn btn-primary">Auth Code</button>
						<?php
						}
						?>
					</div>
					<?php
				}
				$html = ob_get_clean();
				echo $html;
				?>
			</div>
			<div class="ui-wrap ui-wrap-stands">
				<div class="ui-text">Theme</div>	
				<?php
				ob_start();
				foreach ($stands as $stand)
				{
					?><div class="ui-active-event">
					<select name="change-event" class="theme-select" stand_id="<?php echo $stand['stand_id'] ?>" <?php echo(($admin)?'':'disabled="disabled"'); ?>>
						<option value="" selected></option>
						<?php
						foreach ($themes as $theme)
						{
							if (!$theme->parent_theme_id)
							{
								?>
								<option value="<?php echo $theme->id; ?>" <?php if (isset($stand['theme_id']) && $theme->name == $stand['theme_name']) echo 'selected'; ?>><?php echo ucfirst($theme->name); ?></option>				<?php
				}
			}
						?>
					</select>
                                            </div>
					<?php
				}
				$html = ob_get_clean();
				echo $html;
				?>
			</div>
			<div class="ui-wrap ui-wrap-stands">
				<div class="ui-text">Sub Theme</div>
				<?php
				ob_start();
				foreach ($stands as $stand)
				{
					?><div class="ui-active-event">
					<select name="change-event" class="subtheme-select" stand_id="<?php echo $stand['stand_id'] ?>" <?php echo(($admin)?'':'disabled="disabled"'); ?>>
						<option value="" selected></option>
						<?php
						foreach ($themes as $theme)
						{
							if ($theme->parent_theme_id && $theme->parent_theme_id == $stand['theme_id'])
							{
								?>
								<option value="<?php echo $theme->id; ?>" <?php if (isset($stand['subtheme_name']) && $theme->name == $stand['subtheme_name']) echo 'selected'; ?>><?php echo strtolower($theme->name); ?></option>				<?php
				}
			}
						?>
					</select>
                                            </div>
					<?php
				}
				$html = ob_get_clean();
				echo $html;
				?>	
			
                                </div>
		</div></div>	
	<div class="button-wrap">
		<button id="itembtn" class="btn save btn-primary" type="submit"><i>Save</i></button>
	</div>

</div>
<script type="text/javascript">
	$('.btn.save').click(function(){
		stands_themes = [];		
		$('.subtheme-select').each(function(){	
			stands_themes[stands_themes.length] = {		
				"stand_id": $(this).attr('stand_id'),			
				"theme_id": $(this).val()		
			}		});		
		$.ajax({	
			url:"/pancake/patriots/v1/theme/add_stands",		
			type:"POST",	
			async:false,	
			data:{		
				"stands_themes":stands_themes,
				"consumer_key": '<?php echo md5('patriots'); ?>',
				"session_id" : '<?php echo Cookie::get('session_id');?>'
			},		
			success:function(data)	
			{				
			}	
		});	
	});	
	$('.theme-select').change(function(){	
		var theme_id = $(this).val();		
		var stand_id = $(this).attr('stand_id');	
		$.ajax({		
			url:"/pancake/patriots/v1/theme/get_subthemes",	
			type:"POST",		
			data: {		
				"parent_theme_id": theme_id,
				"consumer_key": '<?php echo md5('patriots'); ?>',
				"session_id" : '<?php echo Cookie::get('session_id');?>'
			},		
			success:function(data){	
				$('.subtheme-select').each(function(){	
					if($(this).attr('stand_id') == stand_id)	
					{					
						$(this).empty();		
						for(var i = 0; i < data.length; i++)		
						{						
							$(this).append('<option value="' + data[i].id + '" >' + data[i].name + '</option>');			
						}		
					}		
				});	
			}	
		});
	});	
	$(document).ready(function(){
//		$('.subtheme-select').each(function(){	
//			var stand_id = $(this).attr('stand_id');	
//			var subtheme_id = $(this).val();		
//			var theme_id;				
//			$('.theme-select').each(function(){		
//				if($(this).attr('stand_id') == stand_id)	
//				{		
//					theme_id = $(this).val();
//				}	
//			});
//		});		
	});
</script>


<script type="text/javascript">
    $(document).ready(function(){
		
		$('.auth-code-btn').click(function(){
			stand_name = $(this).siblings('div').children('input').val();
			$.ajax({
				url:'/c/patriots/ajax/waffle/get_auth_code',
				async:false,
				data:{
					'data': stand_name
				},
				type:"POST",
				success:function(data){
					
					if(data == false)
					{
						$('#stand-msg-box').html('<div class="alert alert-error">\n\Error retrievieng authorization code\n\</div>\n\ ////');
						setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);

					}
					else{
						$('#stand-msg-box').html('<div class="alert alert-success">\n\<p>Authorization code:   <span style="font-weight:bold">'+data+'</span></p>\n</div>\n\ ');
						setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
					}
				}
			});
		});
//	});
	
	$('.add-hardware-profile-btn').click(function(){
		stand_name = $(this).siblings('div').children('input').val();
            
		$.ajax({
			url:'/c/patriots/ajax/waffle/add_hardware_profile',
			async:false,
			data:'name='+stand_name,
			type:"POST",
			success:function(data){
				data_object = $.parseJSON(data);
                        
				console.log(data_object)
                        
				if(data_object.hardware.meta.status==0)
				{
					$('#stand-msg-box').html('<div class="alert alert-error">\n\
                                                                    Hardware and profile generation has failed\n\
                                                                    </div>\n\
                                                                ');
			setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);

				}
				else{
                            
                            


					$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                        <p>Hardware and profile created successfully for '+stand_name+'.</p>\n\
                                        <p>Auth Code: '+data_object.hardware.data.code+'</p>\n\
                                        </div>\n\
                                    ');
											setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
														}
													}
												});
            
            
											});
		
											$('.push-profile-btn').click(function(){
												stand_name = $(this).siblings('div').children('input').val();
            
												$.ajax({
													url:'/c/patriots/ajax/waffle/push_profile',
													async:false,
													data:'name='+stand_name,
													type:"POST",
													success:function(data){
														data_object = $.parseJSON(data);
                        
														console.log(data_object)
                        
														if(data_object.meta.status==0)
														{
															$('#stand-msg-box').html('<div class="alert alert-error">\n\
                                                                    <p>Profile Push Failed</p>\n\
                                                                    </div>\n\
                                                                ');
																							setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);

																					}
																					else{
                            
                            


																						$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                        <p>Profile Pushed Successfully</p>\n\
                                        </div>\n\
                                    ');
																setTimeout(function(){
							$('.alert').stop(true, true).fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
														}
													}
												});
            
            
											});
       
       
        
        
										});
    
</script>			