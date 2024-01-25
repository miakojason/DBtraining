<?php
include_once "db.php";

$table=$_POST['table'];
$DB=${ucfirst($table)};

//更新圖片必然是從即有的資料中去更新，因此先根據id來撈出資料
$row=$DB->find($_POST['id']);

//判斷圖片是否上傳成功
if(isset($_FILES['img']['tmp_name'])){

    //搬移圖片到img資料夾中
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    
    //更新資料中的圖片名稱
    $row['img']=$_FILES['img']['name'];
}

//更新完成後回存進資料表
$DB->save($row);

//將請求導回到原本發出請求的後台頁面中
to("../back.php?do=$table");
?>