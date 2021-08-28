<?php
setcookie('user', 'Нет', time() - 3600 * 12, '/');
header('Location: /');
?>


