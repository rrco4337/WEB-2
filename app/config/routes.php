<?php

use app\controllers\ProduitController;
use flight\Engine;
use flight\net\Router;
// use flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/



$ProduitController = new ProduitController();

$router->get('/', [ $ProduitController, 'index' ]); 
//$router->get('/', [ 'WelcomeController', 'home' ]); 

//$router->get('/', \app\controllers\WelcomeController::class.'->home'); 


