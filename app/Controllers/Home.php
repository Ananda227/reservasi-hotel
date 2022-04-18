<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Auth/v_login');
    }
    public function register()
    {
        return view('Auth/v_register');
    }
    public function Admin()
    {
        return view('Admin/v_admin');
    }
}
