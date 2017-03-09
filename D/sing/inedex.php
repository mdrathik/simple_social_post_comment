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
            <a class="btn btn-danger btn-xsm btn-circle text-uppercase btn1x" href="#" id="reply"><span class="glyphicon glyphicon-heart"></span>Most Like</a>
            <a class="btn btn-warning btn-xsm btn-circle text-uppercase btn2x" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> &nbsp;Most comments</a>
            <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3x" data-toggle="collapse" href="#replyOne"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; All Post</a>
        </div>
        <div class="col-md-1"></div>
    <div class="main_body col-md-10">
        <div id="scroll_div">
            <div class="post_div">
                <h4><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Md Solaiman Hossain</h4>
                <p class="datetime">Updated on <?php echo date("d/m/y") ?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                <p  class="status"><i class="fa fa-tags" aria-hidden="true"></i>For all files (default setting for opened file): Settings/Preferences | Editor | General ... It was driving me mad with the editor auto wrapping my code when I .... entering the form tag when I type the word “form” into a paragraph?</p>

                <a class="btn btn-danger btn-xsm btn-circle text-uppercase btn1" href="#" id="reply"><span class="glyphicon glyphicon-heart"></span>1 Like</a>
                <a class="btn btn-warning btn-xsm btn-circle text-uppercase btn2" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3" data-toggle="collapse" href="#replyOne"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Share</a>
            </div>
            <hr/>
            <div class="post_div">
                <h4><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Md Solaiman Hossain</h4>
                <p class="datetime">Updated on <?php echo date("d/m/y") ?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                <p  class="status"><i class="fa fa-tags" aria-hidden="true"></i>For all files (default setting for opened file): Settings/Preferences | Editor | General ... It was driving me mad with the editor auto wrapping my code when I .... entering the form tag when I type the word “form” into a paragraph?</p>

                <a class="btn btn-danger btn-xsm btn-circle text-uppercase btn1" href="#" id="reply"><span class="glyphicon glyphicon-heart"></span>1 Like</a>
                <a class="btn btn-warning btn-xsm btn-circle text-uppercase btn2" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3" data-toggle="collapse" href="#replyOne"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Share</a>
            </div>
            <hr/>

            <div class="post_div">
                <h4><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Md Solaiman Hossain</h4>
                <p class="datetime">Updated on <?php echo date("d/m/y") ?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                <p  class="status"><i class="fa fa-tags" aria-hidden="true"></i>For all files (default setting for opened file): Settings/Preferences | Editor | General ... It was driving me mad with the editor auto wrapping my code when I .... entering the form tag when I type the word “form” into a paragraph?</p>

                <a class="btn btn-danger btn-xsm btn-circle text-uppercase btn1" href="#" id="reply"><span class="glyphicon glyphicon-heart"></span>1 Like</a>
                <a class="btn btn-warning btn-xsm btn-circle text-uppercase btn2" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                <a class="btn btn-success btn-xsm btn-circle text-uppercase btn3" data-toggle="collapse" href="#replyOne"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Share</a>
            </div>
            <hr/>

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
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                        </div>
                                    </div>
                                    <textarea id="field" onkeyup="countChar(this)" placeholder="What are you doing right now?" ></textarea>
                                    <ul>
                                        <span id="charNum">2500</span>&nbsp; Remaining
                                    </ul>
                                    <button type="submit" class="btn  btn-success green "><i class="fa fa-share"></i> Share</button>
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