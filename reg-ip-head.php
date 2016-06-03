<?php

	$name = strip_tags($_POST['name']);
	$college = strip_tags($_POST['college']);
	$email = strip_tags($_POST['email']);
	$phone_no = strip_tags($_POST['phone_no']);
	$fb_id = strip_tags($_POST['fb_id']);
	$no_press = $_POST['no_press'];
	$exp_press = strip_tags($_POST['exp_press']);
	$no_del = $_POST['no_del'];
	$exp_del = strip_tags($_POST['exp_del']);
	$exp_oc = strip_tags($_POST['exp_oc']);
	$exp_other = strip_tags($_POST['exp_jour']);
	$why_me = strip_tags($_POST['why_me']);

	//$pass = mysqli_query($connect, "INSERT INTO IP_Head VALUES('$name','$college','$phone_no','$email','$fb_id','$no_press','$exp_press','$no_del','$exp_del','$exp_oc','$exp_other','$why_me')");

	$from = $email;
	$message = "Name: ".$name."\nE-Mail ID: ".$from."\nCollege: ".$college."\nPhone No: ".$phone_no."\nFacebook ID: ".$fb_id."\nNo of MUNs as Press: ".$no_press."\nMUN Exp Press: ".$exp_press."\nNo of MUNs as Del: ".$no_del."\nMUN Exp Del: ".$exp_del."\nMUN Exp OC: ".$exp_oc."\nMUN Exp Other: ".$exp_other."\nWhy me as IP Head: ".$why_me."\n";

	$to = "bitsmunsociety@gmail.com";
	$subject = "Successful Application for IP Head";
	$msg = wordwrap($message,70);
	$headers = "From: ".$from."\r\n";
	$frm = "-f ".$from;
	
	$success = mail($to,$subject,$msg,$headers,$frm);

?>