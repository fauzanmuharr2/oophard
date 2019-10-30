<?php
class Laptop
{
 private $pin_laptop = assaalaam;
 protected $pin_aplikasi = 221133;
 public $merk;
 public function masuk_laptop()
 {
     $this>pin_laptop;
     return "Masuk Laptop = " . $this->pin_laptop;
 }
}
class aplikasi extends Laptop
{
 public function foto()
 {
     return "<br>Masuk Aplikasi = " . $this->pin_aplikasi;
 }
}
$laptop_sekolah = new Laptop();
$aplikasi_sekolah = new aplikasi();

$laptop_sekolah->merk = "Thinkpad<br>";
echo $laptop_sekolah->merk;
echo $laptop_sekolah->masuk_laptop;
echo $aplikasi_sekolah->foto();
?>