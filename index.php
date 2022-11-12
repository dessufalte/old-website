<!DOCTYPE html>
<html>
<head>
<title>MG2SO4</title>
<meta name="google-site-verification" content="vwmGb75f-a9-EOUS-mGqHFOjkxRpRYR3c1nKseVlsZk" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="favicon.png" rel="icon" type="image/png"/>
<link href="favicon.png" rel="shortcut icon" type="image/png"/>
<link href="//db.onlinewebfonts.com/c/623c7118249e082fe87a78e08506cb4b?family=Segoe+UI" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/1db29588408eadbd4406aae9238555eb?family=Consolas" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="sd/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<style>
body {margin:0;font-family:Arial}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
li.dropdown.open{
  background-color:#fff;
}
.footer{
}
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(92,7,7); 
  border-radius: 10px;
}
body {
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
*{margin: 0px auto;}
html,body{
    height: 100%;
}

</style>
</head>
<body class="w3-light-grey">
  <div>
      <h1 style="text-align: center;font-family: 'Segoe UI';font-size:6vw;">MG2SO4 <img src="favicon.png" height="30px" width="30px" style="width:4.7vw;height:4.7vw;"></h1>
  </div>
  <nav class="navbar navbar-inverse" style="background-color:rgb(92,7,7);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php" style="color:#fff;">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="about">Tentang</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:rgb(92,7,7); color:#fff;">Laman
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#fff; color:black;">
          <li><a href="create.html"style="background-color:#fff; color:black;">Buat Laman</a></li>
          <li><a href="editrow.html"style="background-color:#fff; color:black;">Edit Laman</a></li>
          <li><a href="ltg.html"style="background-color:#fff; color:black;">Permintaan Listing</a></li>
        </ul>
        </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:rgb(92,7,7); color:#fff;">Blog
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#fff; color:black;">
          <li><a href="blgbru.php"style="background-color:#fff; color:black;">Blog Baru</a></li>
          <li><a href="blgrow.html"style="background-color:#fff; color:black;">Edit Blog</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:rgb(92,7,7); color:#fff;">Aplikasi
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#fff; color:black;">
          <li><a href="kb/kontakb.html"style="background-color:#fff; color:black;">Permintaan Aplikasi</a></li>
          <li><a href="http://mg2so4.cf/"style="background-color:#fff; color:black;" target="_blank">Data Center</a></li>
          <li><a href="comming.html"style="background-color:#fff; color:black;">Kebijakan</a></li>
        </ul>
      </li>
        <li><a href="comming.html">Avedex</a></li> 

      </ul>
      <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action = "vbaru.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control"  placeholder="Cari.." name = "indx" id="skates" required pattern="[A-Z0-9# ]+">
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </div>
     
    </form>
  </div>
      </ul>
    </div>
  </div>
</nav>
    <div class="utama">
      <div class="tabelle">
      <br><h2 style="margin-left:auto; margin-right:auto; text-align:center;color:rgb(92, 7, 7);font-family:'Segoe UI";>Terbaru</h2><br>
      <div  style="overflow-x:auto;">
       <table border ="1" cellpadding ="10" style="text-align:center;content-align:center; margin-left:auto; margin-right: auto; width:10vw;" id="newes" >
       <tr>
            <?php 
            $fm = basename("skate.txt");
            $sesd = count(file($fm));
            if($sesd>9){
                $fileskate = fopen("skate.txt","w+");
                fwrite($fileskate,"");
                fclose($fileskate);
            ?>
            <td style="background-color:rgb(92,7,7); color:#fff;"><?php echo "Data akan diperbarui"; ?></td>
            <?php }else{
                $kontex = file("skate.txt");
                foreach(array_reverse($kontex) as $line){
                $line = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $line);
                if(strlen($line)>1){
                ?>
                <td style="background-color:rgb(92,7,7); color:#fff; font-size:100%; padding:8px;"><?php echo $line; ?></td>
            <?php }}} ?>
        </tr>
        </table></div>
        <div class="tabelle2" >
        <h4 style="margin-left:auto; margin-right:auto; text-align:center;color:rgb(92, 7, 7);font-family:'Segoe UI";>Barusan Anda buat</h4>
      <div  style="overflow-x:auto;">
       <table border ="1" cellpadding ="10" style="text-align:center;content-align:center; margin-left:auto; margin-right: auto; width:10vw;" id="newes" >
       <tr>
            <?php 
            if(!isset($_COOKIE["hstr"])){
            ?>
            <td style="background-color:rgb(92,7,7); color:#fff;"><?php echo "Data akan dimuat"; ?></td>
            <?php }else{
                ?>
                <td style="background-color:rgb(92,7,7); color:#fff; font-size:100%; padding:8px;"><?php echo $_COOKIE["hstr"]; ?></td>
            <?php } ?>
        </tr>
        </table></div></div><br><br>
      <div class="alert alert-danger"><strong>COVID-19 🦠</strong><br> 
      WHO telah menetapkan COVID-19 sebagai pandemi atau wabah penyakit global. Dari hasil penelitian, kelelawar dipercaya sebagai sumber virus baru Corona yang berawal di Kota Wuhan, Tiongkok. Tiongkok sendiri telah melarang perdagangan satwa liar. Pandemi COVID-19 menjadi peringatan agar manusia tidak memelihara atau mengkonsumsi satwa liar. Meski ada dampak buruk dan berbagai upaya konservasi serta penegakan hukum dilakukan, perdagangan satwa liar tidak berkurang. Justru malah bertambah. Satwa liar dan habitatnya bisa dimanfaatkan sebagai mata pencaharian alternatif masyarakat, seperti untuk ekowisata. 
      Jangan lupa cuci tangan dan menggunakan masker😷
        <a href="https://www.who.int/dg/speeches/detail/who-director-general-s-opening-remarks-at-the-media-briefing-on-covid-19---3-august-2020" class="alert-link">selengkapnya</a>.</div>
        <div class="w3-col l8 s12">
  <!-- Blog entry -->
          <?php
            $kontex = file("bgl/skab.txt");
            $kontex = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $kontex);
            foreach(array_reverse($kontex) as $line){
            $line = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $line);
            $flj = trim(str_replace(" ","",$line));
            $filj = str_replace(" ","","bgl/jdl/$flj.txt");
            if(!file_exists($filj)){
              fwrite(fopen($filj,"w"),"NULL");
            }
            $judul = file(trim(str_replace(" ","",$filj)));
            $flg = trim(str_replace(" ","",$line));
            $filg = str_replace(" ","","bgl/gbr/$flg.txt");
            if(!file_exists($filg)){
              fwrite(fopen($filg,"w"),"NULL");
            }
            $gambar = file(trim(str_replace(" ","",$filg)));
            $fld = trim(str_replace(" ","",$line));
            $fild = str_replace(" ","","bgl/des/$fld.txt");
            if(!file_exists($fild)){
              fwrite(fopen($fild,"w"),"NULL");
            }
            $des = file(trim(str_replace(" ","",$fild)));
            $fla  = trim(str_replace(" ","",$line));
            $fila  = str_replace(" ","","bgl/aut/$fla.txt");
            if(!file_exists($fila)){
              fwrite(fopen($fila,"w"),"NULL");
            }
            $dea  = file(trim(str_replace(" ","",$fila)));
            ?>
            <?php
            foreach($gambar as $lineg){ ?>
            <div class="w3-card-4 w3-margin w3-white">
            <img name="foo" src=<?php echo $lineg; ?> onerror="if (this.src != 'thm/THUMB.png') this.src = 'thm/THUMB.png';"  style="width:100%">
            <?php }
            foreach($judul as $linej){ ?>
            <div class="w3-container" style="background-color:#F1F1F1;">
            <h3><b><?php 
            if(empty($linej)){
              echo "NULL";
            }else{
              echo $linej;
            }
             ?></b></h3>
            </div><div class="w3-container" style="background-color:#F1F1F1;">
            <?php }
            foreach($des as $lined){ ?>
            <p style="word-break: break-all;">
            <?php 
            if(empty($lined)){
              echo "NULL";
            }else{
              echo $lined;
            } ?>
          </p>
            <?php }
            foreach($gambar as $lineg){ ?>
                <div class="w3-row">
                  <div class="w3-col m8 s12">
                    <?php 
                    $flc = trim(str_replace(" ","",$line));
                    $filc = str_replace(" ","","bgl/cnt/$flc.php");
                    ?>
                    <p><button onclick="location.href= '<?php echo $filc; ?>';" class="w3-button w3-padding-large w3-white w3-border"><b>BACA LAGI &raquo;</b></button></p>
                  </div>
                  <?php }
            foreach($dea  as $linea){ ?>
              <div class="w3-col m4">
              <p><span class="w3-padding-large w3-right"><b>
                <?php 
                 if(empty($linea)){
                  echo "NULL";
                }else{
                  echo "Penulis : ". $linea;
                }
                ?>
              </b></span></p>
              </div>
                </div>
                
              </div>
            </div>
          <?php }} ?>
        </div>
