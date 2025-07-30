<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Logout extends BaseController
{
    public function index()
    {
        $userData = [
            'username',
            'logged_in',
            'Answered',
            'level',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
            'q11',
            'q12',
            'q13'
        ];

        session()->remove($userData);

        return redirect()->to(base_url('login'));
    }
}
