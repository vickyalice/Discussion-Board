<?php
    //echo "<script>express()</script>";
    //post來自reply.php
    $password = $_POST['replyPwd'];
    $title = $_POST["replyTitle"];
    echo "<h3>發文者密碼請輸入正確，密碼錯誤將會2秒後返回主頁</h3>";
    echo "<br><form method='POST' action='change_2.php'>輸入驗證密碼:<input type='text' name='changePwd'>";
    echo "<input type='hidden' value=".$password." name='replyPwd'>";
    echo "<input type='hidden' value=".$title." name='replyTitle'>";
    echo "<input type='submit' value='確認' name='submit'></form>";
?>