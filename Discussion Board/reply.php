<!DOCTYPE html>
<html>
<?php
    require_once "connectDB.php";

    $name = $_POST["user"];
    $password = $_POST["password"];
    $title = $_POST["title"];
?>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <script src="jquery-3.6.0.min.js"></script>
    <style>
        table,
        tr,
        th,
        td {
            border-collapse: collapse;
            border: 0.5px solid black;
            width: 50%;
        }

        .btn {
            border-collapse: collapse;
            background-color: white;
            cursor: pointer;
            border: none;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    $info = "SELECT * FROM `message` WHERE `link`='{$name}' ORDER BY id ASC";
    $result = mysqli_query($link, $info);
    $fieldInfo = mysqli_fetch_field($result);
    echo "<table border = '1'>";
    echo "<tr><td><center>發表人</center></td><td><center>文章標題</center></td></tr>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<tr>';
        echo "<td>" . $row["name"] . "</td>";
        echo nl2br("<td style='width:100%;height:auto;'>" . $row["content"] . "</td>");
        echo "</tr>";
    }
    mysqli_close($link);
    ?>
    <tr>
        <td colspan="2">
            <form method="POST" action="insert.php">
                <?php echo "<input type='hidden' value=" . $name . " name='user'>"; ?>
                <?php echo "<input type='hidden' value=" . $title . " name='replyTitle'>"; ?>
                <center><input style='background-color:lightyellow;' class="btn" type="submit" value="點我回覆文章"></center>
        </td>
        </form>
    </tr>
    <tr>
        <td colspan="2">
            <form method="POST" action="change.php">
                <?php echo "<input type='hidden' value=" . $password . " name='replyPwd'>"; ?>
                <?php echo "<input type='hidden' value=" . $title . " name='replyTitle'>"; ?>
                <center><input style='background-color:lightyellow;' class="btn" type="submit" value="點我編輯原文"></center>
        </td>
        </form>
    </tr>
</body>

</html>