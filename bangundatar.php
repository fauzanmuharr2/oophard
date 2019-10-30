<?php
 class Bangundatar
 {
     public $alas, $tinggi;

     public function __construct($a, $t)
     {
       $this->alas = $a;
       $this->tinggi = $t;
     }
     public function luas()
     {
       $luas = $this->alas  = $a;
       $this->tinggi = $t;
     }
 }

 $segi = new Bangundatar();
 echo $segi->hitung(1/2, 5, 10);
?>