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
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }
    private function a2s($array){
        
    }
    function save($array){
        
    }
    function del($id){
        
    }
    function find($id){
        
    }
    private function sql__all($sql,$array,$other){
        
    }
    function q($sql){
        
    }
    function all($where='',$other=''){
        
    }
    function count($where='',$other=''){
        
    }
    private function math($math,$col,$array='',$other=''){
        
    }
    function sum($col='',$where='',$other=''){
        
    }
}
