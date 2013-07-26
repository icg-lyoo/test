<!DOCTYPE html>
<html>  
	<head>		
		<?php echo HTML::style('css/icg/login_style.css') ?>
		<?php echo HTML::style('css/icg/bootstrap.css') ?>  
		<title></title>   
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	</head>  
	<body>	
		<div class="wrapper">    
			<div class="login-logo">Client Login</div>		
			<form name="loginform" id="loginform" action="" method="POST">		
				<div id="error-messages">			
					<?php if (isset($errors))echo $errors; ?>		
				</div>    
				<div class="login-container">      
					<div class="login-wrap">        
						<div class="login-text">User Name</div>       
						<div class="login-input">
							<input id="input01" name="username" class="input" type="text">
						</div>       
						<div class="login-text">Password</div>      
						<div class="login-input">
							<input id="input01" name="password" class="input" type="password">
						</div>          
						<label class="checkbox inline">
							<input id="inlineCheckbox1" type="checkbox" name="remember" value="true">
							Remember Me
						</label>          
					</div>         
					<div class="login-button">
						<button class="btn btn-inverse">Login</button>
					</div>     
				</div>	
			</form>		
		</div>        
		<div class="login-copyright">©2012 Internet Connectivity Group, Inc.</div>  
	</body>
</html>