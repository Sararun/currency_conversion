<?php

class Router
{
    private array $pages = array();

    public function addRoute($url, $path): void
    {
        $this->pages[$url] = $path;
    }

    public function route($url): void
    {
        $path = $this->pages[$url];
        $fileDir = "view/" . $path;
        if ($path == "") {
            require "view/404.html";
            die();
        }

        if (!file_exists($fileDir)) {
            require "view/404.html";
            die();
        } else {
            require $fileDir;
        }
    }
}