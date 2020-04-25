<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'rodellalabs.in';

    $email_subject = "New Query";

    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message: $message\n";
                        
    $to = "query@rodellalabs.in";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    $msg = "Query Submitted Successfully!";

    header("Location: contact.html?msg=".$msg);

?>