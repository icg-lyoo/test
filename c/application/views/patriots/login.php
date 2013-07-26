<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>New England Patriots Display Control Panel </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
        <link rel="SHORTCUT ICON" href="favicon.ico"/>
		<meta name="author" content="">
            <link href="css/stylesUDF.css" type="text/css" rel="stylesheet">
            

		<!-- Le styles -->
                <?php echo HTML::style('css/bootstrap.css') ?>
                <?php echo HTML::style('css/patriots-ui.css') ?>

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>


		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container login-page">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container-fluid">

<div class="logo"></div><a href="#" class="brand">NEW ENGLAND PATRIOTS <a href="#" class="subbrand"> Digital Display Control Panel</a>

					</div>
				</div>
			</div>
			<!--/header-->
			
				<div class="login-menu">
					<form name="loginform" id="loginform" action="" method="POST">
					<div class="login-text"> Welcome Please Log In</div>
					<div class="login-user"><div class="login-subtext"> User Name</div>
						<input name="username" type="text" style="width:186px"  ></div>
					<div class="login-password"><div class="login-subtext"> Password</div>
						<input name="password" type="password" style="width:186px"></div>
					<div id="error-messages">
						<?php if (isset($errors))
							echo $errors; ?>
					</div>

					<div class="login-button">
						<button type="submit" id="loginBtn" class="btn" style="width:100px" /><i style="font-size:15px">Log In</i></button>
					</div>
					</form>
				</div>
			
		</div><!--/.fluid-container-->


		<!-- Le javascript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-alert.js"></script>
		<script src="js/bootstrap-modal.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>

	</body></html>

