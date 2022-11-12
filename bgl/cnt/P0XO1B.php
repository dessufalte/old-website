                <!--Tema default-->
        <head>
<!--head-->
<title>MG2SO4</title>
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
<style>img[alt="www.000webhost.com"]{display:none;}</style>
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
    <h1>JUDUL</h1> 
    <p>SUB JUDUL</p> 
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
    echo str_replace(".php","",$name);
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
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p> 
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
<fieldset style="margin-left:10%; margin-right:10%; margin-top:10px;">
  <form method="POST" action = <?php echo "kom/{$faded}.php"; ?>>
  <div class="form-group" style="text-align:center;">
  <input type="text" name="usr" placeholder="nama" required pattern="[a-zA-Z0-9_ ]+" style="width:10%" value=<?php 
    if(isset($_COOKIE["ese"])){
      echo trim($_COOKIE["ese"]);
    }
  ?>>
  <input type="text" name="infos" placeholder="ketik disini" autocomplete="off" pattern="[a-zA-Z0-9@#&* ]+"/><button type="submit" class="btn btn-danger" href="kommentsd.html">Kirim</button><br>
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
  </fieldset>
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
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&¬ification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>        