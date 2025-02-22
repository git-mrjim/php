<?php 

    require 'vendor/autoload.php';

    session_start();

    require 'database.php';

    $config = require('config.php');
    $database = new Database($config['database']);
    $persons = $database->query("SELECT * FROM person");


    // Routing

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $urls = [
        '/php/' => 'controllers/index.php',
        '/php/about/' => 'controllers/about.php',
        '/php/contact/' => 'controllers/contact.php',
        '/php/session/' => 'controllers/session.php',
        '/php/playground' => 'controllers/playground.php',
        '/php/oop' => 'controllers/oop.php'
    ];

    if (array_key_exists($uri, $urls)) {
        require $urls[$uri];
    } else {
        http_response_code(404);
        require 'views/404.php';
    }


    


    
