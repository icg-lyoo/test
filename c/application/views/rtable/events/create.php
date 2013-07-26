<!DOCTYPE html>
<html>
    <head>
        <title>Create Event</title>
        <?php
        echo HTML::style('css/rtable/bootstrap.css');
        echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css');
        echo HTML::style('css/rtable/default.css');
        echo HTML::script('js/rtable/jquery-1.8.2.min.js');
        echo HTML::script('js/rtable/bootstrap.js');
        echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js');
        echo HTML::script('js/rtable/default.js');
        ?>
        <script type="text/javascript">
            $(function(){
                var date = new Date();
                var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
				 
                // Disable all dates till today
                $('#event_date').datepicker({
                    minDate: new Date(y, m, d),
                    dateFormat: 'mm/dd/yy',
                });
            });
        </script>
    </head>
    <body>

        <div id='logo_header'>
            <div id='logo'>
                <img src='/c/assets/rtable/toplogo.png'/>
            </div>
        </div>
        <div id="main">
            <div id="wrapper_header"></div>
            <div id="wrapper">

                <h2>Create Clubhouse Event <a href='list' class='btn btn-info' style='float:right;'><i class='icon-chevron-left icon-white'></i>Go Back To All Events</a></h2><hr/>  
                <div class="alert alert-error" id="alert_msg" style="display:none;"></div>
                <div class="alert alert-success" id="success" style="display:none;"></div>

                <form>
                    <div class="non_textarea_group">
                        <label>Title:</label>
                        <input type="text" id="event_title" />
                        <label>Date:</label>
                        <input type="text" id="event_date" />
                        <label>Customer Name:</label>
                        <input type="text" id="event_consumer_name" />
                        <label>Customer Email:</label>
                        <input type="text" id="event_consumer_email" />
                    </div>

                    <div class="description">
                        <label>Description:</label>
                        <textarea id="event_description" rows="9" placeholder="Describe your event..."></textarea>
                    </div>

                    <div class="clear"></div>

                    <input type="button" class="btn btn-success" value="Save Event" onclick="validateEventFieldsCreate();"/>

                    <div class="clear"></div>
                </form>
            </div>
            <div id="wrapper_footer"></div>
        </div>
        <div id='footer'></div>
    </body>
</html>