<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])){
        echo "<script> document.location = \"home.php\";</script>";
    } ?>
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
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login").click(function(){
                    $("#login").hide();
                    username=$("#user_name").val();
                    password=$("#password").val();
                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: "username="+username+"&password="+password,
                        success: function(html){
                            if(html=='true')
                            {
                                $("#login_form").fadeOut("normal");
                                $("#shadow").fadeOut();
                                document.location = "home.php";
                                //$("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");
                                // You can redirect to other page here....
                            }
                            else
                            {
                                $("#login").show();
                                $("#add_err").html("<img height='30px' width='30px' src='asests/img/wrong.png'>Wrong User Name or Password");
                            }
                        },
                        beforeSend:function()
                        {
                            $("#add_err").html("<img height='50px' width='50px' src='asests/img/process.gif'>");
                        }
                    });
                    return false;
                });
            });
    </script>
</head>
<body>
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
                        <div  style="padding-top:30px" class="panel-body">
                            <div style="display:none"  class="alert alert-danger col-sm-12"></div>
                            <?php if(empty($_SESSION['username'])){?>
                            <form class="form-horizontal" role="form">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="user_name" type="text" class="form-control" name="username"
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
                                        <button value="Log in" id="login" type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                            <div class="err" id="add_err"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
