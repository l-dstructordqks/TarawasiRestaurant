<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function checkRoutes()
    {
        $current_url = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if($method === 'GET') {
            $fn = $this->getRoutes[$current_url] ?? null;
        } else {
            $fn = $this->postRoutes[$current_url] ?? null;
        }

        if($fn) {
            call_user_func($fn, $this);
        } else {
            header('Location: /404');
        }
    }
    
    public function render($view, $data = [])
    {
        foreach ($data as $key => $value) {

            $$key = $value;
        }

        ob_start();

        include_once __DIR__ . "/views/$view.php";

        $content = ob_get_clean();

        $current_url = $_SERVER['PATH_INFO'] ?? '/';

        if(str_contains($current_url, '/admin')) {
           
            include_once __DIR__ . '/views/admin-layout.php';
        } else {
            include_once __DIR__ . '/views/layout.php';
        }
    }
}