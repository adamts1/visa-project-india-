<?php
$htmlbody = " Your Mail Contant Here.... You can use html tags here...";
$to = "adamtsityat@gmail.com"; //Recipient Email Address
$subject = "Test email with attachment"; //Email Subject
$headers = "From: adamtsityat@gmail.com\r\nReply-To: adamtsityat@gamil.com";
$random_hash = md5(date('r', time()));
$headers .= "\r\nContent-Type: multipart/mixed; 
boundary=\"PHP-mixed-".$random_hash."\"";
// Set your file path here
$attachment = chunk_split(base64_encode(file_get_contents('C:\Users\Adam Tsityat\Desktop\WhatsApp Images\IMG-20160215-WA0003.jpg'))); // Set your file path here


//define the body of the message.
$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; 
boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; 
charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";


//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";


//include attachment
$message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/zip; 
name=\"C:\Users\Adam Tsityat\Desktop\WhatsApp Images\w.jpg\"\r\n"."Content-Transfer-Encoding: 
base64\r\n"."Content-Disposition: attachment\r\n\r\n";

$message .= $attachment;
$message .= "/r/n--PHP-mixed-$random_hash--";


//send the email
$mail = mail( $to, $subject , $message, $headers );

echo $mail ? "Mail sent" : "Mail failed";
?>