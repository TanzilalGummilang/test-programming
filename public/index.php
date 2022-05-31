<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TanzilalGummilang\AplikasiTransaksi\App\Router;
use TanzilalGummilang\AplikasiTransaksi\Controller\HomeController;


Router::add('GET', '/', HomeController::class, 'index', []);


Router::run();