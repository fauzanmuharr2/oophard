<?php
 class Laptop
 {
     protected $pemilik;

     protected function hidupkan_laptop()
     {
         return "Hidupkan Laptop";
     }
 }
// buat objek dari class laptop (instansiasi)
 $laptop_anto = new Laptop();

 // set protected property akan menghasilkan error
 $laptop_anto->pemilik = "Anto";

 echo $laptop_anto->hidupkan_laptop();
?>