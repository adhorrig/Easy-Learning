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
			
	div#letter_board{
	background:#7FFF00;
	border:#999 1px solid;
	width:1000px;
	height:400px;
	padding:24px;
	margin:0px auto;
}
div#letter_board > div{
	background: url(question.png) no-repeat;
	border:#000 1px solid;
	width:97px;
	height:97px;
	float:left;
	margin:10px;
	padding:20px;
	font-size:64px;
	cursor:pointer;
	text-align:center;
}
        </style>
		<script>
var letter_array = ['imageABC/aa.png','imageABC/aa.png','imageABC/bb.png','imageABC/bb.png','imageABC/cc.png','imageABC/cc.png','imageABC/dd.png','imageABC/dd.png','imageABC/ee.png','imageABC/ee.png','imageABC/ff.png','imageABC/ff.png','imageABC/gg.png','imageABC/gg.png','imageABC/hh.png','imageABC/hh.png','imageABC/ii.png','imageABC/ii.png','imageABC/jj.png','imageABC/jj.png','imageABC/kk.png','imageABC/kk.png','imageABC/ll.png','imageABC/ll.png',];
var letter_values = [];
var letter_tile_ids = [];
var tiles_flipped = 0;




var cnt=0;
document.onclick = function() {

    cnt++;
    var divData=document.getElementById("showCount");
    divData.value=cnt;
    document.getElementById("JustShow").innerHTML= cnt;

};

 
Array.prototype.letter_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function newBoard(){
	tiles_flipped = 0;
	var output = '';
    letter_array.letter_tile_shuffle();
	for(var i = 0; i < letter_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="letterFlipTile(this,\''+letter_array[i]+'\')" onclick="CountFun()"></div>';
	}
	document.getElementById('letter_board').innerHTML = output;
}

 
	
	
function letterFlipTile(tile,val){
	if(tile.innerHTML == "" && letter_values.length < 2){
		tile.style.background = '#FFF';
		tile.innerHTML = '<img src="'+val+'" >';
		if(letter_values.length == 0){
			letter_values.push(val);
			letter_tile_ids.push(tile.id);
		} else if(letter_values.length == 1){
			letter_values.push(val);
			letter_tile_ids.push(tile.id);
			if(letter_values[0] == letter_values[1]){
				tiles_flipped += 2;
				// Clear both arrays
				letter_values = [];
            	letter_tile_ids = [];
				// Check to see if the whole board is cleared
				//alert box
				if(tiles_flipped == letter_array.length){
					alert("Congratulation your score was " + clicks + " Can you beat it? " );
					document.getElementById('letter_board').innerHTML = "";
					newBoard();
					
				}
			} else {
				function flip2Back(){
				    // Flip the 2 tiles back over
				    var tile_1 = document.getElementById(letter_tile_ids[0]);
				    var tile_2 = document.getElementById(letter_tile_ids[1]);
					var tile_3 = document.getElementById(letter_tile_ids[0]);
				    tile_1.style.background = 'url(question.png) no-repeat';
            	    tile_1.innerHTML = "";
				    tile_2.style.background = 'url(question.png) no-repeat';
            	    tile_2.innerHTML = "";
					tile_3.style.background = 'url(question.png) no-repeat';
            	    tile_3.innerHTML = "";
				    // Clear both arrays
				    letter_values = [];
            	    letter_tile_ids = [];
				}
				setTimeout(flip2Back, 1000);
			}
		}
	}
}
</script>

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
			<p class="text-center" id="welcome">
				Welcome <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>. Match the letters and submit your clicks to see where you rank!
				
			</p>
			<div id="JustShow"></div>
			<form action="returnhome.php" id="form" method="post">
				<input type="hidden" id="showCount" name="cnt" value="0" />
				<input type="submit" class="btn btn-default" value="Submit Clicks" />
			</form>


			<div id="letter_board"></div>
			<script>newBoard();</script>
			<div id="showCount"></div> 

			
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
		</div>
    </body>
</html>
