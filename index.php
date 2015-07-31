<?php
session_start();
?>

<?php
error_reporting(0);
require 'config.php';
?>
<html>
    <head>
        <title>Welcome to Easy LEarning</title>    
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>  
        <style>


            @import url(css/bootstrap.min.css);   


            html,body{
                background-image: url(background.jpg);
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center;
                height: 100%;
                width: 100%;
            }

            .textarea{
                position: absolute;
                bottom: 40%;
                left:0%;
                right:0%;
                text-align:center;
                width:100%;
                background: rgba(0, 0, 0, 0.2);
                color: #eee;
                padding:20px;


            }
        </style>
    </head>
    <body> 
        <div class="container">
            <div class="textarea">
                <form action="home1.php">
			<header>
			
			<br/>
			</header>
                    <h1>Welcome to Easy Learning!</h1>
                    <p class="lead">Easy learning is a platform that provides an interactive environment for students to learn</p>
                    <input class="btn btn-default btn-lg" type="submit" value="Enter site" />
                </form>
            </div>
        </div>
    </body>
</html>
