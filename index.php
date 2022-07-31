<?php
    session_start();

    $parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    include "./autoload.php";
    include "./rotas.php";