<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Post Populer</h4>
    </div>
      <ul class="w3-ul w3-hoverable w3-white">
          <?php 
          $vex = file("bgl/skab.txt");
          foreach(array_reverse($vex) as $liner){
            $century = trim(str_replace(" ","",$liner));
            if(!file_exists("bgl/cnt/iew/$century.txt")){
              fwrite(fopen("bgl/cnt/iew/$century.txt","w"),"");
            }
            $village = str_replace(" ","","bgl/cnt/iew/$century.txt");
            $advent = file(trim(str_replace(" ","",$village)));
            $counting = count($advent);
            $arrasy ="";
            $arrasy .= " ".$counting;
            } 
            $arrayz = explode(" ", $arrasy);
            $ratarata = array_sum($arrayz)/count($arrayz);
            $perminimal = $ratarata + 4;
            $vexa = file("bgl/skab.txt");
            $aksen = "";
          foreach(array_reverse($vexa) as $linera){
            $centurya = trim(str_replace(" ","",$linera));
            $villagea = str_replace(" ","","bgl/cnt/iew/$centurya.txt");
            $adventa = file(trim(str_replace(" ","",$villagea)));
            $countinga = count($adventa);
            if($countinga>$perminimal){ 
              $aksen .= $linera;
            ?>
          <?php }} 
          $arr =  str_split($aksen,7);
          foreach($arr as $v){
            if(empty($v)){
              echo "Belum Ada";
            }else{
              echo '<li class="w3-padding-16"><a href="bgl/cnt/'.$v.'.php">'.$v.'</a></li>';
            }
          }
          ?>
      </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  
