<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dokakos Welcome</title>
<?php 
	session_start();
    header('Cache-control: private'); // IE 6 FIX
   	$lang="";
	
 	if(isSet($_GET['lang']))   {
        $lang = $_GET['lang'];
        // register the session and set the cookie
        $_SESSION['lang'] = $lang;
        setcookie("lang", $lang, time() + (3600 * 24 * 30));
    }
    elseif(isSet($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
    }
    elseif(isSet($_COOKIE['lang'])){
        $lang = $_COOKIE['lang'];
    }
    else{
        /*$prefLocales = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
		$i=0;
		$pleasecontinue=true;
		while (($i < count($prefLocales)) && $pleasecontinue){
			if (substr($prefLocales[$i],0,2)== 'en'){
				$lang='en';
				$pleasecontinue=false;
			}elseif (substr($prefLocales[$i],0,2)== 'pl'){
				$lang='pl';
				$pleasecontinue=false;
			}elseif (substr($prefLocales[$i],0,2)== 'fr'){
				$lang='fr';
				$pleasecontinue=false;
			}elseif (substr($prefLocales[$i],0,2)== 'hu'){
				$lang='hu';
				$pleasecontinue=false;
			}
			$i=$i+1;
		}
		if ($pleasecontinue) {
			$lang='en';
		}*/
		$lang='en';
		
	}
	?>
<style type="text/css">
.js-loading *,
.js-loading *:before,
.js-loading *:after {
  animation-play-state: paused !important;
}
.loading {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #aaa;
  font-size: 48px;
  display: none;
}

.js-loading .loading {
  display: block;
}
body {
	background-color: #000;
}


body,td,th {
	color: #FC6;
	text-align: center;
	font-size: 14pt;
}


#splash {
   	display: block;
	width: auto;
   	height: 100%;
   	position: fixed;
	text-align: center;
	vertical-align: center;
	margin-left: auto;
   	margin-right: auto;
  	margin-top: auto;
	margin-bottom: auto;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	background-color: #000;
   
   	animation: moment-on;
	animation-duration: 3s;
	animation-delay: 5s;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}

#content {
   opacity: 0;
   animation: moment-off;
   animation-duration: 3s;
   animation-timing-function: linear;
   animation-delay: 5s;
   animation-fill-mode: forwards;
   position: absolute;
   margin-left: auto;
   margin-right: auto;
   left: 0;
   top: 0;
   right: 0;
   text-align: center;
   height: auto;
   width: 100%;
   background-color: #000;
}

#langbtns{
	position: absolute;
	right:0px;
	top:0px;
}

@keyframes moment-on {
   from {opacity: 1;} 
   10% {opacity: 0.1;}
   to {opacity: 0;}
}

@keyframes moment-off {
   from {opacity: 0;} 
   to {opacity: 1;}
}

.btn {
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	width: 240px;
	height: 120px;
	background-color: #000;
	border: none;
	background-image: url(Enterbutton.png);
	background-size: cover;
}


.btn:hover:active {
  background-image: url(Enterbuttondepressed.png);
  background-size: cover;
  border: none;
 }	

 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    left: 0;
    top: 0;
	z-index: 1; /* Sit on top */
    
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #6f6f6f;
    margin: auto; /* from the top and centered */
	position: relative;
    top: 50%;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
	color: black;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Close Button */
.close {
    /* Position it in the top right corner outside of the modal */
    position: absolute;
    right: 5px;
    top: 0px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    -webkit-animation-fill-mode: forwards;
	animation: animatezoom 0.6s;
	animation-fill-mode: forwards;
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0) translateY(-50%)}
    to {-webkit-transform: scale(1) translateY(-50%)}
}

@keyframes animatezoom {
    from {transform: scale(0) translateY(-50%)}
    to {transform: scale(1) translateY(-50%)}
} 
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
 
</style>


<script>

document.body.classList.add('js-loading');

window.addEventListener("load", showPage, false);

function showPage() {
  document.body.classList.remove('js-loading');
}


//document.documentElement.className += " js-loading";

//window.addEventListener("load", showPage, false);

//function showPage() {
 // document.documentElement.className = document.documentElement.className.replace("js-loading","");
//}	
</script>
</head>


<body bgcolor="#000000" text="#FFCC66">
<div class="loading">Please wait...</div>
<div id="splash"><img src="Wedding.gif" width="auto" height="100%" />
</div>
<div id="content">
<br />
<img src="Lace2.png" width="50%" height="auto" />
<div id="langbtns">
<?php
echo '<a href="index.php?lang=en"> <img src="';
if($lang=='en'){
	echo "En-clicked.jpg";
}else {
	echo "En.jpg";
}
echo '" alt="English" name="English" width="32" height="32" id="English" /></a>
	<a href="index.php?lang=pl"> <img src="';
if($lang=='pl'){
	echo "Pl-clicked.jpg";
}else {
	echo "Pl.jpg";
}
echo '" alt="Po Polsku" name="Polski" width="32" height="32" id="Polski" /></a>
	<a href="index.php?lang=fr"> <img src="';
echo "Fr.jpg";
echo '" alt="Francais" name="Francais" width="32" height="32" id="Francais"/></a>
	<a href="index.php?lang=hu"> <img src="';
if($lang=='hu'){ 
	echo "Hu-clicked.jpg";
}else{
	echo "Hu.jpg";
}
echo '" alt="Magyar" name="Magyar" width="32" height="32" id="Magyar" /></a>';
?>
</div>
<?php echo $lang; ?>
<?php echo "TEST"; ?>
<?php if($lang=='pl'){
	echo "";
  }elseif ($lang =='fr'){
  	echo "";
  }elseif ($lang == 'hu'){
  	echo "";
  }elseif ($lang=='en'){
  echo "<p/>When two become one<br />
  it's always fun<br />
  Yet we know what we're asking is a hassle<br />
  therefore we are inviting you to a castle<br />
  The ceremony is outdoors<br />
  we promise that it won't bore<br />
  After we will wine and dine into the night<br />
  and you can dance to your heart's delight<br />
  So pack your bags and sing a tune<br />
  because we would love to see you in June<br />
  In case you didn't notice<br />
  it's the summer solstice<br />
  So click the big red button below<br />
  and please let us know<br />
  if your prescence you will bestow</p>";
 }else{
	 echo "";
 }
  ?>
<img src="Lace1down.png" width="50%" height="auto" />
<p align="center"><button class="btn" onclick="document.getElementById('id01').style.display='block'"></button></p>
</div>
<!-- The Modal -->
<div id="id01" class="modal">
  
  <!-- Modal Content -->
  <form class="modal-content animate" action="/main.php">
   
    <div class="container">
      <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>
	  <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="uname" required>

      <label for="psw"><b>Challenge</b></label>
      <input type="password" placeholder="Enter Challenge" name="psw" required>

      <button type="submit">Login</button>
    <!--  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>   -->
    </div>

    <!--<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
        </div>-->

  </form>
</div> 
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
