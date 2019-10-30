<?php 
class Aritmatika
{
 public $bilangan1;
 public $bilangan2;

 public function tambah ($bil1 = null, $bil2 = null)
 {
     $this->bilangan1 = $bil1;
     $this->bilangan2 = $bil2;
     return "Bilangan : $bil1+$bil2 = " . ($bil1+$bil2);
 }
 public function kurang ($bil1 = null, $bil2 = null)
 {
     $this->bilangan1 = $bil1;
     $this->bilangan2 = $bil2;
     return "Bilangan : $bil1-$bil2 = " . ($bil1-$bil2);
 }
 public function kali ($bil1 = null, $bil2 = null)
 {
     $this->bilangan1 = $bil1;
     $this->bilangan2 = $bil2;
     return "Bilangan : $bil1*$bil2 = " . ($bil1*$bil2);
 }
 public function bagi ($bil1 = null, $bil2 = null)
 {
     $this->bilangan1 = $bil1;
     $this->bilangan2 = $bil2;
     return "Bilangan : $bil1/$bil2 = " . ($bil1/$bil2);
 }
}

$Bil1 = new Aritmatika();
echo $Bil1->tambah(10,20)."<br>";
echo $Bil1->kurang(50,20)."<br>";
echo $Bil1->kali(15,20)."<br>";
echo $Bil1->bagi(40,20)."<br>";
echo "<hr>";
$Bil2 = new Aritmatika();
echo $Bil1->tambah(10,20)."<br>";
echo $Bil1->kurang(50,20)."<br>";
echo $Bil1->kali(15,20)."<br>";
echo $Bil1->bagi(40,20)."<br>";

?>