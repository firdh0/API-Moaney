<?php

class Admin extends Controller
{
    public function __construct()
    {
        if ($this->cekCookie()) {
            if ($this->cekCookie()->role == 2) header('Location: user');
            if ($this->cekCookie()->role != 1) header('Location: welcome');
        } else {
            header('Location: welcome');
        }
    }
    public function index()
    {
        if (isset($_POST['edit'])) {
            $result = $this->model('Users_model')->put_request(
                [
                    'nama' => $_POST["nama"], 'email' => $_POST["email"], 'role' => $_POST["role"]
                ],
                API . 'users/' . $_POST['user-id'],
                $_COOKIE['PEMWEB-LOGIN']
            );
            var_dump($result);
        }
        $data = $this->model('Users_model')->get_request(API . 'users', $_COOKIE['PEMWEB-LOGIN']);
        $this->view('admin/dashboard', $data->data);
    }
}
