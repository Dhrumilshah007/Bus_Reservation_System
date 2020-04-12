
<?php
 $servername="fdb14.biz.nf";
        $username="2289025_dhrumil";
        $password="kishandobariya1";
        $db="2289025_dhrumil";

$conn = mysqli_connect($servername,$username,$password,$db);
?>
<html>
<head>
<style>
.from {
   /* background-color:#77BA9B; */
    background-color:#fff;
    width: 180px;
    height: 25px;
    border: 2px solid #639BF1;
    padding: 15px;
    margin-top: 250px;
    margin-left: 200px;
    float: left;
}
.to{
    background-color:#77BA9B ;
    width: 180px;
    height: 25px;
    border: 2px solid #639BF1;
    padding: 15px;
    margin-top: 250px;
    margin-left: 20px;
    float: left;
}
.sub{
	background-color:#77BA9B ;
    width: 150px;
    height: 25px;
    border: 2px solid #639BF1;
    padding: 15px;
    margin-top: 250px;
    margin-left: 20px;
    float: left;

}
.dat{
	background-color:#77BA9B ;
    width: 150px;
    height: 25px;
    border: 2px solid #639BF1;
    padding: 15px;
    margin-top: 250px;
    margin-left: 20px;
    float: left;

}
table td {
padding:10;
}




</style>
</head>
<h2 align="center"><b>Details of Bus</b></h2>
<body style="background-color:url(../images/back.jpg);">
<center>

<?php
$from = $_POST['From'];
$to = $_POST['To'];

$query = "SELECT * from bustable where from1='$from' AND to1='$to'";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
{
?>
<table border="3px" style="background-color:#77BA9B;width:100%;margin-top:40px;text-align:center;padding:10;">
<tr>
<th>Travels</th>
<th>From</th>
<th>To</th>
<th>Time</th>
<th>Price</th>
<th>Book</th>
</tr>
<?
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><? echo $row["Travellers"] ?></td>
<td><? echo $row["from1"] ?></td>
<td><? echo $row["to1"] ?></td>
<td><? echo $row["time"] ?></td>
<td><? echo $row["fare"] ?></td>
<td style="background-color:#ff3333;"><a href="login.html">BOOK NOW</a></td>
</tr>
<?
}
}
else
{
?>

   <h1 style="color:yellow;"><? echo "No bus available";?></h1>
<?
}
?>
</table>
</center>
</div><br>
<a href ="index.html"><h1><b>Back</b></h1></a>

</body>