<?php

namespace App\Controllers;

class StudentController
{


    public function index()
    {
        echo '<h1>Daftar Siswa</h1>';

            echo '<p>Menampilkan daftar siswa.</p>';
    }

    public function create()
    {

    }

    public function show(string $id)
    {
        echo 'Detail Siswa';
        echo "<p>Menampilkan detail siswa dengan ID: [$id] </p>";
    }

}

?>