<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();
/*// Hello World
$app->get('/hello/:name', function ($name) {
    $inteiro1 = 42; // tipo Integer
    $inteiro2 = 79; // tipo Integer   
    $texto = "Ola, "; // tipo String
    $fracao = 2.3; // tipo Float
        
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $fracao;
    $multi = $inteiro2 * $fracao;
    
    $olaMundo = $texto . $name;
    
    echo "<p>Soma: " . $soma . "</p>";
    echo "<p>Divisao: " . $divisao . "</p>";
    echo "<p>Multiplica: " . $multi . "</p>";
    echo "<p>" . $olaMundo . "</p>";
});*/
$app->get('/', function() use($app) {
    $app->view->setData(array(
        'title' => 'Página Principal',
        'page' => 'page/home'
    ));
    
    $app->render('layout.php');
});
$app->get('/sobre', function() use($app) {
    $app->view->setData(array(
        'title' => 'Página Sobre',
        'page' => 'page/about'
    ));
    
    $app->render('layout.php');
});
$app->get('/breaking-bad', function() use($app) {
    $app->view->setData(array(
        'title' => 'Breaking Bad',
        'page' => 'page/breaking-bad'
    ));
    
    $app->render('layout.php');
});

$app->get('/better', function() use($app) {
    $app->view->setData(array(
        'title' => 'Better Cal Saul',
        'page' => 'page/better'
    ));
    
    $app->render('layout.php');
});

$app->get('/black', function() use($app) {
    $app->view->setData(array(
        'title' => 'Black Mass',
        'page' => 'page/black'
    ));
    
    $app->render('layout.php');
});

$app->get('/lista', function() use($app) {
    $app->view->setData(array(
        'title' => 'Página Lista',
        'page' => 'page/list'
    ));
    
    $app->render('layout.php');
});

$app->run();