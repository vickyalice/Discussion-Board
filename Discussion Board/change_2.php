<?php
    //echo "<script>express()</script>";
    //post來自change.php
    $replyPwd = $_POST['replyPwd'];
    $changePwd = $_POST['changePwd'];
    $title = $_POST["replyTitle"];
    if($replyPwd==$changePwd){
        require_once "connectDB.php";
        $info = "SELECT * FROM `message2` WHERE `password`='{$replyPwd}'";
        $result = mysqli_query($link,$info);
        $fieldInfo = mysqli_fetch_field($result);
        $rows = mysqli_num_rows($result);
        if($rows > 0 ){
            //echo "順利進入修改頁面";
            echo "<hr><form method='POST' action='changeOK.php'>";
            echo "<input type='hidden' name='password' value='$replyPwd'>";
            echo "<table>";
            echo "<tr><th>編輯文章:".$title."</th></tr>";
            echo "<td><textarea name='txtContent' cols='80' rows='10'>".$title."</textarea></td>";
            echo "<tr><td><input type='submit' class='btn' name = 'changeBtn' width='100%' value='更新文章'></td></tr>";
            echo "</table>";
            echo "</form>";
        }
    }else{
        sleep(2); 
        header('Location:head.php');
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改文章</title>
        <style>
            table,tr,th,td{
                border-collapse: collapse;
                border: 0.5px solid black;
               
            }
            .btn{
                border: none;
                background-color: white;
                cursor: pointer;
                width: 100%;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
    </body>
</html>