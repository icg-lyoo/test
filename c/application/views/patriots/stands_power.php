
<div class="ui-hold">
	<div class="ui-title">Displays</div>
    
    <div id="stand-msg-box"></div>
    
    <!-- video wall section -->
    <div class="form-ui-wrapper stands">
        <div class="ui-wrap">
            <li>
				<i class="icon-info-sign"></i>
				Video Walls
            </li>
        </div>
        <div class="ui-container ui-event">
                <div class="ui-wrap ui-wrap-stands-name">
                <div class="ui-text">Video Wall Name</div>
                <?php
				ob_start();

				foreach ($video_walls as $vw)
				{
                    //temporary, get rid of ICG Test from the menu. Need a permission based system eventually
                    if(strtolower($vw['name'])=='3x3 icg test'){
                        continue;
                    }
                    
					?>
					<div class="ui-active-event">
						<div class="ui-stand-wrap">
							<?php echo strtolower($vw['name']); ?>
						</div>
                        <input type="hidden" class="vw_stand_id" value="<?php echo $vw['stand_id']?>"/>
						<button action="1" class="btn pwrbtn btn-success vw">On</button>
						<button action="0" class="btn pwrbtn btn-danger vw">Off</button>
					</div>
					<?php
				}
				$html = ob_get_clean();
				echo $html;
				?>
                </div>
                    
                    
                <?php
                if ($admin)
                {
				?>
				<div class="ui-wrap ui-wrap-stands">
					<div class="ui-text">TV Model</div>
					<?php
					ob_start();
					$tv_models = array('lg', 'philips');
					foreach ($video_walls as $vw)
					{
                        //temporary, get rid of ICG Test from the menu. Need a permission based system eventually
                        if(strtolower($vw['name'])=='3x3 icg test'){
                            continue;
                        }
                        
						?><div class="ui-active-event">
							<select name="change-event" class="subtheme-select" stand_id="<?php echo $vw['id'] ?>" disabled="disabled">
								<option value="" selected></option>
								<?php
								foreach ($tv_models as $model)
								{
									?>
									<option value="<?php echo $model; ?>" <?php if (isset($vw['tv_model']) && $model == $vw['tv_model']) echo 'selected'; ?>><?php echo strtoupper($model); ?></option>				<?php
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
                <?php
				}
				?>	
            </div>
		</div>
    
	<div class="form-ui-wrapper stands">
		<div class="ui-wrap">
            <li>
				<i class="icon-info-sign"></i>
				Stands
            </li>
		</div>
		<div class="ui-container ui-event">
			
			<div class="ui-wrap ui-wrap-stands-name">

				<div class="ui-text">Stand Name</div>	
				<?php
				ob_start();
				foreach ($stands as $stand)
				{
					?>
					<div class="ui-active-event">
						<div class="ui-stand-wrap">
							<?php echo strtolower($stand['stand_name']); ?>
						</div>

						<button action="1" class="btn pwrbtn btn-success">On</button>
						<button action="0" class="btn pwrbtn btn-danger">Off</button>
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
						<select name="change-event" class="theme-select" stand_id="<?php echo $stand['stand_id'] ?>" disabled="disabled">
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
			<?php
			if ($admin)
			{
				?>
				<div class="ui-wrap ui-wrap-stands">
					<div class="ui-text">TV Model</div>
					<?php
					ob_start();
					$tv_models = array('lg', 'philips');
					foreach ($stands as $stand)
					{
						?><div class="ui-active-event">
							<select name="change-event" class="subtheme-select" stand_id="<?php echo $stand['stand_id'] ?>" >
								<option value="" selected></option>
								<?php
								foreach ($tv_models as $model)
								{
									?>
									<option value="<?php echo $model; ?>" <?php if (isset($stand['tv_model']) && $model == $stand['tv_model']) echo 'selected'; ?>><?php echo strtoupper($model); ?></option>				<?php
					}
								?>
							</select>
						</div>
						<?php
					}
					$html = ob_get_clean();
					echo $html;
				}
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
	
	$('.subtheme-select').change(function(){
		$.ajax({
			url:"/c/patriots/ajax/stand/change_tv_model",
			async:false,
			type:"POST",
			data:{
				'stand_id': $(this).attr('stand_id'),
				'tv_model':$(this).val()
			},
			success:function(data){
				if(data == true)
				{
					$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                                                    Model successfully changed.\n\
                                                                    </div>\n\
                                                                ');
			setTimeout(function(){
							$('.alert').fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
				}
				else
				{
					$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                                                    Error changing model.\n\
                                                                    </div>\n\
                                                                ');
					setTimeout(function(){
							$('.alert').fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
				}
			}
		});
	});
	
	$('.pwrbtn').click(function(){
		var ajaxResult = false;
        
        //url call is different depending on if its video wall or stand
        if($(this).hasClass('vw')){
            var ajax_url = "/c/patriots/ajax/videowall/power";
            var stand_id = $(this).siblings("input").val();
        }else{
            var ajax_url = "/c/patriots/ajax/stand/power";
        }
        
        
		if($(this).attr('action') == 1)
		{
			$.ajax({
				url:ajax_url,
				async:false,
				type:"POST",
				data:{
					'stand_name': $.trim($(this).siblings('.ui-stand-wrap').html()),
                    'stand_id':stand_id,
					'power_state':1
				},
				success:function(data){

						$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                                                    Command successfully sent.\n\
                                                                    </div>\n\
                                                                ');
						setTimeout(function(){
							$('.alert').fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
					
				}
			});
			
		}
		else
		{
			$.ajax({
				url:ajax_url,
				async:false,
				type:"POST",
				data:{
					'stand_name': $.trim($(this).siblings('.ui-stand-wrap').html()),
                    'stand_id':stand_id,
					'power_state':0
				},
				success:function(data){
						$('#stand-msg-box').html('<div class="alert alert-success">\n\
                                                                    Command successfully sent.\n\
                                                                    </div>\n         ');
						setTimeout(function(){
							$('.alert').fadeOut(1000, function(){
									$('#stand-msg-box').empty();
								});
						}, 30000);
						

				}
			});
		}
		
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
</script>