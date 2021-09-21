<?php
	require_once "connectDB.php";
	$a = $_POST["content"];
	$b = $_POST["user"];
    $c = $_POST["password"];
    $name = $_POST["name"];
    
    $sql = "INSERT INTO `message2` (`password`,`name`,`content`,`link`) VALUES ('{$c}','{$b}','{$a}','{$name}')";
    $result = mysqli_query($link,$sql);
    if(mysqli_affected_rows($link)>0){
        $new_id = mysqli_insert_id($link);
        echo "新增成功，新增的密碼為: {$c}";
	    header("Location:head.php");
    }elseif(mysqli_affected_rows($link)==0){
        echo "無資料新增";
    }else{
        echo "{$sql} 語法執行失敗，錯誤訊息:"+mysqli_error(($link));
    }
    flush();
?>
