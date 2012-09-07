<?php
      $swf = Utils::FILE_NO_CACHE('promo.swf');
?>
<div class="pfe-container">
      <script>
            $(function(){

                  icg.promo.data[<?php print $id; ?>] = {data:'<?php print str_replace("'", "\'", json_encode($promos)); ?>',
                        flashvars:<?php print '{' . $fv . '}'; ?>,
                        params:{'wmode':'gpu','scale':'noscale', 'salign':'tl'},
                        attributes:{},
                        swf:"<?php print $swf; ?>",
                        width:"<?php print $width; ?>",
                        height:"<?php print $height; ?>",
                        func:icg.promo.show};
            })
      </script>
      <div id="<?php print $id ?>"></div>
</div>
