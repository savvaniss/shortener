<?php

// Define app routes

$app->get('/', 'HomeController:index')->setName('home');
$app->post('/', 'UrlController:parseUrl');
