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
    </style>
</head>
<body>
<nav class="fixed-top d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <?php require "Parts/header.php"?>
</nav>
<div class="container" style="background: url(img/fon.png); width: 60%">
    <img alt="Logo_HerzenLand" class="mt-3 align-items-center text-align: center-img" width="874" height="215" src="img/top.png">
    <h1 class="text-center mt-3" style="border-bottom: 2px solid maroon">Добро пожаловать в онлайн-центр «МегаГерц»!</h1>
    <h5 class="mt-3" style="text-indent: 20px; font-weight: normal">Наш университет в особых условиях организации детского летнего отдыха в стране в 2020
        году выступил с инициативой реализации совместного с Комитетом по образованию проекта, направленного на обеспечение
        культурно образовательного досуга школьников 7-14 лет в период летних каникул в режиме-онлайн. Проект поддержан губернатором
        Санкт-Петербурга А. Д. Бегловым.</h5>
    <h5 class="mt-2" style="text-indent: 20px; font-weight: normal">Главная цель этого проекта — создание условий для интересного, разнообразного по форме и
        содержанию отдыха школьников Санкт-Петербурга. Школьников ждет незабываемый летний отдых, а родителей – возможность не
        беспокоиться за их досуг в рабочие дни!</h5>
    <h5 class="mt-2" style="text-indent: 20px; font-weight: normal">В 5 лагерях на протяжении 12 смен опытные вожатые и талантливые волонтеры вместе с детьми
        будут создавать незабываемую атмосферу в каждом из лагерей: превращаться в детективов или известных волшебников, смотреть
        мультики и создавать свои, разучивать песни у виртуального костра, путешествовать в разные страны, не выходя из дома, и многое другое.</h5>
    <img class="mt-5 text-align: center-img" alt="HERZENLAND" id="footerlogo" width="478" height="72" src="/img/registration1.png">
    <h2 class="mt-3 text-center" style="color: #d40000; text-decoration-style: dotted">Теперь зарегистрироваться на смены в лагеря "МегаГерц" можно, создав личный кабинет на сайте.</h2>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
</div>
<div class="container mt-5" style="background: url(img/fon.png);">
    <?php require "Parts/footer.php"?>
</div>
</body>
</html>