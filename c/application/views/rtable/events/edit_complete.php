
<?php $allow_changes = $admin == false ? "readonly=\"readonly\" disabled=\"disabled\" title=\"Please contact administrator to make this change.\"" : ""; ?>
<!DOCTYPE html>
<html>
	<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
	$id = 'video-preview';
	?>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Edit Event</title>
		<?php
		echo HTML::style('css/rtable/bootstrap.css') . "\r\n";
		echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css') . "\r\n";
		echo HTML::style('css/rtable/default.css') . "\r\n";
		echo HTML::style('css/rtable/dialog.css');
		echo HTML::script('js/rtable/jquery-1.8.2.min.js') . "\r\n";
		echo HTML::script('js/rtable/bootstrap.js') . "\r\n";
		echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js') . "\r\n";
		echo HTML::script('js/rtable/default.js') . "\r\n";
		echo HTML::script('js/icg/swfobject.js');
		echo HTML::script('js/icg/icg.js');
		echo HTML::script('js/rtable/j_scroll.js');
		echo HTML::style('css/rtable/edit_complete.css');
		?>
        <script type="text/javascript">
	$(document).ready(function() {
				
		var fv = <?php print str_replace("'", "\'", json_encode($flashvars)); ?>;
		var p = {
			quality: "high",
			bgcolor:"#ffffff",
			play:"true",
			loop: "true",
			scale: "exactfit",
			wmode:"gpu",
			menu:"true",
			devicefont: "false",
			salign:"lt",
			allowScriptAccess:"sameDomain"
		};
                icg.promo.data["<?php print $id; ?>"] = {
                    data:'<?php print str_replace("'", "\'", json_encode($swfData)); ?>',
                    flashvars: fv,
					params:p,
                    attributes:{},
                    swf:"/c/promo.swf",
                    width:"600",
                    height:"400",
                    func:icg.promo.show
                };
                icg.promo.start();
			});
            $(document).ready(function(){

                $(".back-btn").click(function(){
                    window.location = "../edit/" + <?php echo $data['id']; ?>;
                });
            });
        </script>

    </head>
    <body>
        <div id="confirm-delete"></div>
        <div id="bg">
			<?php
			$logoutGoBackButton = $admin == true ? "<a href='../list' class='btn go-back btn-info'><i class='icon-chevron-left icon-white'></i> Go Back To All Events</a>" : "<a href='../logout' class='btn go-back btn-danger'><i class='icon-off icon-white'></i> Logout</a>";
			?>
            <div id='logo_header'>
                <div id='logo'>
                    <div id='header-container'>

                        <img src='/c/assets/rtable/toplogo.png' alt='Round Table Logo'/>
						<?php echo $logoutGoBackButton; ?>

                    </div>

                </div>
            </div>
            <div id="main">
                <div id='wrapper_header'></div>

                <div class='pageHeader'>
                    <h2>Event Details</h2>
                </div>

                <div id="body_shadow_top"></div>

                <div id="wrapper">

                    <div class="alert alert-error" id="alert_msg" style="display:none;"></div>
                    <div class="alert alert-success" id="success" style="display:none"></div>

                    <form id="event_details">
                        <div class='event_info_wrapper'>
                            <div class="detail_box">
                                <span class="title">Event Title:</span>
                                <span class="value"><?php echo $data['title']; ?></span>
                            </div>
                            <div class="detail_box">
                                <span class="title">Event Code:</span>
                                <span class="value"><?php echo $data['event_code']; ?></span>
                            </div>
                            <div class="detail_box">
                                <span class="title">Event Date:</span>
                                <span class="value"><?php echo date('m/d/Y', $data['date']); ?></span>                                
                            </div>
                            <div class="detail_box">
                                <span class="title">Name:</span>
                                <span class="value"><?php echo $data['name']; ?></span>                                
                            </div>
                            <div class="detail_box">
                                <span class="title">Email Address:</span>
                                <span class="value"><?php echo $data['email']; ?></span>                                
                            </div>
                            <div class="detail_box">
                                <span class="title">Message:</span>
                                <span class="value"><?php echo $data['description']; ?></span>                                
                            </div>
							<div class="detail_box back-btn-container"><input type="button" class="btn btn-info back-btn" value="Edit Details"/></div>
                        </div>

						<?php
						if (!isset($data['media']['path']))
						{
							?>
							<div id="media_content_wrapper">
								<img src='/c/assets/rtable/media_placeholder.png' style='margin:10px auto;' alt='Upload Your Media'/>
							</div>
							<div class="clear"></div>
							<?php
						}
						else
						{
							$preview_media = $data['media']['type'] == 'image' ? $data['media']['path'] : $data['media']['preview_path'];
							$is_admin_preview = $admin == true ? "../" : "";
							?>
							<div id='edit_preview_wrapper'>
								<?php
								if ($data['media']['active'] == 0)
								{
									echo "<div id='processing_media' class='alert alert-info'><i class='icon-time'></i> Your video is currently being processed! You will recieve an email when your video has been fully processed.</div>";
								}
								else
								{
									?>
									<?php if ($data['media']['type'] != 'image')
									{
										?>
										<div id="<?php print $id; ?>" style='display:block;'></div>     
									<?php
									}
									else
									{
										?>
										<div id="<?php print $id; ?>" style='display:block;'></div>     
										
										<!-- <img src="/c/<?php echo $preview_media; ?>" class='img-polaroid' id='media_image_edit' alt='Preview Image Not Available'/> -->
										<?php
									}
								}
								?>

								<div class="clear"></div>
<?php } ?>
                        </div>
                        <!-- <div class="edit-message">Your changes have been saved. You may still make changes to the event before <?php echo date('m/d/Y', $data['date']); ?>.</div> -->

                        <div class="clear"></div>

                    </form>

                </div>

                <div id="body_shadow_bottom"></div>
            </div>

            <div id='simple_wrapper_footer'></div>  

        </div>

        <div id='footer'></div>

    </body>
</html>