<?php

// Create varaibles
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // send to publicly found email
    $mailTo = "landis.tanvir@moosbay.com";
    // $mailTo = "TheFerretStudio@gmail.com";
    $headers = "From: " . $emailFrom;
    $txt = "You have recieved an email from " . $name . " " . $phoneNumber . ".\n\n" . $message;


    mail($mailTo, $headers, $txt);
    header("Location: contact.html?mailsend");

}