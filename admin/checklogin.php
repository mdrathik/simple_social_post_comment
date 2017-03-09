<?php
$uid = $_POST['username'];
$pw = $_POST['password'];

if($uid == 'rathik' and $pw == '123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	echo "<script>";
        echo "window.location.href='admin.php';";
        echo "</script>";
}
else{
	echo "<script>";
	echo "alert('Incorrect Password');";
        echo "window.location.href='index.php';";
        echo "</script>";
}
?>
