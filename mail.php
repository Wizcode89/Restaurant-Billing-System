<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// import the modules
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// submit the form
if (isset($_POST['send'])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;
    $mail->Username = 'omwangi09@gmail.com'; //your email address
    $mail->Password = 'zesszmabusoduwsi'; // your password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('omwangi09@gmail.com'); // your email address
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo "
        <script>
            alert('message sent successfully');
            document.location.href = 'index.php';
        </script>    
    ";
// sqkfmzwliqpjwevx
}
?>