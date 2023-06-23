<?php

//error_reporting(E_ALL);





$name=$_POST['name'];

$email=$_POST['email'];

$mobile=$_POST['number'];

$subject1=$_POST['company_name'];

$message=$_POST['subject'];



/*$q1='TCS';

$q2='parthdesai1989@gmail.com';

$q3='8369392745';

$q4='nothing';

$q5='12/03/2018 1:00 PM';*/





      //$to='info@xeniumdigital.com'. ', '; // note the comma
     $to='myron@immersionx.io';
     

      $subject='Beamboxx Contact Form';

      $message = "

                <html>

                <head>

                </head>

                <body>

                <p>Please Find Following Enquiry</p>

                <table>

                <tr>

                <td><b>Name:</b></td>

                <td>".$name."</td>

                </tr>

                <tr>

                <td><b>Email Address:</b></td>

                <td>".$email."</td>

                </tr>

                <tr>
                
                <tr>

                <td><b>Mobile Number:</b></td>

                <td>".$mobile."</td>

                </tr>

                <tr>

                <td><b>subject:</b></td>

                <td>".$subject1."</td>

                </tr>

                <tr>

                <td><b>Message:</b></td>

                <td>".$message."</td>

                </tr>

                </table>

                </body>

                </html>";

                

     // Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'Cc: sunderrajan@immersionx.io' . "\r\n";

    // More headers

    $headers .= 'From:'.$email . "\r\n";

    $result =mail($to,$subject,$message,$headers); 

    //echo $result;

    //exit();

    if($result) {   

        echo "Success";

        // echo'<script>window.location.replace("thank_you.html");</script>'; 

    } 

    else {

        echo "Error"; 

    }



?>

