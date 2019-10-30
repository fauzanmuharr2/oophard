<?php
 class Sekolah
 {
     public $nama;
     public$alamat;

     public function datasekolah($a = "<b>Smk Assalaam</b>", $b = "<b>Situ Tarate</b>")
     {
       $this->nama = $a;
       $this->alamat = $b;
       return "Nama Sekolah : $a, Alamat Sekolah : $b";
     }
 }

 $sklh_assalaam = new Sekolah();
 echo $sklh_assalaam->datasekolah();

?>