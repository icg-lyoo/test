<?php
	$id = 'video-preview';
?>
<!DOCTYPE html>
<html>

	<head>

		<title>Preview Event Media</title>

		<?php

		echo HTML::style('css/rtable/bootstrap.css');

		echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css');

		echo HTML::style('css/rtable/default.css');

		echo HTML::script('js/rtable/jquery-1.8.2.min.js');

		echo HTML::script('js/rtable/bootstrap.js');

		echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js');

		echo HTML::script('js/rtable/default.js');

		echo HTML::script('js/icg/swfobject.js');
		
		echo HTML::script('js/icg/icg.js');

		?>

		<script>

			$(function() {
				
				$( "#confirm-delete" ).dialog({

					autoOpen: false,

					resizable: false,

					height:300,

					modal: true,

					buttons: {

						"Delete Video": function() {

							delete_media(<?php echo $event_id; ?>);

							$( this ).dialog( "close" );

						},

						Cancel: function() {

							$( this ).dialog( "close" );

						}

					}
					});
				});
		</script>

	</head>

	<body>

		<div id="bg">
			<div id='logo_header'>
						<div id='logo'>
							<img src='/c/assets/rtable/toplogo.png'/>
						</div>
					</div>
            <div id="main">
                <div id="wrapper_header"></div>
			<div id="wrapper">
					
				<br/>
				<?php $logoutGoBackButton = $admin == true ? "<a href='../list' class='btn go-back'><i class='icon-chevron-left'></i> Go Back To All Events</a>" : "<a href='../edit' class='btn go-back'><i class='icon-chevron-left'></i> Go Back To Event Details</a>"; ?>

				<h2>Preview Event Media<?php echo $logoutGoBackButton; ?></h2><hr/>

				<div id="previewContentWrapper">

					<div id="previewMediaWrapper" style='vertical-align:middle;text-align:center'>
						<?php if($data['media']['type'] != 'image') {?>
						<script type="text/javascript">
							var fv = jQuery.parseJSON('<?php print str_replace("'", "\'", json_encode($flashvars)); ?>');
							$(function(){
								
								
								
								icg.promo.data["<?php print $id; ?>"] = {
									data:'<?php print str_replace("'", "\'", json_encode($swfData)); ?>',
									flashvars: fv,
									params:{'wmode':'gpu','scale':'noscale', 'salign':'tl'},
									attributes:{},
									swf:"/c/promo.swf",
									width:"600",
									height:"400",
									func:icg.promo.show
								};
								 icg.promo.start();
							 });
							
						</script>
						<div id="<?php print $id; ?>"></div>
			<?php 
			}
			else
			{
				echo "<img src='/c/".$data['media']['path']."' style='margin:0 auto;'/>";
			}

			?>

					</div>



					<div class='alert alert-success' id='success'  style="display:none;"></div>

					<div class='alert alert-error'  id='alert_msg' style="display:none;"></div>



					<table class='table' id='previewMediaOptions'>

						<tr>

							<td>Title:</td>

							<td><input type="text" value="<?php echo stripslashes($data['media']['title']); ?>" id="media_title_edit"/>&nbsp;<a class='btn saveMediaTitle' onclick='save_preview_title("<?php echo $data['media']["id"]; ?>","#media_title_edit");'>Update Title</a></td>

						</tr>

						<?php

						if ($admin == true)

						{

							?>

							<tr>

								<td>Action:</td>
								<?php $event_details_link = $admin == true ? "../" : ""; ?>
								<td><?php if(!$data['media']['approved']){ ?><a class='btn btn-success' onclick='approve_media("<?php echo $data['id']; ?>");'><i class='icon-ok-circle icon-white'></i>&nbsp;Approve</a><?php } ?>&nbsp;<a class='btn btn-danger' onclick='confirm_delete();'><i class='icon-remove icon-white'></i>&nbsp;Delete</a>
									<a href='<?php echo $event_details_link; ?>edit/<?php echo $data['id'];  ?>' class='btn btn-info'><i class='icon-search icon-white'></i> Event Details</a>
								</td>

							</tr>

					<?php } ?>

					</table>

				</div>
                <div id="wrapper_footer"></div>

			</div>
        </div>
				<div id="footer">

		</div>
		</div>

	</body>

	<div id="confirm-delete" title="<i class='icon-warning-sign'></i> Delete Video">

		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>This video will be permanently deleted and cannot be recovered. Are you sure?</p>

	</div>

</html>