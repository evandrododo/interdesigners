<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "fc.minutti@gmail.com";
    $email_subject = "INTER - INSC. OFICINA";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['o_title']) ||
        !isset($_POST['theme']) ||
		!isset($_POST['n_oficineiros']) ||
		!isset($_POST['limit']) ||
		!isset($_POST['time']) ||
		!isset($_POST['materials']) ||
		!isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $o_title = $_POST['o_title']; // required
    $theme = $_POST['theme'];
	$n_oficineiros = $_POST['n_oficineiros']; // required
	$time = $_POST['time']; // required
	$limit = $_POST['limit']; // required
	$materials = $_POST['materials']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$ra_exp = '/^[A-Za-z0-9._%-]+$/';
	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$o_title)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($ra_exp,$n_oficineiros)) {
    $error_message .= 'The n_oficineiros you entered does not appear to be valid.<br />';
  }
  if(!preg_match($ra_exp,$limit)) {
    $error_message .= 'The curso you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$materials)) {
    $error_message .= 'The escola you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
	 
	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Título: ".clean_string($o_title)."\n";
	$email_message .= "Número de oficineiros: ".clean_string($n_oficineiros)."\n";
    $email_message .= "Tema: ".clean_string($theme)."\n";
	$email_message .= "Limite de participantes: ".clean_string($limit)."\n";
	$email_message .= "Duração da oficina: ".clean_string($time)."\n";
	$email_message .= "Materiais: ".clean_string($materials)."\n";
    $email_message .= "Descrição: ".clean_string($comments)."\n";
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>