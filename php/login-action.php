<?php

include_once "dbconect.php";
$conn = connect();

$user = $conn->real_escape_string($_POST['username']);
$pass = $conn->real_escape_string($_POST['password']);

$result = $conn->query("SELECT * FROM login WHERE username='$learnerusername'");

if ($row = $result->fetch_assoc()){

    if (password_verify($pass, $row['password'])) {
        session_start();
        $_SESSION['userid'] = $row['ID'];
        $_SESSION['username'] = $learnerusername;
        header("Location: loggedin.php");
    
    }
    
}
else
{
    echo'internal failure';
}


?>