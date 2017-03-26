<?php
/*class connection{
    protected  $host="localhost";
    protected $dbname="test";
    protected $user="root";
    protected $pass="";
    protected $conn="";

    function __construct(){
        try{
            $this->conn= new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            echo  "connected";

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}*/



class add  extends  mul{
     public $xxx;
    function sum()
    {
        $this->xxx=$this->xx;
        echo $this->b;
        echo $this->c;
      }
}

$obj=new add();
$add=$obj->sum();



class mul extends sub {
/*child b*/
    private $a=5;
    protected $b=6;
    public $c=7;

    function mul()
    {
        echo $this->xx;
    }
}

class sub{
    public  $xx=10;
function sub(){

}

}
?>