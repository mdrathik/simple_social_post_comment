

<?php   session_start();
require_once '../code.php';
require_once 'function.php';
$obj=new Rathik();

if(isset($_POST['accept'])){
    $post_id=$_POST['post_id'];
    $accept=$obj->accept($post_id);

}
if(isset($_POST['delete'])){
    $post_id=$_POST['post_id'];
    $delete=$obj->delete($post_id);

}
?>

<?php
if(isset($_SESSION['username'])){
    $user=$_SESSION['username'];
   /* echo "<script>window.alert(\"got it\");</script>";*/
}
else
{
    echo "<script>window.location = \"index.php\";</script>";
}

/*            window.location = "http://www.yoururl.com";*/
?>

<!DOCTYPE html>
<html lang="en">

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


    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $user ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp;<?php echo $user ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i>Old Post</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                         DashBoard
                        </h1>

                        <div class="col-lg-10 col-lg-offset-1">
                            <h2>Accept Or Decline</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>status</th>
                                        <th>username</th>
                                        <th>Accept</th>
                                        <th>Decline</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $allpost_new=$obj->allpost_new();

                                    foreach($allpost_new as $key){

                                    ?>
                                    <tr>
                                        <form method="post" action="">
                                        <td><?php echo $key['status'];?></td>
                                        <td><?php echo $key['user'];?></td>
                                            <input type="hidden" name="post_id" value="<?php echo $key['id']?>" >
                                        <td><button class="btn btn-success" type="submit"  name="accept">Accept</button></td>
                                        <td><button class="btn btn-danger" type="submit" name="delete">Decline</button></td>
                                        </form>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    </div>

    <script src="asests/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asests/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="asests/js/plugins/morris/raphael.min.js"></script>
    <script src="asests/js/plugins/morris/morris.min.js"></script>
    <script src="asests/js/plugins/morris/morris-data.js"></script>

</body>

</html>
