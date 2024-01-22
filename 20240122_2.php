<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db08";
    protected $pdo;
    protected $table;
    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    private function a2s($array){

    }
    function save($array){

    }
    function del($id){

    }
    function find($id){

    }
    function sql_all($sql,$array,$other){

    }
    function q($sql){

    }
    function all($where='',$other=''){

    }
    function count($where='',$other=''){

    }
    function math($math,$col,$array='',$other=''){

    }
    function sum($col='',$where='',$other=''){

    }
}
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url)
{
    header("location:$url");
}
$Title = new DB('titles');
$Totla = new DB('total');
$Bottom = new DB('bottom');
$Newss = new DB('news');
$Image = new DB('image');
$Mvim = new DB('mvim');
$Menu = new DB('menu');
$Ad = new DB('ad');
$Admin = new DB('admin');
?>
<?php
$do=$_GET['do']??'main';
$file="./front/{$do}.php";//or back
if(file_exists($file)){
    include $file;
}else{
    include "./front/main.php";
}
?>