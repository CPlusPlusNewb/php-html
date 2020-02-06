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
    background: url('<?php $a = array('images/shobe.png' ,'images/1521237911_1103453878_preview_LitNhNr.gif','images/a2a0943f1b608680028c23c910a55a04.gif', 'images/background2.gif', 'images/background_ebic.webp', 'images/background4.gif', 'images/bruh.gif'); echo $a[array_rand($a)];?>');
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    text-decoration: none;
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
a{
color: #fcc274;	
}

p{
  padding-left: 24px;
}

section{
  padding-left: 24px;
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
  <a class="tablinks" onclick="switchtabs(event, 'PcParts')" href="PcParts.php">Pc parts</a>
  <a class="tablinks" onclick="switchtabs(event, 'Images')" href="Images.php">Images</a>
  <a class="tablinks" onclick="switchtabs(event, 'Jammers')" id="defaultOpen">Jammers</a>
  <a class="tablinks" onclick="switchtabs(event, 'Snake')" href="Snake.php">Snake</a>

  <div id="navbar-right">
  <p style="color:white;">Your ip = <?php echo($_SERVER["REMOTE_ADDR"]) ?></p>
    </div>
</div>

<div id="Jammers" class="tabcontent">
  <p>Tab: Jammers<p>
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
</div>


<script src="js/dastuff.js"></script>
<script>document.getElementById("defaultOpen").click();</script>

</body>
</html>

