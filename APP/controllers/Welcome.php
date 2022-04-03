<?php

class Welcome extends Controller
{
    public function index()
    {

        if (isset($_POST['submit'])) {
            $result = $this->model('Users_model')->post_request(['email' => $_POST["email"], 'password' => $_POST["password"]], API . 'auth');
            if (isset($result->token)) {
                setcookie('PEMWEB-LOGIN', $result->token, time() + 3600);
                setcookie('id', $result->user_id, time() + 3600);
                if ($result->role == 1) header('Location: admin');
                else if ($result->role == 2) header('Location: user');
            }
        }

        if ($this->cekCookie()) {
            if ($this->cekCookie()->role == 1) header('Location: admin');
            else if ($this->cekCookie()->role == 2) header('Location: user');
        }

        $this->view('welcome/sign_in');
    }
}
