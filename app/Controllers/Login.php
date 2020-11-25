<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session  = session();
        $model    = new UserModel();
        $email    = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data     = $model->where('user_email', $email)->first();
        if ($data) {
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {

                $akses_data = [
                    'user_id'    => $data['user_id'],
                    'user_name'  => $data['user_name'],
                    'user_email' => $data['user_email'],
                    'login_in'   => TRUE
                ];
                $session->set($akses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->$this->session->set_flashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->$this->session->set_flashdata('msg', 'Email Not Found');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        session_destroy();
        return redirect()->to('/login');
    }
}
