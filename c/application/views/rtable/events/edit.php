<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
$id = 'video-preview';
?>
<?php $allow_changes = $admin == false ? "readonly=\"readonly\" disabled=\"disabled\" title=\"Please contact administrator to make this change.\"" : ""; ?>
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
        echo HTML::style('css/rtable/edit.css');
        echo HTML::script('js/rtable/jquery-1.8.2.min.js') . "\r\n";
        echo HTML::script('js/rtable/bootstrap.js') . "\r\n";
        echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js') . "\r\n";
// echo HTML::script('js/rtable/form.js') . "\r\n";
        echo HTML::script('js/rtable/default.js') . "\r\n";
        echo HTML::script('js/icg/swfobject.js');
        echo HTML::script('js/icg/icg.js');
        ?>
        <script type="text/javascript">
            //var fv = jQuery.parseJSON('<?php //print str_replace("'", "\'", json_encode($flashvars)); ?>');
           $(document).ready(function() {
//                icg.promo.data["<?php // print $id; ?>"] = {
//                    data:'<?php // print str_replace("'", "\'", json_encode($swfData)); ?>',
//                    flashvars: fv,
//                    params:{'wmode':'transparent','salign':'tl'},
//                    attributes:{},
//                    swf:"/c/promo.swf",
//                    width:"600",
//                    height:"400",
//                    func:icg.promo.show
//                };
//                icg.promo.start();
							 
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
                
            });
            function ask_to_delete(id,title)
            {
                $("#confirm-delete #event_title").html(title);
                $("#confirm-delete").dialog("open");
                event_id = id;
            }
        </script>
    </head>
    <body>
        <div id="confirm-delete"></div>
        <div id="bg">
            <?php
            $logoutGoBackButton = $admin == true ? "<a href='../list' class='btn go-back btn-info'><i class='icon-chevron-left icon-white'></i> Go Back To All Events</a>" : "<a href='logout' class='btn go-back btn-danger'><i class='icon-off'></i> Logout</a>";
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
                    <h2>Step One: Event Details</h2>
                </div>

                <div id="body_shadow_top"></div>

                <div id="wrapper">

                    <div id="event_code_wrapper">

                        <div id="event_code">

                            <?php echo $data['event_code']; ?>

                        </div>

                    </div>

                    <div class="alert alert-error" id="alert_msg" style="display:none;"></div>
                    <div class="alert alert-success" id="success" style="display:none"></div>

                    <form id="event_details">
                        <div class="form_group">
                            <div class="input_col">
                                <label for="consumer_name">Customer Name:</label>
                                <input type="text" id="consumer_name" value="<?php echo stripslashes($data['name']); ?>" tabindex='3'/>
                                <label for="event_date">Date:</label>
                                <input type="text" id="event_date" value="<?php echo date('m/d/Y', $data['date']); ?>" <?php echo $allow_changes; ?>  tabindex='2'/>
                            </div>
                            <div class="input_col">
                                <label for="consumer_email">Customer Email:</label>
                                <input type="text" id="consumer_email" value="<?php echo stripslashes($data['email']); ?>" <?php echo $allow_changes; ?> tabindex='4'/>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </form>

                </div>

                <div id="body_shadow_bottom"></div>
            </div>

            <div id='simple_wrapper_footer'>

                <input type="button" class="btn btn-success" value="Next" onclick="validateEventFieldsEdit('<?php echo $data['id']; ?>', true);" tabindex='6'/>

            </div>  

        </div>

        <div id='footer'></div>

    </body>
</html>