<?php




    $email_to = 'kamaubrian05@gmail.com';
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    //$headers = "From: $email\r\n";
 //   $headers = "Reply-To $email\r\n";

    mail($email_to, "$subject", "From:" . $email);
    echo "Thank u for contacting us";




/*
   if(mail($email_to,$message,$headers,$subject)){
       echo "Email Sent Successfully";

   }else{
       echo "Email Delivery Failed";
}*/
