<?php
try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=shopping;charset=utf8;", 'root', '');
} catch (PDOExpception $me) {
    echo $me->getMessage();
}
