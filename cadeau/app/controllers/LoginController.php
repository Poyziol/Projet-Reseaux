<?php

namespace app\controllers;

session_start();
use app\models\LoginModel;
use Flight\Engine;
use Flight;

class LoginController 
{
	protected $login_model;

	//create an instance of the attribute with static db as parameter on the constructor(doesn t work work on some PC if you don t add)
	public function __construct() 
	{
		$this->login_model = new LoginModel(Flight::db());						//optionnal
	}

	//send to login.php and replace $page with user
	public function user() 
	{
        $data = ['page' => "user"];
        Flight::render('login', $data);
    }

	//send to login.php and replace $page with admin
    public function admin() 
	{
        $data = ['page' => "admin"];
        Flight::render('login', $data);
    }

	//send to login.php and replace $page with sign-up
    public function sign_up() 
	{
        $data = ['page' => "sign-up"];
        Flight::render('login', $data);
    }

	//Authentificate username and password of an user
	public function login_user()
	{
		$data = Flight::request()->data;

		$username = $data->username;
        $password = $data->password;

		$user = $this->login_model->check_user($username , $password);

		if($user)
		{
			$_SESSION['user'] = $user;
			Flight::redirect('/home');
		}
		if(!$user)
		{
			$data = ['page' => 'user', 'message' => "Invalid username or password."];
            Flight::render('login', $data);
		}

	}

}