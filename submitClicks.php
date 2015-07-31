<?php
session_start();
?>

<?php
error_reporting(0);
require 'config.php';
?>
<h3> Hey, <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>, your number of clicks has been submitted! Check out the leaderboards to see where you rank.</h3>
<?php
require 'connect.php';
$number_of_clicks = $_POST["cnt"];
$db->query("update users set alphabetone= '$number_of_clicks' WHERE user_name='".$_SESSION['name']."'");
?>