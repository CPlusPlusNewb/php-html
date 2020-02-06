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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.0.1/normalize.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/dastuff.css">
<meta charset=utf-8>
</head>
<body>
<style>


body {
  background: url(https://subtlepatterns.com/patterns/use_your_illusion.png);
  color: #eee;
  font: 1em 'PT Sans', sans-serif;
  cursor: cell;
}

::selection {
  background-color: #4EC6DE;
}

.tabbed {
  width: 900px;
  margin: 50px auto;
}

.tabbed > input {
  display: none;
}

.tabbed > label {
  display: block;
  float: left;
  padding: 12px 20px;
  margin-right: 5px;
  cursor: pointer;
  transition: background-color .3s;
}

.tabbed > label:hover,
.tabbed > input:checked + label {
  background: #4EC6DE;
}

.tabs {
  clear: both;
  perspective: 600px;
}

.tabs > div {
  width: 900px;
  position: absolute;
  border: 2px solid #4EC6DE;
  padding: 10px 30px 40px;
  line-height: 1.4em;
  opacity: 0;
  transform: translate(20deg);
  transform-origin: top center;
  transition: opacity .3s, transform 1.5s;
  z-index: 0;
}

#tab-nav-1:checked ~ .tabs > div:nth-of-type(1),
#tab-nav-2:checked ~ .tabs > div:nth-of-type(2),
#tab-nav-3:checked ~ .tabs > div:nth-of-type(3),
#tab-nav-4:checked ~ .tabs > div:nth-of-type(4){
  transform: rotateX(0);
  opacity: 1;
  z-index: 1;
}

