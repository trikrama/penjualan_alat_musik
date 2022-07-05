<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to(site_url('Auth/login'));
        }
        $model = new \App\Models\UserModel();

        $data = [
            'users' => $model->paginate(3),
            'pager' => $model->pager,
        ];

        return view('user/index', [
            'data' => $data,
        ]);
    }
}
