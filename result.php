<?php
session_start();
?>


<?php 
error_reporting(0);
require 'config.php';
if(!empty($_SESSION['name'])){

    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 

   $keys=array_keys($_POST);
   $order=join(",",$keys);


   $response=mysql_query("select id,answer from questions where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());

   while($result=mysql_fetch_array($response)){
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
   $name=$_SESSION['name'];  
   mysql_query("update users set score='$right_answer' where user_name='$name'");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Easy Learning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">

		<style>
			body{
			background-color:white;
			}
			
			footer{
				text-align:center;
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
        <header>
            <p class="text-center" id='welcome'>
                Hey, <?php 
                if(!empty($_SESSION['name'])){
                    echo $_SESSION['name'];
                }?>. Thank you for completing the quiz.

            </p>
        </header>
        <div class="container result">
            <div class="row" id="quiz_result"> 
                    <div class='result-logo'>
                            <img src="image/Quiz_result.png" class="img-responsive"/>
                    </div>    
           </div>  
           <hr>   
           <div class="row"> 
                  <div class="col-xs-18 col-sm-9 col-lg-9"> 
                    <div class='result-logo1'>
                            <img src="image/thumb.png" class="img-responsive"/>
                    </div>
                  </div>

                  <div class="col-xs-6 col-sm-3 col-lg-3"> 

                       <div style="margin-top: 30%" id='result'>
                        <p><img src="images/tick.png">       <span class="answer"><?php echo $right_answer;?></span></p>
                        <p><img src="images/wrong.png">       <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p><img src="images/qmark.png">      <span class="answer"><?php echo $unanswered;?></span></p>                   
                       </div> 
                     <a href="quiz.php" class='btn btn-success'>Start new Quiz!!!</a>                   
                     <a href="destory.php" class='btn btn-success'>Logout</a>
                   </div>

            </div>    
            <div class="row">    

            </div>
        </div>
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
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery.validate.min.js"></script>

    </body>
</html>
<?php }else{

 header( 'Location: http://localhost/connected/index.php' ) ;

}?>