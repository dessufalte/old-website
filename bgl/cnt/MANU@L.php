<!--Tema default-->
<head>
<!--head-->
<title>Manual</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="explt/favicon.png" rel="icon" type="image/png"/>
<link href="explt/favicon.png" rel="shortcut icon" type="image/png"/>
<link href="//db.onlinewebfonts.com/c/623c7118249e082fe87a78e08506cb4b?family=Segoe+UI" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/1db29588408eadbd4406aae9238555eb?family=Consolas" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!--head-->

<!--style-->
<style>
body {margin: 0;font-family: Arial, Helvetica, sans-serif;}
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background: rgb(92,7,7); 
  border-radius: 10px;
}
body {overflow-x: hidden;}
*{margin: 0px auto;}
html,body{height: 100%;}
</style>
<!--style-->
</head>

<body class="w3-light-grey">
    <!--awal header-->
    <div>
        <h1 style="text-align: center;font-family: 'Segoe UI';font-size:4vw;">MG2SO4 <img src="explt/favicon.png" height="30px" width="30px" style="width:4.7vw;height:4.7vw;"></h1>
    </div>
    <!--akhir header-->

    <!--awal navigasi-->
    <nav class="navbar navbar-inverse" style="background-color:rgb(92,7,7);">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="http://mg2so4.tk/" style="color:#fff;">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="http://mg2so4.tk/about/">Tentang</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:rgb(92,7,7); color:#fff;">Laman
          <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff; color:black;">
            <li><a href="http://mg2so4.tk/create.html"style="background-color:#fff; color:black;">Buat Laman</a></li>
            <li><a href="http://mg2so4.tk/editrow.html"style="background-color:#fff; color:black;">Edit Laman</a></li>
            <li><a href="http://mg2so4.tk/ltg.html"style="background-color:#fff; color:black;">Permintaan Listing</a></li>
          </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:rgb(92,7,7); color:#fff;">Blog
          <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:#fff; color:black;">
            <li><a href="http://mg2so4.tk/blgbru.php"style="background-color:#fff; color:black;">Blog Baru</a></li>
            <li><a href="http://mg2so4.tk/blgrow.html"style="background-color:#fff; color:black;">Edit Blog</a></li>
          </ul>
        </li>
          <li><a href="http://mg2so4.tk/comming.html">Avedex</a></li> 
  
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" action = "http://mg2so4.tk/vbaru.php" method="POST">
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
<!--akhir navigasi-->

<!--awal badan-->
<div class="utama">
 <div class="container">
  <div class="jumbotron">
    <h1>Manual</h1> 
    <p>Pembuatan Blog</p> 
    <h6 id="date">
      <!--tanggal-->
      <script>
      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
      </script>
    </h6>
    <!--KODE-->
    <h6>
    <?php 
    $current_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
    $name = basename($current_link);
    $sigma = str_replace(".php","",$name);
    $faded = str_replace(".php","",$name);
    ?>
    </h6>
    <?php
    $currente = file_get_contents("iew/{$sigma}.txt");
    $currente .= "view\n";
    file_put_contents("iew/{$sigma}.txt", $currente);
    ?>
    <h6>
    <?php 
    $fmf = file("iew/{$sigma}.txt");
    $sesdf = count($fmf);
    echo "view : ".$sesdf;
    ?>
    </h6>
    <!--KODE-->
  </div>
  <!--Anda dapat menulis dibagian ini-->
 <strong>Pembuatan</strong>
  <p>Blog MGSN bersifat terbuka(dapat diedit oleh berbagai pihak), blog dapat dibedakan menjadi 2 jenis (Laman dan Blog). Setiap Blog ditandai dengan huruf berakhiran B dengan karakter <i>alphanumeric</i> sedangkan laman dapat menggunakan karakter <i>numeric</i>. Kode tersebut berguna untuk mengedit blog / laman. kode juga dapat di sembunyikan dalam pembaruan berikutnya. berbagai komponen untuk blog seperti : </p><br>
