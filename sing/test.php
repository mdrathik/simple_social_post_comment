<?php
require_once '../code.php';
require_once 'function.php';
$obj = new Rathik();

$error_log = "";
/*$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn= new PDO("mysql:host=$servername;dbname=test",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $message="connected";
}
catch(PDOException $e){
    echo "failed".$e->getMessage();

}
*/ ?>


<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =($_POST['password']);
    $count = 0;
    $login = $obj->login($username, $password);
    foreach ($login as $key) {
        $count++;
    }
    /* echo "<h1 style='color: white;text-align: center'>$count</h1>";*/
    if ($count == 1) {
        $_SESSION['username'] = $username;
        //header("location:home.php");
        echo "success";
        /*  echo "<h1 style='color: white;text-align: center'>$username</h1>";*/
    } else {
        echo "fail";
        $error_log = 'Wrong keywords';
    }

    /*  if($_POST['username']=='r' && $_POST['password']=='1'){
          $_SESSION['user']='1';
          header("location:home.php");
      }
      else{
          echo "<script>window.alert(\"sometext\");</script>";
      }*/
}
?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <link href="asests/css/bootstrap.min.css" rel="stylesheet">
    <link href="asests/css/sb-admin.css" rel="stylesheet">
    <link href="asests/css/plugins/morris.css" rel="stylesheet">
    <link href="asests/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        <script type="text/javascript" src="asests/script.js"></script>



    <script>
        function do_login()
        {
            var username=$("#username").val();
            var password=$("#password").val();
            if(username!="" && password!="")
            {
                $.ajax
                ({
                    type:'post',
                    url:'login.php',
                    data:{
                        login:"login",
                        username:username,
                        password:password
                    },
                    success:function(response)
                    {
                        alert(response);
                        if(response=="success")
                        {
                            window.location.href="home.php";
                        }
                        else
                        {
                            alert("Wrong Details");
                        }
                    }
                });
            }
            else
            {
                alert("Please Fill All The Details");
            }
            return false;
        }
    </script>
</head>
<body>
<!--<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">SB Admin</a>
        </div>


        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>>
            </ul>
        </div>

    </nav>-->


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    Admin Login
                </h1>
                <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign In</div>
                        </div>
                        <div id="login_form" style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <?php echo $error_log; ?>
                            <form   class="form-horizontal" role="form" method="post"
                                    action="login.php" onsubmit="return do_login();">

                                <div id="error">
                                    <!-- error will be shown here ! -->
                                </div>
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="text" class="form-control" name="username"
                                           placeholder="NT Account">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="NT Password">
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <button id="login_button"  type="submit" class="btn btn-default" name="submit">
                                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

</html>
