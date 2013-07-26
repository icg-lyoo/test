<div class="arrow-wrapper"><div class="icon-circle-arrow-right-big"></div></div>
<h1 class="title">Create a Subtheme</h1>
<div class="form-line">
	<div class="input-label">Enter the name of the subtheme:</div>
	<div class="input-wrapper"><input type="text" id="stand-name-input" /></div>
	
</div>
<button class="btn create-btn">Create</button>
<div class="message"></div>
<div class="zone-preview">
	<div class="menu-container zone-container" style="background-image:url('assets/<?php echo $theme->css_class; ?>/menu-bg2.jpg'); height:600px;">
		<div class="menu menu-<?php echo $theme->css_class; ?> menu1" style="height:480px; display:block;">
			<div class="header"  style="background-image:url('assets/<?php echo $theme->css_class; ?>/header.png');">Header</div>
			<div class="menu-items">

				<div class="menu-item-container">
					<div class="menu-item-title">Menu item</div>
					<div class="menu-item-price">0.00</div>
				</div>
				<div class="menu-item-container">
					<div class="menu-item-title">Menu item</div>
					<div class="menu-item-price">0.00</div>
				</div>
				<div class="menu-item-container">
					<div class="menu-item-title">Menu item</div>
					<div class="menu-item-price">0.00</div>
				</div>
			</div>
			<div class="footer"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.create-btn').click(function(){
		if($('#stand-name-input').val().length == 0)
		{
			$('#stand-name-input').css('color', 'red');
			$('#stand-name-input').val('Subtheme name cannot be empty!');
			$('#stand-name-input').animate({color:'white'},2500, function() {
				$(this).val('').css('color','black');
			});
			return false;
		}
		if($('#stand-name-input').val() == 'Subtheme name cannot be empty!')
		{
			return false;
		}
		$.ajax({
			url:"/c/patriots/ajax/theme/add",
			type:"POST",
			async:false,
			data:{"theme_id":"<?php echo $theme->id; ?>", "subtheme_name" : $('#stand-name-input').val()},
			success:function(data){
				if(data)
					{
                                   
						$('.message').html('Created Successfully!');
						$('.message').css('color', 'green');
						$('#stand-name-input').animate({color:'white'},2500, function() {
							$(this).val('').css('color','black');
						});
                                        
                                        $('.filtered_nav_list').append('<li class="stand_nav"><a  id="'+data+'">'+$('#stand-name-input').val()+'</a></li>');
					}
			}
		});
	});
</script>
