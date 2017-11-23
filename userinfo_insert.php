<?php

    //  通过post获取页面提交数据信息
    $username = $_POST["username"];
    $sex = $_POST["sex"];
    $phone = $_POST["phone"];

    echo "用户：".$username."<br />";
    echo "性别：".$sex."<br/>";
    echo "电话：".$phone."<br/>";

    //设置服务器的连接信息
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="testdb";
    //连接数据库
    $conn = new mysqli($servername,$username,$password,$dbname);

    //  检测连接
    if ($conn->connect_error) {
        die("连接失败：" . $conn->connect_error);
    }
    echo "连接成功！";

    /*//  定义数据库
    $sql = "INSERT INTO user_info (user_name,user_sex,user_phone)VALUES('$username','$sex','$phone')";
    $result = mysqli_query($sql,$conn);
    if (!$result) {
        die('Error'.mysqli_connect_error());
    }
    echo "添加一条记录";

    $result->free();
    $mysqli->close();*/
?>