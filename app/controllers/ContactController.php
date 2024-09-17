<?php 

require_once __DIR__ . '/../models/Contacts.php';

class ContactController {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contacts();
    }

}