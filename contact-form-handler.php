<?php
     $firstname = $_POST{'firstname'};
     $visitor_email = $_POST{'email'};
     $mobile = $_POST{'phone-no'};
     $country = $_POST{'country'};
     $message = $_POST{'message'};

     $email_from = 'https://noman258.github.io/Findiway';
     
     $email_subject = "New Form Submission";

     $email_body = "User Name : $firstname . \n".
                     "User Email : $visitor_email. \n".
                     "User Mobile Number : $mobile. \n".
                     "User Country : $country. \n".
                     "User Message : $message. \n";

    $to = "tecnocity8@gmail.com";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    ?>
                     