<strong>Tag HTML dasar</strong><br>
<li>title</i>
<p>title merupakan judul yang akan ditampilkan di head tab browser dan pencarian google. menggunakan format <br> &lt title &gt <i>judul title</i> &lt /title &gt <br>
<li>br</i>
<p>Menambah baris/ pengganti baris baru <br> &lt br &gt <br>
<li>paragraph</i>
<p>Membuat Paragraf baru <br> &lt p &gt <i>judul paragraf</i> &lt /p &gt <br>
<li>h3</i>
<p>Sub judul dengan huruf besar<br> &lt h3 &gt <i>sub judul</i> &lt /h3 &gt <br>
<li>h6</i>
<p>Sub judul dengan huruf kecil<br> &lt h6 &gt <i>sub judul</i> &lt /h6 &gt <br>
<li>bold</i>
<p>bold / style tebal text<br> &lt b &gt <i>text bold</i> &lt /b &gt <br>
<li>italic</i>
<p>italic / format text miring <br> &lt i &gt <i>text italic</i> &lt /i &gt <br>
<li>center</i>
<p>menampilkan posisi dari <i>contens</i> di horizontal tengah <br> &lt center &gt <i>center</i> &lt /centar &gt <br>
<li>font</i>
<p>mengubah ukuran, warna, jenis font, <br> &lt font &gt <i>font</i> &lt /font &gt <br>
<li>hr</i>
<p>menambah garis horizontal <br> &lt hr &gt <br><br>
<strong>Tag style</strong><br>
<p>penggunaan tag style untuk menghias komponen dasar HTML. style menggunakan koding css. untuk saat ini dapat menggunakan metode inline css. contoh</p>
<li>h4</i>
<br> &lt h4 style="color:red; background: blue; fontsize: 2vw; font-family: 'arial'; " &gt HEADINGS 4 &lt /h4 &gt hasil: <br>
<h4 style="color:red; background: blue; fontsize: 2vw; font-family: 'arial'; "> HEADING 4</h4>
<li>h4 center</i>
<br> &lt center &gt &lt h4 style="color:red; background: blue; fontsize: 2vw; font-family: 'arial'; " &gt HEADINGS 4 &lt /h4 &gt &lt /center &gt hasil: <br>
<center><h4 style="color:red; background: blue; fontsize: 2vw; font-family: 'arial'; "> HEADING 4</h4></center>
<li>Paragraf dengan rgb color</i>
<br> &lt p style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; " &gt LOREM IPSUM.... &lt /p &gt hasil: <br>
<p style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; word-wrap:break-word;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante felis, aliquet nec placerat non, blandit et dui. Donec ut lectus neque. Nam nec tincidunt orci. Nam aliquet cursus orci, eget tristique mi suscipit ut. Proin eget diam nisl. Maecenas sed erat malesuada nisi commodo sollicitudin eu eu quam. Vivamus scelerisque rutrum eleifend.
Pellentesque dignissim rhoncus velit, ac porttitor sem sollicitudin vel. Sed tincidunt purus in suscipit semper. In ultrices elit est, id dignissim lectus fermentum ac. Aliquam nec arcu pulvinar, imperdiet lorem quis, laoreet sapien. Donec efficitur pretium posuere. Sed et nisi eu mauris sollicitudin ultricies. Sed ligula massa, commodo eget felis sit amet, condimentum porttitor velit. Phasellus lacinia bibendum ipsum vitae tempor. Donec interdum vitae ipsum a condimentum. Nullam dictum facilisis facilisis.</p>
<li>Paragraf style center text</i>
<br> &lt p style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; text-align: center;" &gt LOREM IPSUM.... &lt /p &gt hasil: <br>
<p style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; word-wrap:break-word; text-align: center; "> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante felis, aliquet nec placerat non, blandit et dui. Donec ut lectus neque. Nam nec tincidunt orci. Nam aliquet cursus orci, eget tristique mi suscipit ut. Proin eget diam nisl. Maecenas sed erat malesuada nisi commodo sollicitudin eu eu quam. Vivamus scelerisque rutrum eleifend. Pellentesque dignissim rhoncus velit, ac porttitor sem sollicitudin vel. Sed tincidunt purus in suscipit semper. In ultrices elit est, id dignissim lectus fermentum ac. Aliquam nec arcu pulvinar, imperdiet lorem quis, laoreet sapien. Donec efficitur pretium posuere. Sed et nisi eu mauris sollicitudin ultricies. Sed ligula massa, commodo eget felis sit amet, condimentum porttitor velit. Phasellus lacinia bibendum ipsum vitae tempor. Donec interdum vitae ipsum a condimentum. Nullam dictum facilisis facilisis.</p>
<li>Link non decoration</i>
<br> &lt a style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; text-align: center; text-decoration:none;" href="#" &gt CONTOH LINK &lt /a &gt hasil: <br>
<a style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; word-wrap:break-word; text-align: center; text-decoration:none; " href="#">CONTOH LINK</a>
<li>Link decoration</i>
<br> &lt a style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; text-align: center; " href="#" &gt CONTOH LINK &lt /a &gt hasil: <br>
<a style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; word-wrap:break-word; text-align: center; " href="#">CONTOH LINK</a>
<li>Image center</i>
<br> &lt center &gt &lt img style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; text-align: center; width:50%; height:50%;" src="explt/favicon.png" /&gt  &lt /center &gt hasil: <br>
<center><img style="color:rgb(92,7,7); fontsize: 2vw; font-family: 'arial'; word-wrap:break-word; items-align: center; width:20%; height:20%;" src="explt/favicon.png"/></center><br>
<center> src properti untuk link gambar</center>
</div>
<br><!--baris baru-->
<!--Gambar default-->
<!--<img src=link gambar alt=teks alternatif style="text-align: align left/right/center ;width: lebar gambar(hapus jika ukuran asli);height:tinggi gambar(hapus jika ukuran asli);">-->