<!-- END Introduction Menu -->
</div>


  <!-- Labels / tags -->
  </div>
<div class="w3-col l4">
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <ul class="w3-ul w3-white">
      <li class="w3-padding-16">
      <div>
    <form>
  <div class="form-group">
    <br>
  <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Riwayat Versi</button>
  <div id="demo" class="collapse"><br>
  <?php 
        if(file_exists("Perbaruan.txt")){
          $kontesxs = file("Perbaruan.txt");
                      foreach($kontesxs as $linessd){
                      ?>
                      <p><?php echo $linessd; ?></p>
                  <?php } ?><?php
      }else{
          die("Tidak Ketemu"); 
      }
    ?>
  </div>
  </div>
      </li>  
    </ul>

  <hr> 
<footer class="w3-container w3-dark-red w3-padding-32 w3-margin-top">
        <input type="button" name="sblum"
                class="w3-button w3-black w3-padding-large w3-margin-bottom" value="Kontak" onclick="location.href='kb/kontakb.html';" /> 
        <input type="button" name="sudah"
                class="w3-button w3-black w3-padding-large w3-margin-bottom" value="Tentang" onclick="location.href='about/';" />
             <br>   <li style="list-style-type:none;padding:3px;"><a href="#" style="text-decoration:none; color:rgb(92,7,7);">&#169 2020 MG2SO4</a></li> 
</footer>
</div>
   </div>
</body>
</html>
