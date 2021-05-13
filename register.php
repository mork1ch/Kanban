<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="content">
        <h3>Введите данные для регистрации</h1>

        <form action="register_act.php" method="post" enctype="multipart/form-data">

            <input type="text"      id="login"      name="login"        placeholder="login">
            <input type="password"  id="password_f" name="password_f"   placeholder="пароль">
            <input type="password"  id="password_s" name="password_s"   placeholder="повторите пароль">
            <input type="text"      id="name"       name="name"         placeholder="имя">
            <input type="text"      id="email"      name="email"        placeholder="mail">
            <input type="number"    id="telephone"  name="telephone"    placeholder="telephone">

            <input type="submit"    name="sub"      value="Зарегистрироваться">
        </form>
    </div>
</body>
</html>