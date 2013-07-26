<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Event Login</title>
        <?php
        echo HTML::script('js/rtable/jquery-1.8.2.min.js');
        echo HTML::script('js/rtable/bootstrap.js');
        echo HTML::script('js/rtable/jquery-ui-1.8.2/ui/jquery-ui.js');
        echo HTML::script('js/rtable/default.js');
        echo HTML::style('css/rtable/bootstrap.css');
        echo HTML::style('js/rtable/jquery-ui-1.8.2/themes/base/jquery-ui.css');
        echo HTML::style('css/rtable/login.css');
        ?>
    </head>
    <body>
        <div id="bg">
            <div id='logo_header'>
                <div id='logo'>
                    <div id='header-container'>
                        <img src='/c/assets/rtable/toplogo.png' alt='Round Table Login'/>
                    </div>
                </div>
            </div>	
            <div id="main">
                <div id='wrapper_header'></div>
                <div class='pageHeader'>
                    <h2>Customer Login</h2>
                </div>
                <div id="wrapper" class='loginBackdrop'>
                    
                        <div id="login_wrapper" class='floatR'>

                            
                            <form class='floatR' >
                                <div class="alert alert-error" id="alert_msg" style="display:none;width:250px;margin:0 0 5px 0px;padding:0;"></div>
                                <label for='consumer_email'><b>Email Address</b></label>
                                <input type="text" id="consumer_email" tabindex='1' class="loginTextInput" />
                                <label for='event_code'><b>Event Code</b></label>
                                <input type="text" id="event_code" tabindex='2' class="loginTextInput"/>
                                 <span id="need_help">Need help finding your code? <a href=""/>Click here</a></span>
                                 <input type="button" class="btn btn-success" id="loginButton" tabindex="3" value="Log In" onclick="validateLogin();" style="float:right;margin:0;"/>
                            </form>

                        </div>
                    </div>
            </div>
                <div id='wrapper_footer'></div>	
            </div>
            <div id='footer'></div>
        </div>
    </body>
</html>