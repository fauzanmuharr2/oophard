<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GilaCoding</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
 
 <body>    
<center>
           <div class="col-md-6" style="padding:20px;">
            <div class="table-responsive">
            <div class="card">
            <div class="card-header"><center>DATA KELAS</center></div>
            <br>    
            <table class="table">
    <?php
 class Kelas
 {
    public $walikelas, $ketuamurid, $sekertaris, $bendahara, $seksi;

    public function __construct($walikelas, $ketuamurid, $sekertaris, $bendahara, $seksi)
    {
        $this->walikelas = $walikelas;
        $this->ketuamurid = $ketuamurid;
        $this->sekertaris = $sekertaris;
        $this->bendahara = $bendahara;
        $this->seksi = $seksi;
    }
    public function kelas()
    {
       return "<hr>-Wali Kelas  :  " . $this->walikelas ."<br>".
              "<hr>-Ketua Murid :  " . $this->ketuamurid ."<br>".
              "<hr>-Sekertaris  :  " . $this->sekertaris ."<br>".
              "<hr>-Bendahara   :  " . $this->bendahara ."<br>".
              "<hr>-Seksi       :  " . $this->seksi ."<br>";
    }
 }
 if (isset($_POST['simpan'])) {
     $wali = $_POST['wali'];
     $ketua = $_POST['ketua'];
     $seke = $_POST['seke'];
     $benda = $_POST['benda'];
     $sek = $_POST['sek'];
 }
 $kelas = new Kelas($wali, $ketua, $seke, $benda, $sek);
   echo $kelas->kelas();
?>
</table>
</div>
</div>
</div>
</center>
         <script src="assets/js/jquery-3.4.1.min.js"></script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>
         <script src="assets/js/bootstrap.bundle.js"></script>

</body>
</html>