<?php 

print_r($_POST);

//include "dbconnect.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tlevelexam";



$learnerfullname = $_POST['fullname'];
$learnerdateofbirth = $_POST['age'];
$learnergender = $_POST['gender'];
$learneremail= $_POST['email'];
$learnerphonenumber = $_POST['phonenumber'];
$learnerusername = $_POST['username'];
$learnerpassword = $_POST['password'];
$learnerclass = $_POST['class'];


	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';

        $learnerfullname = $conn->real_escape_string($_POST ['fullname']);
        $learnerdateofbirth = $conn->real_escape_string($_POST ['age']);
        $learnergender = $conn->real_escape_string($_POST ['gender']);
        $learneremail = $conn->real_escape_string($_POST ['email']);
        $learnerphonenumber = $conn->real_escape_string($_POST ['phonenumber']);
        $learnerusername = $conn->real_escape_string($_POST ['username']);
        $learnerpassword = $conn->real_escape_string($_POST ['password']);
        $learnerclass = $conn->real_escape_string($_POST ['class']);
        //$sql = "INSERT INTO pets (pet_name, pet_age, pet_type) VALUES  (\"$pet_name\", $pet_age, \"$pet_type\")";
        // this is a 2nd way of adding data to a database - this is useful as you dont have to use an excape character for the "" string. You need to do ""'s around strings as they can not be draw out like integers.
        $sql = <<<SQL
            INSERT INTO registered_learners (LearnerFullname, LearnerDateOfBirth, LearnerGender, LearnerEmail, LearnerPhoneNumber, LearnerUsername, LearnerPassword, LearnerClass) VALUES ("$learnerfullname",$learnerdateofbirth,"$learnergender","$learneremail",$learnerphonenumber, "$learnerusername","$learnerpassword","$learnerclass")
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


header('Location: /Projects/Blade-test/test_BladeOne/BladeOne/loginpagelearner.php');


  //, LearnerDateOfBirth, LearnerGender, LearnerEmail, LearnerPhoneNumber LearnerUsername, LearnerPassword, LearnerClass  (, $learnerdateofbirth,"$learnergender","$learneremail","$learnerphonenumber", "$learnerusername","$learnerpassword","$learnerclass")




  //if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //echo "<br>";
    //echo "USER ID IS:". $conn->insert_id;
  //} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;