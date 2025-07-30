<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
use App\Database;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('dashboard'));
        }

        $data = [
            'title' => 'Login'
        ];

        return view('login/index1', $data);
    }

    public function login()
    {
        $data = $this->request->getPost(['username', 'password']);

        if (! $this->validateData($data, [
            'username' => 'required',
            'password' => 'required'
        ])) {
            return $this->indeX();
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $credentials = ['username' => $username];

        $user = $this->model->where($credentials)->first();
        
        if (! $user){
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->back();
        }

        $passwordCheck = $this->model->conf_password($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->back();
        }

        $userData = [
            'username' => $user['username'],
            'level' => $user['level'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('dashboard'));
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }
}
