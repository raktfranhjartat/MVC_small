<?php

function component(string $name, array $data = [])
{
    extract($data, EXTR_SKIP);
    $path = __DIR__ . "/../components/{$name}.component.php";

    if (file_exists($path)) {
        require $path;
    }
}