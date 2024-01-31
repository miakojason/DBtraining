<?php
if(isset($_SESSION['login'])){
    to("./back.php");
}
if($_GET['error']){
    echo " <script>alert('{$_GET['error']}')</script>";
}