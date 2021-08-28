<style>
    body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    float: center;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

</div>
    <h5 class="my-0 mr-md-auto fw-normal">
        <a class="text-decoration-none mr-4" href="/index.php">
            <img alt="MegaHerz" id="footerlogo" width="113" height="23" src="/img/name_megaherz1.png">
        </a>
        <a class="text-decoration-none ml-4 mr-4 p-2 link-secondary" href="/vmecte.php">
        <img alt="VMECTE" id="footerlogo" width="86" height="21" src="/img/name_vmecte1.png">
        </a>
        <a class="text-decoration-none ml-4 mr-4 p-2 link-secondary" href="/energy.php">
            <img alt="ENERGY" id="footerlogo" width="100" height="21" src="/img/name_energy1.png">
        </a>
        <a class="text-decoration-none ml-4 mr-4 p-2 link-secondary" href="/herzenland.php">
            <img alt="HERZENLAND" id="footerlogo" width="151" height="26" src="/img/name_herzenland1.png">
        </a>
        <a class="text-decoration-none ml-4 mr-4  p-2 link-secondary" href="/profile.php">
            <img alt="PROFILE" id="footerlogo" width="99" height="21" src="/img/name_profile1.png">
        </a>
        <a class="text-decoration-none ml-4 mr-4 p-2 link-secondary" href="/olimp.php">
            <img alt="OLIMP" id="footerlogo" width="76" height="21" src="/img/name_olimp1.png">
        </a>
    </h5>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/about.php">О нас</a>
        <a class="p-5 text-dark" href="/contacts.php">Контакты</a>
    </nav>
    <?php
        if($_COOKIE['user'] != ""):
    ?>
    <a class="btn btn-outline-primary" href="/userAccount.php">Кабинет пользователя</a>
    <?php
        else:
    ?>
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-primary" style="width:auto;">Войти</button>
    <div id="id01" class="modal">
        <div class="row">
            <div class="col">
                <form class="modal-content animate" action="/login.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                        <img src="/img/logo_megaherz.jpg" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <h1>Авторизация</h1>
                        <label for="login" class="mt-3"><b>Логин</b></label>
                        <input type="text" placeholder="Введите Email" name="login" required>

                        <label for="password" class="mt-3"><b>Пароль</b></label>
                        <input type="password" placeholder="Введите логин" name="password" required>

                        <button type="submit">Войти</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Запомнить меня
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
                        <span class="psw">Забыли <a href="#">пароль?</a></span>
                    </div>
                </form>
            </div>
            <div class="col">
                <form class="modal-content animate" action="/register.php" method="post">
                    <div class="container">
                        <h1 class="mt-3">Регистрация</h1>
                        <span onclick="document.getElementById('id01').style.display='none'" class="close mt-4" title="Close Modal">×</span>
                        <p>Пожалуйста, заполните эту форму, чтобы зарегистрироваться.</p>
                        <hr>
                        <label for="name"><b>ФИО</b></label>
                        <input type="text" placeholder="Введите ФИО" name="name" required>

                        <label for="login" class="mt-3"><b>Email</b></label>
                        <input type="text" placeholder="Введите Email" name="login" required>

                        <label for="pass" class="mt-3"><b>Пароль</b></label>
                        <input type="password" placeholder="Введите пароль" name="pass" required>

                        <label for="passRep" class="mt-3"><b>Подтверждение пароля</b></label>
                        <input type="password" placeholder="Повторите пароль" name="passRep" required>

                        <p>Создавая аккаунт, вы соглашаетесь с Условиями <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn">Зарегистрироваться</button>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        endif;
    ?>