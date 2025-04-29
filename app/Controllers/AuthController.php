<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends BaseController
{
    private $users = [
        [
            'username' => 'ortu',
            'password' => '$2y$10$/skz1LSZNQhR76lt2e30uuCdCFBwxmM0wbL2aAkbuFc0fGWpfro7a',
            'role'     => 'admin'
        ],
        [
            'username' => 'kakak',
            'password' => '$2y$10$5Ydf1fWnzLLy7Tdam5qYReN/eNXqImG8xRfuTGC4hHtbkv5CywNIu',
            'role'     => 'kakak'
        ],
        [
            'username' => 'adik',
            'password' => '$2y$10$puuqWzAyp4GMejb.eNhYAuKBkvfcE1VZ8fAnm.FaY/Mtomhk87wr2',
            'role'     => 'adik'
        ]
    ];

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        foreach ($this->users as $user) {
            if ($user['username'] == $username && password_verify($password, $user['password'])) {
                session()->set([
                    'username' => $username,
                    'role'     => $user['role'],
                    'isLoggedIn' => true
                ]);

                return redirect()->to('/' . $user['role']);
            }
        }

        return redirect()->back()->with('error', 'Login gagal. Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}