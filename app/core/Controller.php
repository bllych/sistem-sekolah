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

        $content = "../app/views/{$view}.php";

        require_once "../app/views/layouts/app.php";

    }
}


?>
