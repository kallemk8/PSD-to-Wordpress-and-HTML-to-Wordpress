<?php
	
	$to = "kallemk8@gmail.com";
	$name = $_POST['your_name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	 $mailmessage = "Name: ".$name."<br />";
    $mailmessage .= "Email: ".$email."<br />";
    
    $mailmessage .= "message: ".$message."<br />";
    
    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html;\r\n";
    $header .= 'Reply-To: "'.$email.'"' . "\r\n";
    
	$ret = mail( $to, $subject, $mailmessage, $header );
	if($ret){
		echo "Mail sent successfully.";
	}
	else{
		echo "Couldn't send your mail now, try again after sometime.";
	}


?>