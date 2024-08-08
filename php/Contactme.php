 <?php
/* 
	include 'ConnectionString.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['username'];
        $mail = $_POST['email'];
        $subj = $_POST['subject'];
        $msg  = $_POST['message'];

        $contformErrors = array();

        if (strlen($name) <= 3){
            $contformErrors[] = 'Username Must Be Larger than 3 Characters.';
        }
        if (strlen($msg) <= 5){
            $contformErrors[] = 'Message Must Be Larger than 5 Characters.';
        }
        foreach($contformErrors as $conterror){
            echo  " <script> alert('$conterror'); </script>";
        }
        $header = 'Form: '. $mail . '\r\n';
        if(empty($contformErrors)){
            mail('ahmedghayouba1@gmail.com', 'ContactForm', 'Name: '.$name."\n".'E-mail From: '.$mail."\n"."Message: \n".$msg, $header);
            echo  " <script> excontform(); alert('Message Sent Successfully'); </script>";
        }

    }
 */
?>