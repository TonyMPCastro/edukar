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
