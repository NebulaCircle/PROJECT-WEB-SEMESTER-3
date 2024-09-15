<?php

namespace models;

use services\DB;

class TestModel
{
    private $db = null;
    public function __construct()
    {
        $this->db  = (new DB)->getConnection();
    }
    public function getAll()
    {
        // code untuk query
    }
}
