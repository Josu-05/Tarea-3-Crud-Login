<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        if ($usuario === 'admin' && md5($password) === 'e10adc3949ba59abbe56e057f20f883e')
        {
            session()->set('logged', true);

            return redirect()->to('/peliculas');
        }

        return redirect()->to('/');
    }


    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}