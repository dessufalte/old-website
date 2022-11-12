<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<title>MG2SO4</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="favicon.png" rel="icon" type="image/png"/>
<link href="favicon.png" rel="shortcut icon" type="image/png"/>
<link href="//db.onlinewebfonts.com/c/623c7118249e082fe87a78e08506cb4b?family=Segoe+UI" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/1db29588408eadbd4406aae9238555eb?family=Consolas" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
body {margin:0;font-family:Arial}
.topnavs {
  overflow: hidden;
  background-color: rgb(92,2,2);
}
.topnavs a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnavs .search-container {
  float: right;
}

.topnavs input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnavs .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnavs .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnavs .search-container {
    float: none;
  }
  .topnavs a, .topnavs input[type=text], .topnavs .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnavs input[type=text] {
    border: 1px solid #ccc;  
    float:left;
    width: 90%;
  }
  .topnavs .search-container button {
    float:right;
    width: 10%;
    border: 1px solid #ccc;
  }
}
.actives {
  background-color: rgb(92,2,2);
  color: white;
  
}

.topnavs .icons {
  display: none;
}

.dropdowns {
  float: left;
  overflow: hidden;
}

.dropdowns .dropbtns {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-contents {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-contents a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnavs a:hover, .dropdowns:hover .dropbtns {
  background-color: #555;
  color: white;
}

.dropdown-contents a:hover {
  background-color: #ddd;
  color: black;
}

.dropdowns:hover .dropdown-contents {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnavs a:not(:first-child), .dropdowns .dropbtns {
    display: none;
  }
  .topnavs a.icons {
    float: right;
    display: block;
    text-align:right;
    width:20%;
  }
  .topnavs a.actives{
      float:left;
      width:20%;
  }
}

@media screen and (max-width: 600px) {
  .topnavs.responsive {position: relative;}
  .topnavs.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
    
  }
  .topnavs.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnavs.responsive .dropdowns {float: none; background-color:#1E1E1E;}
  .topnavs.responsive .dropdown-contents {position: relative;}
  .topnavs.responsive .contacs{background-color:#1E1E1E;}
  .topnavs.responsive .abouts{background-color:#1E1E1E;}
  .topnavs.responsive .dropdowns .dropbtns {
    display: block;
    width: 100%;
    text-align: left;
  }
}
.footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: rgb(92,7,7);
    color: #fff;
    position: absolute;
    bottom: 0px;
}
#containers{
    min-height: 100%;
    position: relative;
}
.contents{
    padding: 10px;
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
.btn-group button {
  background-color: #5C0707; /* Green background */
  border: 1px solid #333333; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #555;
}
</style>
<div>
    <h1 style="text-align: center;font-family: 'Segoe UI';font-size:6vw;"><strong>Blog</strong></h1><br>
</div>
<div class="topnavs" id="myTopnavs">
  <a href="index.php" class="actives">Home</a>
  <a href="kontakb.html" class="contacs">Kontak</a>
  <div class="dropdowns">
    <button class="dropbtns">Buat 
      <i class="fa fa-caret-downs"></i>
    </button>
    <div class="dropdown-contents">
      <a href="blgbru.html">Blog Baru</a>
      <a href="#">Permintaan Listing</a>
      <a href="#">Permintaan Aplikasi</a>
    </div>
  </div> 
  <a href="#about" class="abouts">Tentang</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icons" onclick="myFunction()">&#9776;</a>
  <div class="search-container">
    <form action = "vbaru.php" method="POST">
      <input type="text" placeholder="Cari.." name = "indx" autocomplete = "off">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnavs");
  if (x.className === "topnavs") {
    x.className += " responsive";
  } else {
    x.className = "topnavs";
  }
}
</script>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">
<!-- Grid -->
<div class="w3-row">

<?php 
    $kontex = file("bgl/skab.txt");
    foreach(array_reverse($kontex) as $line){
    $flj = trim(str_replace(" ","",$line));
    $filj = str_replace(" ","","bgl/jdl/$flj.txt");
    $judul = file(trim(str_replace(" ","",$filj)));
    $flg = trim(str_replace(" ","",$line));
    $filg = str_replace(" ","","bgl/gbr/$flg.txt");
    $gambar = file(trim(str_replace(" ","",$filg)));
    $fld = trim(str_replace(" ","",$line));
    $fild = str_replace(" ","","bgl/des/$fld.txt");
    $des = file(trim(str_replace(" ","",$fild)));
    ?>
    <?php
    foreach($gambar as $lineg){ ?>
    <div class="w3-card-4 w3-margin w3-white">
    <img src=<?php echo $lineg; ?> alt=<?php echo $lineg; ?> style="width:100%">
    <?php }
    foreach($judul as $linej){ ?>
    <div class="w3-container">
    <h3><b><?php echo $linej; ?></b></h3>
    </div>
    <?php }
    foreach($des as $lined){ ?>
    <div class="w3-container">
    <p><?php echo $lined; ?></p>
    <?php }
    foreach($gambar as $lineg){ ?>
    <div class="w3-row">
        <div class="w3-col m8 s12">
            <?php 
            $flc = trim(str_replace(" ","",$line));
            $filc = str_replace(" ","","bgl/cnt/$flc.html");
            ?>
            <p><button onclick="location.href= '<?php echo $filc; ?>';" class="w3-button w3-padding-large w3-white w3-border"><b>BACA LAGI &raquo;</b></button></p>
        </div>
    </div>
</div>
</div>
        <?php }
?>
<?php } ?>

<!-- Blog entries -->
<!--div margin-->
    
   
<!--isikolom-->

<!--isikolom-->

<!--div margin-->
<!-- END BLOG ENTRIES -->

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  
  <!-- Posts -->
<hr> 
 
  <!-- Labels / tags -->
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END content -->
</div>

<!-- Footer -->
</body>
</html>