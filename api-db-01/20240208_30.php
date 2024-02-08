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
    function a2s($array)
    {
    }
    function save($array)
    {
    }
    function del($id)
    {
    }
    function find($id)
    {
    }
    function sql_all($sql, $array, $other)
    {
    }
    function q($sql)
    {
    }
    function all($sql)
    {
    }
    function count($where = '', $other = '')
    {
        $sql="select count(*) from `$this->table` ";
        $sql=$this->sql_all($sql,$where,$other);
        return$this->pdo->query($sql)->fetchColumn();
    }
    function math($math, $col, $array = '', $other = '')
    {
        $sql="select $math(`$col`) from `$this->table` ";
        $sql=$this->sql_all($sql,$array,$other);
        return$this->pdo->query($sql)->fetchColumn();
    }
    function sum($col = '', $where = '', $other = '')
    {
        return $this->math('sum', $where, $other);
    }
    function min($col = '', $where = '', $other = '')
    {
        return $this->math('min', $where, $other);
    }
    function max($col = '', $where = '', $other = '')
    {
        return $this->math('max', $where, $other);
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
