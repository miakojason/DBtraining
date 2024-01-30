<?php
include_once "./db.php";
$table=$_POST['table'];//取得資料表名稱，例:抓從./api/(bottom跟total)，post過來資料表名稱，在input type=hiden那邊
$DB=${ucfirst($table)};//將資料表名稱轉為首字大寫物件變數$$可變變數
//例:抓到bottom$BD=Bottom
$data=$DB->find(1);//取得id為1的資料
$data[$table]=$_POST[$table];//將資料對應欄位的資料修改為post過來的值
$DB->save($data);//使用save更新資料
//例:$BD==#Bottom
to("../back.php?do=$table");
?>