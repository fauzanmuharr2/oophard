<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GilaCoding</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
 
 <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>FAUZAN MUHARRAM</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produk.php"></a>
      </li>
      <li>
</li>
    </ul>
  </a>
  </div>
</nav>
         <!-- End Header -->

         <!-- Content -->
        <FORM ACTION="kelas.php" METHOD="POST" NAME="input">
         <div class="container-fluid">
          <div class="row justify-content-center">
           <div class="col-md-6" style="padding:20px;">
            <div class="card">
             <div class="card-header"><center><b>XI RPL 2 </b></center></div>
              <div class="card-body">
               <div class="form-group">
               <b>  Wali Kelas : </b><input type="text" name="wali" class="form-control" required>
                   </div>
                   <div class="form-group">
               <b> Ketua Murid : </b> <input name="ketua" class="form-control"  required>
                   </div>
                 <div class="form-group">
               <b> Sekertaris : </b> <input name="seke" class="form-control"  required>
                   </div>
                   <div class="form-group">
               <b> Bendahara : </b><br> <input type="text" name="benda" class="form-control" required>
                   </div>                 
                   <div class="form-group">
                          <b> Seksi : </b> <br> <select name="sek" class="form-control">
                            <option value="pilih" ></option>
                            <option value="Seksi Kebersihan(Alif Sapri)" >Seksi Kebersihan(Alif Sapri)</option>
                            <option value="Seksi Keamanan(Rifa Ramdani)" >Seksi Keamanan(Rifa Ramdani)</option>
                            <option value="Seksi Peralatan(Alief Subarkah)">Seksi Peralatan(AliefSubarkah)</option>
                            <select>
                        </div>
            <div class="form-group">
              <button type="submit" name="simpan" class="btn btn-primary">
               Simpan
                </button> 
                 </div>    
                 </div>
                </div>
               </div>
              </div>            
             </div>
            </div>
           </FORM>
         <!-- End Content -->

         <!-- Footer -->
         <footer>
            <center>&copy; Kelas BERBAHAYA</center>
         </footer>
         <!-- End Footer -->

         <!-- JS -->
         <script src="assets/js/jquery-3.4.1.min.js"></script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>
         <script src="assets/js/bootstrap.bundle.js"></script>
         <!-- End JS -->      
</body>
</html>