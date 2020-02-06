<?php
  //idk why i wanted to log ip's, but i did, and its eBic
  //thanks to my buddy jacob on discord / Jacob H.#2208, he provided this code - 
  /* <?php
$myfile = fopen("testfile.txt", "w")
$txt = $_SERVER["REMOTE_ADDR"]."\n";
fwrite($myfile, $txt); */
    $myfile = fopen("ipstuff/allips.txt", "a+");
    $txt = $_SERVER["REMOTE_ADDR"];
   $date_array = getdate();
   //$txt = $_SERVER['REMOTE_ADDR'];
   //if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
   //    $txt = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
   //}
    if ($txt != "::1")
    {
       if ($txt != "10.183.1.13")
       {
            $txt .= " on: ";
            $txt .= $date_array['mon'] . "/";
            $txt .= $date_array['mday'] . "/";
            $txt .= $date_array['year'];
            fwrite($myfile, $txt."\n");
       }
    }
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>

<?php
  //idk why i wanted to log ip's, but i did, and its eBic
    $myfile = fopen("ipstuff/currentip.txt", "w");
    $txt2 = $_SERVER["REMOTE_ADDR"]."\n";
    if ($txt2 != "::1\n")
    {
      fwrite($myfile, $txt2);
    }
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
    /*
    <?php
$file = 'currentip.txt';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}
?>
     */
?>


<script>
   var snd = new Audio("sket.mp3"); 
</script>

<html lang="en" onclick="snd.play()">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dastuff.css">
</head>
<body class = "bruh">
<style>
  .bruh {
    background: url(https://subtlepatterns.com/patterns/use_your_illusion.png);
}
@font-face {
    font-family: myFirstFont;
    src: local("smallest pixel-7 Regular"),
         local("smallest_pixel-7"),
         url(fonts/smallest_pixel-7.ttf); 
  }

  
  #navbar a {
    font-family: myFirstFont;
    font-size: 18px;
  }

  #navbar-right p {
    font-family: myFirstFont;
    font-size: 17px;
    color: white;
  }
  article.show {pcpp-part-list-item"
  -webkit-transition: left 0.5s;
  transition: left 0.5s;
  left: 0;
  z-index: 6;
}
article.show {bruh-list-item"
  -webkit-transition: left 0.5s;
  transition: left 0.5s;
  left: 0;
  z-index: 6;
}
#navbar a {
      color: lightgray;
  }
  
  #navbar a:hover {
      color: white;
      border-bottom: 0px solid #eb48a1;
    }
    
    #navbar a.active {
      border-bottom: 4px solid #eb48a1;
      color: #eb48a1;
    }
article section {
  width: 100%;
  color: #fff;
}
article section h1 {
  font-size: 1.5rem;
  margin: 0 0 2rem 0;
}
tr {
  color: white;
}
td {
padding: 3px;
padding-left: 8px;
padding-top: 5px;
color: white;	
}
p{
  padding-left: 8px;
}
a{
color: #fcc274;	
}


a{
  text-decoration: none;
}
/* COLUMNS */

.col {
    display: block;
    float:left;
    margin: 1% 0 1% 1.6%;
}

.col:first-of-type {
  margin-left: 0;
}

.container{
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  position: relative;
  text-align: center;
}

/* CLEARFIX */

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* ALL BUTTONS */

.button{
  font-size: 20px;
  display: inline-block;
  padding: 12px 22px;
  margin: 10px 0;
  position: relative;
  color: white;
}
/*https://codepixelz.com/css/awesome-css-buttons/*/
/* BUTTON 8 */

#button-8{
  background-color: #eb48a1;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#button-8:hover{
  -webkit-box-shadow: 0px 0px 10px #eb48a1;
  box-shadow: 0px 0px 15px #74aefc;
  color: #74aefc;
}
/*<div class="six col">
        <a href="#" class="button" id="button-8">Forums</a>
      </div> */

      img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
  }
  
  img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
  }


</style>

<script>
function switchtabs(evt, tabname) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<head>
<script>
      document.onkeypress = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
               //alert('No F-12');
                return false;
            }
         }
         document.onmousedown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
         }
         document.onkeydown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
            else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
            {
               return false;  //Prevent from ctrl+shift+i
            }
            else if(event.ctrlKey && event.keyCode==73)
            {
               return false;  //Prevent from ctrl+shift+i
            }
            else if(event.ctrlKey && event.keyCode==74)
            {
               return false;  //Prevent from ctrl+shift+i
            }

         }
         
      </script>
      <script>document.addEventListener("contextmenu", function(e){
         e.preventDefault();
         }, false);
      </script>
</head>

<div id="navbar">
  <a class="tablinks" onclick="switchtabs(event, 'Home')" href="index.php">Home</a>
  <a class="tablinks" onclick="switchtabs(event, 'Folders')" href="Folders.php">Folders</a>
  <a class="tablinks" onclick="switchtabs(event, 'Python')" href="Python.php">Python</a>
  <a class="tablinks" onclick="switchtabs(event, 'Html/Php')" href="HtmlPhp.php">Html / Php</a>
  <a class="tablinks" onclick="switchtabs(event, 'C++')" href="C++.php">C++</a>
  <a class="tablinks" onclick="switchtabs(event, 'PcParts')" id="defaultOpen">Pc parts</a>
  <a class="tablinks" onclick="switchtabs(event, 'Images')" href="Images.php">Images</a>
  <a class="tablinks" onclick="switchtabs(event, 'Jammers')" href="Jammers.php">Jammers</a>
  <a class="tablinks" onclick="switchtabs(event, 'Snake')" href="Snake.php">Snake</a>

  <div id="navbar-right">
  <p style="color:white;">Your ip = <?php echo($_SERVER["REMOTE_ADDR"]) ?></p>
    </div>
</div>

<div class="content">
<div id="PcParts" class="tabcontent">
  <p>Tab: Pc parts</p>
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
</div>
<script src="js/dastuff.js"></script>
<script>document.getElementById("defaultOpen").click();</script>

</body>
</html>

