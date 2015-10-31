<?php 
require_once($_SERVER [ 'DOCUMENT_ROOT'].'/wp-config.php');

require_once( 'MailchimpNewsletter.php' );

$result = '';

if(trim($_POST['email']) === '') {
  $result = 'Error - falta el campo email';
}else{
  $email = trim($_POST['email']);
}
if(trim($_POST['name']) === '') {
  $result = 'Error - falta el campo nombre';
}else{
  $name = trim($_POST['name']);
}
if(trim($_POST['list']) === '') {
  $result = 'Error - falta el campo list';
}else{
  $list = trim($_POST['list']);
}

if($result==''){


    /*$emailTo = 'alonso@avotz.com';
    $subject = 'showdreamscr.com - Submitted message from '.$email;
    $body = "Email: $email \n\nComments: $comments";
    $headers = 'From: ' .' <alonso@avotz.com>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);*/

  $mailchimp = new MailchimpNewsletter();

	$mailchimp->subscribeTo($list, $email, $name, '');


	$attachments = array( WP_CONTENT_DIR . '/uploads/2015/08/02-Brochure-TERMOSIFON.pdf' );

	$to = $email;
	$subject = 'Envio de catalogo de productos';
	$body = 'Archivo de catalogo adjunto en este correo. Gracias';

  $headers[] = 'From: Sonnsolar <info@sonnsolar.com>';
  $headers[] = 'Cc: info@sonnsolar.com'; // note you can just use a simple email address
  $headers[] = 'Content-Type: text/html; charset=UTF-8'; // note you can just use a simple email address

	if(!wp_mail( $to, $subject, $body, $headers, $attachments ))
  {
    $result = 'Error enviando el correo';
  }



}

echo $result;







