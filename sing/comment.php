<?php
require_once 'controller/data_function/code.php';
$obj=new Connection();
$post_id=$_GET['id'];
$all_cm= $obj->all_cm($post_id);
$allcomment = $obj->allcomment($post_id);
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#comment_button").click(function(){
                $("#comment_button).hide();
               name=$("#name").val();
                comment=$("#comment").val();
                $.ajax({
                    type: "POST",
                    url: "controller/data_function/insert_comment.php",
                    data: "name="+name+"&comment"+comment,
                    success: function(html){
                        if(html=='true')
                        {
                            $("#login_form").fadeOut("normal");
                            $("#shadow").fadeOut();
                            //document.location = "home.php";
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




    <script>
        function countChar(val) {
            var len = val.value.length;
            if (len >= 2500) {
                val.value = val.value.substring(0, 500);
            } else {
                $('#charNum').text(500 - len);
            }
        };
    </script>
</head>
<body class="body">
<div class="container">
    <h2 class="head_title text-center">The Of Singapore</h2>
    <div class="col-md-12">

    </div>


    <div class="row">
        <div class="col-md-12 up_button_div">
            <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3x" data-toggle="collapse" href="index.php">&nbsp; Home</a>
        </div>
        <div class="col-md-1"></div>
        <div class="main_status col-md-10">
            <?php foreach($all_cm['post'] as $key){
                ?>

                <div class="post_div">
                    <h4><i class="fa fa-user" aria-hidden="true"></i> &nbsp;<?php echo $key['user']?></h4>
                    <p class="datetime">Updated on <?php echo $key['post_date'] = '25-09-1996';?><i class="fa fa-clock-o" aria-hidden="true"></i></p>
                    <p  class="status"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;<?php echo $key['status']; ?></p>

                    <?php
                    $allike= $obj->allike($post_id);
                    $like=0;
                    $flag=0;
                    foreach ($allike as $key) {
                        $like++;
                        $ipaddress = $_SERVER['REMOTE_ADDR'];
                        if (strcmp($ipaddress, $key['ipaddress']) == 0 && strcmp($key['lk'], 1) == 0) {
                            $flag = 1;
                        }

                    }?>

                    <form method="post" action="controller/data_management/insert_comment.php">
                        <input type="hidden" name="cont_count" value="<?php echo $post_id?>" >
                        <button  type="submit"  class="btn btn-xsm btn-circle text-uppercase btn2 <?php if(isset($flag) && $flag==1){ echo "btn-danger";} else { echo "btn-warning";} {
                            # code...
                        }  ?>" name="<?php if(isset($flag) && $flag==1){echo "delete";} else {echo "likes";} ?>"><i class="fa fa-fw fa-heart"></i><?php echo $like; ?></button>

                        <a class="btn btn-success btn-xsm btn-circle text-uppercase btn2" data-toggle="collapse" href="#"><span class="glyphicon glyphicon-comment"></span>
                            <?php $count=0;
                            foreach ($allcomment as $key) {
                                $count++;}echo $count; ?> comments</a>

                        <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3" data-toggle="collapse" href="https://www.facebook.com/dialog/feed?app_id=1726232607652492&link=http://test.miciapps.com/fiverr/singapore/comment.php?id=<?php echo $key['id']; ?>&redirect_uri=http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Share</a>


                    </form>

                </div>
                <?php break; }  ?>
            <hr/>

            <div  class="scroll_divx">
                <?php foreach($all_cm['comment'] as $key) {  ?>
                    <div>
                        <h4 class=commentor"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;<?php echo $key['commentator'];?></h4>
                        <p class="comment_text"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;&nbsp;<?php echo $key['comment'];?></p>
                        <hr>
                    </div>

                <?php } ?>

            </div>
            <div class="widget-area no-padding blank">
                <div class="status-upload">
                    <form >
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input id="name" type="text" class="form-control" name="commentator" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                        <textarea id="comment" onkeyup="countChar(this)" placeholder="Comment" name="comment" ></textarea>
                        <ul>
                            <span id="charNum">500</span>&nbsp; Remaining
                        </ul>
                        <button id="comment_button" type="submit" name="submit" class="btn  btn-success green "><i class="fa fa-share"></i> Comment</button>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>

    </div>
</div>

</body>

</html>