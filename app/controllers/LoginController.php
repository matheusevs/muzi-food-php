<?php 

require_once __DIR__ . '/../models/Clients.php';

class LoginController {

    private $clientModel;

    public function __construct()
    {
        $this->clientModel = new Clients();
    }

}