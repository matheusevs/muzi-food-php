<?php

require_once __DIR__ . '/../../config/database/ConnectDb.php';

class Users {

    private $con;
    private $connect;

    public function __construct()
    {
        $this->con = new ConnectDb();
        $this->connect = $this->con->connection();
    }

}