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
		<link rel="stylesheet" type="text/css" href="teach.css">
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
				
				
				
				<h1 style="color:red"> <strong>Addition</strong> </h1> 
				<p> When you add two numbers together, you are getting the sum of the two numbers. An example is below. Three cars added with one car is four cars.</p>
				<img src="images/toy-car.png">
				<img src="images/toy-car.png">
				<img src="images/toy-car.png">
				<h1> + (PLUS)</h1>
				<img src="images/toy-car.png">
				<h1> = (EQUALS)</h1>
				<img src="images/toy-car.png">
				<img src="images/toy-car.png">
				<img src="images/toy-car.png">
				<img src="images/toy-car.png"> </br>
				
				<h1 style="color:red"> <strong>Subtraction</strong> </h1>
				<p> Subtraction is the opposite of additions. When you subtract two numbers, you remove the smaller number out of the bigger number. An example is below. Three apples minus one apple is two apples.</p>
				<img src="images/apple.png">
				<img src="images/apple.png">
				<img src="images/apple.png">
				<h1> - (MINUS) </h1>
				<img src="images/apple.png">
				<h1> = (EQUALS) </h1>
				<img src="images/apple.png">
				<img src="images/apple.png"> </br>
				
				<h1 style="color:red"> <strong>Multiplication</strong> </h1>
				<p> Multiplication is when a number is obtained a number of times. An example is below. One dog princess by two princess is two dogs. </p>
				<img src="images/princess.png">
				<h1> x (MULTIPLIED BY)</h1>
				<img src="images/princess.png">
				<img src="images/princess.png">
				<h1> = (EQUALS)</h1>
				<img src="images/princess.png">
				<img src="images/princess.png"> </br>
				
				<h1 style="color:red"> <strong>Division</strong> </h1>
				<p> Division is how many times a smaller number goes into a bigger number. An example is below. Four candies divided by one is four. </p>
				<img src="images/lolly.png">
				<img src="images/lolly.png">
				<img src="images/lolly.png">
				<img src="images/lolly.png">
				<h1> / (DIVIDED BY) </h1>
				<img src="images/lolly.png">
				<h1> = (EQUALS)</h1>
				<img src="images/lolly.png">
				<img src="images/lolly.png">
				<img src="images/lolly.png">
				<img src="images/lolly.png"> 
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