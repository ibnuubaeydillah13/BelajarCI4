<?php

namespace App\Controllers;

class Coba extends BaseController
{

    public function cobaTitle()
    {
        // echo "$this->title";
        // return view('coba');

        $data = [
            'title'    => 'Halaman Coba',
            'kalimat'  => 'saya sedang belajar codeigniter'
        ];

        return view('coba', $data);
    }

    //--------------------------------------------------------------------

}
