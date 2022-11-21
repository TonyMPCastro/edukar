<?php
session_start();
ob_start();
define('4578S9', true);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>E-DUKAR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
    <?php
    require './vendor/autoload.php';

    use Core\ConfigController as Home;

    $url = new Home();
    $url->carregar();
    ?>
</body>

</html>


               