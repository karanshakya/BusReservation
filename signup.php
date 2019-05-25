
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to James Buchanan Pub and Restaurant</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:0px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="James Buchanan Pub and Restaurant" /></a></h1></br></br>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="current"><a href="history.php">History</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			       <li><a href="signup.php">sign up</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
					
					
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }

var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }
  var b=document.forms["form"]["email"].value;
if (b==null || b=="")
  {
  alert("emailmust be filled out");
  return false;
  }
var b=document.forms["form"]["pin"].value;
if (b==null || b=="")
  {
  alert("Pin Number must be filled out");
  return false;
  }
}
</script>
<div id="stylized" class="myform">

<form id="form" name="form" action="save1.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />

<label>First Name
<span class="small">Enter first name</span>
</label>
<input type="text" name="fname"  id="name"/><br>
<label>Last Name
<span class="small">Enter last name</span>
</label>
<input type="text" name="lname"  id="name"/><br>
<label>Date of Birth
<span class="small">Enter date of birth</span>
</label>
<input type="date" name="date"  id="date" class="required"/><br>
<label>Address
<span class="small">Enter Address</span>
</label>
<input type="text" name="address"  id="name"/><br>
<label>Contact
<span class="small">Enter Contact Number</span>
</label>
<input type="text" name="contact"  id="name"/><br>
<label>E-mail id
<span class="small">Enter E-mail id</span>
</label>
<input type="text" name="email"  id="email" class="required"/><br>
<label>Password
<span class="small">Enter password</span>
</label>
<input type="password" name="pass"  id="pass" class="required"/><br>
<label>Pin Code
<span class="small">Enter pin Code Number</span>
</label>
<input type="text" name="pin"  id="name" class="required"/><br>

<button type="submit" name="sub">Confirm</button>
</form>
</div>
		<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
  <div id="footer">
	<h4>+63(2)3525393 &bull; <a href="contact-us.php">Hyderabad ,Ameerpet ,opp of satyam theoter.  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
	<p>&copy; Copyright 2015 StarNight Bus | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>
