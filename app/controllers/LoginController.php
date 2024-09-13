<?php 

require_once '../models/Clients.php';

class LoginController {

    private $clientModel;

    public function __construct()
    {
        $this->clientModel = new Clients();
    }

}