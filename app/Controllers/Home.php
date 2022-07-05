<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to(site_url('Auth/login'));
        }
        $this->session = session();
        return view('hello/world', ['data' => 'Hello world juga']);
    }
}
