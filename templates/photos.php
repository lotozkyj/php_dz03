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

<div class="photos">
    <?php for($i=0;$i<count($photos);$i++):?>
        <img src="<?=$photos[$i]?>" width="450" alt="" /><br />
    <?php endfor;?>
</div>
</body>
</html>