<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\app;


$app ->get('/', function (Request $request, Response $response){
    $response->getBody()->write("hello");
    return $response;


});



$app->run();