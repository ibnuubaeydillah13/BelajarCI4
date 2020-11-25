<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{

    public function index()
    {
        // echo view untuk menampilakan view lebih dari satu
        // kalau ingin menampilkan view hanya satu saja bisa menggunakan return view (..)
        echo view('template/header');
        echo view('pages/home');
        echo view('template/footer');
    }

    public function pages($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that
            throw new \Codeigniter\Exceptions\PageNotFoundException($page);
        }

        // ucfirst digunakan untuk mengubah huruf depon menjadi huruf kapital 
        // $page adalah nama file template, sehingga dengan menggunakan fungsi ucfisrt nama file tersebut akan dijadikan sebagai teks yang huruf depannya menjadi kapital
        // $kalimat = "Halo semuanya, selamat datang di halaman";
        // $data['title'] = ucfirst($page) ;

        $data['title'] = "Halo Semuanya!";

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }
}



/* End of file Controllername.php */
