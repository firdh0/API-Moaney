<?php

class Controller
{
    protected function model($model)
    {
        require_once "models/$model.php";
        return new $model;
    }

    protected function view($view, $data = [])
    {
        require_once "views/$view.php";
    }

    public function cekCookie()
    {
        try {
            if (!isset($_COOKIE['PEMWEB-LOGIN']) || !isset($_COOKIE['id']))
                throw new Exception('Cookie tidak ada');

            $data = $this->model('Users_model')->get_request(API . 'users/' . $_COOKIE['id'], $_COOKIE['PEMWEB-LOGIN']);

            if (!isset($data))
                throw new Exception('Cookie tidak valid');

            if ($data->status) {
                return $data->data[0];
            } else {
                throw new Exception('Error Request');
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
