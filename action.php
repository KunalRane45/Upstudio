<?php
$result="";
if(isset($_POST['submit'])){
    require'phpmailer/PHPMailerAutoload.php';
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $subject= $_POST['subject'];
    $msg= $_POST['msg'];
    
    $mail= new PHPMailer;
//    
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->username='mujib@upstudiodesign.co.in';
    $mail->password="";
    $mail->setfrom($_POST['email'],$_POST['name']);
    $mail->addAddress('mujib@upstudiodesign.co.in');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Body='<h3>Form Subbmission:' .$_POST['subject'].'<h3>';
    $mail->Body='<h3>Name :' .$_POST['name'].'<br> Email :' .$_POST['email'].'<br> Phone :' .$_POST['phone'].'<br> Message :' .$_POST['msg'].'<h3>';
    
    if(!$mail->send()){
        $result = "something went worng. please try again";
        echo "<script> alert('something went worng. please try again'); window.location='index.php';</script>";
        // header("Location: ./contact.php");
    }
    else{
        $result="thanks\t" .$_POST['name']. "for connecting us.";
        // echo'<script type="text/javascript"> alert("sucessfully sent")</script>';
        echo "<script> alert('sucessfully sent'); window.location='index.php';</script>";
        // header("Location: ./contact.php");
    }
  
}


?>