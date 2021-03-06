<div id="modalMedia" class="modal hide fade modalMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-body"></div>
    <div class="modal-footer"></div>
</div>
<input id="selected-media-url" name="selected-media-url" type="hidden" />
<?php

echo '<h1>Global Settings</h1>
			<div id="TabbedPanels1" class="TabbedPanels">
				  <ul class="TabbedPanelsTabGroup">';
echo '  <li class="TabbedPanelsTab" tabindex="0" id="tab_1">MENU ITEMS</li>';
echo '  <li class="TabbedPanelsTab" tabindex="0" id="tab_2">MENU PROMOS</li>';
echo '  <li class="TabbedPanelsTab" tabindex="0" id="tab_3">CENTER PROMOS</li>';
echo '</ul>';
echo '<div class="TabbedPanelsContentGroup">';
echo '<div class="TabbedPanelsContent">
						 <div><h3></h3></div>
			<form action="" method="POST" class="addglobalform">
			<table class="table global-add-table" style="width: 700px;">
			<thead>  
			 <tr>
					<th colspan="3"><h4>Add a menu item</h4></th>
			 </tr>
			  <tr>  
				<th>Menu Item</th>  
				<th>Set Price</th>
				<th>Add Item</th>
			  </tr>  
			</thead>  
			<tbody>
				<tr>
					<td class="global-add-item"><input type="text" name="add_title" maxlength="30" /></td>
					<td class="global-add-price"><input type="text" style="width:59px;" name="add_price" maxlength="6" /></td>
					<td class="global-add-btn"><button type="submit" class="btn addGlobalItemBtn" id="addGlobalItemBtn" ><i>Add</i></button></td>
				</tr>
				<tr>
					<td colspan="3" class="add-msg-td"><span class="addMsg" id="addGlobalItem-message"></span></td>
				</tr>
			</tbody>
			</table>
			</form>
			<form action="" method="POST" id="form">
			<table class="table global-list"  style="width: 700px;"> 
			<thead>  
			  <tr>  
				<th>Menu Item</th>  
				<th>Price</th>
				<th>Delete</th>
			  </tr>  
			</thead>  
			<tbody>';
foreach ($menuitems as $menuitem) {
    echo '<tr class="item_row" id="' . $menuitem['menuitem_id'] . '"><td><input type="text" class="edit_item" name="' . $menuitem['menuitem_id'] . '-title" value="' . $menuitem['menuitem_title'] . '" /></td>
				<td><input type="text" class="edit_item" style="width:40px; text-align:right;" name="' . $menuitem['menuitem_id'] . '-price" value="' . number_format($menuitem['menuitem_price'], 2, '.', '') . '" /></td>
					<td><a href="#" class="deleteBtnGlobal" /></td>
					<td style="width:120px;" class="right_td"></td>
			  </tr>';
}
echo "</tbody>";
echo "</table>";
echo "</form>";
echo "</div>";
echo "<div class='TabbedPanelsContent'>";
echo "	<form>";
echo "		<table class='table global-add-table'>";
echo "			<tr>";
echo '				<td width="110"><a href="/c/mediabox/" role="button" class="btn select-image" data-toggle="modal" data-target="#modalMedia" id="select-image">Select Promo</a></td>';
echo "              <td>Promo: <span class='selected-promo-label'>Not Selected</span></td>";
echo "				<td>Type: ";
echo "					<select id=\"selectPromoTypeForMultipleMenus\" targetElement=\"selectPromoForMultipleMenus\">";
echo "						<option id=\"promo\" value=\"promo\">Promo</option>";
echo "						<option id=\"icon\" value=\"icon\">Icon</option>";
echo "						<option id=\"beer-icon\" value=\"beer-icon\">Beer Icon</option>";
echo "					</select>";
echo "				</td>";
echo "			</tr>";
echo "			<tr>";
echo "				<td colspan=\"3\">Search: <input type=\"search\" id=\"searchMenus\" class=\"searchPromos\" targetElement=\"menusToApplyPromoTo[]\"></td>";
echo "			</tr>";
echo "			<tr>";
echo "				<td colspan=\"3\">";

echo "						<div class=\"globalMenusCheckBoxRow Header\">";
echo "							<table id=\"globalMenusCheckBoxTable\" class=\"table global-list\">";
echo "								<tr>";
echo "									<th style=\"text-align:center;width:57px;\"><input type=\"checkbox\" targetElement=\"globalMenusCheckBoxTable\" class=\"globalCheckBoxAll\"></th>";
echo "									<th style=\"vertical-align:bottom;\">Stand</th>";
echo "									<th style=\"vertical-align:bottom;\">Menu</th>";
echo "								</tr>";
echo "								<tr>";
echo "									<td colspan=\"3\">";
echo "									<div id=\"globalMenusCheckBoxSelectWrapper\">";
echo "										<table width=\"670\">";
foreach ($menus as $menu) {
    echo "<tr class=\"item_row\">";
    echo "	<td style=\"text-align:center;\"><input type=\"checkbox\" id=\"menu-promos-" . $menu["menu_id"] . "\" name=\"menusToApplyPromoTo[]\" value=\"" . $menu["menu_id"] . "\" style=\"vertical-align:middle;\"></td>";
    echo "	<td style=\"vertical-align:middle;\"><label class='stand-description' for=\"menu-promos-" . $menu["menu_id"] . "\" >" . strtoupper($menu["stand_description"]) . "</label></td>";
    echo "	<td><label class='menu-title' for=\"menu-promos-" . $menu["menu_id"] . "\" >" . strip_tags($menu["menu_title"]) . "</label></td>";
    echo "</tr>";
}
echo "										</table>";
echo "									</div>";
echo "									</td>";
echo "								</tr>";
echo "<tr>";
echo "	<th colspan=\"3\">&nbsp;</th>";
echo "</tr>";
echo "							</table>";

