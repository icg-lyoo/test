<?php
//$assets_path = "http://icgtest.info/c/assets/rtable/email/";
//	$media_path = "http://icgtest.info/c/media/rtable/";
//	$email_header_bg = "header_bg_uploaded.gif";/
//	/	$email_media_preview = "mcd_atom_adjustment_1351534480.jpg";
//	$customer_name = "Ezra";
//	$email_message = "Your video has been uploaded for your event. Please review your video and customize your event name and message at the link <a href='#'><font color='#8ea125'>here</font></a>.";
//	$action = "#";//	$email_action_btn = "action_preview.gif";
//	$event_name = "Ezra's Birthday Party";
//	$event_date = "November 14, 2012";
//	$event_message = "A super fun party!";
//	$event_email = "ezra@email.com";
//	$event_code = "1XF4K3T";
?>
<style type="text/css">   
	a, a:link, a:hover, a:vlink, a:visited {   
		color: #8ea125;
        text-decoration: underline; 
	} 
	img {   
		display: block;  
	}</style>
<table align="center" border="0" cellpadding="0" cellspacing="15" width="651">  
	<tr>     
		<th><img border="0" src="<?php echo $assets_path, $email_header_bg; ?>" width="621" height="158" alt="" /></th>   
	</tr>
    <tr>    
		<td style="padding-right: 30px; padding-left: 30px">         
			<font color="#000000" size="4" face="arial, sans-serif"><b>Dear <?php echo $customer_name; ?>,</b></font><br /><br />     
			<font color="#000000" face="arial, sans-serif"><?php echo $email_message; ?></font>     
		</td>  
	</tr>  
	<?php if (isset($email_media_preview) && !empty($email_media_preview)): ?>     
		<tr>         
			<td align="center"><img border="0" src="<?php echo $media_path, $email_media_preview; ?>" height="136" width="238" alt="Media Preview" /></td>    
		</tr>   
	<?php endif; ?>   
	<tr>     
		<td align="center"><a href="<?php echo $action; ?>">
				<img border="0" src="<?php echo $assets_path, $email_action_btn; ?>" height="46" width="192" alt="Take Action" /></a>
		</td>  
	</tr>   
	<tr>   
		<td style="padding-right: 30px; padding-left: 30px">    
			<font color="#b41919" size="4" face="futura std, arial, sans-serif">   
			<b>Event Details<br />         
				Name: <?php echo $event_name; ?><br />           
				Date: <?php echo $event_date; ?><br />           
				Event Message: <?php echo $event_message; ?><br />     
				Email: <?php echo $event_email; ?><br />      
				Code: <?php echo $event_code; ?></b>     
			</font>     
		</td>  
	</tr>   
	<tr>     
		<td background="<?php echo $assets_path; ?>email_footer_bg.gif" bgcolor="#f0d3a5" width="621" height="114">        
			<div style="background-image: url('<?php echo $assets_path; ?>email_footer_bg.gif'); width: 621px; height: 114px;" align="justify">        
				<table border="0" cellpadding="15" cellspacing="0">   
					<tr>         
						<td>      
							<font color="#000000" size="1" face="arial, sans-serif">Round Table Pizza does not use or disclose your Personally Identifying Information for purposes other than those for which it was collected or as set forth in this privacy policy, except as otherwise set forth in this privacy policy under the heading Limits of Confidentiality, or as required by law. Your Personally identifying Information is retained only as long as necessary for the fulfillment of those purposes or as required by law.</font>      
						</td>       
					</tr>         
				</table>          
			</div>    
		</td>  
	</tr>
</table>