<?php
    $host = 'localhost';
    $dbUser = 'root';
    $dbPw = '';
    $dbName = 'discussion_board';

    $link = mysqli_connect($host,$dbUser,$dbPw,$dbName);

    if($link){
        mysqli_query($link,"SET NAMES utf-8");
        //echo "順利連線";
    }else{
        echo "無法連線:</br>"+ mysqli_connect_error();
    }
?>