@media screen and (max-width: 1000px) {
  .tabbed { width: 400px }
  .tabbed > label { display: none }
  .tabs > div {
    width: 400px;
    border: none;
    padding: 0;
    opacity: 1;
    position: relative;
    transform: none;
    margin-bottom: 60px;
  }
  .tabs > div h2 {
    border-bottom: 2px solid #4EC6DE;
    padding-bottom: .5em;
  }
}
h2 {
    padding-bottom: .5em;
    border-bottom: 2px dotted #4EC6DE;
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
table {
  border: 1px solid #4EC6DE;
  border-collapse: collapse;
  padding-top: 5px;
  padding-bottom: 5px;
}
th {
  border: 1px solid #4EC6DE;
  border-collapse: collapse;
  padding-top: 5px;
  padding-bottom: 5px;
  background:#4EC6DE;
  opacity: 1.0;
}
th:hover
{
  background:white;
  color: #4EC6DE;
}
.tabbed a 
{
  color: #fcc274;
  text-decoration: none;
}
td
{
  border: 1px solid #4EC6DE;
  border-collapse: collapse;
  padding-left: 6px;
  padding-top: 6px;
  padding-bottom: 6px;
  padding-right: 6px;
}
.tabbed a:hover
{
  color: #fcc274;
  opacity: 1.0;
  text-decoration: underline;
}
tr:hover{
    background:#4EC6DE;
}
</style>
<head>
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
<script>
function (event) {
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
<div id="PcParts" class="tabcontent">
  <div class="tabbed">
    <input type="radio" name="tabs" id="tab-nav-1" checked>
    <label for="tab-nav-1">< $1000</label>
    <input type="radio" name="tabs" id="tab-nav-2">
    <label for="tab-nav-2">> $1000</label>
    <input type="radio" name="tabs" id="tab-nav-3">
    <label for="tab-nav-3">Current Pc</label>
    <input type="radio" name="tabs" id="tab-nav-4">
    <label for="tab-nav-4">Pc I Want To Build</label>
    <div class="tabs">
    <div><h2>< $1000</h2>
    <table style="width:100%">
  <tr>
    <th>Type</th>
    <th>Item</th> 
    <th>Price</th>
  </tr>
  <tr>
  <td>CPU</td>
  <td><a href="https://pcpartpicker.com/product/jLF48d/amd-ryzen-5-2600-34ghz-6-core-processor-yd2600bbafbox">AMD Ryzen 5 2600 3.4 GHz 6-Core Processor</a></td>
  <td> <a href="https://pcpartpicker.com/product/jLF48d/amd-ryzen-5-2600-34ghz-6-core-processor-yd2600bbafbox">$117.90 @ OutletPC</a></td>
  </tr>
  <tr>
  <td>CPU Cooler</td>
      <td><a href="https://pcpartpicker.com/product/F3gzK8/be-quiet-dark-rock-pro-4-505-cfm-cpu-cooler-bk022">be quiet! Dark Rock Pro 4 50.5 CFM CPU Cooler</a></td>
      <td><a href="https://pcpartpicker.com/product/F3gzK8/be-quiet-dark-rock-pro-4-505-cfm-cpu-cooler-bk022">$88.99 @ SuperBiiz</a></td>
  </tr>
  <tr>
  <td>Motherboard</td>
      <td><a href="https://pcpartpicker.com/product/XQgzK8/asus-rog-strix-b450-f-gaming-atx-am4-motherboard-strix-b450-f-gaming">Asus ROG STRIX B450-F GAMING ATX AM4 Motherboard</a></td>
      <td><a href="https://pcpartpicker.com/product/XQgzK8/asus-rog-strix-b450-f-gaming-atx-am4-motherboard-strix-b450-f-gaming">$119.89 @ OutletPC</a></td>
  </tr>
  <tr>
      <td >Memory</td>
      <td ><a href="https://pcpartpicker.com/product/6rrcCJ/corsair-memory-cmk32gx4m2b3200c16">Corsair Vengeance LPX 32 GB (2 x 16 GB) DDR4-3200 Memory</a></td>
      <td><a href="https://pcpartpicker.com/product/6rrcCJ/corsair-memory-cmk32gx4m2b3200c16">$139.99 @ Amazon</a></td>
    </tr>
    <tr>
      <td >Storage</td>
      <td ><a href="https://pcpartpicker.com/product/GTCD4D/western-digital-blue-1tb-25-solid-state-drive-wds100t2b0a">Western Digital Blue 1 TB 2.5" Solid State Drive</a></td>
      <td><a href="https://pcpartpicker.com/product/GTCD4D/western-digital-blue-1tb-25-solid-state-drive-wds100t2b0a">$109.89 @ OutletPC</a></td>
    </tr>
    <tr>
      <td >Video Card</td>
      <td ><a href="https://pcpartpicker.com/product/3JdFf7/msi-radeon-rx-570-8gb-armor-oc-video-card-rx-570-armor-8g-oc">MSI Radeon RX 570 8 GB ARMOR OC Video Card</a></td>
      <td><a href="https://pcpartpicker.com/product/3JdFf7/msi-radeon-rx-570-8gb-armor-oc-video-card-rx-570-armor-8g-oc">$164.89 @ OutletPC</a></td>
    </tr>
    <tr>
      <td >Case</td>
      <td ><a href="https://pcpartpicker.com/product/6Cyqqs/nzxt-h510-atx-mid-tower-case-ca-h510b-w1">NZXT H510 ATX Mid Tower Case</a></td>
      <td><a href="https://pcpartpicker.com/product/6Cyqqs/nzxt-h510-atx-mid-tower-case-ca-h510b-w1">$69.98 @ Amazon</a></td>
    </tr>
    <tr>
      <td >Power Supply</td>
      <td ><a href="https://pcpartpicker.com/product/3hkwrH/corsair-power-supply-cp9020102na">Corsair CXM 550 W 80+ Bronze Certified Semi-modular ATX Power Supply</a></td>
      <td><a href="https://pcpartpicker.com/product/3hkwrH/corsair-power-supply-cp9020102na">$69.89 @ OutletPC</a></td>
    </tr>
    <tr>
    <th></th>
    <th>Prices include shipping, taxes, rebates, and discounts</th> 
    <th>Total Price</th>
  </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Total (before mail-in rebates)</td>
      <td class="pcpp-part-list-subtotal">$961.42</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Mail-in rebates</td>
      <td class="pcpp-part-list-subtotal">-$80.00</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Total</td>
      <td class="pcpp-part-list-subtotal">$881.42</td>
    </tr>
</table>
<p>Generated by <a href="https://pcpartpicker.com">PCPartPicker</a> on 10/15/2019 at 12:46 EDT-0400 </p>
    </div>   
    <div><h2>> $1000</h2>
    <table style="width:100%">
    <tr>
    <th>Type</th>
    <th>Item</th> 
    <th>Price</th>
    </tr>
    <tr>
      <td >CPU</td>
      <td><a href="https://pcpartpicker.com/product/9nm323/amd-ryzen-5-3600-36-thz-6-core-processor-100-100000031box">AMD Ryzen 5 3600 3.6 GHz 6-Core Processor</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/9nm323/amd-ryzen-5-3600-36-thz-6-core-processor-100-100000031box">$189.99 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td >CPU Cooler</td>
      <td><a href="https://pcpartpicker.com/product/hHDJ7P/cooler-master-hyper-212-rgb-black-edition-573-cfm-cpu-cooler-rr-212s-20pc-r1">Cooler Master Hyper 212 RGB Black Edition 57.3 CFM CPU Cooler</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/hHDJ7P/cooler-master-hyper-212-rgb-black-edition-573-cfm-cpu-cooler-rr-212s-20pc-r1">$39.99 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td >Motherboard</td>
      <td><a href="https://pcpartpicker.com/product/LcYQzy/gigabyte-x570-ud-atx-am4-motherboard-x570-ud">Gigabyte X570 UD ATX AM4 Motherboard</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/LcYQzy/gigabyte-x570-ud-atx-am4-motherboard-x570-ud">$139.99 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td >Memory</td>
      <td><a href="https://pcpartpicker.com/product/ybrcCJ/gskill-tridentz-rgb-16gb-2-x-8gb-ddr4-3200-memory-f4-3200c16d-16gtzr">G.Skill Trident Z RGB 16 GB (2 x 8 GB) DDR4-3200 Memory</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/ybrcCJ/gskill-tridentz-rgb-16gb-2-x-8gb-ddr4-3200-memory-f4-3200c16d-16gtzr">$93.99 @ Newegg</a>
      </td>
    </tr>
    <tr>
      <td >Storage</td>
      <td><a href="https://pcpartpicker.com/product/DgJtt6/western-digital-blue-1tb-m2-2280-solid-state-drive-wds100t2b0b">Western Digital Blue 1 TB M.2-2280 Solid State Drive</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/DgJtt6/western-digital-blue-1tb-m2-2280-solid-state-drive-wds100t2b0b">$109.99 @ Newegg</a>
      </td>
    </tr>
    <tr>
      <td >Storage</td>
      <td><a href="https://pcpartpicker.com/product/MwW9TW/western-digital-internal-hard-drive-wd10ezex">Western Digital Caviar Blue 1 TB 3.5" 7200RPM Internal Hard Drive</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/MwW9TW/western-digital-internal-hard-drive-wd10ezex">$44.08 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td >Video Card</td>
      <td><a href="https://pcpartpicker.com/product/DdbCmG/gigabyte-geforce-gtx-1660-super-6-gb-gaming-oc-video-card-gv-n166sgaming-oc-6gd">Gigabyte GeForce GTX 1660 Super 6 GB GAMING OC Video Card</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/DdbCmG/gigabyte-geforce-gtx-1660-super-6-gb-gaming-oc-video-card-gv-n166sgaming-oc-6gd">$257.98 @ Newegg</a>
      </td>
    </tr>
    <tr>
      <td >Case</td>
      <td><a href="https://pcpartpicker.com/product/XQndnQ/thermaltake-v200-tempered-glass-rgb-edition-atx-mid-tower-case-ca-1k8-00m1wn-01">Thermaltake V200 RGB ATX Mid Tower Case</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/XQndnQ/thermaltake-v200-tempered-glass-rgb-edition-atx-mid-tower-case-ca-1k8-00m1wn-01">$74.00 @ Amazon</a>
      </td>
    </tr>
    <tr>
      <td >Power Supply</td>
      <td><a href="https://pcpartpicker.com/product/FQ648d/corsair-power-supply-cp9020101na">Corsair CXM (2015) 450 W 80+ Bronze Certified Semi-modular ATX Power Supply</a></td>
      <td >
        <a href="https://pcpartpicker.com/product/FQ648d/corsair-power-supply-cp9020101na">$39.99 @ Newegg</a>
      </td>
    </tr>
    <tr>
    <tr>
    <th></th>
    <th>Prices include shipping, taxes, rebates, and discounts</th> 
    <th>Total Price</th>
  </tr>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Total (before mail-in rebates)</td>
      <td class="pcpp-part-list-subtotal">$1010.00</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Mail-in rebates</td>
      <td class="pcpp-part-list-subtotal">-$20.00</td>
    </tr>
    <tr>
      <td></td>
      <td class="pcpp-part-list-subtotal">Total</td>
      <td class="pcpp-part-list-subtotal">$990.00</td>
    </tr>
    </table>
    <p>Generated by <a href="https://pcpartpicker.com">PCPartPicker</a> on 01/22/2020 at 11:06 EST-0500 : <a href="https://pcpartpicker.com/list/LFCx27">LINK</a> </p>
    </div>   
    <div><h2>Current Pc</h2>
    
    </div>   
    <div><h2>Pc I Want To Build</h2>
    
    </div>   
    </div>
  </div>
  
</body>
<script>document.getElementById("defaultOpen").click();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
<script src="js/dastuff.js"></script>
</html>