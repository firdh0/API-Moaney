<?php

class Controller
{
    protected function model($model)
    {
        require_once "models/$model.php";
        return new $model;
    }
}
