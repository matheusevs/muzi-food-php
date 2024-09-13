<?php 

require_once '../models/Clients.php';

class RegisterController {

    private $clientModel;

    public function __construct()
    {
        $this->clientModel = new Clients();
    }

}