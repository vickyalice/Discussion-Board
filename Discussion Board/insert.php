<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>回覆</title>
        <style>
            table,tr,th,td{
                border: 0.5px solid black;
                border-collapse:collapse ;
                width: 80%;
                text-align: left;
            }
            .btn{
                background-color: white;
                cursor: pointer;
                width: 100%;
                border:none;
            }
            #content,#user,#password{
                border:none;
                width: 98%;
            }
        </style>
        <?php
            $name = $_POST["user"];
            $title = $_POST["replyTitle"];
        ?>
    </head>
    <body>
        <form id="insertForm" method="post" action="insertReply.php">
            <table>
                <tr>
                    <th colspan="2">回覆文章:<?php echo $title; ?></th>
                </tr>
                <tr>
                    <td style="width: 20%;">顯示名稱</td>
                    <td><input type="text" id="user" name="user"></td>
                <tr>
                    <td style="width: 20%;">留言內容</td>
                    <td><textarea style="width: 98%;height: 100%;" id="content" name="content" rows='6'
                        cols='40' required></textarea></td>
                </tr>
                <tr>
                    <td style="width: 20%;">輸入密碼</td>
                    <td><input type="text" id="password" name="password"></td>
                </tr>
                <tr>
                    <?php
                        echo "<input type='hidden' value=".$name." name='name'>";
                    ?>
                    <td colspan="2"><center><input class="btn" type="submit" value="確認回覆" onclick="sendForm()"></center></td>
                </tr>
            </table>
        </form>
    </body>
</html>