<?php

	$name = strip_tags($_POST['nameEB']);
	$college = strip_tags($_POST['collegeEB']);
	$email = strip_tags($_POST['emailEB']);
	$phone_no = strip_tags($_POST['phone_noEB']);
	$fb_id = strip_tags($_POST['fb_idEB']);
	$no_del = strip_tags($_POST['no_delEB']);
	$exp_del = strip_tags($_POST['exp_delEB']);
	$no_eb = strip_tags($_POST['no_ebEB']);
	$exp_eb = strip_tags($_POST['exp_ebEB']);
	$exp_oc = strip_tags($_POST['exp_ocEB']);
	$exp_other = strip_tags($_POST['exp_otherEB']);
	$com_pref_1 = $_POST['com_pref_1EB'];
	$pos_pref_1 = $_POST['pos_pref_1EB'];
	$com_pref_2 = $_POST['com_pref_2EB'];
	$pos_pref_2 = $_POST['pos_pref_2EB'];
	$pref_ren = strip_tags($_POST['pref_rsnEB']);

	//$pass = mysqli_query($connect, "INSERT INTO Executive_Board VALUES('$name','$college','$phone_no','$email','$fb_id','$no_del','$exp_del','$no_eb','$exp_eb','$exp_oc','$exp_other','$com_pref_1','$pos_pref_1','$com_pref_2','$pos_pref_2','$pref_ren')");

	$from = $email;
	$message = "Name: ".$name."\nE-Mail ID: ".$from."\nCollege: ".$college."\nPhone No: ".$phone_no."\nFacebook ID: ".$fb_id."\nNo of MUNs as Del: ".$no_del."\nMUN Exp Del: ".$exp_del."\nNo of MUNs as EB: ".$no_eb."\nMUN Exp EB: ".$exp_eb."\nMUN Exp OC: ".$exp_oc."\nMUN Exp Other: ".$exp_other.	"\nCom Pref 1: ".$com_pref_1."\nPos Pref 1: ".$pos_pref_1."\nCom Pref 2: ".$com_pref_2."\nPos Pref 2: ".$pos_pref_2."\nPref Reasons: ".$pref_ren."\n";

	$to = "bitsmunsociety@gmail.com";
	$subject = "Application for EB";
	$msg = wordwrap($message,70);
	$headers = "From: ".$from."\r\n";
	$frm = "-f ".$from;

	$success = mail($to,$subject,$msg,$headers,$frm);

?>