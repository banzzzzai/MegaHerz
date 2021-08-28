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
            background: url(img/bg_energy.jpg);  /* Цвет фона и путь к файлу */
            background-position: top center ;
            background-attachment: fixed;
            background-size: 100%;
            color: #000000; /* Цвет текста */
            margin-top: 5%; /* Отступ сверху */
        }
    </style>
</head>
<body>
<nav class="fixed-top d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <?php require "Parts/header.php"?>
</nav>
<div class="container" style="background: url(img/fon.png);">

    <img alt="Logo_Energy" class="align-items-center text-align: center-img" width="301" height="63" src="img/name_energy1.png">
    <div class="container mt-5 md-5" style="background: url(img/fon.png); width: 80%;">
        <?php require "Parts/energy_news1.php" ?>
    </div>
    <div class="container mt-5 md-5" style="background: url(img/fon.png); width: 80%;">
        <?php require "Parts/energy_news2.php" ?>
    </div>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
    <div class="container mt-5" style="background: url(img/fon.png);">
        <?php require "Parts/footer.php"?>
    </div>
</div>

</body>
</html>