<?php

namespace services;

use PDO;
use PDOException;

class DB
{
    // Parameter koneksi database
    private $servername;  // Nama server database
    private $username;     // Nama pengguna database
    private $password;     // Kata sandi pengguna database
    private $dbName;       // Nama database
    private $conn;
    // Konstruktor kelas, akan dijalankan saat objek dibuat
    public function __construct()
    {
        try {
            $this->servername = $_ENV['DB_HOST'];
            $this->username = $_ENV['DB_USERNAME'];
            $this->password = $_ENV['DB_PASSWORD'];
            $this->dbName = $_ENV['DB_NAME'];
            // Mencoba membuat koneksi ke database menggunakan PDO
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);

            // Set atribut error mode menjadi Exception untuk menangani kesalahan
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Menangani error jika koneksi gagal
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Metode untuk mendapatkan koneksi database
    public function getConnection()
    {
        return $this->conn;
    }
}
