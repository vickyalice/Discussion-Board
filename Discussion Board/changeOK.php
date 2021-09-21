<?php
    require_once "connectDB.php";
    $pwd = $_POST['password'];
    $updateContent = $_POST['txtContent'];
    $info = "UPDATE `message2` SET `content`='{$updateContent}' WHERE `password`='{$pwd}'";
    $info2 = "UPDATE `record2` SET `content`='{$updateContent}' WHERE `password`='{$pwd}'";
    $result = mysqli_query($link,$info);
    $result2 = mysqli_query($link,$info2);
    header("location:head.php");
?>