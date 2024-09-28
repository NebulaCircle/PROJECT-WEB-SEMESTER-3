<?php

if (!function_exists("assets")) {
    function assets($path)
    {
        // Menggabungkan direktori public dengan jalur aset
        return baseUrl() . "/" . $path;
    }
}

if (!function_exists("baseUrl")) {
    function baseUrl()
    {
        // Dapatkan protokol (HTTP/HTTPS)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

        // Dapatkan nama host
        $host = $_SERVER['HTTP_HOST'];

        // Dapatkan direktori aplikasi jika ada
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        // Bangun base URL
        return "$protocol://$host$scriptName/";
    }
}

if (!function_exists("Newredirect")) {
    function Newredirect($url)
    {
        header('Location: '.BASE_URL.$url);
    }
}
if (!function_exists(function: "loadenv")) {
    function loadenv($file)
    {
        if (!file_exists($file)) {
            throw new Exception("File .env tidak ditemukan: $file");
        }
    
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }
    
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
    
            if (!array_key_exists($key, $_SERVER) && !array_key_exists($key, $_ENV)) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
                $_SERVER[$key] = $value;
            }
        }
    }
}


if (!function_exists("view")) {
    function view($path, $data = [])
    {
        extract($data);
        include __DIR__ . "/../view/$path.php";
    }
}
if (!function_exists("includeFile")) {
    function includeFile($path)
    {
        include __DIR__ . "/../view/$path.php";
    }
}
