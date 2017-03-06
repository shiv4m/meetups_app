<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    //error_reporting(E_ALL ^ E_DEPRECATED);

    require('./connect.php');
    if($_POST['sub-btn']){
        $name = $_POST['get-name'];
        $email = $_POST['get-email'];
        $contact = $_POST['get-number'];
        $sessionno = $_POST['ses-category'];
        $pass = $_POST['get-pass'];
        if($sessionno == '')
            echo "";
         else if($sessionno == '1'){
            $session = 'dating';
            $price = 'INR 1500';
            }
         else if($sessionno == '2'){
            $session = 'friendship';
            $price = 'INR 1000';
            }
         else if($sessionno == '3'){
            $session = 'lunch';
            $price = 'INR 1000';
             }
         else if($sessionno == '4'){
            $session = 'dinner';
            $price = 'INR 1000';
             }
         else if($sessionno == '5'){
            $session = 'gyming';
            $price = 'INR 1000';
             }
         else if($sessionno == '6'){
            $session = 'clubbing';
            $price = 'INR 1000';
             }
         else if($sessionno == '7'){
            $session = 'partying';
            $price = 'INR 1000';
             }
         else if($sessionno == '8'){
            $session = 'travelling';
            $price = 'INR 1000';
             }
         else if($sessionno == '9'){
            $session = 'massage';
            $price = 'INR 1000';
             }
         else if($sessionno == '10'){
            $session = 'phonechat';
            $price = 'INR 500';
             }
         else if($sessionno == '11'){
            $session = 'movie';
            $price = 'INR 500';
             }
         else if($sessionno == '12'){
            $session = 'gaming';
            $price = 'INR 1000';
             }
        $sexno = $_POST['gen-category'];
        if($sexno == ''){
            echo "";
        }
        else if($sexno == '1'){
            $sex = 'Male';
            }
        else if($sexno == '2'){
            $sex = 'Female';
            }
        else if($sexno == '3'){
            $sex = 'Other';
            }
        if($name == '' || $email == '' || $contact == '' || $sessionno == '' || $sexno == '' || $pass == ''){
            $msg = 11;
            echo '<script type="text/javascript">alert("Please fill out all the credentials..");</script>';
        }
        else{
        $sql1 = "SELECT * FROM passwords WHERE password='$pass'";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $status1 = $row["status"];
                   $oppass = $row["password"];
                }
        
        } 
        if($oppass == $pass){
        if($status1 == 0){
                $sql = "INSERT INTO $session (Full, contact, session, gender)
            VALUES('$name', '$contact', '$session', '$sex')";

                if ($conn->query($sql) === TRUE) {
                    echo "";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            
            $sqlpass = "UPDATE passwords SET status='1' WHERE password = '$pass'";
            if ($conn->query($sqlpass) === TRUE) {
                    echo "";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            $msg = 1;
         } 
        }
       
        else{
            $msg = 0;
        }
      }
    }
    
?>
<!DOCTYPE HTML>


<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
            #get-email, #get-name, #get-number,#get-pass{
                margin-left: 50%;
                color: #fff;
            }
            #four .container{
                min-height: 500px;
            }
            .select-wrapper {
                width: 560px;
            }
        </style>
        
	</head>
	<body>

		<!-- Four -->
        
			<section id="four" class="main style2 special okay">
                <form method="post" action="register.php#four" id="reg-form">
				<div class="container">
					<header class="major">
						<h2>Fill out details below.</h2>
					</header>
					<ul class="actions uniform">
                        <div class="6u$ 12u$(xsmall) okay">
				            <input type="text" name="get-name" id="get-name" value="" placeholder="Full name" />
				        </div><br />
                        <div class="6u$ 12u$(xsmall) okay">
				            <input type="email" name="get-email" id="get-email" value="" placeholder="Email" />
				        </div><br />
                        <div class="12u$">
									<center><div class="select-wrapper" width="500px">
										<select name="ses-category" id="ses-category" width="400px">
											<option value="">- Choose a session -</option>
											<option value="1">Dating</option>
											<option value="2">Friendship</option>
											<option value="3">Lunch</option>
											<option value="4">Dinner</option>
                                            <option value="5">Gyming</option>
                                            <option value="6">Clubbing</option>
                                            <option value="7">Partying</option>
                                            <option value="8">Travelling</option>
                                            <option value="9">Massage</option>
                                            <option value="10">Phone chat</option>
                                            <option value="11">Movie</option>
                                            <option value="12">Gaming</option>
										</select>
									</div></center>
				        </div><br />
                        <div class="12u$">
									<center><div class="select-wrapper" width="500px">
										<select name="gen-category" id="gen-category" width="400px">
											<option value="">- Sex -</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
                                            <option value="3">Other</option>
										</select>
									</div></center>
				        </div><br />
                         <div class="6u$ 12u$(xsmall) okay">
				            <input type="text" name="get-number" id="get-number" value="" placeholder="Enter Contact number" />
				        </div><br />
                        <div class="6u$ 12u$(xsmall) okay">
				            <input type="password" name="get-pass" id="get-pass" value="" placeholder="Enter your otp" />
				        </div><br />
						  <input type="submit" name="sub-btn" class="button special" value="Submit">
					</ul>
                    <div class="res">
                        
                        <?php
                         
                        if($_POST['sub-btn']){
                           
                            if($msg == 0){
                                echo "<center style='color: red; font-weight: bold;'>Invalid Password.<br />Contact rockstar for membership at <a href='index.php'>here</a></center>";
                            }
                            else if($msg == 1){
                                echo "<center style='color: green; font-weight: bold;'>We 'll reach you ASAP.</center>";
                             echo '<script type="text/javascript">alert("We care for you, hold on we\'ll reach you soon!");</script>';
                            }
                            else if($msg == 11){
                                echo "<center style='color: red; font-weight: bold;'>Fill out all the credentials</center>";
                            }
                        }
                        ?>
                    </div>
				</div></form>
			</section>
        

		
		

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/Rendezvous-338613946537232/" class="icon alt fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/__r.e.n.d.e.z.v.o.u.s__/" class="icon alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
				</ul>
				<ul class="copyright" style="color: black;">
					<li>&copy; Rendezvous</li><li></li>
                    <center><h4 style="color: #000; font-weight: bold;">Developed by - Shivam Shukla</h4></center>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>