<?php
class Komputer
{
    private $jenis_komputer = "Intel Core i7-4790 3.6Ghz";
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

class laptop extends Komputer
{
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

// buat objek dari class laptop (instansiasi)
$komputer_baru = new Komputer();
$laptop_baru = new laptop();

echo $komputer_baru->tampilkan_processor();

echo $laptop_baru->tampilkan_processor();
?>