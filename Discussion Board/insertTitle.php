<?php
    require_once "connectDB.php";

    $user = $_POST["user"];
    $title = $_POST["title"];
    $password = $_POST["password"];
    
    $info = "INSERT INTO `record` (`password`,`content`,`name`) VALUES ('{$password}','{$title}','{$user}')";
    $info2 = "INSERT INTO `message` (`password`,`content`,`name`,`link`) VALUES ('{$password}','{$title}','{$user}','{$user}')";    
    $result = mysqli_query($link,$info);
    $result2 = mysqli_query($link,$info2);
    if(mysqli_affected_rows($link)>0){
        mysqli_insert_id($link);
        header("Location:head.php");
    }elseif(mysqli_affected_rows($link)==0){
        echo "無資料新增";
    }else{
        echo "{$info} 語法執行失敗，錯誤訊息:"+mysqli_error(($link));
    }
?>