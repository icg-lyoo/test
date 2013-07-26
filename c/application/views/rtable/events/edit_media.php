<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
$id = 'video-preview';
?>
<?php $allow_changes = $admin == false ? "readonly=\"readonly\" disabled=\"disabled\" title=\"Please contact administrator to make this change.\"" : ""; ?>
<?php
if (!isset($data['media'])) {
    
}
?>
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Edit Event</title>
        <?php
        echo HTML::style('css/rtable/bootstrap.css') . "\r\n";
        echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css') . "\r\n";
        echo HTML::style('css/rtable/default.css') . "\r\n";
        echo HTML::style('css/rtable/dialog.css');
        echo HTML::style('css/rtable/edit_media.css');
        echo HTML::script('js/rtable/jquery-1.8.2.min.js') . "\r\n";
        echo HTML::script('js/rtable/bootstrap.js') . "\r\n";
        echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js') . "\r\n";
// echo HTML::script('js/rtable/form.js') . "\r\n";
        echo HTML::script('js/rtable/default.js') . "\r\n";
        echo HTML::script('js/icg/swfobject.js') . "\r\n";
        echo HTML::script('js/icg/icg.js') . "\r\n";
        echo HTML::script('js/rtable/jquery.json-2.3.min.js') . "\r\n";
        ?>
        <script type="text/javascript">
			
            $(document).ready(function() {
                
                $("#event_title").blur(function() {
                    
                    var data = $.parseJSON(icg.promo.data["<?php echo $id; ?>"]["data"]);
                    
                    if (data[0].templateConfig.banner["0"].label != $(this).val()) {
                        data[0].templateConfig.banner["0"].label = $(this).val();
                        updatePreview(data);
                    }
                });
                
                $("#event_description").blur(function() {
                    
                    var data = $.parseJSON(icg.promo.data["<?php echo $id; ?>"]["data"]);
                    
                    if (data[0].templateConfig.message["0"].label != $(this).val()) {
                        data[0].templateConfig.message["0"].label = $(this).val();
                        updatePreview(data);
                    }
                });
                
                function updatePreview(data) {
                    icg.promo.data["<?php echo $id; ?>"]["data"] = $.toJSON(data);
                    
                    $("#edit_preview_wrapper .preview_header").html("Updating Preview");
                    $("#edit_preview_wrapper .preview_header").append('<img src="/c/assets/rtable/preview_updating.gif" height="20" width="20" alt="updating" />');
                    
                    setTimeout(function() {
                        icg.promo.show({'success':true, 'id':'<?php echo $id; ?>'});
                        $("#edit_preview_wrapper .preview_header").html("Preview");
                    }, 2000);
                }
                
                var fv = <?php echo str_replace("'", "\'", json_encode($flashvars)); ?>;
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
                
                icg.promo.data["<?php echo $id; ?>"] = {
                    data:'<?php echo str_replace("'", "\'", json_encode($swfData)); ?>',
                    flashvars: fv,
                    params:p,
                    attributes:{},
                    swf:"/c/promo.swf",
                    width:"600",
                    height:"400",
                    func:icg.promo.show
                };
                
                icg.promo.start();
							 
                // get the current date
                var date = new Date();
                var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
				 
                // Disable all dates till today
                $('#event_date').datepicker({
                    minDate: new Date(y, m, d),
                    dateFormat: 'mm/dd/yy'
                });
                
                $( "#upload_media_wrapper" ).dialog({
                    autoOpen: false,
                    resizable: false,
                    height:470,
                    width:430,
                    overlay: {
                        opacity: 0.7,
                        background: "#000000"
                    },
                    modal: true,
                    buttons: {
                        Cancel: function() {
                            try
                            {
                                window.stop();
                            } 
                            catch(e)
                            {
                                document.execCommand("Stop");
                            }
		                	
                            $( this ).dialog( "close" );
                            $("#loading").replaceWith(uploadContent);
                        }
                    },
                    open: function(event,ui) {
                        $(event.target).parents(".ui-dialog").addClass("upload-dialog");
                        var dialog = $(event.target).parents(".ui-dialog.ui-widget");

                        var buttons = dialog.find(".ui-dialog-buttonpane").find("button");

                        var cancelButton = buttons[0];
                        
                        $(cancelButton).removeClass().addClass('btn btn-danger');
                        
                    } 
                });
			
                $( "#confirm-delete" ).dialog({

                    autoOpen: false,
                    resizable: false,
                    height:470,
                    width:430,
                    overlay: {
                        opacity: 0.8,
                        background: "#000000"
                    },
                    modal: true,
                    buttons: {

                        "Delete Media": function() {

                            delete_media(<?php echo $data['id']; ?>);

                            $( this ).dialog( "close" );

                        },
                        Cancel: function() {

                            $( this ).dialog( "close" );

                        }
                    },
                    open: function(event,ui) {
                        $(event.target).parents(".ui-dialog").addClass("delete-dialog");
                        var dialog = $(event.target).parents(".ui-dialog.ui-widget");

                        var buttons = dialog.find(".ui-dialog-buttonpane").find("button");

                        var deleteMedia  = buttons[0];
                        var cancelButton = buttons[1];
                        
                        $(deleteMedia).removeClass().addClass('btn btn-danger');
                        $(cancelButton).removeClass().addClass('btn');

                    }
                });
                
                $(".finish-btn").click(function() {
                    $.ajax({
                        url:"/c/rtable/ajax/events/editEvent",
                        type:"POST",
                        dataType:"json",
                        data:{
                            "event_title": $("#event_title").val(),
                            "event_description": $("#event_description").val(),
                            "event_id" : <?php echo $data['id']; ?>
                        },
                        success:function(data){
                            if(data.meta.status == 1)
                            {
                                window.location = '../edit_complete/' + <?php echo $data['id']; ?>;
                            }
                            else
                            {
                                $('.messaging-alert').removeClass('alert-success');
                                $('.messaging-alert').addClass('alert-error');
                                $('.messaging-alert').html('There was an error saving your event.');
                                $('.messaging-alert').show();
                            }
                        }
                    });
                    
                    
                });
            });
            
            function ask_to_delete(id,title)
            {
                $("#confirm-delete #event_title").html(title);
                $("#video-preview").css("visibility","hidden");
                $("#confirm-delete").parent().css({position:"fixed"}).end().dialog("open");
                event_id = id;
            }
            
        </script>
    </head>

    <body>
        <div id="confirm-delete"></div>
        <div id="bg">
            <?php
            $logoutGoBackButton = $admin == true ? "<a href='../list' class='btn go-back btn-info'><i class='icon-chevron-left icon-white'></i> Go Back To All Events</a>" : "<a href='logout' class='btn go-back btn-danger'><i class='icon-off icon-white'></i> Logout</a>";
            ?>
            <div id='logo_header'>
                <div id='logo'>
                    <div id='header-container'>

                        <img src='/c/assets/rtable/toplogo.png' alt='Round Table Logo'/>
                        <?php echo $logoutGoBackButton; ?>

                    </div>

                </div>
            </div>

            <div id="main" class="preview-main">
                <div id='wrapper_header'></div>

                <div class='pageHeader'>
                    <h2>Step Two: Media/Images</h2>
                </div>

                <div id="body_shadow_top"></div>

                <div id="wrapper">
                    <div class="message">

                        <label for="event_title">Event Title:</label>
                        <input type="text" id="event_title" value="<?php echo stripslashes($data['title']); ?>" tabindex='1' />
                        <label for="event_description">Event Messaging:</label>
                        <textarea id="event_description" rows="9" placeholder="Type your event message here..." tabindex='5'><?php echo stripslashes($data['description']); ?></textarea>
                        <div class="messaging-alert alert"></div>
                        <button class='btn btn-info upload-btn' onclick='upload_media_overlay();' tabindex='9'><i class='icon-film icon-white'></i> Upload Media</button>
                        <div class="clear"></div>
                        <p class='notice'><i class="icon-chevron-right"></i> Please note that uploading new media will <b>overwrite and replace old media.</b> 1 media per user.</p>
                        <div class="alert approve-alert"></div>
                    </div>
                    <?php
                    if (!isset($data['media']['path'])) {
                        ?>
                        <div id="media_content_wrapper">
                            <img src='/c/assets/rtable/media_placeholder.png' style='margin:10px auto;' alt='Upload Your Media'/>
                        </div>
                        <div class="clear"></div>
                        <?php
                    } else {
                        $preview_media = $data['media']['type'] == 'image' ? $data['media']['path'] : $data['media']['preview_path'];
                        $is_admin_preview = $admin == true ? "../" : "";
                        ?>
                        <div id='edit_preview_wrapper'>
                            <?php
                            if ($data['media']['active'] == 0) {
                                echo "<div id='processing_media' class='alert alert-info'><i class='icon-time'></i> Your video is currently being processed! You will recieve an email when your video has been fully processed.</div>";
                            } else {
                                ?>
                                <?php if ($data['media']['type'] != 'image') { ?>
                                    <div class="preview_header">
                                        Preview
                                    </div>
                                    <div id="<?php print $id; ?>" style='display:block;'></div>
                                <?php } else { ?>
                                <div id="<?php print $id; ?>" style='display:block;'></div>
                                    <!-- <img src="/c/<?php echo $preview_media; ?>" class='img-polaroid' id='media_image_edit' alt='Preview Image Not Available'/> -->
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="clear"></div>
                    <?php } ?>
                    <div id='upload_media_wrapper'>
                        <div style='margin:5px auto;'>
                            <div id="loading">
                                <div id="missing_media_title" class="alert alert-danger" style="display:none;"></div>
                                <form action="/c/rtable/ajax/events/upload" method="POST" enctype="multipart/form-data" id="uploadForm" target="uploadIForm" >
                                    <table id="event_edit_upload">
                                        <tr>
                                            <td><label for='media'><b>Choose File</b> </label></td>
                                            <?php
                                            // if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.') !== false) {


                                            preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);

                                            if (count($matches) > 1) {
                                                //Then we're using IE
                                                $version = $matches[1];

                                                switch (true) {
                                                    case ($version):
                                                        ?>
                                                        <td><input type="file" id="media" name="media" class="btn"/></td>
                                                        <?php
                                                        break;

                                                    default:
                                                        ?>

                                                    <style type="text/css">
                                                        #media {
                                                            height: 1px;
                                                            width: 1px;
                                                            visibility: hidden;
                                                        }
                                                    </style>
                                                    <td><span id="browse" class="btn" onclick="browse();">Browse</span> <input type="file" id="media" name="media" class="btn" onchange="show_media_path(this);"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><span id="fileNamePath">No file yet chosen.</span></td>
                                                    </tr>
                                                    <?php
                                                    break;
                                            }
                                        } else {
                                            ?>
                                            <style type="text/css">
                                                #media {
                                                    height: 1px;
                                                    width: 1px;
                                                    visibility: hidden;
                                                }
                                            </style>
                                            <td><span id="browse" class="btn" onclick="browse();">Browse</span> <input type="file" id="media" name="media" class="btn" onchange="show_media_path(this);"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><span id="fileNamePath">No file yet chosen.</span></td>
                                            </tr>
    <?php
}
?>


                                        
                                      
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox" id="confirm_disclaimer" onclick="confirmDisclaimer();"/> <span id='checking_this_box'>By checking this box you are agreeing to our <a href="../disclaimer" target="_blank">disclaimer</a>.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:right;"><input type="button" onclick="validateMediaUpload();" id="uploadMediaButton" value="Upload" class="btn btn-info" disabled="disabled"/></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="event_id" value="<?php echo $data['id']; ?>"/>
                                    <input type="hidden" name="existing_file" value="<?php if (isset($data['media']['path'])) echo $data['media']['path']; else echo ''; ?>"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <iframe style="width:0px;height:0px;border:1px solid #fff;" id="uploadIForm" name="uploadIForm"></iframe>

                    <div id="body_shadow_bottom" class="bottom_shadow"></div>
                    <div id='simple_wrapper_footer' class="bottom_wrapper_footer">
<?php if ($admin == true && isset($data['media'])) {
    ?>

                            <?php if (!$data['media']['approved']) { ?><button class='btn btn-success approve-btn' onclick='approve_media("<?php echo $data['id']; ?>");'><i class='icon-ok-circle icon-white'></i> Approve</button><?php } ?>

                        <?php } ?>
                        <?php if (isset($data['media'])) { ?>
                            <button class='btn btn-danger delete-btn' onclick='ask_to_delete(<?php echo $data['id']; ?>,"<?php echo $data['media']['title']; ?>");' tabindex='10'><i class='icon-remove icon-white'></i> Delete</button><button class='btn btn-success finish-btn'>Finish</button>
                        <?php } ?>
                    </div>
                </div>



            </div>

            <div id='footer'></div>

    </body>
</html>