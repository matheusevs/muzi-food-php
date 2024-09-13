<?php

class Router
{
    private $method;
    private $route;
    private $url;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->route = $_SERVER['REQUEST_URI'];
        $this->url = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_HOST'];

        $this->routes();
    }

    private function routes(){
        switch ($this->method) {
            case 'GET':
                if ($this->route == '/cardapio') {
                    if (!include_once '../app/views/menu-page.php') {
                        include_once '../app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/login') {
                    if (!include_once '../app/views/login-page.php') {
                        include_once '../app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/registrar') {
                    if (!include_once '../app/views/register-page.php') {
                        include_once '../app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/contato') {
                    if (!include_once '../app/views/contact-page.php') {
                        include_once '../app/views/error-page.php';
                    }
                    exit;
                }

                if ($this->route == '/' || $this->route == '/home') {

                    if (!include_once '../public/index.php') {
                        include_once '../app/views/error-page.php';
                    }

                } else {

                    if($this->route){
                        include_once '../app/views/error-page.php';
                        exit;
                    }

                }
            break;
        }
    }
}