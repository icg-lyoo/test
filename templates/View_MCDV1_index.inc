<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
      <head>
            <link href="css/mcd.css" type="text/css" rel="stylesheet" />
            <script src="js/jquery-latest.js" type="text/javascript"></script>
            <script src="js/swfobject.js" type="text/javascript"></script>
            <script src="js/icg.js" type="text/javascript"></script>
            <script>
                  $(document).ready(function(){
						//icg.cl.on needs to be false on production code.
						//CM player cannot process logs and will not load menu board.
                        icg.cl.on = false;
                        
                        var zone_name = icg.utils.getURLParameter('p');
                        var store_nid = icg.utils.getURLParameter('d_nid');
                        
                        if(zone_name && zone_name.indexOf('zone') == -1){
                              zone_name = 'zone'+zone_name;
                        }
                        
                        if(zone_name){
                              icg.getParams.zone_name = zone_name;
                        }

                        if(store_nid){
                              icg.getParams.store_nid = store_nid;
                        }
                        icg.init();
                  });
            </script>
      </head>
      <body>
            
             <div id="menu-content"><?php print (isset($content))?$content:''; ?></div>
            <div class="splash-container"></div>
      </body>
</html>