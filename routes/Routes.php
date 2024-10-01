<?php

require_once __DIR__ . '/../app/controllers/RegisterController.php';

class Router
{
    private $method;
    private $route;
    private $url;
    private $post;
    private $body;
    
    private $registerController;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->route = $_SERVER['REQUEST_URI'];
        $this->url = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_HOST'];
        $this->post = $_POST;
        $this->body = json_decode(file_get_contents('php://input'), true);

        $this->registerController = new RegisterController();

        $this->routes();
    }

    private function routes(){
        switch ($this->method) {
            case 'GET':
                if ($this->route == '/cardapio') {
                    if (!include_once 'app/views/menu-page.php') {
                        include_once 'app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/login') {
                    if (!include_once 'app/views/login-page.php') {
                        include_once 'app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/registrar') {
                    if (!include_once 'app/views/register-page.php') {
                        include_once 'app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/contato') {
                    if (!include_once 'app/views/contact-page.php') {
                        include_once 'app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/' || $this->route == '/home') {

                    if (!include_once 'index.php') {
                        include_once 'app/views/error-page.php';
                    }

                } else {

                    if($this->route){
                        include_once 'app/views/error-page.php';
                        exit;
                    }

                }
            break;

            case 'POST':
                if ($this->route == '/registrar') {
                    $registerUser = $this->registerController->registerUser($this->post);
                    echo json_encode($registerUser);
                    exit;
                }
            break;
        }
    }
}