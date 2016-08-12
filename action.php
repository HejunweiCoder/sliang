<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>谢谢您</title>
</head>
<body>
<?php

$name=$_POST['iname'];
$email=$_POST['iemail'];
$phone=$_POST['iphone'];
$msg=$_POST['imessage'];
if(empty($phone)||empty($msg)){
    die("请填入电话和需要发送的内容");
}
else
echo "发送成功，非常感谢！";


//这里输入密码
$connect = mysql_connect("localhost","root","sliangmysql");
if(!$connect)
        die("can't connect db");
mysql_select_db("sliangpos");
mysql_query('set names "utf8"');
//都是字符串型
if(mysql_query("INSERT INTO user(name,email,phone,message) VALUES('$name','$email','$phone','$msg')"))

//$message="姓名:".$name."\n"."邮箱:".$email."\n"."电话:".$phone."\n".$msg;
//$toadd="405947712@qq.com";
//$subject="sliang";
//mail($toadd,$subject,$message);

?>
</body>
</html>