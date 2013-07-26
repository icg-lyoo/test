<h1>Display Control Panel</h1>
<div class="TabbedPanels" data-client-id="<?php echo $client_id; ?>" data-all-profile-names="<?php echo implode(',', $all_profile_names); ?>" data-all-profile-tv-models="<?php echo implode(',', $all_profile_names); ?>" id="TabbedPanels1">
    <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab TabbedPanelsTabSelected" tabindex="0">CONTROL PANEL</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block">
            <div><h3>Master Power Control</h3></div>
            <form action="" method="POST" style="float: left; text-align: center; width: 100%">
                <button class="btn btn-success" id="powerOn" type="submit"><i>Power On</i></button>
                <button class="btn btn-danger" id="powerOff" style="margin-left: 10px" type="submit"><i>Power Off</i></button>
            </form>
            <div><h3>Entrance 3x3</h3></div>
            <form action="" method="POST" style="float: left; width: 100%">
                <label>Input Source: <select id="changeInputSelect" name="changeInputSelect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select></label>
                <button class="btn btn-primary" id="changeInput" type="submit"><i>Change</i></button>
            </form>
            <div id="group-power-control"><h3>Group Power Control</h3></div>
            <form action="" method="POST" style="float: left; width: 100%">
                <table class="table global-add-table" style="width: 700px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Description</th>
                            <th>Model</th>
                            <th></th>
                            <th></th>
                        </tr>  
                    </thead>
                    <tbody>
                        <?php
                        foreach ($mmses as $mms) {
                            $mms_tv_model = (isset($mms['tv']) and isset($mms['tv']['model'])) ? $mms['tv']['model'] : '';
                            $profile_names = array();
                            foreach ($mms['profiles'] as $profile) {
                                $profile_names[] = $profile['name'];
                            }
                            echo '<tr data-profile-names="' . implode(',', $profile_names) . '" data-tv-model="' . $mms_tv_model . '">';
                            echo '<td>' . $mms['id'] . '</td>';
                            echo '<td>' . $mms['name'] . '</td>';
                            echo '<td>' . $mms_tv_model . '</td>';
                            echo '<td><button class="btn btn-success" data-command-id="powerOn" type="submit"><i>On</i></button></td>';
                            echo '<td><button class="btn btn-danger" data-command-id="powerOff" type="submit"><i>Off</i></button></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>