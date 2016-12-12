<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>hello - <?php print($userRow['user_email']); ?></title>

<!--the grid-->
<meta charset="UTF-8">
<style>
div#grid_container{
	width:900px;
	margin:0px auto;
	height:860px;
	border:#999 1px dashed;
}
div#grid_container > div{
	position:absolute;
	width: 291px;
	border: #000 1px solid;
}
div#grid_container > div:nth-child(2n+0) {
	background: #FFDC64;
}
div#grid_container > div:nth-child(2n+1) {
    background: #FEC910;
}
div#grid_container > div > div{ padding: 20px; font-size: 27px; color:#D9A800; }
</style>
<script>
function renderGrid(){
	var blocks = document.getElementById("grid_container").children;
	var pad = 10, cols = 3, newleft, newtop;
	for(var i = 1; i < blocks.length; i++){
		if (i % cols == 0) {
			newtop = (blocks[i-cols].offsetTop + blocks[i-cols].offsetHeight) + pad;
		    blocks[i].style.top = newtop+"px";
		} else {
			if(blocks[i-cols]){
				newtop = (blocks[i-cols].offsetTop + blocks[i-cols].offsetHeight) + pad;
				blocks[i].style.top = newtop+"px";
			}
			newleft = (blocks[i-1].offsetLeft + blocks[i-1].offsetWidth) + pad;
			blocks[i].style.left = newleft+"px";	
		}
    }
}
window.addEventListener("load", renderGrid, false);
window.addEventListener("resize", renderGrid, false);
</script>
<!--the grid-->

</head>

<!--navi-->
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
  <a href="slider.php">Slider</a>
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
welcome : <?php print($userRow['user_name']); ?>
<<!--the grid-->
</div>   
<div id="grid_container">
  <div style="height:200px;"> <a href="https://blog.codinghorror.com/">Blogging</a> </div>
  <div style="height:200px;"> <a href="http://www.planwallpaper.com/static/images/desktop-year-of-the-tiger-images-wallpaper.jpg">Picture</a> </div>
  <div style="height:120px;"></div>
  <div style="height:180px;"></div>
  <div style="height:150px;"></div>
  <div style="height:160px;"></div>
  <div style="height:180px;"></div>
  <div style="height:170px;"></div>
  <div style="height:160px;"></div>
  <div style="height:180px;"></div>
  <div style="height:150px;"></div>
  <div style="height:160px;"></div>
  <div style="height:130px;"></div>
  <div style="height:140px;"></div>
  <div style="height:210px;"></div>
</div>    
<!--the grid-->    
    

</body>
</html>