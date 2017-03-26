<?php
class Rathik extends  Connection{
   public function login($username,$password)
   {
       $sql = "SELECT * FROM admin where username='$username' and password='$password'";
       if($result=$this->conn->query($sql));
       {
           return $result;
       }
       }

    public function allpost_new()
    {
        $sql = "SELECT * FROM post WHERE permission='waiting'";
        if($result=$this->conn->query($sql));
        {
            return $result;
        }
    }



    public  function accept($post_id){
        $sql = "update post set permission='approved' where id='$post_id' ";
        if($result=$this->conn->query($sql));
        {
            return $result;
        }
    }

    public  function delete($post_id){
        $sql = "delete from post where id='$post_id' ";
        if($result=$this->conn->query($sql));
        {
            return $result;
        }
    }

}
?>