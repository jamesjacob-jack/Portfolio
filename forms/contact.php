<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  $receiving_email_address = 'jamesjacobraj2001@gmail.com';

 /* if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }*/
  
  $toemail = $receiving_email_address;
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug  = 0;
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port       = 465;
  $mail->Host       = "ssl://smtp.gmail.com";
  $mail->Username   = "jamesjacobraj2001@gmail.com";
  $mail->Password   = "jslwcveohelzsdms";
  $mail->IsHTML(true);
  $mail->AddAddress($toemail);
  $mail->SetFrom("jamesjacobraj2001@gmail.com");
  $mail->Subject = $subject;
  $content = $message;
  $mail->MsgHTML($content);

  if (!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
} else {
    echo "Successfully sent";
    
}
  /*$contact->smtp = array(
    'host' => 'ssl://smtp.gmail.com',
    'username' => 'jamesjacobraj2001@gmail.com',
    'password' => 'rufceqafxzygthla',
    'port' => '465'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);*/

  //echo $contact->send();
?>
