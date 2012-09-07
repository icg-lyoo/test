<?php
      for ($a = 0; $a < count($pricing); $a++):
            $val = $pricing[$a]['value'];
            $label = $pricing[$a]['label'];
            $price = number_format(floatval($val), 2);
            $class = (strlen($label) > 11) ? 'long-label' : '';
?>

            <div class="price-item">
                  <div class="evm-sandwich-price-<?php print $color; ?>">
                        <div class="dollarsign">$</div>
                        <div class="emv-price"><?php print $price; ?></div>
                  </div>
                  <div class="sandwich-meal-large <?php print $class; ?>"><?php print $label; ?></div>
            </div>
<?php
      endfor;
?>
<div class="clear-left"></div>