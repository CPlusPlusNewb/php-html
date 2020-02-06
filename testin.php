<html>
<head>
<meta name="description" content="CSS Tabs" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.0.1/normalize.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/dastuff.css">
<title>CSS Tabs</title>
<meta charset=utf-8>
</head>
<body>
<style>

* {
  box-sizing: border-box;
}

body {
  background: url(https://subtlepatterns.com/patterns/use_your_illusion.png);
  color: #eee;
  font: 1em 'PT Sans', sans-serif;
}

::selection {
  background-color: #4EC6DE;
}

.tabbed {
  width: 700px;
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
  width: 700px;
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

@media screen and (max-width: 700px) {
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

</style>
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
  <div class="tabbed">
    <input type="radio" name="tabs" id="tab-nav-1" checked>
    <label for="tab-nav-1">> $1000</label>
    <input type="radio" name="tabs" id="tab-nav-2">
    <label for="tab-nav-2">< $1000</label>
    <input type="radio" name="tabs" id="tab-nav-3">
    <label for="tab-nav-3">Current Pc</label>
    <input type="radio" name="tabs" id="tab-nav-4">
    <label for="tab-nav-4">Pc I Want To Build</label>
    <div class="tabs">
    <div><h2>> $1000</h2><p>This Is Stuff</p></div>   
    <div><h2>< $1000</h2><p>This Is Stuff</p></div>   
    <div><h2>Current Pc</h2><p>This Is Stuff</p></div>   
    <div><h2>Pc I Want To Build</h2><p>This Is Stuff</p></div>   
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
</body>
</html>
