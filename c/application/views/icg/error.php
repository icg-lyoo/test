<?php
$sad_face = FALSE;
switch(intval($code))
{
    case 404:
        $title = 'not found';
        $message = 'The page you are looking for doesn\'t exist.';
        break;
    case 403:
        $title = 'forbidden';
        $message = 'You do not have the permissions to view this page.';
        break;
    default:
        $title = 'error';
        $message = 'Sorry, an error occured with your request. An email has been sent to the ICG Support team and this issue will be resolved as soon as possible.';
        $sad_face = true;
        break;
}
?>

<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Client Login">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ICG - <?php echo strtoupper($title); ?></title>

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
        <div class="header errorHeader">
        </div>
        <div class="errorContentWrapper">
            <div class="message">
                <?php echo $message; ?>
            </div>
            <?php if($sad_face) {?><div class="sad_face">:(</div><?php }?>
        </div>
    </div>
    </body>
</html>