<!--Buat paragraf-->
<!--<p>isi paragraf<p>-->

<!--Buat daftar-->
<!--<ul>isi paragraf
    <li>daftar 1</li>
    
    </ul>-->

<!--Buat Text ditengah-->
<!--<p style="text-align:center">text</p>-->

</div>
<!--akhir badan-->
<!--awal komentar-->
<div style="margin-left:10%; margin-right:10%; margin-top:10px;">
  <form method="POST" action = <?php echo "kom/{$faded}.php"; ?>>
  <div class="form-group" style="text-align:center;">
  <input type="text" name="usr" placeholder="nama" required pattern="[a-zA-Z0-9_ ]+" style="width:10%" value=<?php 
    if(isset($_COOKIE["ese"])){
      echo trim($_COOKIE["ese"]);
    }
  ?>>
  <input type="text" name="infos" placeholder="ketik disini" autocomplete="off" required  pattern="[a-zA-Z0-9@#&* ]+"/><button type="submit" class="btn btn-danger" href="kommentsd.html">Kirim</button><br>
  <br>
  <?php 
  if(file_exists("kom/{$faded}.txt")){
    $kontexs = file("kom/{$faded}.txt");
                foreach(array_reverse($kontexs) as $linesd){
                ?>
                <p style="text-align:left;font-size:100%;"><?php echo $linesd; ?></p><hr>
            <?php } ?><?php
  }else{
    die("Tidak Ketemu"); 
  }
  ?>
</div>
</form>
  </div>
<!--akhir komentar-->
<!--awal footer-->
<div class="footer" style="background-color: rgba(250, 236, 207, 0.959);">
   <div style="background-color: rgba(92, 7, 7);">
    <li style="list-style-type:none;padding:3px;padding-top: 10px;"><a href="http://mg2so4.tk/kb/kontakb.html" style="text-decoration:none; color:rgb(255, 255, 255);">Kontak Admin</a></li>
    <br>
  </div>
  <br style="height: 1px;color: #123455;background-color: #123455;border: none;">
    <li style="list-style-type:none;padding:3px;"><a href="#" style="text-decoration:none; color:rgb(92,7,7);">Tentang situs ini</a></li>
    <hr>
    <li style="list-style-type:none;padding:3px;"><a href="#" style="text-decoration:none; color:rgb(92,7,7);">© 2020 MG2SO4</a></li>
    <br>
  </div>
<!--akhir footer-->
</body>        