<?php
 $servername="fdb14.biz.nf";
        $username="2289025_dhrumil";
        $password="kishandobariya1";
        $db="2289025_dhrumil";

$conn = mysqli_connect($servername,$username,$password,$db);

$name = $_POST['tra'];
$fr = $_POST['from'];
$to = $_POST['to'];
$time = $_POST['time'];
$fare = $_POST['fare'];

$query = "INSERT into bustable values ('$name','$fr','$to','$time','$fare')";

$result = mysqli_query($conn,$query);
echo "Update";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="forms.html">back to page</a>
</body>
</html>