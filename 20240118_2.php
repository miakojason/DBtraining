<?php
date_default_timezone_set ("Asia/Taipei");
session_start();
class DB{
    protected $dsn="mysql:host=location;charset=utf8;dbname=db08";
   protected  $pdo;
   protected  $table;
function __construct($table)
{
    $this->table=$table;
    $this->pdo= new PDO($this->dsn,"root",'');
}
private function a2s($array){
    foreach($array as $col=>$value){
        $tmp[]="`$col`='$value'";
    }return $tmp;
}
function save($array){
    if(isset($array['id'])){
        $sql ="update `$this->table` set ";
if(!empty($array)){
$tmp =$this->a2s($array);
}else{
    echo "空的";
}
$sql .= join(",",$tmp);
$sql .= " where `id`='{$array['id']}'";
    }else{
$sql="insert into `$this->table`";
$cols="`(" . join("`,`",array_keys($array)) . ")`";
$vals="'(" . join("','",$array) . ")'";
$sql .= $cols . "values" . $vals;
    }
    return $this->pdo->exec($sql);
}
function del($id){
    
}
function find($id){
    $sql = "select * from `$this->table`";
    if(is_array($id)){
$tmp=$this->a2s($id);
$sql .= " where ". join(" && ",$tmp);
    }elseif(is_numeric($id)){
$sql .= " where `id`='$id'";
    }else{
        echo "X type";
    }
    $row=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

private function sql_all($sql,$array,$other)
function q($sql)
function all($where='',$other='')
function count($where='',$other='')
 private function math($math,$col='',$array='',$other='')
function sum($col='',$where='',$other='')
function max($col='',$where='',$other='')
function min($col='',$where='',$other='')


}
function dd($array){
    echo"<pre>";
    print_r($array);
    echo"</pre>";
}
function to($url){
    header("location:$url");
}
$Title=new DB('titles');
$Total=new DB('total');
$Bottom=new DB('bottom');
$Image=new DB('image');
$News=new DB('news');
$Mvim=new DB('mvim');
$Menu=new DB('menu');
$Ad=new DB('ad');
$Admin=new DB('admin');

?>