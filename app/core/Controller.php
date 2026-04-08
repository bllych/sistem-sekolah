<?php
namespace App\Core;

class Controller
{
    public function view(string $view, array $data = [])
    {
        extract($data);
        // ['name' => 'John'] => $name = 'John'
        $view = str_replace(
            '.',
            '/',
            $view
        );
        require_once "../app/views/{$view}.php";
    }
}


?>
