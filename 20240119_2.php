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
    function save($array){
        $sql="update from `$this->table` set where "
        if(is_array($array[id])){
$tmp=$this->a2s($sql);
$cols="(`". join("`,`",array_keys($array)) ."`)";
$vals="('". join("','",$array) ."')";
$sql.=" $cols " . "values" . $vals;
        }elseif(is_numeric($array)){
$sql .=$array;
        }
        return;
        else{
            echo "x type";
        }
      
    }
    function del($id)
    if(is_array($id)){

    }elseif(is_numeric($id)){
        $sql.=`id`='$id';
    }
    return
    function find($id)//fetch
    private function sql_all($sql,$where='',$other='')
    if(isset($this->table) && !empty($this->table)){
return
    }else{
        echo "x table";
    }
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