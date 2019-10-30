<?php
 class Lingkaran 
 {
   public $jari, $phi = 3.14;
   
   public function __construct($jari)
   {
       $this->jari = $jari;
   }
   public function luas()
   {
       $luas = $this->$phi * $this->$jari * $this->$jari;
       return $luas;
   }
   public function keliling()
   {
       $keliling = 2* ($this->phi * $this->jari);
       return $keliling;
   }
 }

if(isset($_POST['submit'])){
	$jari = $_POST['jari'];
}

$lingkaran = new Lingkaran($jari);
echo "Jari-Jari : " . $lingkaran->jari. "<br>";
echo "Luas : " . $lingkaran->luas(). "<br>";
echo "Keliling : " . $lingkaran->keliling(). "<br>";

?>