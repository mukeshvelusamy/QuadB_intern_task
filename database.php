<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database ="contact";
$conn = new mysqli($servername, $username, $password,$database);



$firstname = $_POST["Firstname"];
$lastname = $_POST["Lastname"];
$email = $_POST["Email"];
$companyname = $_POST["Company"];
$phone = $_POST["Phno"];
$ProjectTypeProduct = $_POST["Product"];
$message = $_POST["Message"];
$sql = "INSERT INTO contact_table (First Name,Last Name,Email,Company,Phone_Number,Product,Message)
VALUES ($firstname,$lastname,$email,$companyname,$phone,$ProjectTypeProduct,$message)";

if ($conn->query($sql) === TRUE) {
  alert "data stored";
} else {
  echo "data not stored";
}

$conn->close();
header('Location: index.html');
?>