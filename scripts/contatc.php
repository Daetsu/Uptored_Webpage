<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $mailTo = "info@uptored.com";
    $headers = "From: ".$mailForm;
    $txt = "Tienes un email from " .$name.".\n\n".$message;

    mail($mailTo, &subject, $txt, $headers);
    header("Location: index.php?mailsend");


}