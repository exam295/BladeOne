<?php


session_start();

if ( isset($_SESSION['username']))
{
  echo 'Logged in as ' . $_SESSION['username'] . ' | ' . '   User ID = '. $_SESSION['userid'];

}else{
  echo 'Not logged in currently';
}





?>

Click here to <a href="logout.php" tite="Logout">Logout.</a>