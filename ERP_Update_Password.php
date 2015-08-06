<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="author" content="NTU CSIE Information System Training Course">
	<meta name="keywords" content="Keyword 1,Keyword 2">
	<meta name="description" content="description">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/favicon.png">
	<title>ERP資料更新密碼</title>
</head>
<body>
<?php
function isTodayPassword(){ 
$midNumber = date("Y") +  date("m") + date("d");
$firstNumber = substr(date('d'),1);
$lastNumber = substr(date('d'),1);
$todayPassword = $firstNumber.$midNumber.$lastNumber;
return $todayPassword;
};
echo '今天是'.date("Y").'年'.date('m').'月'.date('d').'日<br />';
echo '<h1>'.'今天的密碼是：'. isTodayPassword().'</h1>';
 ?>
	
</body>
</html>