<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Cincinnati Reds Digital Display Control Panel</title>
		<meta rel="shortcut icon" href="/c/img/reds/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
          <link href="/c/css/reds/stylesUDF.css" type="text/css" rel="stylesheet">

		<!-- Le styles -->

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 0px 0;
			}
		</style>


		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


		<?php echo HTML::script('js/reds/SpryTabbedPanels.js') ?>
		<?php echo HTML::script('js/reds/jquery.js') ?>
		<?php echo HTML::script('js/reds/tablednd.js') ?>
		<?php echo HTML::style('css/reds/bootstrap.css') ?>
		<?php echo HTML::style('css/reds/SpryTabbedPanels.css') ?>
		<?php echo HTML::script('js/reds/jquery-ui.js') ?>
		<?php echo HTML::script('js/reds/bootstrap.min.js') ?>
		<?php echo HTML::style('css/reds/ui-lightness/jquery-ui.css') ?>
		<?php echo HTML::style('css/reds/styles.css') ?>
	</head>

	<body>
		<div class="container">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner" id="topbar-wrapper">
					<div class="container-fluid">

                        <div class="save_to_all_logout_wrapper">
						<div class="logo"></div><a href="#" class="brand">CINCINNATI REDS<a href="#" class="subbrand"> Digital Display Control Panel</a>
                            
                        
                         <div class="btn logout-btn btn-danger">Logout</div>
                         <?php
                        if($is_icg_user)
                        {
                        ?>
                         <div class="btn push-to-all-btn btn-success">Save Changes To All Stands</div>
                         <?php
                        }
                         ?>
                            </div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span3">
						<div class="well sidebar-nav">
                            <ul class="nav nav-list">
                                <li class="nav-header">Digital Management</li>
                                <li id="global" class="stand_nav"><a href="#">Global Settings</a></li>
                                <li id="display-control-panel" class="stand_nav"><a href="#">Display Control Panel</a></li>
                            </ul>
						</div><!--/.well -->
                        <div class="well sidebar-nav">
							<ul class="nav nav-list">
								<li class="nav-header">REDS STAND LIST</li>
								<?php

								foreach ($stands as $stand)
                                {
                                    if($stand['stand_name'] != '2j')
                                        echo '<li id="' . $stand['stand_name'] . '" class="stand_nav"><a href="#">Stand ' . ucfirst($stand['stand_name']) . '</a></li>';
                                }
								?>


							</ul>
						</div><!--/.well -->
					</div><!--/span-->
					<div class="span9">

						<div class="hero-unit"><h1 class="welcome">Welcome</h1><div class="reds-welcome-logo" />
						</div>

					</div><!--/span-->
				</div><!--/row-->
			</div>

			<hr>

		</div>
		<footer>

				<p style="text-align:right" style="">© Cincinnati Reds 2012</p>
			</footer>
    </div><!--/.fluid-container-->

		<?php echo HTML::script('js/reds/template.js') ?>
</body></html>