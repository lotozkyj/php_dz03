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

<div class="allnews">
    <?php for($i=0;$i<count($news);$i++):?>
        <h3><?=$news[$i]['name']?></h3>
        <p><?=$news[$i]['short_desc']?></p>
    <?php endfor;?>
</div>
</body>
</html>