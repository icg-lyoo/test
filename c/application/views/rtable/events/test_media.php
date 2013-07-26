
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		<?php
			echo HTML::script('js/icg/jquery.js');
			echo HTML::script('js/icg/swfobject.js');
			echo HTML::script('js/icg/icg.js');
			 echo HTML::script('js/rtable/default.js');
		?>
    <script type="text/javascript">
   if (swfobject.hasFlashPlayerVersion("9.0.0")) {
    var fn = function() {
     
       swfobject.removeSWF("123"); 

     var attributes = { data:"'/c/promo.swf"};
     
     var params = {
     quality: "high",
     bgcolor:"#ffffff",
     play:"true",
     loop: "true",
     scale: "noscale",
     wmode:"gpu",
     menu:"true",
     devicefont: "false",
     salign:"lt",
     allowScriptAccess:"sameDomain"
     };
     
     var flashvars = {
      dataUrl:"promodata.txt",
      scalable:"1",
      debug:"1",
      preview:"1",
      bgImg:"/c/assets/rtable/media_preview_bg_right.png"
     };
     
     swfobject.embedSWF("/c/promo.swf", "123", "0", "400", "9.0.0","expressInstall.swf", flashvars, params, attributes)
    };
    swfobject.addDomLoadEvent(fn);
   }
   
  </script>
    </head>
    <body>
		<div id="123">
			
		</div>
    </body>
</html>
