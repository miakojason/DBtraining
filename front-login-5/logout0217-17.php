<?php
if(isset($_SESSION['login'])){
    to("./back.php");
}
if(isset($_GET['error'])){
    echo "<script>alert('{$_GET['error']}')</script>";
}