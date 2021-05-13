<?php

    session_start();
    $connect = mysqli_connect('localhost', 'root', 'root', 'kanban');

    if(isset($_SESSION['login'])){
        if($connect->connect_error){
            die("Ошибка подключение к бд:").mysqli_connect_error();
        }else{
    
            $count=2;
            $page=0;
    
            if(isset($_GET['page'])){
                $page = $_GET['page']-1;
            }
    
            $page = $page * $count;
    
            $sql = "SELECT * FROM `boards` INNER JOIN `users` ON (`users`.`id` = `boards`.`id_user`)";
        
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>вход</title>
</head>
<body>
    <div class="content">
        <h3>Введите данные для входа</h1>

        <form action="login_act.php" method="post" enctype="multipart/form-data">

            <input type="text"      id="login"      name="login"        placeholder="login">
            <input type="password"  id="password_f" name="password_f"   placeholder="пароль">

            <input type="submit"    name="sub"      value="войти">
        </form>
    </div>
</body>
</html>