<?php session_start(); ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/completion_style.css">
<title>C.C.Donuts | ログイン完了</title>
<?php require 'header2.php'; ?>
<?php
unset($_SESSION['customers']);
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
$sql=$pdo->prepare('select * from customers where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['customers']=[
		'id'=>$row['id'], 'name'=>$row['name'], 'furigana'=>$row['furigana'], 'postcode_a'=>$row['postcode_a'], 'postcode_b'=>$row['postcode_b'], 
		'address'=>$row['address'], 'mail'=>$row['mail'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customers'])) {
	echo 'いらっしゃいませ、', $_SESSION['customers']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require 'footer.php'; ?>