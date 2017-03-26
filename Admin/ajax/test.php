

<?php
require_once '../../code.php';
require_once '../function.php';
$obj = new Rathik();

    session_start();
    $username = $_POST['username'];
    $password =$_POST['password'];
    $count = 0;
    $login = $obj->login($username, $password);
    foreach ($login as $key) {
        $count++;
    }
    /* echo "<h1 style='color: white;text-align: center'>$count</h1>";*/
    if ($count == 1) {
        $_SESSION['username'] = $username;
        // header("location:home.php");
        echo 'true';
        /*  echo "<h1 style='color: white;text-align: center'>$username</h1>";*/
    } else {
        echo "false";
        $error_log = 'Wrong keywords';


    /*  if($_POST['username']=='r' && $_POST['password']=='1'){
          $_SESSION['user']='1';
          header("location:home.php");
      }
      else{
          echo "<script>window.alert(\"sometext\");</script>";
      }*/
}
?>