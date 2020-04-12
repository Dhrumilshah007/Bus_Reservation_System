
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
    background-color:#77BA9B;
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
<h3 align="center"><b>Details of Bus</b></h3>
<body style="background-color:#FFFFCC;">
<center>

<?php
$from = $_POST['From'];
$to = $_POST['To'];

$query = "SELECT * from bustable where fare='$from' AND to1='$to'";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
{
?>
<table border="3px" style="background-color:#77BA9B;width:100%;margin-top:40px;text-align:center;padding:10;">
<tr>
<th>Price</th>

</tr>
<?
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><? echo $row["fare"] ?></td>
<td style="background-color:#ff3333;"></td>
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

</body>