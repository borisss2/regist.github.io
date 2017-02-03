<?php
    function action_index(){
    	echo 'Index page';
    }

    function action_contacts(){
    	echo 'contact page';
    }

    // Делает обработчик регисрации

    ini_set('display_errors','On');
    error_reporting('E_ALL');

    function action_registration(){

    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		$formData = [
                'login' => htmlspecialchars(trim($_POST['login'])),
                'password' => trim($_POST['password']),
                'email' => trim($_POST['email'])
    		];

    		$rules = [
                 'login' => ['required', 'login'],
                 'password' => ['required', 'password'],
                 'email' => ['required', 'email']
    		];

    		$errors = validateForm($rules, $formData);
    		if(empty($errors)){
    			//todo Save new user
    		}
    	}

    	renderView('registration', $errors);
  
    }