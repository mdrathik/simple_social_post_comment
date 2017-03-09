<?php
   session_start();
   if($_SESSION['sid']==session_id())
   {
      $logout=1;
   }
   else
   {
    echo "<script>";
        echo "window.location.href='index.php';";
        echo "</script>";
   }
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>




<?php
if(isset($_POST['ignore'])){
    $id=$_POST['cont_count'];

    try {

        $sql = "DELETE FROM  post  where id='$id' ";
        // echo " Data Inserted";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script>";
        echo "window.location.href='admin.php';";
        echo "</script>";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?>









<?php 
    if(isset($_POST['accpet'])){
      $id=$_POST['cont_count'];
      $permission="approved";
      
try {
    
    $sql = "UPDATE post SET permission='$permission' where id='$id' ";
   // echo " Data Inserted";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script>";
        echo "window.location.href='admin.php';";
        echo "</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
    }
 ?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="container">
<h1 style="text-align: center;">Welcome To Admin Panel</h1>
<a style="text-align: center;" href="index.php"><h4>Logout</h4></a>
<a style="text-align: center;" target="blank" href="../index.php"><h4>Home Page</h4></a>
<?php try { 
    foreach ($conn->query("SELECT * FROM post where permission='waiting' ") as $key) { ?>
  <div class="panel panel-default">
    <div class="panel-body">
                <h4><?php echo $key['user']; ?></h4>
                <p><?php echo $key['status']; ?></p>
    </div>
    <form method="post" action="">
    <input type="hidden" name="cont_count" value="<?php echo $key['id']?>" >
    <button class="btn btn-primary" type="submit" name="accpet" >Accept</button>
    <button class="btn btn-danger" type="submit" name="ignore">Ignore</button>
    </form>
  </div>
  <hr/>
      <?php }
    
} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
    
} 
$conn = null;
?>

</div>
</body>
</html>