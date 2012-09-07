<?php
      if (!$price['value']) {
            ?>
            <div class="evm evm-spacer">
                  <img src="<?php print $image; ?>" />
            </div>
<?php
      } else {
?>
            <div id="<?php print $container['id']; ?>" class="<?php print $container['class']; ?>">
                  <div style="background-image: url( <?php print $image; ?>)" class="evm-image">
                        <div class="<?php print $number['class']; ?>"><?php print $number['value']; ?></div>
                        <div class="<?php print ' ' . $title['class']; ?>"><?php print $title['value']; ?></div>
                        <div class="clear-left"></div>
                        <div class="<?php print $price['class']; ?>" >
                        <?php print $pricing_content; ?>
                        </div>
                        <div class="footnote"><?php print $footnote; ?></div>
                  </div>
            </div>
<?php
      }
?>