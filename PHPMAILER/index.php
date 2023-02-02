<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 bg-light shadow rounded p-5">
                <h3 class="fw-bold mb-3">Contact Us</h3>
                <form  method="post">
                <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="Name" class="form-control shadow-none" placeholder="name" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Emai</label>
                        <input type="email" name="Email" class="form-control shadow-none" placeholder="abc@gmail.com" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="Message" rows="3" class="form-control shadow-none" placeholder="type msg"></textarea>
                    </div>
                    <button type="submit" name="Login" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      //require (attcahed) the three files.
      require("PHPMailer/Exception.php");
      require("PHPMailer/SMTP.php");
      require("PHPMailer/PHPMailer.php");

     if(isset($_POST['Login'])){
      $name=$_POST['Name'];
      $email=$_POST['Email'];
      $message=$_POST['Message'];

      $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tjdravinanshu@gmail.com';                     //SMTP username
            $mail->Password   = 'sxphtsddlmbaakwf';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('tjdravinanshu@gmail.com', 'TJ Dravinanshu');
            $mail->addAddress('tjdravinanshu@gmail.com');     //Add a recipient
          
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contact Us';
            $mail->Body    = "Name: $name <br> Email: $email <br> Message: $message";
          
        
            $mail->send();
            echo "<script>alert('Message has been sent')</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
        }
     }

   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>