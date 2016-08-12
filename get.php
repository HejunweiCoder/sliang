<html>
<head>
<meta charset="UTF-8">
<title>后台回复</title>
</head>
<style>
table{
	text-align:left; 
	width:100%;
}
</style>
<body>
<table>
<tr><td>name</td><td>email</td><td>phone</td><td>message</td><td>delete</td></tr>
<?php
$connect = mysql_connect("localhost","root","sliangmysql");
if(!$connect){
    die("can not connect db");
}
mysql_select_db("sliangpos");
mysql_query('set names "utf8"');
$result = mysql_query("SELECT * FROM user");
$dataCount = mysql_num_rows($result);
for($i=0;$i<$dataCount;$i++){
    $result_arr = mysql_fetch_assoc($result);
    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $email = $result_arr['email'];
    $phone = $result_arr['phone'];
    $message = $result_arr['message'];
    echo "<tr><td>$name</td><td>$email</td><td>$phone</td><td>$message</td><td><a href='delete.php?id=$id'>delete</a></td></tr>";
}

?>
</table>
</body>
</html>