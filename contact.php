<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
      $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
      $message = trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));

      if ($name == "" || $email == "" || $message == "") {
        echo "<h1>Please enter name, email, or message...</h1>";
        exit;
      }
      if ($_POST["address"] != "") {
        echo 'Bad form input...';
        exit;
      }

      require "phpmailer/class.phpmailer.php";
      $mail = new PHPMailer;
      
      if (!$mail->ValidateAddress($email)) {
        echo "<h1>Invalid Email Address...</h1>";
        exit;
      }

      $email_body = " ";
      $email_body .= "Name " . $name . "\n";
      $email_body .= "Email " . $email . "\n";
      $email_body .= "Message " . $message . "\n"; 

      $mail->setFrom($email, $name);
      $mail->addAddress('justin@mymac.ca', 'Justin Warger');     // Add a recipient

      $mail->isHTML(false);                                  // Set email format to HTML

      $mail->Subject = 'Personal Website Message from: ' . $name;
      $mail->Body    = $email_body;

      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
      } 

      header("Location:index.php?status=thanks");

    }
    
    if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
      include "inc/thankyou.php";
    } else { 
?>
    <div class="container-fluid" id="contact">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="well well-sm">
            <form class="form-horizontal" method="post" action="index.php">
            <legend class=" header display-4 p-5 text-center">Contact Me</legend>
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8 offset-md-2">
                  <input id="fname" name="name" type="text" placeholder="Name" class="form-control">
                </div>
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2"><i class="fa fa-envelope-o bigicon"></i></span>
                <div class="col-md-8 offset-md-2">
                  <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                </div>
              </div> 
              <div class="form-group hidden-xs-up">
                <span class="col-md-1 col-md-offset-2"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8 offset-md-2">
                  <input id="address" name="address" type="text" placeholder="Please leave this empty..." class="form-control">
                </div>
              </div> 
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <div class="col-md-8 offset-md-2">
                  <textarea class="form-control" id="message" name="message" placeholder="Enter your message here." rows="7"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-info btn-lg my-5">Submit</button>
                </div>
              </div>
            </div>
            </form>
            
            <?php } ?> 
          
          </div>
        </div>
      </div>
    </div>