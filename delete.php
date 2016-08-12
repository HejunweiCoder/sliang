<?php 
$connect = mysql_connect("localhost","root","sliangmysql");
if(!$connect){
    die("can not connect db");
}
mysql_select_db("sliangpos");
mysql_query('set names "utf8"');
$id = $_GET['id'];
$result = mysql_query("DELETE FROM user WHERE id=$id");
if(mysql_errno())
    echo mysql_error();
header("location:get.php");
?>