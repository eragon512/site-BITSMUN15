<?php

	$name = strip_tags($_POST['name']);
	$from = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);

	$to = "bitsmunsociety@gmail.com";
	$subject = "Applicant Query";
	
	$body = $name." says:\n\n".$message;
	$msg = wordwrap($body,70);
	$headers = "From: ".$from."\r\n";
	$frm = "-f ".$from;
	
	$success = mail($to,$subject,$msg,$headers,$frm);
	if($success);
?>