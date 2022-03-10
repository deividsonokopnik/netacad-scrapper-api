<?php
include 'config.php';
// $con=mysql_connect("$host","$username","$password") or die("Server Error");
// mysql_select_db("$database") or die("Database error");
$con = new mysqli("$host", "$username", "$password", "$database") or die("Server Error");

if($con==true)
{
$res = $con->query("select id, nome from turmas");

if ($res) {
   $rows=$res->fetch_all(MYSQLI_ASSOC);
   $row = $res->fetch_row();
   echo (json_encode($rows));
//    echo "$row[0] - $row[1]";
}
}
else
{
    mysql_close($con);
}
?>