<!doctype html>
<html>
<head>
<title>Contact Us</title>
<link  href = "contact_us.css" type= "text/css" rel="stylesheet" media = "screen">
<script src="contact_us_script.js"></script>

</head>
<body>
<header>
<div id="wrechtextU"></div>
<div id="wrechtextMU"></div>
<h1 id="Experience_Divinity" >Experience Divinity</h1>
<div id="wrechtextML"></div>
<div id="wrechtextL"></div>


<div id="nav_bar_line1" ></div>
<nav id="nav_id">
	<a href="index.html">HOME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href="GALLERY.html">GALLERY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href="MAPS.html">MAPS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href="SEARCH.html">SEARCH&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href="ABOUT.html">ABOUT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href="CONTACT_US.php">CONTACT US</a>
	</nav>
<div id="nav_bar_line2" ></div>


<form action="CONTACT_US.php" method="POST">
<fieldset >
<legend>Personal Information</legend>
<div style="float:right">
<a class="twitter-follow-button"
  href="https://plus.google.com/u/0/+SivaPadala19-09-1993" TARGET="BLANK""
  data-show-count="false"
  data-lang="en">
<img src="gplus.png">
</a>
<script>
window.twttr=(function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};
	if(d.getElementById(id))
		return t;
	js=d.createElement(s);
	js.id=id;j
	s.src="https://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js,fjs);
	t._e=[];
	t.ready=function(f){
		t._e.push(f);
		}
		;return t;}
		(document,"script","twitter-wjs"));
		</script>
</div>


<label>First Name:</br>
<input type="text" name="fname" placeholder="Siva" onBlur="isEmpty(this,'Enter Your First Name!')" required /></label>
</br></br>

<label>Last Name:</br>
<input type="text" name="lname" placeholder="Padala" onBlur="isEmpty(this,'Enter Your Last Name!')" required /></label>
</br></br>

<label>Mob. No. :</br>
<input type="tel" name="telp" placeholder="+19999999999" onBlur="isMobileNo(this,'Enter the mobile no. starting with +1 and following 10 digits [0-9]!')" required/></label>
</br></br>

<label>E-Mail:</br>
<input type="email" name="email" placeholder="siva@xyz.com" onBlur="isEmail(this,'Enter the email id in proper format!')" required /></label>
</br></br>

<label>Message:</br>
<input id="msg" type="text" name="message" placeholder="Message" onBlur="isEmpty(this,'Enter Your Message!')"></label>
</br></br></br>

<input type="submit"  />


</fieldset>
</form>


<div id="nav_bar_line3" ></div>

<footer id="footer">
<div id="opening_hrs">
<h2 id="opening_heading">OPENING HOURS</h2>
<p id="p_id1">MONDAY-FRIDAY</br>
&nbsp;11am - 11pm</br>
SATURDAY-SUNDAY</br>
&nbsp;10am - 12:00am</p>
	</div>
	
	<div id="address_div">
<h2 id="address">ADDRESS</h2>
<p id="p_id2">80&nbsp;Forest&nbsp;Manor&nbsp;Road</br>
North York,&nbsp;Toronto,&nbsp;&nbsp;ON M2J 1M6</br>
info@mysite.com</br>
T&nbsp;&nbsp;/&nbsp;&nbsp;437-998-8015</br>
F&nbsp;&nbsp;/&nbsp;&nbsp;437-998-8000</p>
	</div>
	
	
<div id="address_div">
<h2 id="address">FIND US</h2>
</div>
<div style="position: absolute; top: 63px; height: 115px; width: 309px; left: 635px;" class="s7" id="GglMp1" data-reactid=".0.$SITE_ROOT.$SITE_STRUCTURE.$SITE_FOOTER.1.1.$GglMp1">
<div class="s7_left s7_shd" data-reactid=".0.$SITE_ROOT.$SITE_STRUCTURE.$SITE_FOOTER.1.1.$GglMp1.0">
	</div>
<div class="s7_right s7_shd" data-reactid=".0.$SITE_ROOT.$SITE_STRUCTURE.$SITE_FOOTER.1.1.$GglMp1.1">
	</div>
<div id="GglMp1mapContainer" class="s7mapContainer" data-reactid=".0.$SITE_ROOT.$SITE_STRUCTURE.$SITE_FOOTER.1.1.$GglMp1.2">
<iframe src="http://static.parastorage.com/services/santa/1.428.22//static/external/googleMap.html?address=80%20Forest%20Manor%20Road%2C%20North York%2C%20ON%20%20M2J 1M6.&amp;
addressInfo&amp;mapType=TERRAIN&amp;mapInteractive&amp;showZoom&amp;showPosition&amp;showStreetView&amp;showMapType&amp;lat=43.7746776,&amp;long= -79.3445566" 
width="100%" height="100%" frameborder="0" scrolling="no" data-reactid=".0.$SITE_ROOT.$SITE_STRUCTURE.$SITE_FOOTER.1.1.$GglMp1.2.0">
	</iframe>
		</div>
			</div>

</footer>

<?php
if($_POST[server]==true){
	
	$file="test.txt";
	$val = $_POST["fname"]." `% ".$_POST["lname"]." `% ".$_POST["telp"]." `% ".$_POST["email"]." `% ".$_POST["message"]." `% "."\n";
	file_put-contents($file,$val);

	alert("Succesfully Inserted!");
}else{
	alert("Records not submited!");
}
?>

</body>
</html>


