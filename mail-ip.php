<?php

	$name = strip_tags($_POST['name']);
	$college = strip_tags($_POST['college']);
	$email = strip_tags($_POST['email']);
	$phone_no = strip_tags($_POST['phone_no']);
	$fb_id = strip_tags($_POST['fb_id']);
	$no_ip = strip_tags($_POST['no_ip']);
	$exp = strip_tags($_POST['exp']);
	$comPref1 = strip_tags($_POST['comPref1']);
	$comPref2 = strip_tags($_POST['comPref2']);
	$comPref3 = strip_tags($_POST['comPref3']);

	$from = $email;
	$message = "Name: ".$name."\nE-Mail ID: ".$email."\nCollege: ".$college."\nPhone No: ".$phone_no."\nFacebook ID: ".$fb_id."\nNo. of MUNs: ".$no_ip."\nMUN Expereince - ".$exp."\nCommittee Preference 1: ".$comPref1."\nCommittee Preference 2: ".$comPref2."\nCommittee Preference 3: ".$comPref3;

	$to = "bitsmunsociety@gmail.com";
	$subject = "IP App - Backup";
	$msg = wordwrap($message,70);
	$headers = "From: ".$from."\r\n";
	$frm = "-f ".$from;

	$success = mail($to,$subject,$msg,$headers,$frm);
	if($success);
	else {
		;
	}

	$admin = $to;
	$sub = "Press Application Received";
	$body = "Greetings Press Member,\nThis is an auto-generated E-Mail to confirm the receipt of your application. Allotments will be out by 11:59 PM, on the 15th of September.\n\nRegards,\nBITSMUN Secretariat";
	$body = wordwrap($body,70);
	$heads = "From: ".$admin."\r\n";
	$oc = "-f ".$admin;
	$confirm = mail($email,$sub,$body,$heads,$oc);
	if($confirm);
	else {
		;
	}

?>