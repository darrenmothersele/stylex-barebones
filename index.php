<?php
require_once __DIR__ . '/vendor/autoload.php';

$app = new Stylex\Application();
$app['debug'] = TRUE;
$app->run();