echo "					</div>";
echo "				</td>";
echo "			</tr>";
echo "			<tr>";
echo '				<td colspan="3" style="text-align:right">
    <button class="btn addRemovePromos btn-danger" id="removePromoFromMenus" targetElement="menusToApplyPromoTo[]" style="float:right">Remove Promo</button>
    <button class="btn addRemovePromos btn-danger" id="disablePromoInMenus" targetElement="menusToApplyPromoTo[]" style="float:right">Disable Promo</button>
    <button class="btn addRemovePromos btn-success" id="enablePromoInMenus" targetElement="menusToApplyPromoTo[]" style="float:right">Enable Promo</button>
    <button class="btn addRemovePromos btn-success" data-promo-destination="menus" id="addPromoToMenus" targetElement="menusToApplyPromoTo[]" style="float:right">Add Promo</button>
    </td>';
echo "			</tr>";
echo "		</table>";
echo "	</form>";
echo "</div>";
echo "<div class='TabbedPanelsContent'>";
echo "	<form>";
echo "		<table class='table global-add-table'>";
echo "			<tr>";
echo '				<td width="110"><a href="/c/mediabox/" role="button" class="btn select-image" data-toggle="modal" data-target="#modalMedia" id="select-image">Select Promo</a></td>';
echo "              <td>Promo: <span class='selected-promo-label'>Not Selected</span></td>";
echo "				<td>Type: ";
echo "					<select id=\"selectPromoTypeForMultipleCenterPromos\" class=\"selectPromoType\" targetElement=\"selectPromoForMultipleCenterPromos\">";
echo "						<option id=\"video\" value=\"video\">Video</option>";
echo "						<option id=\"left\" value=\"left\">Left</option>";
echo "						<option id=\"right\" value=\"right\">Right</option>";
echo "					</select>";
echo "				</td>";
echo "			</tr>";
echo "			<tr>";
echo "				<td colspan=\"3\">Search: <input type=\"search\"  id=\"searchCenterPromos\" class=\"searchPromos\" targetElement=\"centerPromosToApplyPromoTo[]\"></td>";
echo "			</tr>";
echo "			<tr>";
echo "				<td colspan=\"3\">";
echo "						<div class=\"globalMenusCheckBoxRow Header\">";
echo "							<table id=\"globalCenterPromosCheckBoxTable\" class=\"table global-list\">";
echo "								<tr>";
echo "									<th style=\"text-align:center;width:58px;\"><input type=\"checkbox\" targetElement=\"globalCenterPromosCheckBoxTable\" class=\"globalCheckBoxAll\"></th>";
echo "									<th style=\"vertical-align:bottom;\">Stand</th>";
echo "								</tr>";
echo "								<tr>";
echo "									<td colspan=\"3\">";
echo "									<div id=\"globalMenusCheckBoxSelectWrapper\">";
echo "										<table style=\"width:670px;\">";
foreach ($stands as $stand) {
    echo "<tr class=\"item_row\">";
    echo "	<td style=\"text-align:center;width:47px;\"><input type=\"checkbox\" id=\"center-promos-" . $stand["stand_id"] . "\" name=\"centerPromosToApplyPromoTo[]\" value=\"" . $stand["stand_id"] . "\" style=\"vertical-align:middle;\"></td>";
    echo "	<td style=\"vertical-align:middle;\"><label class='stand-description' for=\"center-promos-" . $stand["stand_id"] . "\" >" . strtoupper($stand["stand_description"]) . "</label></td>";
    echo "</tr>";
}
echo "										</table>";
echo "									</div>";
echo "									</td>";
echo "								</tr>";
echo "<tr>";
echo "	<th colspan=\"3\">&nbsp;</th>";
echo "</tr>";
echo "							</table>";
echo "						</div>";
echo "				</td>";
echo "			</tr>";
echo "			<tr>";
echo '				<td colspan="2" align="right">
    <button class="btn addRemovePromos btn-danger" id="removePromoFromStands" targetElement="centerPromosToApplyPromoTo[]" style="float:right">Remove Promo</button>
    <button class="btn addRemovePromos btn-danger" id="disablePromoInStands" targetElement="centerPromosToApplyPromoTo[]" style="float:right">Disable Promo</button>
    <button class="btn addRemovePromos btn-success" id="enablePromoInStands" targetElement="centerPromosToApplyPromoTo[]" style="float:right">Enable Promo</button>
    <button class="btn addRemovePromos btn-success" id="addPromoToStands" targetElement="centerPromosToApplyPromoTo[]" style="float:right" onclick="return false">Add Promo</button>
    </td>';
echo "			</tr>";
echo "		</table>";
echo "	</form>";
echo "</div>";
echo "</div>";
?>