<?php 
    $host = "localhost";
    $username = "student";
    $pass ="123456";
    $dbname="thuvien";
    try{
        $dsn = "mysql:host=".$host.";dbname=".$dbname;
        $conn = new PDO($dsn,$username,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "ket noi";
    }
    catch (PDOException $ex){
        echo $ex->message();
    }
    

?>