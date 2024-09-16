<?php

namespace controllers;

class PasienController
{
    public function index()
    {
        $data = [
            "title" => "Pasien",
            "description" => "Atur dan Kelola Informasi Pasien",
            "datas" => []
        ];
        return view("admin/pasien/pasien", $data);
    }

    public function create()
    {
        $data = [
            "title" => "Tambah Pasien",
            "description" => "Isi semua inputan untuk menambahkan pasien baru",
            "action_form" => "/admin/pasien",
            "data" => (object)[
                "id" => "",
                "name" => "",
                "phone" => "",
                "birth_date" => "",
            ]
        ];
        return view("admin/pasien/form", $data);
    }
    public function edit($id)
    {
        $data = [
            "title" => "Ubah Pasien",
            "description" => "",
            "action_form" => "/admin/pasien/$id",
            "data" => (object)[
                "id" => "",
                "name" => "contoh nama",
                "phone" => "0812383848284",
                "birth_date" => "",
            ]
        ];
        return view("admin/pasien/form", $data);
    }
}
