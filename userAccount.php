<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>МегаГерц</title>
    <style>
        body {
            background: url(img/bg_megaherz.png) top center;
            background-attachment: fixed;
            background-size: 100%;
            color: #000000; /* Цвет текста */
            margin-top: 5%; /* Отступ сверху */
        }
        a, a:hover,a:visited, a:focus {
            text-decoration:none;
        }
    </style>
</head>
<body>
<nav class="fixed-top d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"">
<?php require "Parts/header.php"?>
</nav>
<div class="container">
    <h3>Привет, <?=$_COOKIE['user']?></h3>
    <h3>Ссылка на зум:</h3>
    <h3>Ссылка на зум:</h3>
    <h3>Ссылка на зум:</h3>
    <h3>Ссылка на зум:</h3>
    <a class="btn btn-outline-primary" href="/exit.php">Выйти</a>
</div>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<div class="container mt-5" style="background: url(img/fon.png)">
    <?php require "Parts/footer.php"?>
</div>
</body>
</body>
</html>