<?php

namespace Src;

class RouteCollection {
    protected $routes_post   = [];
    protected $routes_get    = [];
    protected $routes_put    = [];
    protected $routes_delete = [];

    public function add($request_type, $pattern, $callback) {
        switch ($request_type) {
            case "post":
                return $this->addPost($pattern, $callback);
            break;
            case "get":
                return $this->addGet($pattern, $callback);
            break;
            case "put":
                return $this->addPut($pattern, $callback);
            break;
            case "delete":
                return $this->addDelete($pattern, $callback);
            break;
            default:
                throw new \Exception("Invalid HTTP METHOD");
        }
    }

    public function where($request_type, $pattern) {
        // to do
    }

    public function definePattern($pattern) {
        $pattern = implode('/', array_filter(explode('/', $pattern)));
        return '/^' . str_replace('/', '\/', $pattern);
    }

    protected function addPost($pattern, $callback) {
        // to do
    }

    protected function addGet($pattern, $callback) {
        // to do
    }

    protected function addPut($pattern, $callback) {
        // to do
    }

    protected function addDelete($pattern, $callback) {
        // to do
    }
}