<?php

$db = mysqli_connect('localhost', 'root', '57184203', 'appsalon');

if(!$db) {
    echo 'Hubo un error';
    exit;
}