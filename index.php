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
    /* 
      <?php
  $ipaddre = $_SERVER["REMOTE_ADDR"];
  if ($ipaddre != "::1")
    {
      echo '<p style="color:white;">Your ip = $ipaddre </p>'; 
    }
    else{
      echo '<p style="color:white;">Your ip = SOMETHING WENT WRONG</p>'; 
    }
  ?>*/
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
    width: 100%;
            height: 100%;
            color: #fff;
            background: linear-gradient(<?php $a = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '100', '101', '102', '103', '104', '105', '106', '107', '108', '109', '110', '111', '112', '113', '114', '115', '116', '117', '118', '119', '120', '121', '122', '123', '124', '125', '126', '127', '128', '129', '130', '131', '132', '133', '134', '135', '136', '137', '138', '139', '140', '141', '142', '143', '144', '145', '146', '147', '148', '149', '150', '151', '152', '153', '154', '155', '156', '157', '158', '159', '160', '161', '162', '163', '164', '165', '166', '167', '168', '169', '170', '171', '172', '173', '174', '175', '176', '177', '178', '179', '180', '181', '182', '183', '184', '185', '186', '187', '188', '189', '190', '191', '192', '193', '194', '195', '196', '197', '198', '199', '200', '201', '202', '203', '204', '205', '206', '207', '208', '209', '210', '211', '212', '213', '214', '215', '216', '217', '218', '219', '220', '221', '222', '223', '224', '225', '226', '227', '228', '229', '230', '231', '232', '233', '234', '235', '236', '237', '238', '239', '240', '241', '242', '243', '244', '245', '246', '247', '248', '249', '250', '251', '252', '253', '254', '255', '256', '257', '258', '259', '260', '261', '262', '263', '264', '265', '266', '267', '268', '269', '270', '271', '272', '273', '274', '275', '276', '277', '278', '279', '280', '281', '282', '283', '284', '285', '286', '287', '288', '289', '290', '291', '292', '293', '294', '295', '296', '297', '298', '299', '300', '301', '302', '303', '304', '305', '306', '307', '308', '309', '310', '311', '312', '313', '314', '315', '316', '317', '318', '319', '320', '321', '322', '323', '324', '325', '326', '327', '328', '329', '330', '331', '332', '333', '334', '335', '336', '337', '338', '339', '340', '341', '342', '343', '344', '345', '346', '347', '348', '349', '350', '351', '352', '353', '354', '355', '356', '357', '358', '359'); echo $a[array_rand($a)];?>deg, <?php $a = array('#00ffff', ' #ff0000', '#ff3399', '#0066ff', '#ff9900', '#ff0066'); echo $a[array_rand($a)];?> 0%, <?php $a = array('#00ffff', ' #ff0000', '#ff3399', '#0066ff', '#ff9900', '#ff0066'); echo $a[array_rand($a)];?> 51%, <?php $a = array('#00ffff', ' #ff0000', '#ff3399', '#0066ff', '#ff9900', '#ff0066'); echo $a[array_rand($a)];?> 99%);
            background-size: 400%, 400%;
            position: relative;
            animation: change 5s ease-in-out infinite;
}
@font-face {
    font-family: myFirstFont;
    src: local("smallest pixel-7 Regular"),
         local("smallest_pixel-7"),
         url(fonts/smallest_pixel-7.ttf); 
  }

  @keyframes change
        {
            0% 
            {
                background-position: 0 50%;
            }
            50% 
            {
                background-position: 100% 50%;
            }
            100% 
            {
                background-position: 0 50%;
            }
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

#navbar a {
      color: lightgray;
  }
  
  #navbar a:hover {
      color: white;
      border-bottom: 4px solid #eb48a1;
      -webkit-box-shadow: 0px 0px 10px #eb48a1;
      box-shadow: 0px 0px 15px #eb48a1;
    }
    
    #navbar a.active {
      border-bottom: 4px solid #eb48a1;
      color: #eb48a1;
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

.eight { width: 66.13%; }

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
  font-size-adjust: 20px;
}
/*<div class="six col">
        <a href="#" class="button" id="button-8">Forums</a>
      </div> */
img 
{
  height: 60%;
  border-bottom: 5px dotted white;
  border-right: 5px dotted white;
  border-top: 5px dotted white;
  border-left: 5px dotted white;
  
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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid <?php $a = array('#00ffff', ' #ff0000', '#ff3399', '#0066ff', '#ff9900', '#ff0066'); echo $a[array_rand($a)];?>;
  width: 120px;
  height: 120px;
  -webkit-animation: spin <?php $a = array('0.5', ' 1', '2', '3', '4', '5'); echo $a[array_rand($a)];?>s linear infinite;
  animation: spin 1.5s linear infinite;
}
#loader h1
{
    position: relative;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 2s;
  animation-name: animatebottom;
  animation-duration: 2s;
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="pre-loader">
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<h1>Loading...</h1>
</center>
</div>
<div id="loader">
</div>

<div style="display:none;" id="myDiv" class="animate-bottom">
    <div id="navbar">
  <a class="tablinks" onclick="switchtabs(event, 'Home')" id="defaultOpen">Home</a>
  <a class="tablinks" onclick="switchtabs(event, 'Folders')" href="Folders.php">Folders</a>
  <a class="tablinks" onclick="switchtabs(event, 'Python')" href="Python.php">Python</a>
  <a class="tablinks" onclick="switchtabs(event, 'Html/Php')" href="HtmlPhp.php">Html / Php</a>
  <a class="tablinks" onclick="switchtabs(event, 'C++')" href="C++.php">C++</a>
  <a class="tablinks" onclick="switchtabs(event, 'PcParts')" href="PcParts.php">Pc parts</a>
  <a class="tablinks" onclick="switchtabs(event, 'Images')" href="Images.php">Images</a>
  <a class="tablinks" onclick="switchtabs(event, 'Jammers')" href="Jammers.php">Jammers</a>
  <a class="tablinks" onclick="switchtabs(event, 'Snake')" href="Snake.php">Snake</a>

  <div id="navbar-right">
    <p style="color:white;">Your ip = <?php echo($_SERVER["REMOTE_ADDR"]) ?></p>
  </div>
</div>

<div class="content">
<div id="Home" class="tabcontent">
  <p>Tab: Home</p>
  <center>
  <a href="http://10.183.1.13/phpmyadmin/" class="button" id="button-8">phpmyadmin</a>
  <a href="http://10.183.1.13/mybb_1821/" class="button" id="button-8">Forums</a>
  <a href="http://10.183.1.13/phphitcounter/" class="button" id="button-8">phphitcounter</a>
  <a href="http://10.183.1.13/makingkewlwebsite/" class="button" id="button-8">making kewl website</a>
  <a href="http://10.183.1.13/logs.php" class="button" id="button-8">Logs</a>
  <br>

  <img src="images/doggo.png"/>
  </center>
</div>
<script src="js/dastuff.js"></script>
<script>document.getElementById("defaultOpen").click();</script>

</body>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("pre-loader").style.display = "none";
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>

</html>

