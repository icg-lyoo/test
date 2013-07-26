<!DOCTYPE html>
<html>    
	<head>		
		<?php echo HTML::style('css/icg/bootstrap.css') ?>		
		<?php echo HTML::style('css/icg/client_style.css') ?>		
		<?php echo HTML::script('js/icg/jquery.js') ?> 
		<title></title>        
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
		<script type="text/javascript">			
			$(document).ready(function(){			
				$('.ui-icon-effect, .btn').on('click', function(){		
					if($(this).parents('.portal-icon-container').attr('client') == 'reds' || $(this).parents('.portal-icon-container').attr('client') == 'mcd')		
					{				
						$(this).parents('.portal-icon-container').children('form').submit();	
					}			
					else				
					{				
						var link = $(this).parents('.portal-icon-container').attr('controller');		
						window.location = link;		
					}			
				});		
			});			
		</script>  
	</head> 
	<body>    
		<div class="logo"></div>    
		<div class="portal-container">     
			<div class="portal-text">  Welcome to ICG Client Selection Portal</div>	
			<div class="portal-sub-container">	
				<div class="portal-icon-container" controller="../patriots/home" client="patriots">		
					<div class="portal-icon" id="patriots"><div class="ui-icon-effect"></div></div> 		
					<div class="portal-icon-text">  <button class="btn btn-inverse"> New England Patriots</button></div> 	
				</div> 		
				<div class="portal-icon-container" controller="../reds_ui/home" client="reds">		
					<div class="portal-icon" id="reds">
						<div class="ui-icon-effect"></div>
					</div> 		
					<div class="portal-icon-text">  <button class="btn btn-inverse"> Cincinnati Reds</button>
					</div>			
					<form name="reds_login" id="reds_login" action="../reds_ui/home" method="POST">		
						<input type="hidden" name="username" value="reds"/>	
						<input type="hidden" name="password" value="reds" />		
					</form>		
				</div>			
				<div class="portal-icon-container" controller="../greyhound/page/home" client="greyhound">		
					<div class="portal-icon" id="greyhound">
						<div class="ui-icon-effect"></div>
					</div> 			
					<div class="portal-icon-text"> 
						<button class="btn btn-inverse"> Greyhound Lines</button>
					</div> 		
				</div> 	
				<div class="portal-icon-container" controller="../rtable/events/edit" client="greyhound">		
					<div class="portal-icon" id="greyhound">
						<div class="ui-icon-effect"></div>
					</div> 			
					<div class="portal-icon-text"> 
						<button class="btn btn-inverse"> Greyhound Lines</button>
					</div> 		
				</div> 	
			</div>      
		</div>       
		<div class="portal-copyright">©2012 Internet Connectivity Group, Inc.</div>  
	</body>
</html>