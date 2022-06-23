<?php 
$response="";
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['submitButton']))
{//1. Fetch form data
$firstName = $_POST["firstName"];
$lastName= $_POST["lastName"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST['message'];


  //2. submit form data
  $insertData = mysqli_query($conn, "INSERT INTO
  contactus(firstName,lastName,phonenumber,email,message)
  VALUES('$firstName', '$lastName', '$phone', '$email', '$message')");

if($insertData)
{
  $response= "data submitted successfully ";

}
else{
  $response="error occurred";
}

}

?>
