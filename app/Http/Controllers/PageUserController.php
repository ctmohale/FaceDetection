<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageUserController extends Controller
{
    //Page controller
    public function index(){
        return value('/');
    }

    //User profile
    public function profile(){
        return value('./user/profile');
    }

    //User registration process
    public function register(){
        return value('./user/register');
    }

    //Login section
    public function login(){
        return value('./user/login');
    }

}
