<?php
require_once '../data_function/code.php';
$obj=new Connection();
$post_id=$_GET['id'];
if(isset($_POST['submit'])) {
    $commentator = $_POST['commentator'];
    $comment = $_POST['comment'];
    $insert_comment= $obj->insert_comment($commentator,$comment,$post_id);
    echo "<script>";
    echo "window.location.href='../../comment.php?id=$post_id';";
    echo "</script>";
}
if(isset($_POST['likes'])) {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $id=$_POST['cont_count'];
    $lk=1;
    $like_dislike = $obj->like_dislike($ipaddress,$id,$lk);
    echo "<script>location='../../comment.php?id=$id'</script>";
}


if(isset($_POST['delete'])){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $id=$_POST['cont_count'];
    $lk=1;
    $like_dislike2 = $obj->like_dislike2($ipaddress,$id,$lk);
    echo "<script>location='../../comment.php?id=$id'</script>";
}
?>


