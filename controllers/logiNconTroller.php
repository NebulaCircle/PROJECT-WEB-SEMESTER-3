<?php

namespace controllers;

class logiNconTroller
{
    public function index()
    {
        return view("auth/login");
    }

    public function authentic()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $hasError = false;
        if (empty($email)) {
            $_SESSION["emailErr"] = 'Email tidak boleh kosong';
            $hasError = true;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["emailErr"] = 'Email tidak valid';
            $hasError = true;
        }

        if (empty($password)) {
            $_SESSION["passwordErr"] = 'Kata sandi tidak boleh kosong';
            $hasError = true;
        } else if (strlen($password) < 8) {
            $_SESSION["passwordErr"] = 'Kata sandi minimal 8 karakter';
            $hasError = true;
        }
        
        //Cek inputan ke database
        $user = "SELECT * FROM user where email = $email";
        if ($user) { //kondisi jika E-mail terdaftar
            if (md5($password) === $user["password"]) {
                $_SESSION["user"] = $user;
                header("Location:/auth/login");
                //Mengirim user ke Dashboard
            } else { //kondisi jika password salah
                $_SESSION["emailErr"] = 'Password salah';
            }
        } else { //kondisi jika E-mail tidak terdaftar
            $_SESSION["emailErr"] = 'E-mail tidak terdaftar';
        }

        if (!$hasError) {
            // Login logic here
        } else {
            header("Location:/auth/login");
        }
        
    }
}
