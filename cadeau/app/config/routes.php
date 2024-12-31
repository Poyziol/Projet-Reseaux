<?php

use app\controllers\ApiExampleController;
use app\controllers\LoginController;
use app\controllers\Home_controller;
use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
**/

//AUTO
$router->get("/", function () {
    Flight::redirect("/login/user");                                                    //Automaticly send to this path at the beginning
});

//LOGIN
$router->group('/login', function() use ($router, $app) 
{
	$router->get('/user', [ LoginController::class, 'user' ]);                          //send to the function user of the controller LoginContoller
	$router->post("/check-user", [ LoginController::class , 'login_user']);             //send to the function login_user of the controller LoginContoller

    $router->get("/admin", [ LoginController::class , 'admin']);                        //send to the function admin of the controller LoginContoller
    $router->post("/check-admin", [ LoginController::class , 'login_admin']);           //send to the function login_admin of the controller LoginContoller

    $router->get("/sign-up", [ LoginController::class , 'sign_up']);                    //send to the function sign_up of the controller LoginContoller
    $router->post("/create-user", [ LoginController::class , 'login_sign']);            //send to the function login_sign of the controller LoginContoller
});
