<?php
include 'config.php';
$con = new mysqli("$host", "$username", "$password", "$database") or die("Server Error");

if($con==true)
{
$res = $con->query("select id, nome from turmas");

if ($res) {
   $rows=$res->fetch_all(MYSQLI_ASSOC);
   $row = $res->fetch_row();
//   echo (base64_encode(json_encode($rows)));
   echo (json_encode($rows));
}
}
else
{
    mysql_close($con);
}
?>