<?php
session_start();
?>

<?php
error_reporting(0);
require 'config.php';
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
						<li>
							<a href="destory.php">Logout</a>
						</li>

						
						
						
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
		<div class="container">
			<div class="content">
			<h3> Hey, <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>. Your score in your latest quiz attempt is:  
			<?php 

				error_reporting(0);
				require 'connect.php';


				if($result = $db->query("SELECT * FROM users WHERE user_name='".$_SESSION['name']."'")){
						if($count = $result->num_rows){
							
							
							
							
							while($row = $result->fetch_object()){
								
								echo $row->score;
								
								
								
							}
							
							$result->free();
							
							
						}
					
				}
				?> / 8. <a href="quiz.php">Can you do better?</a></h3>
				<h1 style="color:red"> <strong>Days of the week</strong></h1>
				<img src="images/monday.png">
				<img src="images/tuesday.png">
				<img src="images/wednesday.png">
				<img src="images/thursday.png">
				<img src="images/friday.png">
				<img src="images/saturday.png">
				<img src="images/sunday.png">
				
				<h1 style="color:red"> <strong>Verbs</strong> </h1> 
				<p> A verb is a doing word, for example running or swimming </p>
				<p><img src="images/swimming.png"></p>
				<img src="images/running.png">
				
				<h1 style="color:red"> <strong>Adjectives</strong> </h1>
				<p> An adjective is a describing word, for example the boy had a very <strong> big </strong> hand </p> 
				<img src="images/bighand.png">
				
				<h1 style="color:red"> <strong>Nouns</strong> </h1>
				<p> A noun is a person, place or thing. For example, a building or an aeroplane </p>
				<img src="images/building.png">
				<img src="images/aeroplane.png">
				
				<h1 style="color:red"> <strong>Letters </strong></h1> 
				<p> <strong> Click </strong> the image below to learn how to pronounce letters. </p>
				<a href="abcs.php"><img src="images/spund.png"></a>
				<p> <strong> Click </strong> the image below to play a game where you have to match letters. </p>
				<a href="alphabetone.php"><img src="images/game.jpg"></a>
				
				</br>
				</br>
				</br>
				<form action="quiz.php" id="form"> 
					<input type="submit" class="btn btn-default" value="Take the quiz!" />
				</form>
				
				<footer>
					<div class="row">
						<div class="col-lg-12">
							<ul class="list-inline">
									<li>
										<a href="home1.php">Home</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="contact.php">Contact us</a>
									</li>
									
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="learnenglish.php">English</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="teach.php">Mathematics</a>
									</li>
									<li class="footer-menu-divider">&sdot;</li>
									<li>
										<a href="quiz.php">Quiz</a>
									</li>
								</ul>
							<p class="copyright text-muted small">Copyright &copy; Easy Learning 2015. All Rights Reserved.</p>
						</div>
					</div>
				</footer>

		</div>	
    </body>
</html>
