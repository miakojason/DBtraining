<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB{
    protected $dsn="";
    protected $pdo;
    protected $table;
}