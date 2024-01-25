<?php include_once "db.php";

//取得表單傳來的table值
$table=$_POST['table'];
//建立對應的資料表物件
$DB=${ucfirst($table)};

//依照傳來的$_POST['id']陣列，逐筆處理資料
foreach($_POST['id'] as  $key => $id){

    //先判斷del有沒有被勾選，如果有被勾選，接下來是確認目前這筆資料的
    //id有沒有在$_POST['del']中，有則刪除，無則進入編輯
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }else{

        //先將要編輯的資料從資料表中取出
        $row=$DB->find($id);

        //如果原本的資料表中有text欄位，則將$_POST['text']中的資料寫入
        if(isset($row['text'])){
            $row['text']=$_POST['text'][$key];
        }

        //依照不同的資料表，對應的欄位做不同的處理
        switch($table){
            case "title":
                //單選-如果$_POST['sh']的值和這筆資料的id一樣，則將sh設為1，否則設為0
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            case "admin":
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            break;
            case "menu":
                $row['href']=$_POST['href'][$key];
                //多選-如果$_POST['sh']陣列中有這筆資料的id，則將sh設為1，否則設為0
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            default:
                //除了上述的資料表，其餘的資料表都會有sh欄位，所以都可以用這個處理
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }
        //將處理完的資料寫回資料表中
        $DB->save($row);
    }
}

to("../back.php?do=$table");
?>