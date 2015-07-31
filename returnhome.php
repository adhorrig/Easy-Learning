<?php
session_start();
?>

<?php
error_reporting(0);
require 'config.php';
?>
<?php
require 'connect.php';
$number_of_clicks = $_POST["cnt"];
$db->query("update users set alphabetone= '$number_of_clicks' WHERE user_name='".$_SESSION['name']."'");
?>
<html>
    <head>
        <title>Welcome to Easy Learning</title>    
		<link rel="stylesheet" type="text/css" href="about.css">
		<link href="css/style.css" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>  
        <style>


            @import url(css/bootstrap.min.css);   
			#form{
				text-align:left;
				}
        </style>
    </head>
    <body> 
         <nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">Easy Learning</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="home1.php">Home</a>
						</li>
						<li>
							<a href="teach.php">Learn math</a>
						</li>
						<li>
							<a href="learnenglish.php">Learn English</a>
						</li>
						
						<li>
							<a href="user.php">Leader-board</a>
						</li>

						<li>
							<a href="quiz.php">Quiz</a>
						</li>
						
						<li>
							<a href="contact.php">Contact us</a>
						</li>

						
						
						
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
		<div class="container">
			<div class="content">
				<h1><?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>, you have submitted your clicks. View the <a href = "user.php"> leaderboards</a> to see where you rank.</h1>
			
				<p>The website has two sections. The first section is where you can <strong> learn </strong> and the second section is where you can <strong> test yourself.</strong> We teach two subjects at a basic level, <strong> math </strong> and <strong> english. </strong></strong></p>
				<p> If you want to learn about math, <strong>click</strong> the image below </p>
				<a href="teach.php"><img src="images/maths.png"></a>
				<p> If you want to learn about English, <strong>click</strong> on the image below </p>
				<a href="learnenglish.php"><img src="images/english.png"></a>
				
				<footer>
					<div class="row">
						<div class="col-lg-12">
							<ul class="list-inline">
									<li>
										<a href="home1.php">Home</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="contact.html">Contact us</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="aboutus.html">About us</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="#">English</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="math.html">Mathematics</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="#">Shapes</a>
									</li>
								</ul>
							<p class="copyright text-muted small">Copyright &copy; Easy Learning 2015. All Rights Reserved.</p>
						</div>
					</div>
				</footer>

		</div>	
    </body>
</html>