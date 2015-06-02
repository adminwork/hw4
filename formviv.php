<?php
    if(isset($_POST["login"])&&!empty($_POST["login"])){
        echo $_POST["login"];
    }else{
        echo 'Ошибка';
    }
    if(isset($_POST['pass'])&&!empty($_POST['pass'])){
        echo $_POST['pass'];
    }else{
        echo 'Ошибка';
    }
    if(isset($_POST['email'])&&!empty($_POST['email'])){
        echo $_POST['email'];
    }else{
        echo 'Ошибка';
    }
    if(isset($_POST['city'])&&!empty($_POST['city'])){
        echo $_POST['city'];
    }else{
        echo 'Ошибка';
    }

    $uploads_dir = 'Z:\home\localhost\www\HW4\upload';
    $tmp_name = $_FILES["avatar"]["tmp_name"];
    $name = $_FILES["avatar"]["name"];
    move_uploaded_file($tmp_name,"$uploads_dir/$name");

?>