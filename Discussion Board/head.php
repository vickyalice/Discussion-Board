<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>匿名討論版</title>
    <script src="jquery-3.6.0.min.js"></script>
    </script>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            width: 48.5%;
            border-collapse: collapse;
        }

        .insert {
            border: none;
            background-color: white;
            cursor: pointer;
        }

        #designDiv {
            border: 1px solid;
            width: 440px;
        }

        #insertBtn {
            border: none;
            background-color: white;
            width: 100px;
            cursor: pointer;
        }
    </style>
    <script>
        function show() {
            var divDisplay = document.getElementById("designDiv");
            var insertText = document.getElementById("insertBtn");
            if (divDisplay.style.display === "none") {
                divDisplay.style.display = "block";
                insertText.value = "取消新增";
            } else {
                divDisplay.style.display = "none";
                insertText.value = "新增";
            }
        }
    </script>
</head>

<body>
    <h3>文章集中區~歡迎投稿</h1>
    <?php
    require_once "connectDB.php";
    $info = "SELECT * FROM `record`";
    $result = mysqli_query($link, $info);
    $fieldInfo = mysqli_fetch_field($result);
    ?>
    <table>
        <tr>
            <th>文章標題</th>
            <th>發表人</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $a = $row['name'];
            echo "<form method='post' action='reply.php'><tr>";
            echo "<input type='hidden' value='" . $row["name"] . "' name='user'>";
            echo "<input type='hidden' value='" . $row["password"] . "' name='password'>";
            echo "<input type='hidden' value='" . $row["content"] . "' name='title'>";
            echo "<td><center><input style='text-decoration: underline;' type='submit' id='content' class='insert' value='" . $row["content"] . "' ></center></td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "</tr></form>";
        }
        ?>
        <tr>
            <td  style='background-color:lightyellow;' colspan="2">
                <center><input style='background-color:lightyellow;' type="button" id="insertBtn" value="新增" onclick="show()"></center>
            </td>
        </tr>
    </table>
    <br>
    <div id="designDiv" style="display:none;">
        <form id="formShow" method="POST" action="insertTitle.php"><br>
            &nbsp使用者*:<input type="text" id="user" name="user" required="required"><br>
            &nbsp密&nbsp&nbsp&nbsp&nbsp碼*:<input type="text" id="password" name="password" required="required"><br>
            &nbsp問題*:<br>&nbsp<textarea id="title" cols="56" rows="10" name="title" required="required"></textarea><br>
            <center><input style="background-color:lightyellow;border:'1px solid black'" type="submit" class="insert" value="確認新增"></center>
        </form>
    </div>
</body>

</html>