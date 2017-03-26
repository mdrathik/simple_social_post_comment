<?php
class Connection
{
    protected $host = "localhost";
    protected $dbname = "test";
    protected $user = "root";
    protected $pass = "";
    public $conn = "";

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            /*echo "connected";*/
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

    public  function allpost(){
       
        $sql="SELECT * From post where permission='approved'";
        if($query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }



    public  function insert_post($post_date,$user,$status,$permission){
    $sql="INSERT INTO post (user,status,permission,post_date) VALUES ('$user','$status','$permission','$post_date')";
    if($query_result = $this->conn->query($sql)) {
        return $query_result;
    }
}


  public  function insert_comment($commentator,$comment,$id){
        $sql = "INSERT INTO cm (commentator,comment,status_id)
         VALUES ('$commentator','$comment','$id')";
            if($query_result = $this->conn->query($sql)) {
                return $query_result;

        }
    }



    public  function allcomment($comment_count){
        $sql="SELECT * FROM cm WHERE status_id=$comment_count";
        if($query_result = $this->conn->query($sql)) {

            return $query_result;
        }

    }

    public  function allike($comment_count){
        $sql="SELECT * FROM lc WHERE status_id=$comment_count";
        if(  $query_result = $this->conn->query($sql)) {
            return $query_result;
            $this->conn=null;
        }

    }


    public  function like_dislike($ipaddress,$id,$lk){
        $sql="INSERT INTO lc (ipaddress,status_id,lk) VALUES('$ipaddress','$id','$lk')";;
        if(  $query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }

    public  function like_dislike2($ipaddress,$id,$lk){
        $sql="DELETE FROM lc WHERE ipaddress='$ipaddress' AND status_id='$id' ";
        if( $query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }


    public  function most(){
/*        $sql="SELECT *,COUNT(lc.status_id) FROM post,lc WHERE lc.status_id=$comment_count and post.id=$comment_count";*/
       $sql="SELECT status_id, count(lk) as Count FROM lc GROUP BY status_id ORDER BY Count DESC";
        if( $query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }


    public  function mostc(){
        /*        $sql="SELECT *,COUNT(lc.status_id) FROM post,lc WHERE lc.status_id=$comment_count and post.id=$comment_count";*/
        $sql="SELECT status_id, count(comment) as Count FROM cm GROUP BY status_id ORDER BY Count DESC";
        if( $query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }

    public  function mostlike($key1){
        /*        $sql="SELECT *,COUNT(lc.status_id) FROM post,lc WHERE lc.status_id=$comment_count and post.id=$comment_count";*/
        $sql="SELECT * FROM post WHERE permission='approved' and  id='".$key1['status_id']."' ";
        if( $query_result = $this->conn->query($sql)) {
            return $query_result;
        }

    }













//    public  function allpost()
//    {
///*$array = array();*/
//        $sql = "SELECT * FROM POST";
//        $sql2 = "SELECT * FROM cm";
//        $array['sql_1'] = $sql;
//        $array['sql_2'] = $sql2;
//        if ($this->conn->query($array['sql_1'],  $array['sql_2'])) {
//            $array = $this->conn->query($array['sql_1'],  $array['sql_2']);
//
//            return $array;
//        }
//    }





    public  function all_cm($post_id){
        $sql="SELECT * FROM cm WHERE status_id=$post_id";
        $sql2="SELECT * FROM post WHERE id=$post_id";
        if($this->conn->query($sql) && $this->conn->query($sql2)){
            $query_result['comment']=$this->conn->query($sql);
            $query_result['post']=$this->conn->query($sql2);
            return $query_result;
        }
    }






}