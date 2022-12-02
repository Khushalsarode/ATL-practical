

<?php
$name = $_POST['studname'];
$email = $_POST['email'];
$mobile = $_POST['mno'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];
$dept = $_POST['dept'];

if (!empty($name) || !empty($email) || !empty($phone) || !empty($address) || !empty($qualification) || !empty($course) || !empty($dept)){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO stud_reg (Name, Email, Mobile, Address, Qualification, Course, Department)
VALUES ('$name', '$email', '$mobile', '$address', '$qualification', '$course', '$dept')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>