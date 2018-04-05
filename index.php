<?php

ini_set("display_errors", 1);

require_once __DIR__ . '/vendor/autoload.php';

$app = new CommentApp\Application(
    $config = new CommentApp\Config(realpath(__DIR__))
);

$response = $app->createResponse(CommentApp\Request::create());

$response->send();
