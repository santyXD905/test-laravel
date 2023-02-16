<?php

    require_once('/../../Models/Persona');

    $nombre  = $_REQUEST['inp1']; // REQUEST ,ambos

    $roles = $_REQUEST['roles'];

    $imagen = $_FILES['image'];

    echo "<p> EL nombre es $nombre </p>"; 
    echo "<ul>";
        foreach ($roles as $rol) {
            echo "<li>$rol</li>";
        }
    echo "</ul>";  

    var_dump($imagen);