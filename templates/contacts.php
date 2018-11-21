<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="/templates/style.css">
</head>
<body>
<div class="menu">
    <a href="/" >Главная</a>
    <a href="/?page=about">О нас</a>
    <a href="/?page=photo">Фотогалеря</a>
    <a href="/?page=news">Новости</a>
    <a href="/?page=contacts">Контакты</a>
</div>
<h1><?=$hello?></h1>
<div class="content"><?=$textOnPage?></div>
<div class="form">
    <input class="item" type="text" name="FirstName" placeholder="Имя" /><br />
    <input class="item" type="text" name="LastName" placeholder="Фамилия" /><br />
    <input class="item" type="text" name="Email" placeholder="Email" /><br />
    <textarea class="mess" name="message" id="" cols="30" placeholder="Напишите Ваше сообщение" rows="10"></textarea><br />
    <button type="submit">Отправить</button>
</div>

<ul>
    <?php foreach($contacts as $key=>$val):?>
    <li><?=$key?>: <?=$val?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>