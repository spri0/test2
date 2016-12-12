<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="sliderstyle.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<title>Slider</title>
</head>
<body>

<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<!--navi-->    
<body>
    
<div class="header">
 <div class="left">
<!--nav bar-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="#">Nothing</a>
  <a href="#">Nothing</a>
  <a href="#">Nothing</a>
</div>     

    <!--Put nav bar here-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>     
<<!--nav bar-->     
    </div>
    <div class="right">
     <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>    
<div class="content">
	<h1>Slider</h1>
</div>

<div class="container">
	<div id="content-slider">
    	<div id="slider">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            <a href="#">
            <img src="flag.jpg"/>
            </a>
            <div class="tooltip">
            </div>
            </li>
<!--images/img_1.jpg-->
            <li id="second" class="secondanimation">
            <a href="#">
            <img src="flag2.jpg"/>
            </a>
            <div class="tooltip">
            </div>
            </li>
            
            <li id="third" class="thirdanimation">
            <a href="#">
            <img src="flag3.jpg"/>
            </a>
            <div class="tooltip">
            </div>
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <a href="#">
            <img src="flag4.jpg"/>
            </a>
            <div class="tooltip">
            </div>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <a href="#">
            <img src="flag5.jpg"/>
            </a>
            <div class="tooltip">
            </div>
            </li>
            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
</div>
</body>
</html>
