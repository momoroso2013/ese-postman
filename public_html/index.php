<?php
const LOGIN_ID = 'login';
const LOGIN_PASSWORD = 'password';

$login_id = '';
$login_password = '';

$login_id = isset($_POST['login_id']) ? $_POST['login_id'] : '';
$login_password = isset($_POST['login_password']) ? $_POST['login_password'] : '';

if (LOGIN_ID != $login_id && LOGIN_PASSWORD != $login_password ) {
    header('Location: login.php');
    }

echo 'ログインしました';
