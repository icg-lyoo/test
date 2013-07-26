<?php

	echo '<h1>ICG Tools, Link to JSON for patriots stands</h1>';


	echo '<ul>';
	foreach ($stands as $stand)
	{
		echo '<li><a target="_blank" href="http://www.icgtest.info/c/patriots/api/get_stand_content?stand_id='.$stand['stand_id'].'">'.$stand['stand_name'].'</a></li>';
	
	}
	
	echo '</ul>';
	
?>