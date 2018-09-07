<?php 
if(isset($_POST['submit'])){ 
      
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['select'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
     $message = "Name : ".$name ."\n"."Email : ". $email ."\n" . "Mobile : ".$mobile."\n" .  "Department : ". $department ."\n". $_POST['message']."\n "."\n";
    $message .= "This email is coming from Sanjeevani Landing Page Form Submission";
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
     include_once("class.phpmailer.php");
         $mail = new PHPMailer();
         
         

         $mail->Priority = 1;
    $mail->From = $from;
    $mail->FromName = $from;
    $mail->Sender = $from;
    $mail->ReturnPath = $from;
    $mail->AddReplyTo($from, $from);
    $mail->AddAddress("ganesh.p@acutesoft.in", "ganesh.p@acutesoft.in");
    
   //$mail->AddBCC("dilipkumar@saket.in","dilipkumar@saket.in");
   //$mail->AddBCC("rangarao.t@acutesoft.in ","rangarao.t@acutesoft.in ");
     
         $mail->Body = $message;
         
             $mail->AltBody = "";
         $mail->Subject = $subject ;

                $sent =$mail->Send();
    
					?>
						<script>
							alert('email submitted');
							window.location.href='thank_you.php';
						</script>
					<?php
    }
?>
