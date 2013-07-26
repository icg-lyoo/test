<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Client Login">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ICG Client Login</title>

        <link rel="stylesheet" href="/c/css/icg/bootstrap.css"/>
        <link rel="stylesheet" href="/c/css/icg/style.css"/>
        <link rel="icon" type="image/x-icon" href="/c/assets/icg/ICGfavicon.ico"/>
        <script type="text/javascript" src="/c/js/icg/jquery.js"></script>
        <script type="text/javascript" src="/c/js/icg/login.js"></script>

    </head>
    <body>
    <div class="contentWrapper">
        <div class="rightPanel floatR">
            <img src="/c/assets/icg/icgLogo.png" alt="Client Login" width="187" height="147"/>
        </div>
        <div class="header loginHeader"></div>
        <div class="loginWrapper">
            <span class="alert alert-danger"></span>
            <div class="loginControls" onkeypress="return checkSubmit(event);">
                <div class="block">
                    <label for="username" class="bold">Username: </label>
                    <input type="text" name="username" id="username" tabindex="1"/>
                </div>
                <div class="block">
                    <label for="password"  class="bold">Password: </label>
                    <input type="password" name="password" id="password"  tabindex="2"/>
                </div>
                <div class="block">
                    <input type="checkbox" id="rememberMe" value="remember"/><label for="rememberMe" id="remember_me">Remember Me</label>
                </div>
                <div class="loginButtonWrapper floatR">
                    <input type="image" src="/c/assets/icg/loginButton.png" class="loginButton" onclick="login();"  tabindex="3"/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function(){
                if(document.getElementById('username').value.length == 0)
                {
                    document.getElementById('username').focus();
                }
            });
            
        </script>
    </body>
</html>