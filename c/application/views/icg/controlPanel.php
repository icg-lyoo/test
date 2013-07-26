<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Client Login">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ICG Control Panel</title>
        <link rel="icon" type="image/x-icon" href="/c/assets/icg/ICGfavicon.ico"/>
        <link rel="stylesheet" href="/c/css/icg/bootstrap.css"/>
        <link rel="stylesheet" href="/c/css/icg/style.css"/>
        <script src="/c/js/icg/jquery.js"></script>
        <script src="/c/js/icg/login.js"></script>
    </head>
    <body>
    <div class="contentWrapper">
        <div class="rightPanel floatR">
            <img src="/c/assets/icg/icgLogo.png"/>
        </div>
        <div class="header controlPanelHeader"></div>
        <div class="clientListWrapper">
            <div class="clientListTop"></div>
            <div class="clientListMiddle">
                <div class="clientList">
                    <?php
                        foreach($clients as $client)
                        {
                            if($client['system_name'] == 'mcd') continue;
                            $controller_path = '/c/'.$client['system_name'].'/'.$client['home_url'];
                            echo "<div class='portal-icon-container' controller='".$controller_path."' client='".$client['system_name']."'>\r\n";
                            echo " <div class='portal-icon' style='background-image: url(\"..".$client['icon_url']."\");'><div class='ui-icon-effect'></div></div>\r\n";
                            echo " <div class='portal-icon-text'><button class='btn btn-inverse'>".$client['display_name']."</button></div>\r\n";
                            echo "</div>";
                        }
                    ?>      
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="clientListBottom"></div>
        </div>
    </div>
    <script type="text/javascript">         
            $(document).ready(function(){           
                $('.ui-icon-effect, .btn').on('click', function(){      
                        var link = $(this).parents('.portal-icon-container').attr('controller');        
                        window.location = link;
                });     
            });         
        </script> 
    </body>
</html>