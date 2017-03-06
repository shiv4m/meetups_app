<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);


    if($_POST['sub-btn']){
        $status = 0;
        $to = $_POST['get-email'];
        $message = "Hello! Innovative way of helping people by providing them  an ideal match and amazing session partner!
                    Its basically renting a friend/partner for session of your choices ! \n
                    How does this work- \n
                    Well, we match your session with sessions of another member of our association/club and if you both have same demanded session then we make you meet! And this way it helps you hire a partner and enjoy their priceless company! 
                    Since we all know everygood and real stuffs have some cost and so as we! We have a entry cost of 1000 for 1 year! 
                    After membership first session is for Free.\n
                    We have several sessions and per session costs are as follows (excluding entry fees)
                    Dating session -1000
                    Friendship session -1000
                    Lunch session - 1000
                    Dinner session -1000
                    Gyming session- 1000
                    Clubbing session - 1000
                    Partying session - 1000
                    Traveling session - 1000
                    Massage session - 1000
                    Phone chat session -500
                    Movie sessions -500
                    Gaming sessions- 1000
                    😊
                    life is not only about love life, we need special equations with every person in every aspect of life *
                    Like you may have a coffee buddy, gym buddy n so on with whom u feel more confortable for that particular session even than your best friend !
                    Thats the mentality created among people!\n
                    Contact- rockstar - 7506066850";
        $message = wordwrap($message, 70);
        $subject = "Rendezvous - Contact rockstar, You need to contact us before continuing, Whatsapp or call us";
        $headers = 'From: noreply@rendezvous.in';
        mail($to, $subject, $message, $headers);
        $status = 1;
    }
?>
<!DOCTYPE HTML>


<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
          #one .container{
                margin-left: 30%;
                text-align: center;
            }
            #get-email {
	           background: #fff;
                margin-left: 50%;
                color: #000;
            }
        </style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span><img src="images/silhouettes.png" width="220px" height="100px"></span>
					<h1><strong>Rendezvous</strong>, is a service<br />
					that finds you a new friend to hangout with.</h1>
					<p style="color: #000;">Find out a partner with whom you can<br />
					date, chat, gym, party.</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Discover</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
                
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)" style="text-align:center">
							<header class="major">
								<h2>Our idea for a HAPPY life!</h2>
							</header>
							<p>Life is not about love life! We need a special equation with every person in every aspect of life! Like you may have a coffee buddy, gym buddy, and so on with whom you feel much more comfortable for that particular session even more than your bff/bf/gf. This is the mentality we aim to create among people!</p>
						</div>
						
					</div>
				</div>
			</section>

		<!-- Four -->
        
			<section id="four" class="main style2 special">
                <form method="post" action="index.php#four">
				<div class="container">
					<header class="major">
						<h2>Ready to hangout ?</h2>
					</header>
					<p>Enter your email address below to get iternary</p>
					<ul class="actions uniform">
                        <div class="6u$ 12u$(xsmall) okay">
				            <input type="email" name="get-email" id="get-email" value="" placeholder="Email" />
				        </div><br />
						  <input type="submit" name="sub-btn" class="button special" value="Get Started">
                        <br /><br />
                        <center><h3>Contact rockstar- 7506066850</h2></center>
					</ul>
                    <div class="res">
                        <?php
                            if($_POST['sub-btn']){
                                if($_POST['get-email'] == ''){
                                    echo "<center style='color: red; font-weight: bold;'>Enter a valid email address</center>";
                                }
                                else{
                                    if($status == 1)
                                        echo "<center style='color: green; font-weight: bold;'>Success!! Check your email.</center>";
                                    else
                                        echo "<center style='color: red; font-weight: bold;'>Error sending mail, try again later.</center>";
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