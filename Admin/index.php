
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$con = mysqli_connect('localhost','root','','real_estate');
session_start();
if(isset($_SESSION['admin_id']))
{
  header("location:View_admin.php");
}
if(isset($_POST['Login_admin']))
{
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];

    $sql = "select * from admin where User_name ='$User_name' and Password='$Password'";
    $res=mysqli_query($con,$sql);

    $cnt = mysqli_num_rows($res);
    if($cnt == 0)
    {
        echo "<script>alert('Invalid Password');</script>";
    }else
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['admin_id']=$row['id'];
        $_SESSION['Email'] = $row['Email'];
        $Mail = $row['Email'];
        
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            //Server settings                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dreamwell1623@gmail.com';                     //SMTP username
            $mail->Password   = 'ihbe ytzf plqa vnva';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('dreamwell1623@gmail.com', 'Dreamwell');
            $mail->addAddress($Mail, $Mail);     //Add a recipient
            

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your OTP Code';
            $mail->Body    = 'Sender Email : dreamwell1623@gmail.com <br> Your OTP for login is: '.$otp;
            $mail->AltBody = 'Your OTP for login is: ' . $otp;

            $mail->send();
            echo 'OTP has been sent to your email.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }  
        
        header(("location:otp_page.php"));
        // header("location:View_admin.php");
        
    }
   
}



 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
     <!-- CSS Files -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="../User/cass/Login_style..css"> -->
</head>
<body>

    <div class="main">
    <div class="forms_design">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="inputs_group"> 
                <input type="text" placeholder="Enter Your Username" name="User_name">
                <span>Enter Username</span>
            </div>
            <div class="inputs_group">
                <input type="password" placeholder="Enter Your Password" name="Password">
                <span>Enter Password</span>
            </div>
            <div class="forget_link">
                <a href="#">Forget Your Password ?</a>
            </div>
            <div class="frm_btn">
                <button type="submit" name="Login_admin">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>