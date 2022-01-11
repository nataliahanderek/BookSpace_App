<?php
if (!isset($_COOKIE['Cookie'])) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/login");
}