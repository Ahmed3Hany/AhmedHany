<?php
/* 
include 'ConnectionString.php';
require_once 'Libraries/twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['username'];
        $phone = $_POST['Phone'];
        $msg  = $_POST['message'];

        $whatsformErrors = array();

        if (strlen($name) <= 3){
            $whatsformErrors[] = 'Username Must Be Larger than 3 Characters.';
        }
        foreach($whatsformErrors as $whatserror){
            echo  " <script> alert('$whatserror'); </script>";
        }
        if(empty($whatsformErrors)){
            

            // Twilio Account SID and Auth Token
            $accountSid = 'AC29554b0f53ed7e326368315b4625fba7';
            $authToken = '70b15a355ec4d611c087052ebeecb12a';

            // Create a new Twilio client
            $client = new Client($accountSid, $authToken);

            // WhatsApp number to send the message from
            $fromNumber = 'whatsapp:+14155238886'; // Replace with your Twilio WhatsApp number

            // WhatsApp number to send the message to
            $toNumber = 'whatsapp:+201212722052'; // Replace with the recipient's WhatsApp number

            // Message content
            $message = 'My Name: '.$name."\n".'My Phone Number: '.$phone."\n".'Message: '.$msg;

            // Send the WhatsApp message
            $client->messages->create(
                $toNumber,
                array(
                    'from' => $fromNumber,
                    'body' => $message
                )
            );

            echo  "<script> exWhatsform(); alert('Message Sent Successfully'); </script>";
        }
    } */
?>