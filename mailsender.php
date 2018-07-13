 
 <?php
session_start();
    $xls = 'document.xls';
    $path = 'C:/xampp/htdocs/visa project (india)/files';
    $pathpassport = 'C:/xampp/htdocs/visa project (india)/files/passport';
    $pathselfi = 'C:/xampp/htdocs/visa project (india)/files/selfi';
    $pathbusiness = 'C:/xampp/htdocs/visa project (india)/files/business';
    $filexls = $path . "/" . $xls;


    $passport = $_SESSION['passportimage'];
    $filepassport = $pathpassport . "/" . $passport;


    $selfi = $_SESSION['selfiimage'];
    $fileselfi = $pathselfi . "/" . $selfi;
    // $fileselfi = $pathselfi . "/*";

    $business = $_SESSION['businesscard'];

    if($business != null){
    $filebusiness = $pathbusiness . "/" . $business;
    }
    
  

    $mailto = 'adamtsityat@gmail.com';
    $subject = 'Subject';
    $message = 'My message';

    $contentxls = file_get_contents($filexls);
    $contentxls = chunk_split(base64_encode($contentxls));

    $contentpassport = file_get_contents($filepassport);
    $contentpassport = chunk_split(base64_encode($contentpassport));

    $contentselfi = file_get_contents($fileselfi);
    $contentselfi = chunk_split(base64_encode($contentselfi));
    if($business != null){
    $contentbusiness = file_get_contents($filebusiness);
    $contentbusiness = chunk_split(base64_encode($contentbusiness));
    }

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: name <test@test.com>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $xls . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $contentxls . $eol;
    // $body .= "--" . $separator . "--";

      // attachment
      $body .= "--" . $separator . $eol;
      $body .= "Content-Type: application/octet-stream; name=\"" . $selfi . "\"" . $eol;
      $body .= "Content-Transfer-Encoding: base64" . $eol;
      $body .= "Content-Disposition: attachment" . $eol;
      $body .= $contentselfi . $eol;
      // $body .= "--" . $separator . "--";


      if($business != null){
       // attachment
       $body .= "--" . $separator . $eol;
       $body .= "Content-Type: application/octet-stream; name=\"" . $business . "\"" . $eol;
       $body .= "Content-Transfer-Encoding: base64" . $eol;
       $body .= "Content-Disposition: attachment" . $eol;
       $body .= $contentbusiness . $eol;
       // $body .= "--" . $separator . "--";
      }
    

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $passport . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $contentpassport . $eol;
    $body .= "--" . $separator . "--";


    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }

    $files = glob('C:/xampp/htdocs/visa project (india)/files/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete xls file
}

$filesbusiness = glob('C:/xampp/htdocs/visa project (india)/files/business/*'); // get all file names
foreach($filesbusiness as $businessfile){ // iterate files
  if(is_file($businessfile))
    unlink($businessfile); // delete business card file
}

$filespassport = glob('C:/xampp/htdocs/visa project (india)/files/passport/*'); // get all file names
foreach($filespassport as $passportfile){ // iterate files
  if(is_file($passportfile))
    unlink($passportfile); // delete passport img file
}

$filesselfi = glob('C:/xampp/htdocs/visa project (india)/files/selfi/*'); // get all file names
foreach($filesselfi as $selfifile){ // iterate files
  if(is_file($selfifile))
    unlink($selfifile); // delete selfi img file
}