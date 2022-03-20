<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Message Email</title>
	<style>
		body,html{
			margin: 0;
			padding:0;
		}
	
	</style>
</head>
	<body style="padding: 0; margin: 0; background-color: #f4f5f6; font-family: Arial;">
<table cellpadding="0" cellspacing="0" style="width:100%; background-color: #f4f5f6; height: 100%; padding: 30px 0;">
	<tr>
	<td >
		<div style="max-width:600px; min-width: 300px; width: 80%; margin: auto; padding: 20px; background-color: #fff;border: solid 1px #D7DADE">
		<h1 style="margin-top: 0;">New Contact from the Web</h1>
		<p><b>Name:</b> <?php echo($sender_name) ?></p>
		<p ><b>Email:</b> <a href="<?php echo($sender_email) ?>"><?php echo($sender_email) ?></a></p>
			<p style="margin-bottom: 5px;"><b>Message:</b></p>
<p style="margin-top: 0;"><?php echo($sender_message) ?></p>
			
			</div>
		</td>
	
	</tr>
	</table>

</body>
</html>
