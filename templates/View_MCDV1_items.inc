<?php

$i = 0;

foreach ($items as $menuitem):
      if (!isset($menuitem['pricing']) || empty($menuitem['pricing'])):
            $columns = 3;
            if ($i % $columns == 0):
                  ?>
                  <tr>
                  <?php endif; ?>
                  <td class="dollarmenu-td"><?php echo $menuitem['title'] ?></td>
                  <?php
                  $i++;
                  if ($i % 3 == 0 || $i == (count($items))):
                        ?>
                  </tr>
                  <?php
            endif;
      else:

            $title = $menuitem['title'];
            $desc = $menuitem['description'];
            $price3 = (isset($menuitem['pricing'][2])) ? number_format(floatval($menuitem['pricing'][2]['price']), 2) : '';
            $price2 = (isset($menuitem['pricing'][1])) ? number_format(floatval($menuitem['pricing'][1]['price']), 2) : '';
            $price1 = (isset($menuitem['pricing'][0])) ? number_format(floatval($menuitem['pricing'][0]['price']), 2) : '';
            ?>
            <tr id="<?php echo $menuitem['nid']; ?>">
                  <td class="menu-title"><?php echo $title; ?>												
                        <span class="menu-desc"><?php
            if (strlen($title) + strlen($desc) > 40) {
                  echo '<br />';
            }
            echo $desc;
            ?></span>
                  </td>
                  <td class="menu-price"><?php echo $price3; ?></td>
                  <td class="menu-price"><?php echo $price2; ?></td>
                  <td class="menu-price"><?php echo $price1; ?></td>
            </tr>
      <?php
      endif;
endforeach;
?>
