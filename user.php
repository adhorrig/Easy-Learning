<html>
    <head>
        <title>Welcome to Easy Learning</title>    
		<link rel="stylesheet" type="text/css" href="about.css">
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
						<li>
							<a href="destory.php">Logout</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
		<div class="container">
			<div class="content">
				<h4 style="color:red"> <strong>Below is the leaderboard for the letter matching game.</strong> </h4>
				
				<?php 

				error_reporting(0);
				require 'connect.php';

				$i = 0;
				if($result = $db->query("SELECT alphabetone,user_name FROM users ORDER BY alphabetone ASC ")){
						if($count = $result->num_rows){
							
							
							
							
							while($row = $result->fetch_object()){
								$i++;
								echo "<p>#$i - $row->user_name : $row->alphabetone clicks.</p><br>";
								
								
								
							}
							
							$result->free();
							
							
						}
					
				}
				?>
				<h4 style="color:red"><strong> Below is the quiz leaderboard.</strong> </h4>
				
				<?php 

				error_reporting(0);
				require 'connect.php';


				$i = 0;
				if($result = $db->query("SELECT * FROM users ORDER BY score DESC ")){
					if($count = $result->num_rows){
						while($row = $result->fetch_object()){
							$i++;
							echo "<p>#$i - $row->user_name : $row->score/10.</p><br>";
						}
						$result->free();
					}
				}
				?>
				
			

		</div>	
    </body>
</html>