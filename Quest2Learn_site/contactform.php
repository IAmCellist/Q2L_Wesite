<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailto = "quest2learn00@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;
	
	mail($mailto, $subject, $txt, $headers);
	header("Location: AFTER-SEND-PAGE?mailsend");
}









/* Made by Emma Levitsky - do not remove */