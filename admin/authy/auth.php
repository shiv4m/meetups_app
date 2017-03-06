<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    require('../../connect.php');
    if($_POST['sub-btn']){
       $length = 8;
    $randomBytes = openssl_random_pseudo_bytes($length);
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $hash = '';
    for ($i = 0; $i < $length; $i++){
        $password .= $characters[ord($randomBytes[$i]) % $charactersLength];
     }
    $to = $_POST['send-email'];
    $subject = "Rendezvous - OTP";
    $headers = 'From : noreply@rendezvous.in';
    $message = "Register yourself at : \n
    with your one time password : $password";
    mail($to, $subject, $message, $headers);
    echo "success";
        
         $sql = "INSERT INTO passwords (password, status)
    VALUES('$password', '0')";
    
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        

?>
<!DOCTYPE html>
<head>
    <title>
        admin
    </title>
</head>
    <body>
        <form method="post" action="auth.php">
        <div>
            <input type="email" name="send-email">
            <input type="submit" name="sub-btn" value="submit">
        </div></form>
    </body>
</html>