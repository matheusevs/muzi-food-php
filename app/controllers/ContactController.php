<?php 

require_once '../models/Contacts.php';

class ContactController {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contacts();
    }

}