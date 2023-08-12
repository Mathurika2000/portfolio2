<?php
// Retrieve form data
$userName = $_POST['userName'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$message = $_POST['message'];
//$name = $_GET['name'];
// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'personal_portfolio';
// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Insert form data into the database
$sql = "INSERT INTO user_deatiles (userName,email,phone,message) VALUES ('$userName','$email','$phone','message')";
if ($conn->query($sql) === TRUE) {
echo "Form submitted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the database connection
$conn->close();
?>

<?php
echo "<h2>Your Input:</h2>";
echo $userName;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $message;

?>

<?php
// define variables and set to empty values
$userNameErr = $emailErr = $phoneErr = $messageErr = "";
$userName = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userName"])) {
    $userNameErr = "Name is required";
  } else {
    $userName = test_input($_POST["userName"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
      if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>