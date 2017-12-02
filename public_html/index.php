<?php
 const LOGIN_ID = 'login';
 const LOGIN_PASSWORD = '$2y$10$XxbuxhhAyHbGozwZrpqbPe4nUHt6k6XUeqP/45Txtzv9O6QDdyYvW';

 $login_id = '';
 $login_password = '';
 
 $login_id = $_POST['login_id'];
 $login_password = $_POST['login_password'];
 if (LOGIN_ID != $login_id) {
     header('Location: login.php');
     exit();
     }
 if (! password_verify($login_password, LOGIN_PASSWORD)) {
     header('Location: login.php');
     exit();
     }
?>

<!DOCTYPE html>
<h1>ese-postman</h1>

<form action="request.php" method="post">
    <select name="request_method">
    <option value="POST">POST</option>
    <option value="GET">GET</option>
    <option value="PUT">PUT</option>
    <option value="PATCH">PATCH</option>
    <option value="DELETE">DELETE</option>
    <input type="text" name="request_url" placeholder="request url">
    <input type="text" name="key" placeholder="key">
    <input type="text" name="value" placeholder="value">
    <input type="submit" value="send">
</form>
