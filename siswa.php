<?php
 class Siswa{
  
    public $nama, $alamat, $usia, $hobi;

   public function datadiri($nama='Dawet', $alamat='Cijerah', $usia= 23)
   {
       $this->nama= $nama;
       $this->alamat= $alamat;
       $this->usia= $usia;
       return "Nama : $nama, Alamat : $alamat, Usia :$usia";
   }

   public function hobi($hobi)
   {
       $this->hobi = $hobi;
       return $this->datadiri() . "Hobi : $hobi";
   }
 }

 $siswa1 = new Siswa();
 $siswa1->datadiri('Ahmad','Bandung',18);
 echo $siswa1->hobi("Mancing");

?>