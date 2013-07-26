<div class="ui-hold"><div class="ui-title">EVENTS</div>
<div class="form-ui-wrapper">
    <div class="ui-text">Active Event</div>
	<div class="ui-container ui-event">

		<div class="ui-wrap ui-wrap-active-event">

            
            <div class="ui-wrap">
            <li>
<i class="icon-info-sign"></i>
 The current active event
</li>
        </div>

			<div class="ui-active-event"><div class="ui-stand-wrap"><?php echo ucfirst($active_event); ?></div></div>

		</div>



		<div class="ui-wrap ui-wrap-change-event">

	   <div class="ui-wrap">
            <li>
<i class="icon-info-sign"></i>
 Change Event
</li>
        </div>

			<select id="change-event" name="change-event">
				<?php
				print_r($events);
				foreach ($events as $event)
				{
					echo '<option value="' . $event->id. '"';
					if($active_event == $event->name)
					{
						echo ' selected';
					}
					echo '>' . ucfirst($event->name) . '</option>';
				}
				?>

			</select>

		</div>

	</div>

	<div class="button-wrap"> <button id="itembtn" class="btn save" type="submit"><i>Save</i></button></div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.btn.save').click(function(){
				$.ajax({
					url:'/c/patriots/ajax/event/set_active',
					type:'POST',
					async:false,
					data:{'event_id':$('#change-event').val()},
					success:function(data){
						if(data)
						{
							$('.ui-active-event').html($('#change-event option:selected').html());
						}
					}
				});
			});
		});
	</script>
</div>
</div>