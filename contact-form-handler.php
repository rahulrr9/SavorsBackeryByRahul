<?php
    $firstname = $_POST{'firstname'};
    $lastname = $_POST{'lastname'};
    $visitor_email = $_POST{'email'};
     $mobile = $_POST{'phone-no'};
     $message = $_POST{'message'};

     $email_from = 'https://rahulrr9.github.io/SavorsBackeryByRahul';
     
     $email_subject = "New Form Submission";

     $email_body = "User First Name : $firstname . \n".
                     "User First Name : $lastname . \n".          
                     "User Email : $visitor_email. \n".
                     "User Mobile Number : $mobile. \n".
                     "User Message : $message. \n";

    $to = "tecnocity8@gmail.com";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    ?>
                     


