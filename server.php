<?php
// Script written by DProvat. 
// Please contact us if there are any errors or problems with usage. https://arprovat.com/
    
if(isset($_POST['email'])) {
    $email = $_POST['email'];

    // $adminsEmail= 'admin@arprovat.com'; //replace your admin mail where sent

    $adminsEmail= 'your@mail'; //replace your admin mail where sent
    $to = $email;
    $subject = 'php mail function testing';
    
    $headers = "From: ".$adminsEmail."\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    $body = "mail body. you can replace it with HTML";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'mail sent successfully';
        exit();
    }else{
        echo 'something error'; 
    }
}else{
    echo 'mail not found';
}
