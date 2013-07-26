<head>
	<?php echo HTML::script('js/greyhound/jquery.form.js'); ?>
	<script type="text/javascript">
		/**
		* loads backup data
		*/
		function loadBackupData() {
				 $.ajax({
				url:"../ajax/get_backup_dates",
				type:"GET",
				async:false,
				dataType:'json',
				success:function(data){
					if(data.length > 0)
					{
						for(var i = 0; i < data.length; i++)
						{
							$('.backup-select').empty();
							$('.backup-select').append('<option value="' + data[i].timestamp + '">' + data[i].date +'</option>');
						}
						$('.backup-section').show();
					}
				}
			});
			 }
		
		$(document).ready(function(){
			var options = {
				//target:        '#response',   // target element(s) to be updated with server response

				// other available options:
				//url:       url         // override for form's 'action' attribute
				//type:      type        // 'get' or 'post', override for form's 'method' attribute
				dataType:  'json',
				async:false,// 'xml', 'script', or 'json' (expected server response type)
				//clearForm: true        // clear all form fields after successful submit
				//resetForm: true        // reset the form after successful submit

				// $.ajax options can be used here too, for example:
				//timeout:   3000
				success:function(data){
					if(data.status == 0)
					{
						$('.alert-upload').html(data.message);
						$('.alert-upload').stop().hide().fadeIn(500, function(){
							$('.alert-upload').stop().fadeOut(10000);
						});
					}
					else
					{
						$('.alert-upload').html(data.message);
						$('.alert-upload').removeClass('alert-error');
						$('.alert-upload').addClass('alert-success');
						$('.alert-upload').stop().hide().fadeIn(500, function(){
							$('.alert-upload').stop().fadeOut(10000, function(){
								$('.alert-upload').removeClass('alert-success');
								$('.alert-upload').addClass('alert-error');
							});
						});
					}
				}
			};
			$('#uploadForm').ajaxForm(options); 
			$('.home-btn').click(function(){
				window.location.href = "home";
			});
			
			 
			loadBackupData();
			
			$('.backup-btn').click(function(){
				$.ajax({
					url:"../ajax/upload_file",
					type:"POST",
					async:false,
					data:{
						"timestamp":$('.backup-select').val()
					},
					success:function(data)
					{
						if(data.status == 0)
						{
							$('.alert-backup').html(data.message);
							$('.alert-backup').stop().hide().fadeIn(500, function(){
								$('.alert-backup').stop().fadeOut(10000);
							});
						}
						else
						{
							$('.alert-backup').html(data.message);
							$('.alert-backup').removeClass('alert-error');
							$('.alert-backup').addClass('alert-success');
							$('.alert-backup').stop().hide().fadeIn(500, function(){
								$('.alert-backup').stop().fadeOut(10000, function(){
									$('.alert-backup').removeClass('alert-success');
									$('.alert-backup').addClass('alert-error');
								});
							});
						}
						loadBackupData();
						$('.backup-section').show();
					}
				});
				
			});
		});
	</script>
</head>

<button class="home-btn btn">View/Edit Schedules</button>
<div class="section-wrapper">
	<h1 class="upload-header">Upload a schedule</h1>
	<form id="uploadForm" enctype="multipart/form-data" method="POST" action="../ajax/upload_file">
		<div id="edit-schedule-wrapper">
			<div><div class="upload-label label"><div class="description upload-desc">Please select the file to upload:<span class="instructions">(The selected file MUST be a 2007 MS Excel file and contain no extra empty rows)</span></div><input type="file" name="schedule_xlsx" class="upload-input" id="schedule_xlsx"/><div class="alert-error alert-upload"></div><input type="submit" class="save-btn btn"name="saveUpload" value="Upload" /><div class="spinner-loading"></div></div>
			</div>
		</div>
	</form>
	
</div>

<div class="section-wrapper backup-section">
	<h1 class="upload-header">Restore a backed up schedule</h1>

	<div id="edit-schedule-wrapper">
		<div>
			<div class="upload-label label">
				<div class="description upload-desc">Restore schedule that was uploaded on </div>
				<select name="backup-select" class="backup-select">
				</select>
				<div class="alert-error alert-backup"></div>
				<input type="submit" class="btn save-btn backup-btn" value="Backup"/><div class="spinner-loading"></div>
			</div>
		</div>
	</div>
</div>