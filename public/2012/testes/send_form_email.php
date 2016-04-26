<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "fc.minutti@gmail.com";
    $email_subject = "teste do inter";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['complete_name']) ||
        !isset($_POST['gender']) ||
		!isset($_POST['ra']) ||
		!isset($_POST['rg']) ||
		!isset($_POST['course']) ||
		!isset($_POST['school']) ||
		!isset($_POST['email']) ||
		!isset($_POST['size']) ||
		!isset($_POST['other_events']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $complete_name = $_POST['complete_name']; // required
    $gender = $_POST['gender']; 
	$ra = $_POST['ra']; // required
	$rg = $_POST['rg']; // required
	$course = $_POST['course']; // required
	$school = $_POST['school']; // required
    $email_from = $_POST['email']; // required
	$size = $_POST['size']; // required
	$other_events = $_POST['other_events']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$ra_exp = '/^[A-Za-z0-9._%-]+$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$complete_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($ra_exp,$ra)) {
    $error_message .= 'The ra you entered does not appear to be valid.<br />';
  }
  if(!preg_match($ra_exp,$rg)) {
    $error_message .= 'The rg you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$course)) {
    $error_message .= 'The curso you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$school)) {
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
     
    $email_message .= "Nome Completo: ".clean_string($complete_name)."\n";
    $email_message .= "Sexo: ".clean_string($gender)."\n";
	$email_message .= "RA: ".clean_string($ra)."\n";
	$email_message .= "RG: ".clean_string($rg)."\n";
	$email_message .= "Curso: ".clean_string($course)."\n";
	$email_message .= "Faculdade: ".clean_string($school)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Tamanho da camiseta: ".clean_string($size)."\n";
	$email_message .= "Já participou como apoio?: ".clean_string($other_events)."\n";
    $email_message .= "Justificativa: ".clean_string($comments)."\n";
     
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