<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "laele" && $senha == "laele123") {
    header('Location: principal.php');
} else {
    header('Location: index.php');
}






?>