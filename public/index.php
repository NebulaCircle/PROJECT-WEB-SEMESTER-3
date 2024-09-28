<?php
// ini merupakan main file yang memanggil file lainnya
session_start();
if (!defined('BASE_URL')) {
    $base = dirname($_SERVER['SCRIPT_NAME']);
    $base = str_replace('\\', '/', $base);
    $base = str_replace('/public', '', $base);
    define('BASE_URL', rtrim($base, '/'));
}


//untuk otomatis inlcude file yg pemanggilannya menggunakan use
function autoload($class)
{
    $filePath = str_replace('\\', '/', $class) . '.php';
    $filePath = "../" . $filePath;
    if (file_exists($filePath)) {
        include_once($filePath);
    }
}
spl_autoload_register('autoload');
use services\DB;
// memanggil file lainnya
include __DIR__ . "/../services/Helpers.php";
include __DIR__ . "/../route/route.php";
require_once __DIR__ . '/../services/Database.php';
loadEnv(__DIR__ . '/../.env');


$database = new DB();

    // Mendapatkan koneksi
    $conn = $database->getConnection();
