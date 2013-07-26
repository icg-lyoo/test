<head>
	<?php //echo HTML::script('js/greyhound/jquery-1.7.2.js'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.upload-btn').click(function(){
				window.location.href = "upload";
			});
		});
	</script>
</head>
<h1>View and Edit Schedules <!--<button class="upload-btn btn">Upload a new schedule</button> --></h1>
  
<div id="edit-schedule-wrapper">
	
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destination</th>
                <th>Arrival Time</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Days in Week</th>
                <th>Gate</th>
                <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <td>ID</td>
            <td>Destination</td>
            <td>Arrival Time</td>
            <td>Start Date</td>
            <td>End Date</td>
            <td>Days in Week</td>
            <td>Gate</td>
            <td>Status</td>
        </tbody>
        
    </table>
    
    
</div>