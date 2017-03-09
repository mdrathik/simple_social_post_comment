<?php
require_once 'code.php';
$obj=new Connection();

if(isset($_POST['submit'])){
    $post_date=date('y-m-d');
    $user=$_POST['name'];
    $status=$_POST['status'];
    $permission="waiting";
    $insert_post= $obj->insert_post($post_date,$user,$status,$permission);

    echo "<script>";
    echo "alert('Thank you for your feel good story . It has been sent to our site admin for approval. Once approved, you will see it on the main feed');";
    echo "window.location.href='index.php';";
    echo "</script>";
    echo "<script>location='index.php'</script>";
}


$allpost = $obj->allpost();

if(isset($_POST['most_like'])){
    echo "<script>";
    echo "window.location.href='most.php?most_value=1';";
    echo "</script>";
}


if(isset($_POST['likes'])) {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $id=$_POST['cont_count'];
    $lk=1;
    $like_dislike = $obj->like_dislike($ipaddress,$id,$lk);
/*    echo "<script>";
    echo "window.location.href='index.php";
    echo "</script>";*/
    echo "<script>location='index.php'</script>";
}


if(isset($_POST['delete'])){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $id=$_POST['cont_count'];
    $lk=1;
    $like_dislike2 = $obj->like_dislike2($ipaddress,$id,$lk);
    echo "<script>location='index.php'</script>";
}


?>





<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/bootstrap.min.js">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script>
        function countChar(val) {
            var len = val.value.length;
            if (len >= 2500) {
                val.value = val.value.substring(0, 2500);
            } else {
                $('#charNum').text(2500 - len);
            }
        };
    </script>
</head>
<body class="body">
<div class="container">
<h2 class="head_title text-center">The Good Of Singapore</h2>
        <div class="col-md-12">

        </div>


    <div class="row">
        <div class="col-md-12 up_button_div">

            <form action="" method="post">
            <button type="submit" name="most_like" class="btn btn-danger btn-xsm btn-circle  btn1x"  id="reply"><span class="glyphicon glyphicon-heart"></span> &nbsp;Most LikeS</button>
            <a  class="btn btn-warning btn-xsm btn-circle  btn2x" data-toggle="collapse" href="most.php?most_value=2"><span class="glyphicon glyphicon-comment"></span> &nbsp;Most Comment</a>
            <a class="btn btn-success btn-xsm btn-circle btn3x" data-toggle="collapse" href="index.php"><i class="fa fa-object-ungroup" aria-hidden="true"></i>&nbsp; All Post</a>
            </form>
        </div>
        <div class="col-md-1"></div>
    <div class="main_body col-md-10">

        <div id="scroll_div">



            <?php
            foreach ($allpost as $key) { ?>
                <?php $comment_count=$key['id'];
                $allcomment = $obj->allcomment($comment_count);
                $allike= $obj->allike($comment_count);
                ?>

            <div class="post_div">
                <h4><i class="fa fa-user" aria-hidden="true"></i> &nbsp;<?php echo $key['user']; ?></h4>
                <p class="datetime">Updated on <?php echo $key['post_date'] = '25-09-1996';?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                <p  class="status"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;<?php echo $key['status']; ?></p>

                <?php
                $like=0;
                $flag=0;
                foreach ($allike as $key) {
                    $like++;
                    $ipaddress = $_SERVER['REMOTE_ADDR'];
                    if (strcmp($ipaddress, $key['ipaddress']) == 0 && strcmp($key['lk'], 1) == 0) {
                        $flag = 1;
                    }
                }?>


                <form method="post" action="">
                <input type="hidden" name="cont_count" value="<?php echo $comment_count?>" >
                <button  type="submit"  class="btn btn-xsm btn-circle text-uppercase btn2 <?php if(isset($flag) && $flag==1){ echo "btn-danger";} else { echo "btn-warning";} {
                    # code...
                }  ?>" name="<?php if(isset($flag) && $flag==1){echo "delete";} else {echo "likes";} ?>"><i class="fa fa-fw fa-heart"></i><?php echo $like; ?></button>





                <a class="btn btn-success btn-xsm btn-circle text-uppercase btn2" data-toggle="collapse" href="comment.php?id=<?php echo $comment_count; ?>"><span class="glyphicon glyphicon-comment"></span>
                    <?php $count=0;
                        foreach ($allcomment as $key) {
                            $count++;}echo $count; ?> comments</a>

                <a target="_blank" class="btn btn-success btn-xsm btn-circle text-uppercase btn3" data-toggle="collapse" href="https://www.facebook.com/dialog/feed?app_id=1726232607652492&link=http://test.miciapps.com/fiverr/singapore/comment.php?id=<?php echo $key['id']; ?>&redirect_uri=http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Share</a>

                </form>

            </div>
            <hr/>
           <?php } ?>

        </div>
    </div>



        <div class="col-md-1"></div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="widget-area no-padding blank">
                            <div class="status-upload">
                                <form method="post" action="">
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" required class="form-control" name="name" id="name"  placeholder="Anonymous Nickname"/>
                                        </div>
                                    </div>
                                    <textarea id="field" name="status"  required onkeyup="countChar(this)" maxlength="2500" placeholder="Heard, seen or experience kindness? Share your feel good story with the rest of Singapore.
" ></textarea>
                                    <ul>
                                        <span id="charNum">2500</span>&nbsp; Remaining
                                    </ul>
                                    <button type="submit" name="submit" class="btn  btn-success green "><i class="fa fa-share"></i>Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        <div class="col-md-2"></div>
        </div>

    </div>

</body>

</html>