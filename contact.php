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
		<link rel="stylesheet" type="text/css" href="contact.css">
		<link href="css/style.css" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>  
		
<script>

function getValidationErrors() {
	var erroredFields = [];
	if(document.form.name.value.length == 0) {
		erroredFields.push("Your name.\n");
	}
	if(document.form.email.value.length == 0) {
		erroredFields.push("Your email address.\n");
	}
	return erroredFields;
	}
	function validate() {
		var erroredFields = getValidationErrors();
		if (erroredFields.length > 0) {
			var errMsg = "The following fields are missing:\n"
			for (var i=0; i<erroredFields.length; i++){
				errMsg += "     * " + erroredFields[i];
			}
			window.alert(errMsg);
			return false;
		} else {
				window.alert("Thank you for your email. We will reply as soon as possible.");
	}
}
</script>
		
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
		<p class="text-center" id="welcome">
				Hello <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>
			</p>
		
		
		<div class="container">
			<div class="content">
				<form name="form" action="mailto:liamhalpin180@hotmail.com" method="GET" name="form" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="name">
                                Name: 
                            </label> 
                            <input class=
               "form-control" id="name" name="name" placeholder=
               "Please enter your name..." type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email:
                            </label> 
                            <input class=
               "form-control" id="email" name="email" placeholder=
               "Please enter your email address..." type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label> 
                            <textarea class="form-control" id="comment" name="com" placeholder="Please leave your comment..."rows="6"></textarea>
                           
                        </div>
                        <button class="btn btn-default btn-sm" type="submit" onClick="validate()">  
                            Submit
                        </button> 
                        <button class="btn btn-default btn-sm" type="submit">  
                            Reset
                        </button> 
                </form>
			
				<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=dublin+ireland&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=61.323728,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Dublin,+County+Dublin,+Ireland&amp;t=m&amp;z=11&amp;ll=53.349805,-6.26031&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=dublin+ireland&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=61.323728,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Dublin,+County+Dublin,+Ireland&amp;t=m&amp;z=11&amp;ll=53.349805,-6.26031" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				
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