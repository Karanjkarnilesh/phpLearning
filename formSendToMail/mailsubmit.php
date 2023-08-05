<?php

if (isset($_POST['submit'])) {
    $to = $_POST['to'];
    $from = $_POST['form'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea'];
    $headers = 'From: ' . $from . '\r\n';

    var_dump($_POST);
    $mailsend = mail($to, $subject, $textarea, $headers);
    try {
        if ($mailsend) {
            echo "send mail";
        }
    } catch (\Exception $th) {
        echo $th;
    }
}
