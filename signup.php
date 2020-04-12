<?php
$servername="fdb14.biz.nf";
$username="2289025_dhrumil";
$password="kishandobariya1";
$db="2289025_dhrumil";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn == false)
{
die("not connect" . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$gender=$_POST['gender'];
$user_name= $_POST['user_name'];
$password= $_POST['password'];
if($_POST['gender']=="Male")
{
$gender="M";
}
else
{
$gender="F";
}

$email = $_POST['email'];
$address = $_POST['address'];
$mobile_number = $_POST['mobile_number'];
$query = "INSERT into signup(firstname,lastname,user_name,password,gender,email,address,mobile_number)
values ('$firstname','$lastname','$user_name','$password','$gender','$email','$address',$mobile_number)";
$result=mysqli_query($conn,$query);

if($result == true)
{
echo "account created";
}
else
{
echo "change user_id";
}
?>