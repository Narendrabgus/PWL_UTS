<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    // // method admin dan user digunakan untuk menyeleksi dan memproteksi agar memiliki tampilan yang berbeda
    // public function admin()
    // {
    //     if (session('role') != 'admin') { // disini mengecek apakah role yang login itu bukan admin?
    //         return redirect()->to('/user'); // jika kondisi terpenuhi (bukan admin), maka dia akan mengembalikan nilai ke tampilan user 
    //     }
    //     // apabila kondisi tidak terpenuhi (jadi admin), maka akan mengekskusi ini (sebagai else nya)
    //     $data['title'] = 'Dashboard Admin';     // di line ini apabila saat login terdeteksi sebagai admin maka dia akan merubah tittle menjadi Dashboard admin
    //     $data['username'] = session('username'); // variable $data mengambil value username dari session untuk ditampilkan pada halaman dashboard sehingga nantinya akan tampil seperti misalkan "halo, username"
    //     return view('dashboard/admin', $data); // mengembalikan ke tampilan dari file admin yang berada di dalam folder dashboard dan di dalam folder view
    // }

    public function admin()
    {
        if (!session()->get('isLoggedIn') || session('role') != 'admin') {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Dashboard Ortu',
            'role'  => 'admin',
            'username' => session('username')
        ];
        return view('dashboard/admin', $data);
    }

    public function kakak()
    {
        if (!session()->get('isLoggedIn') || session('role') != 'kakak') {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Dashboard Kakak',
            'role'  => 'kakak',
            'username' => session('username')
        ];
        return view('dashboard/kakak', $data);
    }

    public function adik()
    {
        if (!session()->get('isLoggedIn') || session('role') != 'adik') {
            return redirect()->to('/');
        }
        
        $data = [
            'title' => 'Dashboard Adik',
            'role'  => 'adik',
            'username' => session('username')
        ];
        return view('dashboard/adik', $data);
    }

}
