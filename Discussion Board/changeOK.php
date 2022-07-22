<?php
    require_once "connectDB.php";
    $pwd = $_POST['password'];
    $updateContent = $_POST['txtContent'];
    $info = "UPDATE `message` SET `content`='{$updateContent}' WHERE `password`='{$pwd}'";
    $info2 = "UPDATE `record` SET `content`='{$updateContent}' WHERE `password`='{$pwd}'";
    $result = mysqli_query($link,$info);
    $result2 = mysqli_query($link,$info2);
    header("location:head.php");
?>