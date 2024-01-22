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
    private function a2s($array)
    {
        foreach ($array as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        return $tmp;
    }
    function save($array)
    {
        if (isset($array['id'])) {
            $sql = "update from `$this->table` set ";
            if (is_array($array)) {
                if(!empty($array)){
                    $tmp = $this->a2s($array);
                    $sql .= " where " . join(",", $tmp);
                }
            } else {
                $sql .= " where `id`='{$array}'";
            }
        } else {
            $sql = "insert into  from `$this->table`";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)";
            $vals = "('" . join("','", $array) . "')";
            $sql .= $cols . "values" . $vals;
        }
        return $this->pdo->exec($sql);
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
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function all($where = '', $other = '')
    {
        $sql = "select * from `$this->table`";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function count($where = '', $other = '')
    {
        $sql = "select count(*) from `$this->table`";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function math($math, $col, $array = '', $other = '')
    {
        $sql = "select $math(`$col`) form `$this->table`";
        $sql = $this->sql_all($sql, $array, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function sum($col = '', $where = '', $other = '')
    {
        return $this->math('sum', $col, $where, $other);
    }
    function max($col = '', $where = '', $other = '')
    {
        return $this->math('max', $col, $where, $other);
    }
    function min($col = '', $where = '', $other = '')
    {
        return $this->math('min', $col, $where, $other);
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
$do = $_GET['do'] ?? 'main';
$file = "./front/{$do}.php"; //or back
if (file_exists($file)) {
    include $file;
} else {
    include "./front/main.php";
}
?>