<!DOCTYPE html>
<html onclick="snd.play()">

<?php
  //idk why i wanted to log ip's, but i did, and its eBic
  //thanks to my buddy jacob on discord / Jacob H.#2208, he provided this code - 
  /* <?php
$myfile = fopen("testfile.txt", "w")
$txt = $_SERVER["REMOTE_ADDR"]."\n";
fwrite($myfile, $txt); */
    $myfile = fopen("allips.txt", "a+");
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    if ($txt != "::1\n")
    {
      fwrite($myfile, $txt);
    }
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>

<?php
  //idk why i wanted to log ip's, but i did, and its eBic
    $myfile = fopen("currentip.txt", "w");
    if ($txt != "::1\n")
    {
      fwrite($myfile, $txt);
    }
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>

<script>
   var snd = new Audio("sket.mp3"); 
</script>
<head>
<link rel="icon" 
      type="image/png" 
      href="/images/code.png" />
  <meta charset="UTF-8">
  <title>Mah website</title>
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="style.css">
<style>
a{
color: #38335d;	
}
td {
padding: 3px;
padding-left: 8px;
padding-top: 5px;
}
.rainbow {
  background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
body {
 background-image: url("https://fossbytes.com/wp-content/uploads/2018/11/cc.jpg");
 background-repeat: no-repeat;
 background-size: cover;
 background-color: #38335d;
}
title {
  display: none;
}
code{
  font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
  margin-bottom: 10px;
  overflow: auto;
  width: auto;
  padding: 5px;
  background-color: #38335d;
  width: 650px!ie7;
  padding-bottom: 20px!ie7;
  max-height: 600px;
}
section{
  margin-top: 2.5em;
}

@font-face {
  font-family: myFirstFont;
  src: local("smallest pixel-7 Regular"),
       local("smallest_pixel-7"),
       url(stuff/fonts/smallest_pixel-7.ttf); 
}

header {
  font-family: myFirstFont;
  font-size: 20px;
}
nav
{
  /*height: 775px;*/
  height: calc(100% - 3.01rem);
}
h1
{
  height: 16px;
}
</style>
</head>

<body>
  <div class="wrapper">
<header>
  <h1> 
	<marquee scrollamount = "200" behavior = "slide"> "borrow'd" code.html <a href= "https://CPlusPlusNewb.github.io" target="_blank">My Github Website</a> : <a href= "https://github.com/CPlusPlusNewb?tab=repositories" target="_blank">My Github Repos</a> : <a href= "https://dambbruh.gq/" target="_blank">My Website</a> : Your ip = <?php include('currentip.txt'); ?> </marquee>
    
  </h1>
</header>
<style>
a{
color: #fcc274;	
}
</style>
<nav>
    <ul>
      <li class="gnav1">Python</li>
      <li class="gnav2">Html</li>
      <li class="gnav3">Folders</li>
      <li class="gnav4">Pc Parts</li>
      <li class="gnav5">Images</li>
      <li class="gnav5">Jammers</li>
    </ul>
</nav>
<div class="contents" id="contents">
<div class="container">
<article id="page1" class="show top">
  <section>
  <!--<center><h1>Tab : Python</h1></center>-->
    <table class="bruh-list">
  <thead>
    <tr>
      <th>File</th>
      <th style = "padding-left:2rem;">Size (Bytes)</th>
      <th style = "padding-left:9.6rem;">Date Last Modified</th>
    </tr>
  </thead>
  <tbody>
	  
    <tr>
	
<?php
$dir = "stuff/python/";//not my code
// Open a directory, and read its contents//not my code
if (is_dir($dir)){//not my code
  if ($dh = opendir($dir)){//not my code
    while (($file = readdir($dh)) !== false){//not my code
		if ($file!="."&&$file!="..")//get rid of the 1 dot, and 2 dot things, ALSO: not my code
		{
			//list the files n such
		  $bruh = filesize($dir . $file);
		  echo "<tr>";
		  echo "<td class='bruh-list-file'><a href=$dir$file target='_blank'>$file</a></td>"; 
		  echo "<td class='bruh-list-size' style = padding-left:2rem;>$bruh </td>";
		  echo "<td class='bruh-list-date' style = padding-left:10rem;>".date("F d Y", filemtime($dir . $file)) . "</td>";
		  echo "</tr>";
		}//not my code
    }//not my code
    closedir($dh);//not my code
  }//not my code
}//not my code
?>
  </tbody>
</table>
  </section>
</article>
<article id="page2">
  <section>
        <iframe width = "1400" height = "700" src="http://CPlusPlusNewb.github.io"><!--this is so they cant access the file manager-->
		<p>Your browser does not support iframes.</p>
		</iframe>
  </section>
</article>
<article id="page3">
  <section>
    <!--<center><h1>Tab : C++</h1></center>-->
    <table class="bruh-list">
  <thead>
    <tr>
      <th>File</th>
      <th style = "padding-left:2rem;">Size (Bytes)</th>
      <th style = "padding-left:9.6rem;">Date Last Modified</th>
    </tr>
  </thead>
  <tbody>
	  
    <tr>
	
<?php
$dir = "stuff/";//not my code
// Open a directory, and read its contents//not my code
if (is_dir($dir)){//not my code
  if ($dh = opendir($dir)){//not my code
    while (($file = readdir($dh)) !== false){//not my code
		if ($file!="."&&$file!="..")//get rid of the 1 dot, and 2 dot things, ALSO: not my code
		{
			//list the files n such
		  $bruh = filesize($dir . $file);
		  echo "<tr>";
		  echo "<td class='bruh-list-file'><a href=$dir$file target='_blank'>$file</a></td>"; 
		  echo "<td class='bruh-list-size' style = padding-left:2rem;>$bruh </td>";
		  echo "<td class='bruh-list-date' style = padding-left:10rem;>".date("F d Y", filemtime($dir . $file)) . "</td>";
		  echo "</tr>";
		}//not my code
    }//not my code
    closedir($dh);//not my code
  }//not my code
}//not my code
?>
  </tbody>
</table>
	</section>
</article>
<article id="page4">
  <section>
  <!--<center><h1>Tab : Pc Parts</h1></center>-->
<table class="pcpp-part-list">
  <thead>
    <tr>
      <th>Type</th>
      <th>Item</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="pcpp-part-list-type">CPU</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/jLF48d/amd-ryzen-5-2600-34ghz-6-core-processor-yd2600bbafbox">AMD Ryzen 5 2600 3.4 GHz 6-Core Processor</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/jLF48d/amd-ryzen-5-2600-34ghz-6-core-processor-yd2600bbafbox">$117.90 @ OutletPC</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">CPU Cooler</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/F3gzK8/be-quiet-dark-rock-pro-4-505-cfm-cpu-cooler-bk022">be quiet! Dark Rock Pro 4 50.5 CFM CPU Cooler</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/F3gzK8/be-quiet-dark-rock-pro-4-505-cfm-cpu-cooler-bk022">$88.99 @ SuperBiiz</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Motherboard</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/XQgzK8/asus-rog-strix-b450-f-gaming-atx-am4-motherboard-strix-b450-f-gaming">Asus ROG STRIX B450-F GAMING ATX AM4 Motherboard</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/XQgzK8/asus-rog-strix-b450-f-gaming-atx-am4-motherboard-strix-b450-f-gaming">$119.89 @ OutletPC</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Memory</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/6rrcCJ/corsair-memory-cmk32gx4m2b3200c16">Corsair Vengeance LPX 32 GB (2 x 16 GB) DDR4-3200 Memory</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/6rrcCJ/corsair-memory-cmk32gx4m2b3200c16">$139.99 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Storage</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/GTCD4D/western-digital-blue-1tb-25-solid-state-drive-wds100t2b0a">Western Digital Blue 1 TB 2.5" Solid State Drive</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/GTCD4D/western-digital-blue-1tb-25-solid-state-drive-wds100t2b0a">$109.89 @ OutletPC</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Video Card</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/3JdFf7/msi-radeon-rx-570-8gb-armor-oc-video-card-rx-570-armor-8g-oc">MSI Radeon RX 570 8 GB ARMOR OC Video Card</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/3JdFf7/msi-radeon-rx-570-8gb-armor-oc-video-card-rx-570-armor-8g-oc">$164.89 @ OutletPC</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Case</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/6Cyqqs/nzxt-h510-atx-mid-tower-case-ca-h510b-w1">NZXT H510 ATX Mid Tower Case</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/6Cyqqs/nzxt-h510-atx-mid-tower-case-ca-h510b-w1">$69.98 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td class="pcpp-part-list-type">Power Supply</td>
      <td class="pcpp-part-list-item"><a href="https://pcpartpicker.com/product/3hkwrH/corsair-power-supply-cp9020102na">Corsair CXM 550 W 80+ Bronze Certified Semi-modular ATX Power Supply</a></td>
      <td class="pcpp-part-list-price">
        <a href="https://pcpartpicker.com/product/3hkwrH/corsair-power-supply-cp9020102na">$69.89 @ OutletPC</a>
      </td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-price-note">Prices include shipping, taxes, rebates, and discounts</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Total (before mail-in rebates)</td>
      <td class="pcpp-part-list-subtotal-price">$961.42</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Mail-in rebates</td>
      <td class="pcpp-part-list-subtotal-price">-$80.00</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-total">Total</td>
      <td class="pcpp-part-list-total-price">$881.42</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-price-note">Generated by <a href="https://pcpartpicker.com">PCPartPicker</a> 2019-10-15 12:46 EDT-0400</td>
      <td></td>
    </tr>
  </tbody>
</table>
  </section>
</article>
<article id="page5">
  <section>
  <!--<center><h1>Tab : images (click to download)</h1></center>-->
    <a href="stuff/images/CATTO.jpg" width = 333 height = 301 download="CATTO">
    <img width = 180 height = 180 src="stuff/images/CATTO.jpg" alt="There's supposed to be a catto here >=("></a>
    <a href="stuff/images/shobe.jpeg" width = 1200 height = 630 download="shobe">
    <img width = 320 height = 180 src="stuff/images/shobe.jpeg" alt="There's supposed to be a shiba here >=("></a>
    <a href="stuff/images/phrog.jpg" width = 320 height = 180 download="phrog">
    <img width = 320 height = 180 src="stuff/images/phrog.jpg" alt="There's supposed to be a phrog here >=("></a>
    <a href="stuff/images/heheh.png" width = 320 height = 180 download="heheh">
    <img width = 320 height = 180 src="stuff/images/heheh.png" alt="There's supposed to be a image here >=("></a>
  </section>
</article>
<article id="page6">
  <section>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/YUZsHDB8o2Q">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/YxRxd8aNd6I">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/hcaPRXx3EzA">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/p3B8bMc2kso">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/Zi_XLOBDo_Y">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/UObs94oZRUU">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/elQQOXGNXlM">
</iframe>
<iframe width="410" height = "315" src="https://www.youtube.com/embed/kD__LqEz9lM">
</iframe>
  </section>
</article>
</div>
</div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>

    <script src="index.js"></script>

</body>
</html>
