<?php

$request_method = isset($_POST['request_method']) ? $_POST['request_method'] : '';
$request_url = isset($_POST['request_url']) ? $_POST['request_url'] : '';
$key = isset($_POST['key']) ? $_POST['key'] : '';
$value = isset($_POST['value']) ? $_POST['value'] : '';

$response = file_get_contents("{$request_url}");
echo $response;

?>
