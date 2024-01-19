<?php
date_default_timezone_set("Asia/Tiaper");
session_start();
class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=db08;";
    protected $pod;
    protected $table;
    public function{
        $this->table=$table;
        $dsn=new PDO($this->dsn,'root','');
    }
    private function a2s($array){
        foreach($array as $col=>$value){
            $tmp[]= "`$col`='$value'";
        }
        return$tmp;
    }
    function save($array)
    function del($id)
    function find($id)//fetch
    private function sql_all($sql,$where='',$other='')
    if(isset($this->table) && !empty($this->table))
    function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::fetchassoc);
    }
    function all($where='',$other=''){//fetchAll(PDO::fetchassoc)
    $sql="select * from `$this->table`";
    $sql.=$this->sql_all($sql,$where,$other);
    return$this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
    function count($where='',$other=''){
 $sql = "select count(*) from `$this->table`";
 $sql .= $this->sql_all($sql,$where,$other);
 return $this->pdo->query($sql)->fetchColumn();
}

    function math($math,$col='',$array='',$other=''){
$sql=" select $math`($col)` from `$this->table`";
$sql .= $this->sql_all($sql,$array,$other);
return $this->pdo->query($sql)->fetchColumn()
    }
    function sum($col='',$where='',$other=''){
        return $this->math('sum',$col,$where,$other);
    }
    function max($col='',$where='',$other=''){
        return $this->math('max',$col,$where,$other);
    }
    function min($col='',$where='',$other=''){
        return $this->math('min',$col,$where,$other);
    }
    
}
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
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