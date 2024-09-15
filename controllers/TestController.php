<?php

namespace controllers;

class TestController
{
    public function index($id)
    {
        include __DIR__ . "/../view/index.php";
    }
}
