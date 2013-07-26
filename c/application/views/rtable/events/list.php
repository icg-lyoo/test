<!DOCTYPE html>
<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Current Events</title>
        <?php
        echo HTML::style('css/rtable/bootstrap.css');
        echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css');
        echo HTML::style('css/rtable/default.css');
        echo HTML::style('css/rtable/dialog.css');
        echo HTML::script('js/rtable/jquery-1.8.2.min.js');
        echo HTML::script('js/rtable/bootstrap.js');
        echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js');
        echo HTML::script('js/rtable/default.js');
        ?>
    </head>
    <script type="text/javascript">
        var event_id; 
        $(function() {

            $( "#confirm-delete" ).dialog({
                autoOpen: false,
                resizable: false,
                height:470,
                width:430,
                modal: true,
                buttons: {
                    "Delete Event": function() {
                        delete_event(event_id);
                        $( this ).dialog( "close" );
                    },
                    Cancel: function() {
                        $( this ).dialog( "close" );
                    }
                },
                  open: function(event,ui) {
                        $(event.target).parents(".ui-dialog").addClass("deleteEvent-dialog");
                        var dialog = $(event.target).parents(".ui-dialog.ui-widget");

                        var buttons = dialog.find(".ui-dialog-buttonpane").find("button");

                        var deleteEvent  = buttons[0];
                        var cancelButton = buttons[1];
                        
                        $(deleteEvent).removeClass().addClass('btn btn-danger');
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
    <body>
        <div id="bg">
            <div id='logo_header'>
                <div id='logo'>
                    <div id='header-container'>
                        <img src='/c/assets/rtable/toplogo.png' alt='Round Table Logo'/>

                        <a href='logout' class='btn go-back btn-danger logout'><i class='icon-off icon-white'></i> Logout</a>						
                    </div>

                </div>

            </div>
            <div id="main">
                <div id='wrapper_header'></div>
                    <div class='pageHeader'>
                        <h2>Clubhouse Events</h2>
                    </div>
                    <div class="buttonGroups" id='topButtons'>
                    <div id='createNewEvent'>
                        <a href='create' class='btn btn-large createEvent btn-info'><i class='icon-calendar icon-white'></i> Create New Event</a>
                    </div>
                    <div id='sortButtons'>
                    <div class="btn-group floatR">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <?php echo $sortDirection; ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a onclick="sortDirection('Ascending')" href="#"><i class='icon-arrow-up'></i> Ascending</a></li>
                            <li><a onclick="sortDirection('Descending')" href="#"><i class='icon-arrow-down'></i> Descending</a></li>
                        </ul>
                    </div>
                    <div class="btn-group floatR">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            Sort By <?php echo $sortBy; ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a onclick="sortResults('Title')" href="#"><i class='icon-bold'></i> Title</a></li>                            
                            <li><a onclick="sortResults('Date')" href="#"><i class='icon-calendar'></i> Date</a></li>
                            <li><a onclick="sortResults('Email')" href="#"><i class='icon-envelope'></i> Email</a></li>
                        </ul>
                    </div>
                    
                    <div class="btn-group floatR">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <?php if ($current_status == 'Any') { echo 'All'; } else { echo $current_status;} ?>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href='#' onclick='setResultStatus("Any")'>All</a></li>
                            <li><a href='#' onclick='setResultStatus("Approved")'>Approved</a></li>
                            <li><a href='#' onclick='setResultStatus("Awaiting")'>Awaiting Approval</a></li>
                            <li><a href='#' onclick='setResultStatus("Processing")'>Processing</a></li>
                            <li><a href='#' onclick='setResultStatus("No Media")'>No Media Uploaded</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class='bodyShadow'>
                        <img src="/c/assets/rtable/body_shadow_top.png"/>
                    </div>
                    </div>              
                <div id="wrapper">
                    
                    <div class="clear"></div>
                    <form action='' method="POST" id="sortResults">
                        <input type="hidden" name="sortBy" value="<?php echo $sortBy; ?>" id="sortBy"/>
                        <input type="hidden" name="sortDirection" value="<?php echo $sortDirection; ?>" id="sortDirection"/>
                        <input type="hidden" name="limit" id="limit" value="<?php echo $paginate['limit']; ?>" />
                        <input type="hidden" name="resultSet" id="resultSet" value="<?php echo $paginate["resultSet"]; ?>"/>
                        <input type="hidden" name="status" id="status" value="<?php echo $current_status; ?>"/>
                    </form>
                    <div class="clear"></div>
                    <div id=''>
                    </div>
                    <div id="event_listing" >
                        <?php
                        $events = !empty($data) ? $data : "";

                        if ($events == "") {
                            echo "<div class='no_current_events'>There are currently no events scheduled. To get started click on <b>Create New Event</b>!</div>";
                        } else {
                            foreach ($events as $key => $value) {

                                $preview_image = $value['current_status']['class'] == "resultProcessing" ? '/c/assets/rtable/processing.jpg' : $value['preview'];
                                $evenResult = (($key + 1) % 2 == 0) ? "leftMargin" : "";
                                echo "<div id='event-" . $value['id'] . "' class='resultWrapper  ".$value["current_status"]['class']."'>\r\n";
                                echo "  <div class='resultHeader'>";
                                echo "      <span class='header'>".$value["current_status"]["header"]."</span>";
                                echo "	    <div class='deleteEventList icon-remove' onclick=\"ask_to_delete('" . $value["id"] . "','" . addslashes($value['title']) . "');\"></div>";
                                echo "  </div>";
                                echo "	<div class='resultImageWrapper '>";
                                    if (isset($value['media']) && $value['media']['active'])
                                        echo "		<a href='edit/" . $value["id"] . "'>";
                                        echo "		<img src='" . $preview_image . "' class='img-polaroid'/>";
                                    if (isset($value['media']) && $value['media']['active'])
                                        echo "		</a>";
                                echo "	</div>\r\n";
                                echo "	<ul class='resultInfo'>\r\n";
                                echo "		<li><h5>" . $value['title'] . "</h5></li>\r\n";
                                echo "		<li><small>" . date('m/d/Y', $value['date']) . "</small></li>\r\n";
                                echo "		<li><small>" . wordwrap($value['email'],24,"<br/>",TRUE) . "</small> </li>\r\n";
                                echo "  </ul>\r\n";
                                echo "  <a href='edit/" . $value['id'] . "' class='btn viewEditEvent btn-info floatR'><i class='icon-edit icon-white' style='margin-top:-1px;'></i> Edit Event</a>";
                                echo "</div>\r\n \r\n";
                            }
                        }
                        ?>
                        <div id="MyContentArea">

                        </div>
                        <div class="clear"></div>	
                    </div>
                    
                </div>
                <div id='bottomPagination' class='buttonGroups'>
                    <img src="/c/assets/rtable/body_shadow_bottom.png" style="margin-top:-6px;" />
                    <div id='paginationDisplayButtons'>
                        <div class="btn-group floatR">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <?php echo $paginate['limit']; ?> Results Per Page
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href='#' onclick='setResultLimit(12)'>12 Results Per Page</a></li>
                                <li><a href='#' onclick='setResultLimit(24)'>24 Results Per Page</a></li>
                                <li><a href='#' onclick='setResultLimit(48)'>48 Results Per Page</a></li>
                            </ul>
                        </div>
                        <div class='pagination '>
                            <ul>
                                <?php
                                for ($index = 1; $index <= $paginate['total_pages']; $index++) {
                                    $active_page = $paginate['resultSet'] == $index ? ' class="active"' : "";

                                    echo "<li " . $active_page . "><a href=\"#\" onclick=\"getResultSet('" . $index . "')\">" . $index . "</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <div class='currentDisplayResults'>
                              <?php echo $paginate['current_result_range']; ?>
                        </div>
                    </div>
                    </div>
                <div id='wrapper_footer'></div>	
            </div>

        </div>
        <div id="confirm-delete"><p id="event_title"></p></div>
    <div id='footer'>

    </div>
</body>
</html>