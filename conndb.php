<?php
    $mysqli = new mysqli();
    $mysqli->connect('localhost','root','','testdb');
    if (mysqli_connect_error()) {
        exit('数据库连接错误，错误信息是：'.mysqli_connect_error());
    }
    $mysqli->set_charset("UTF8");
    $sql = 'select * from user';
    $result = $mysqli->query($sql);
    print_r($result->fetch_all());
    $result->free();
    $mysqli->close();
?>