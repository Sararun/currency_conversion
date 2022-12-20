<?php
require 'Router.php';
$url = key($_GET);
$router = new Router();
$router->addRoute("/", "login.html");