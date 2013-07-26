<div id="modalMedia" class="modal hide fade modalMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-body"></div>
    <div class="modal-footer"></div>
</div>
<input id="selected-media-url" name="selected-media-url" type="hidden" />
<?php
$rowid = 0;
echo '<h1><span  class="stand-title" id="' . $stand['stand_name'] . '">Stand ' . ucfirst(strtolower($stand['stand_name'])) . '</span></h1><div id="TabbedPanels1" class="TabbedPanels">
                <ul class="TabbedPanelsTabGroup">';
if (count($menus) == 0)
{
    echo "<br />Please contact ICG to add content to this stand.</div>";
}
else
{
    foreach ($menus as $menu)
    {
        echo '<li class="TabbedPanelsTab" tabindex="0" id="tab_' . $menu['menu_id'] . '">' . strip_tags($menu['menu_title']) . '</li>';
    }
    echo '<li class="TabbedPanelsTab" tabindex="0" id="tab_center_promos">CENTER PROMOS</li>';

    echo ' </ul>';
    echo '<div class="TabbedPanelsContentGroup" data-stand-id="' . $stand['stand_id'] . '">';
    $menu_count = 0;
    foreach ($menus as $menu)
    {
        echo'<div class="TabbedPanelsContent" data-menu-id="' . $menu['menu_id'] . '">
                             <div><h3></h3></div>

                <form action="" method="POST" class="addform">
                <table  class="menu-table table" style="width: 700px;"> 
                <thead>  
                  <tr>  
                    <th>Menu item name</th>
                    <th>Add to list</th>
                  </tr>  
                </thead>  
                <tbody>
                    <tr>
                        <td><input type="text" class="addItemText ui-autocomplete-input" autocomplete="off" name="add_menuitem[' . $menu['menu_id'] . ']" /></td><td><button type="submit" class="btn addItemBtn"><i>Add</i></button></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="add-msg-td"><span class="addMsg"></span></td>
                    </tr>
                </tbody>
                </table>
                </form>
                <form action="" method="POST" class="form">
                <table  class="menu-table table"  id="' . $menu['menu_id'] . '" style="width: 700px;"> 
                <thead>  
                  <tr>  
                    <th style="padding-left: 21px;">Sort</th>
                    <th>Menu Item</th>  
                    <th style="padding-left: 16px;">Price</th>
                    <th style="padding-left: 34px;">Enable </th>
                    <th style="padding-left: 34px;">Disable</th>
                    <th style="padding-left: 24px;">Delete</th>
                  </tr>  
                </thead>  
                <tbody>';

        $count = 0;
        $count_for_bottom = 0;

        $array_of_menu_items = array();
        foreach ($menuitems as $menuitem)
        {
            if ($menuitem['menu_id'] == $menu['menu_id'])
            {
                $array_of_menu_items[] = $menuitem;
            }
        }

        foreach ($array_of_menu_items as $menuitem)
        {
            // $menuitem = ORM::factory('menuitem', $result['menuitem_id']);
            if ($menuitem['menu_id'] == $menu['menu_id'])
            {

                $count_for_bottom++;
                echo '<tr  id="row_' . $rowid . '" class="menu-fields"><td><div class="arrows">';
                if ($count == 0)
                    echo '<div class="arrow-down arrow-top" />';
                else if (count($array_of_menu_items) == $count_for_bottom)
                    echo '<div class="arrow-up arrow-bottom" />';
                else
                    echo '<div class="arrow-up" /><div class="arrow-down" />';
                echo '</div></td><td class="menuitem-title">' . $menuitem['menuitem_title'] . '</td>
                                            <td class="menuitem_price">' . number_format($menuitem['menuitem_price'], 2, '.', '') . '</td>
                                            <td class="radio-td"><label class="radio-label" for="' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-enabled"><input class="enabled-radio" type="radio" id="' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-enabled" name="' . $menuitem['stand_id'] . '-' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-enabled" value="1"';
                if ($menuitem['menuitem_enabled'] == 1)
                    echo 'checked';
                echo '/> Enabled</label></td>
                                        <td class="radio-td"><label class="radio-label" for="' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-disabled"><input class="enabled-radio" type="radio" id="' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-disabled" name="' . $menuitem['stand_id'] . '-' . $menuitem['menu_id'] . '-' . $menuitem['menuitem_id'] . '-enabled" value="0"';
                if ($menuitem['menuitem_enabled'] == 0)
                    echo 'checked';
                echo'/>Disabled</label></td></td>
                                        <td style="padding-left:25px;"><a href="#" class="deleteBtn" /></td>
                                    </tr>';
                $rowid++;
                $count++;
            }
        }

        echo '</tbody>
                </table>
                <div><h3>Thank you notification</h3></div>
                <table class="table"  style="width: 700px;">  
                <thead>  
                  <tr>  
                    <th>Bottom Notification</th>  
                    <th></th>
                    <th></th>
                  </tr>  
                </thead>  
                <tbody>  
                  <tr>  
                    <td colspan="3"><input type="text" class="stand_message" name="' . $stand['stand_id'] . '-message" value="' . $stand['stand_message'] . '" style="width: 453px;"></td>        
                  </tr>  
                      </tbody>
                </table>
                            </form>
                <div><h3>Promos</h3></div>
                <form action="" method="POST">
                <table class="menu-table table" style="width: 700px;"> 
                <thead>  
                  <tr>
                    <th></th>
                    <th>Promo URL</th>
                    <th>Type</th>
                    <th>Add</th>
                  </tr>  
                </thead>  
                <tbody>
                    <tr>
                        <td>
                            <a href="/c/mediabox/" role="button" class="btn select-image" data-toggle="modal" data-target="#modalMedia" id="select-image">Select Promo</a>
                        </td>
                        <td>
                            <div class="selected-promo-label"></div>
                        </td>
                        <td>
                            <select class="add-promo-to-menu-type">
                                <option value="beer-icon">Beer Icon</option>
                                <option value="icon">Icon</option>
                                <option selected="selected" value="promo">Promo</option>
                            </select>
                        </td>
                        <td><button type="submit" class="btn addPromoItemBtn" data-promo-destination="menu"><i>Add</i></button></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="add-msg-td"><span class="addMsg"></span></td>
                    </tr>
                </tbody>
                </table>
                            </form>
                <form action="" class="form" method="POST">
                <table  class="menu-table table" id="' . $menu['menu_id'] . '" style="width: 700px;"> 
                <thead>  
                  <tr>
                    <th>Promo URL</th>  
                    <th style="padding-left: 16px;">Type</th>
                    <th style="padding-left: 34px;">Enable</th>
                    <th style="padding-left: 34px;">Disable</th>
                    <th style="padding-left: 24px;">Delete</th>
                  </tr>
                </thead>
                <tbody>';

        foreach ($menupromos as $menupromo)
        {
            if ($menupromo['menu_id'] === $menu['menu_id'])
            {
                echo '<tr class="promo-item" data-promo-richcontent-id="' . $menupromo['richcontent_id'] . '" data-promo-richitem-id="' . $menupromo['richitem_id'] . '">';
                echo '<td class="richitem_media">' . $menupromo['richitem_media'] . '</td>';
                echo '<td class="richitem_type">' . $menupromo['richitem_type'] . '</td>';
                echo '<td class="radio-td"><label class="radio-label" for="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-enabled"><input class="enabled-radio" type="radio" id="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-enabled" name="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-enabled" value="1"';
                if ($menupromo['richitem_enabled'] == 1)
                {
                    echo 'checked';
                }
                echo '/> Enabled</label></td>';
                echo '<td class="radio-td"><label class="radio-label" for="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-disabled"><input class="enabled-radio" type="radio" id="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-disabled" name="promo-' . $menupromo['richcontent_id'] . '-' . $menupromo['richitem_id'] . '-enabled" value="0"';
                if ($menupromo['richitem_enabled'] == 0)
                {
                    echo 'checked';
                }
                echo '/>Disabled</label></td></td>';
                echo '<td style="padding-left:25px;"><a href="#" class="deleteBtn" /></td>';
                echo '</tr>';
            }
        }
        echo '

                    </tbody>
                </table>
                <table class="table"  style="width: 700px;">
                <tbody>  
                  <tr><td> <button class="btn saveChangesBtn" type="submit"><i>Save Changes</i></button><div class="preview"><button type="button" class="preview-btn btn" onclick="window.open(\'http://' . BASE_URL . '/deploy-reds/?stand_name=' . $stand['stand_name'] . '\', \'REDSPREVIEW\');"> Preview  stand</button></div></td></tr>  
                      </tbody>
                </table> </form></div>';
        $menu_count++;
    }
    echo'<div class="TabbedPanelsContent"><form action="" method="POST">
                <table class="menu-table table" style="width: 700px;">
                <thead>
                  <tr>
                    <th>Promo URL</th>
                    <th>Type</th>
                    <th>Add</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                                                <input id="add-promo-to-stand-url" name="add-promo-to-stand-url" type="hidden" />
                                                <a href="/c/mediabox/" role="button" class="btn select-image" data-toggle="modal" data-target="#modalMedia" id="select-image">Select Promo</a>
                                            </td>
                        <td>
                                                <select class="add-promo-to-stand-type">
                                                    <option value="left">Left</option>
                                                    <option value="right">Right</option>
                                                    <option selected="selected" value="video">Video</option>
                                                </select>
                                            </td>
                                            <td><button type="submit" class="btn addPromoItemBtn" data-promo-destination="stand"><i>Add</i></button></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="add-msg-td"><span class="addMsg"></span></td>
                    </tr>
                </tbody>
                </table>
                            </form>
                <form action="" class="form" method="POST">
                <table  class="menu-table table" style="width: 700px;">
                <thead>
                  <tr>
                    <th>Promo URL</th>
                    <th style="padding-left: 16px;">Type</th>
                    <th style="padding-left: 34px;">Enable</th>
                    <th style="padding-left: 34px;">Disable</th>
                    <th style="padding-left: 24px;">Delete</th>
                  </tr>
                </thead>
                <tbody>';

    foreach ($stand_promos as $standpromo)
    {
        echo '<tr class="promo-item" data-promo-richcontent-id="' . $standpromo['richcontent_id'] . '" data-promo-richitem-id="' . $standpromo['richitem_id'] . '">';
        echo '<td class="richitem_media">' . $standpromo['richitem_media'] . '</td>';
        echo '<td class="richitem_type">' . $standpromo['richitem_type'] . '</td>';
        echo '<td class="radio-td"><label class="radio-label" for="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-enabled"><input class="enabled-radio" type="radio" id="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-enabled" name="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-enabled" value="1"';
        if ($standpromo['richitem_enabled'] == 1)
        {
            echo 'checked';
        }
        echo '/> Enabled</label></td>';
        echo '<td class="radio-td"><label class="radio-label" for="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-disabled"><input class="enabled-radio" type="radio" id="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-disabled" name="promo-' . $standpromo['richcontent_id'] . '-' . $standpromo['richitem_id'] . '-enabled" value="0"';
        if ($standpromo['richitem_enabled'] == 0)
        {
            echo 'checked';
        }
        echo '/>Disabled</label></td></td>';
        echo '<td style="padding-left:25px;"><a href="#" class="deleteBtn" /></td>';
        echo '</tr>';
    }

    echo '
                </tbody>
            </table>
            <table class="table"  style="width: 700px;">
            <tbody>  
              <tr><td> <button type="submit" class="btn saveChangesBtn"><i>Save Changes</i></button><div class="preview"><button type="button" class="preview-btn btn" onclick="window.open(\'http://' . BASE_URL . '/deploy-reds/?stand_name=' . $stand['stand_name'] . '\', \'REDSPREVIEW\');"> Preview  stand</button></div></td></tr>  
                  </tbody>
            </table> </form></div>';
    echo '</div>';
}
?>