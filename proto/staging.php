<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if(md5($user) == "c4af607ff8ebb52d5d3aae25566840ec"
&& md5($pass) == "77ea1bf465aa2ffdd3fc068d52dd49e1")
{
?>
				
<!DOCTYPE>
<HTML>
<HEAD>


<TITLE> Designverk Prototype   </TITLE>





<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		

		
		<link type="stylesheet" ref="css/responsiveslides.css">
		
		
		<style>	
*{margin:0;}
audio,
canvas,
img,
video {
    vertical-align: middle;
}
textarea {
    resize: vertical;
}
ul{
list-style:none;
}
.clear{
clear:both;
}
.hidden {
    display: none !important;
    visibility: hidden;
}

/* Make all img elements responsive */
img{
max-width:100%;
height:auto;
}
a{
text-decoration:none;
border:none;
color:inherit;
}
.logo{
width:11em;
margin:2% 0% 2% 5%;
margin-bottom:-11em;
}
nav{
width:85%;
color:#ff1b21;
font-family:'Orator', Orator STD, sans;
margin-left:25%;
}
nav ul{
margin-top:8em;
margin-left:35%;
}
nav li{
float:left;
margin-right:5em;
}

article{
margin-top:5em;
}

.rslides_nav rslides1_nav prev{
width:2em;
padding:1em;
background:teal;
color:white;
}
.sliderControls{
width:100%;
height:2em;
border-top:0.13em solid #dd4069;
margin-top:11.5em;
}
.sliderControls ul{
padding:0;
}
.sliderControls li{
float:left;
text-align: center;
width: 25%;
border-right: 0.13em solid #dd4069;
box-sizing: border-box;
padding-top: 0.5em;
height: 2.4em;
}
@media(max-width:960px){
.logo{
width:10em;
margin:auto;
display:block;
margin-bottom:0em;
}
nav{
width:95%;
margin-left:2.5%;
}
nav ul{
margin:auto;
}
nav li{
width:5em;
float:left;
margin-right:0.1em;
padding:0.5em;
border: 0.1em solid #ff1b21;
}

nav li:nth-child(even){
padding:0.5em;
background:#ff1b21;
color:white;
}
#slider{
max-height:10em;
}
.controls{
position: relative;
bottom: -28em;
margin: auto;
}
}


.stripeContainer{
background-color: #ffffff;
background-image:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMScgaGVpZ2h0PScyMicgdmlld0JveD0nMCAwIDUgMTAnPgoJPHJlY3Qgd2lkdGg9JzExMCUnIHg9Jy01JScgeT0nLTUlJyBoZWlnaHQ9JzExMCUnIGZpbGw9JyNmZmZmZmYnLz4KCTxsaW5lIHgxPSctMicgeTE9JzEnIHgyPSc3JyB5Mj0nMTAnIHN0cm9rZT0nI2ZmMWIyMScgc3Ryb2tlLXdpZHRoPScwLjUxJy8+Cgk8bGluZSB4MT0nLTInIHkxPSc2JyB4Mj0nNycgeTI9JzE1JyBzdHJva2U9JyNmZjFiMjEnIHN0cm9rZS13aWR0aD0nMC41MScvPgoJPGxpbmUgeDE9Jy0yJyB5MT0nLTQnIHgyPSc3JyB5Mj0nNScgc3Ryb2tlPScjZmYxYjIxJyBzdHJva2Utd2lkdGg9JzAuNTEnLz4KPC9zdmc+');
width:100%;
min-height:15em;
}
#slider{
margin-left:-40px;
height:30em;
overflow:hidden;
}
.rslides_nav rslides1_nav prev{
background:teal;
color:white;
padding:1em;
}
.controls{
z-index: 50;
background: white;
height: 14em;
border: 0.13em solid #dd4069;
width: 15em;
position: absolute;
bottom: -3em;
margin-left: 5%;
}
.controls a{
}		
		</style>
	
</HEAD>
<BODY>

<header>
<img src='/images/logo.svg' class='logo'>

<nav>
<ul>
<a href='#'>
<li> Work </li>
<li> About </li>
<li> Contact </li>
<li> Blog </li>
</a>
</ul>
</nav>
</header>

<div class='clear'></div>



<!--  Slider Test-->



<div class='controls'> <div class='sliderControls'> </div> </div>

<article>

<ul class="rslides rslides1" style="max-width: 100%;" id='slider'>
      <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; -webkit-transition: opacity 1000ms ease-in-out; transition: opacity 1000ms ease-in-out;"><img src="http://www.placekitten.com/1366/768" alt=""></li>
      <li id="rslides1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 1000ms ease-in-out; transition: opacity 1000ms ease-in-out;"><img src="http://www.placekitten.com/1366/765" alt=""></li>
      <li id="rslides1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 1000ms ease-in-out; transition: opacity 1000ms ease-in-out;"><img src="http://www.placekitten.com/1366/761" alt=""></li>
	  <li id="rslides1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; -webkit-transition: opacity 1000ms ease-in-out; transition: opacity 1000ms ease-in-out;"><img src="http://www.placekitten.com/1366/769" alt=""></li>
    </ul>

	
</article>


<div class='clear'></div>

<div class='stripeContainer'>



</div>


		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src='/scripts/responsiveslides.min.js'></script>

<script>
  $(function() {
	$(".rslides").responsiveSlides({
	auto: true,             // Boolean: Animate automatically, true or false
	speed: 700,            // Integer: Speed of the transition, in milliseconds
	timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
	nav: false,
	pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	navContainer: ".sliderControls", 
	pager: true,
  });
});
</script>
 
</BODY>
</HTML>

<?php 
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST">
            User <input type="text" name="user"></input><br/>
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>