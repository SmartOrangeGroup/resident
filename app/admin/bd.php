<?php
$Server = "localhost";
$Login = "root";
$Password = "";
$DataBase = "residen_test";


$DB= new MySQLi($Server, $Login, $Password, $DataBase);

$result = $DB->query("Set charset utf8");
$result = $DB->query("Set character_set_client = utf8");
$result = $DB->query("Set character_set_connection = utf8");
$result = $DB->query("Set character_set_results = utf8");
$result = $DB->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}