<?php
require_once 'code.php';
$obj=new Connection();

if(isset($_POST['submit'])) {
    $post_date = date('y-m-d');
    $user = $_POST['name'];
    $status = 'asfasfa';
    $permission = "waiting";
    $insert_post = $obj->insert_post($post_date, $user, $status, $permission);
}
?>

<html>
<head>
    <title>Untitled Document</title>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").submit(function() {
                var name = $('#name').val();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: "name="+ name ,
                    success: function(){
                        alert("success");
                    }
                });

            });
        });
    </script>
</head>

<body>
<form action="" method="post">
    Name:<input type="text" name="name" id="name" /><br />
    <input type="submit" name="submit" id="submit" />
</form>
</body>
</html>
