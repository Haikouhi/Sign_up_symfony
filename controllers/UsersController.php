<?php
class UsersController {

    // signup page
    public function signup() {
        
        if (!empty($_POST)) {
            var_dump($_POST);
        }
        
        view('users.signup');
    }


    // login page
    public function login(){
        view('users.login');
    }


    // logout action 
    public function logout() {

    }
}