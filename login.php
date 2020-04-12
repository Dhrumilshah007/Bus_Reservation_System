<?php
        //include "config.php";
        $servername="fdb14.biz.nf";
        $username="2289025_dhrumil";
        $password="kishandobariya1";
        $db="2289025_dhrumil";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn == false)
{
die("not connect" . mysqli_connect_error());
}

        $un = $_POST["username"];
        $pw = $_POST["password"];
        $sql = "select * from signup where user_name='".$un."' and PASSWORD='".$pw."'";
        $query = mysqli_query($conn, $sql);
        $rs = mysqli_fetch_assoc($query);
        if((mysqli_num_rows($query)) > 0)
        {
                echo readfile('count.html');
         }
                else{
                echo "invalid";}
?>