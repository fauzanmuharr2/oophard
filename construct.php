<?php
 class Siswa
 {
     public function __destruct()
     {
         echo "Ini adalah destructor";
     }
     public function hallo()
     {
         return "Hello PHP";
     }
     public function __construct()
     {
         echo "Ini adalah Construct";
     }
 }
 $hello = new Siswa();
 echo $hello->hallo()."<br>";
?>