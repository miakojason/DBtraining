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
        if(is_array($array[id])){
            $sql="update from `$this->table` set ";
            if(!empty($array)){
                $tmp=$this->a2s($sql);
            }else{
                echo "空的";
            }
            $sql .=join(",",$tmp);
            $sql .=" where `id`='{$array['id']}'";

        }else{
            $sql="insert into `$this->table`";
            $cols="(`". join("`,`",array_keys($array)) ."`)";
$vals="('". join("','",$array) ."')";
$sql.=" $cols " . "values" . $vals;

        }
        return$this->pdo->exec($sql);
        
      
    }
    function del($id){
        $sql="delete from `$this->table` where ";
        if(is_array($id)){
$tmp=$this->a2s($id);
$sql.=join(" && ",$id);
        }elseif(is_numeric($id)){
            $sql.="`id`='$id'";
        }else{
            echo " x type";
        }
        return $this->pdo->exec($sql);
    }
   
    function find($id){
        $sql="select * from `$this->table`";
        if(is_array($id)){
$tmp=$this->a2s($id);
$sql.=" where " . join(" && ",$tmp);
        }elseif(is_numeric()){
$sql .=" where "
        }else{
            echo"x type";
        }
        return
    }
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