<?php 

print_r($_POST);

//include "dbconnect.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tlevelexam";



$tutor = $_POST['fullname'];
$tutordateofbirth = $_POST['age'];
$tutorgender = $_POST['gender'];
$tutoremail= $_POST['email'];
$tutorphonenumber = $_POST['phonenumber'];
$tutorusername = $_POST['username'];
$tutorpassword = $_POST['password'];
$tutorclass = $_POST['class'];


	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';

        $tutorfullname = $conn->real_escape_string($_POST ['fullname']);
        $tutordateofbirth = $conn->real_escape_string($_POST ['age']);
        $tutorgender = $conn->real_escape_string($_POST ['gender']);
        $tutoremail = $conn->real_escape_string($_POST ['email']);
        $tutorphonenumber = $conn->real_escape_string($_POST ['phonenumber']);
        $tutorusername = $conn->real_escape_string($_POST ['username']);
        $ltutorpassword = $conn->real_escape_string($_POST ['password']);
        $tutorclass = $conn->real_escape_string($_POST ['class']);
        //$sql = "INSERT INTO pets (pet_name, pet_age, pet_type) VALUES  (\"$pet_name\", $pet_age, \"$pet_type\")";
        // this is a 2nd way of adding data to a database - this is useful as you dont have to use an excape character for the "" string. You need to do ""'s around strings as they can not be draw out like integers.
        $sql = <<<SQL
            INSERT INTO registered_tutors (TutorFullname, TutorDateOfBirth, TutorGender, TutorEmail, TutorPhoneNumber, TutorUsername, TutorPassword, TutorClass) VALUES ("$tutorfullname",$tutordateofbirth,"$tutorgender","$tutoremail",$tutorphonenumber, "$tutorusername","$tutorpassword","$tutorclass")
        SQL;

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          echo "<br>";
          echo "USER ID IS:". $conn->insert_id;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
} else {
   
  echo 'Sorry, connection failed!';
  
}

header('Location: /Projects/Blade-test/test_BladeOne/BladeOne/loginpagetutor.php');

  




  //if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //echo "<br>";
    //echo "USER ID IS:". $conn->insert_id;
  //} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;