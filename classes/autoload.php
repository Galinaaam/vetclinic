<?php
    require_once("./classes/Template_class.php");
    require_once ("./classes/Db_class.php");
    require_once ("./classes/Validation_class.php");
    $temp = new Template_class();
    $db = new DB_class();
    $validate = new Validation_class();
    session_start();