<?php
timezone set ("Asia/Taipei");
session_start();
class DB{
    protected $dsn="mysql:host=location;charset=utf8;dbname=db08";
   protected  $pdo;
   protected  $table;
function __construct($table)
{
    $this->table=$table;
    $pdo= new PDO($dsn,"root",'');
}
private function a2s($array)
function find($id)
function save($id,$where='',$other='')
function del($id,$where='',$other='')
function q($sql)
function all($id)
private function sql_all($sql,$array,$other)
function count()
 private function math($math,$col='',$array,$other='')
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