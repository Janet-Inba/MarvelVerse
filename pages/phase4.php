<?php include("config.php") ?>

<!DOCTYPE html>
<html>

<!--header start-->
<head>
<title>MCU wiki</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/x-icon" href="../includes/favicon.png" />
<link rel="stylesheet" type="text/css" href="../includes/style.css" id="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Alata" />
<script src="../includes/script.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<!--header end-->

<!--body start-->
<body>
<!--body wrapper start-->
<div class="wrapper">
<!--page header start-->
<div class="header"></div>
<!--page header end-->

<!--menu container starts-->
<div class="menu-container sticky">
<!--top navigation start-->
<div class="top-nav middle">
<!--left starts-->
<div class="left">
<!--logo-->
<div class="dropdown img middle no-hover">
<a href="mcu-wiki.php"><img src="../includes/logo.png" alt="home-logo" height="35px"/></a>
</div>

<!--home-->
<div class="dropdown middle">
<a href="mcu-wiki.php">HOME</a>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">UNIVERSE <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">MOVIES <i class="fas fa-caret-down" style="font-size: 15px; color: white"></i></a>
<div class="dropdown-content">
<a href="phase1.php">Phase 1</a>
<a href="phase2.php">Phase 2</a>
<a href="phase3.php">Phase 3</a>
<a href="phase4.php">Phase 4</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="javascript:void(0)">TV SHOWS <i class="fas fa-caret-down" style="font-size: 15px; color: white" ></i></a>
<div class="dropdown-content">
<a href="marvelheroes.php">Marvel Heroes</a>
<a href="disney.php">Disney+ series</a>
</div>
</div>

<!--dropdown-->
<div class="dropdown middle">
<a href="review.php">REVIEWS</a>
</div>
</div>
<!--left ends-->
</div>
<!--top navigation ends-->

<!--right starts-->
<div class="right" style="padding: 20px">
<!--theme toggle button-->
<div class="dropdown middle theme no-hover">
<a onclick="change()"><i class="fas fa-adjust" id="themebtn" title="Lumos!"></i></a>
</div>
</div>
<!--right ends-->

<div>
<!--menu button-->
<div class="menu-icon middle no-hover left">
<a class="icon" id="menubtn"><i class="fa fa-bars"></i></a>
</div>

<!--logo-->
<div class="home-icon img middle no-hover center">
<a href="mcu-wiki.php"><img src="../includes/logo.png" alt="home-logo" height="35px" /></a>
</div>
<br />
</div>

<!--mob nav starts-->
<div class="mob-nav" id="menu">
<!--home-->
<div class="mob-dropdown middle">
<a href="mcu-wiki.php">HOME</a>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">UNIVERSE<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="organisations.html">Organisations</a>
<a href="characters.html">Characters</a>
<a href="timeline.html">Timeline</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">MOVIES<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="phase1.php">Phase 1</a>
<a href="phase2.php">Phase 2</a>
<a href="phase3.php">Phase 3</a>
<a href="phase4.php">Phase 4</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="javascript:void(0)">TV SHOWS<i class="fas fa-caret-down right" style="font-size: 15px; color: white"></i></a>
<div class="mob-dropdown-content">
<a href="marvelheroes.php">Marvel Heroes</a>
<a href="disney.php">Disney+ series</a>
</div>
</div>
<br />

<!--dropdown-->
<div class="mob-dropdown middle">
<a href="review.php">REVIEWS</a>
</div>
<br />
</div>
<!--mob nav ends-->
</div>
<!--menu container ends-->

<!--row-wrapper starts-->
<div class="row clear-float">
<!--left column starts-->
<div class="leftcolumn">
<!--inner row starts-->
<div class="inner-row">
<!--card starts-->
<div class="card">
<h2>Phase 4</h2>

<div class="card phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="phase4.webp" alt="phase4" style="max-width: 100%" />
</div>
<div class="phasecnt">
<p>
Phase Four is the fourth part of the Marvel Cinematic Universe, following Phase Three and the Infinity Saga.
</p>
</div>
</div>
</div>

<div class="card phase">
<div class="grid-container2">
<div class="phaseimg"> 
<img class="center" src="../img/bw.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b> BLACK WIDOW (2021)</b>
<?php 
$sql1 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Black Widow'";
$result1 = $conn->query($sql1);
while ($data1 = mysqli_fetch_assoc($result1)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r1 = $data1['average'];
	if($r1 == ""){ 
		echo "";
	} else {
	switch ($r1) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r1 > "1" && $r1 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r1 > "2" && $r1 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r1 > "3" && $r1 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r1 > "4" && $r1 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break; } }?></span> <span class="rating-val"><?php if($r1 == ""){echo "no ratings yet";}
	   else {echo $r1;} }?></span></span></p>
<p>Natasha Romanoff, aka Black Widow, confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. 
Pursued by a force that will stop at nothing  to bring her down, Natasha must deal with her history as a spy and the broken relationships
left in her wake long before she became an Avenger.</p>
</div>
</div>
</div>	

<div class="card clear-float phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="../img/eter.jpeg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>ETERNALS (2021)</b>
<?php 
$sql2 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Eternals'";
$result2 = $conn->query($sql2);
while ($data2 = mysqli_fetch_assoc($result2)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r2 = $data2['average']; 
    if($r2 == ""){ 
		echo "";
	} else { 
	switch ($r2) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r2 > "1" && $r2 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r2 > "2" && $r2 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r2 > "3" && $r2 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r2 > "4" && $r2 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val"><?php if($r2 == ""){echo "no ratings yet";}
	   else {echo $r2;} }?></span></span></p>
<p> New team of Super Heroes in the Marvel Cinematic Universe, ancient aliens who have been living on Earth in secret for thousands of years. An unexpected
tragedy forces them out of the shadows to reunite against mankind's  most ancient enemy, the Deviants</p>
</div>
</div>
</div>
	
	
<div class="card phase">
<div class="grid-container2">
<div class="phaseimg"> 
<img class="center" src="../img/sm3.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>SPIDERMAN: NO WAY HOME (2021)</b>
<?php 
$sql3 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Spiderman: No Way Home'";
$result3 = $conn->query($sql3);
while ($data3 = mysqli_fetch_assoc($result3)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r3 = $data3['average']; 
    if($r3 == ""){ 
		echo "";
	} else { 
	switch ($r3) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r3 > "1" && $r3 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r3 > "2" && $r3 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r3 > "3" && $r3 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r3 > "4" && $r3 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val">
		<?php 
	   if($r3 == ""){echo "no ratings yet";}
	   else {echo $r3;} }?></span></span></p>
<p>our friendly neighborhood hero's identity is revealed.When he enlists Doctor Strange’s help to restore his secret, the spell tears a hole in their world,
releasing the most powerful villains who’ve ever fought a Spider-Man in any universe. Now, Peter will have to overcome his greatest challenge yet,
which will not only forever alter his own future but the future of the Multiverse.</p>
</div>
</div>
</div>
	
	
<div class="card phase">
<div class="grid-container3">
<div class="phaseimg"> 
<img class="center" src="../img/dr2.jpg" alt="mcu" style="max-height: 225px;" />
</div>
<div class="phasecnt"><p><b>DOCTOR STRANGE: IN THE MULTIVERSE OF MADNESS (2022)</b><?php 
$sql4 = "SELECT ROUND(AVG(rating),2) AS average FROM ratings WHERE msname='Doctor Strange: In the Multiverse of Madness'";
$result4 = $conn->query($sql4);
while ($data4 = mysqli_fetch_assoc($result4)) {
?>
	<span class="right"><span class="star" style="font-size:20px;" ><?php $r4 = $data4['average']; 
    if($r4 == ""){ 
		echo "";
	} else { 
	switch ($r4) {
		 case 1: echo "<i class='fa fa-star'></i>";
	   break;
		case ($r4 > "1" && $r4 < "2"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 2: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r4 > "2" && $r4 < "3"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 3: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
		case ($r4 > "3" && $r4 < "4"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 4: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
		break;
	case ($r4 > "4" && $r4 < "5"): echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><span class='fa fa-star-half'></span>";
	   break;
		 case 5: echo "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
	   break;
	} }?></span> <span class="rating-val">
		<?php 
	   if($r4 == ""){echo "no ratings yet";}
	   else {echo $r4;} }?></span></span>	</p>
<p>To restore a world where everything is changing, Strange seeks help from his ally Wong, the Sorcerer Supreme, and the Avengers' most powerful Scarlet Witch, Wanda.
But a terrible threat looms over humanity and the entire universe that no longer can be done by their power alone. Even more surprising, the greatest threat in the universe
looks exactly like Doctor Strange.</p>
</div>
</div>
</div>
	
</div>
<!--card ends-->
	
</div>
<!--inner row ends-->
</div>
<!--left column ends-->

<!--rightt column starts-->
<div class="rightcolumn">
<!--inner row starts-->
<div class="inner-row">
<!--card starts-->
<div class="card upcoming">
<h2>Upcoming</h2>

<!--slideshow container starts-->
<div class="slideshow-container" data-cycle="3000">
<!--slide-->
<div class="mySlides fade">
<img src="upcoming/thorlat.jpg" alt="thor: love and thunder"/>
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/wakanda4ever.jpg" alt="wakanda forever" />
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/gog3.webp" alt="guardians of the galaxy vol.3"/>
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/shehulk.jpg" alt="she hulk" />
</div>

<!--slide-->
<div class="mySlides fade">
<img src="upcoming/iamgroot.jpg" alt="i am groot" />
</div>
</div>
<!--slideshow container ends-->
</div>
<!--card ends-->

<!--card starts-->
<div class="card">
<h2>Countdown</h2>
<p id="count" class="center"></p>
<img src="thorlat.png" alt="thorlat" class="image" />
</div>
<!--card ends-->

<!--card starts-->
<div class="card char clear-float">
<h2>Featured Characters</h2>

<!--character container starts-->
<div class="char-container left">
<a href="loki.html">
<img src="characters/loki.webp" alt="loki" class="char-img" />
<div class="overlay">Loki</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="ironman.html">
<img src="characters/iron-man.webp" alt="iron-man" class="char-img" />
<div class="overlay">Iron Man</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="thanos.html">
<img src="characters/thanos.webp" alt="thanos" class="char-img" />
<div class="overlay">Thanos</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="moonknight.html">
<img src="characters/moon-knight.webp" alt="moon-knight" class="char-img"/>
<div class="overlay">Moon Knight</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="scarletwitch.html">
<img src="characters/scarlet-witch.webp" alt="scarlet-witch" class="char-img" />
<div class="overlay">Scarlet Witch</div>
</a>
</div>
<!--character container ends-->

<!--character container starts-->
<div class="char-container left">
<a href="msmarvel.html">
<img src="characters/ms-marvel.webp" alt="ms-marvel" class="char-img" />
<div class="overlay">Ms Marvel</div>
</a>
</div>
<!--character container ends-->

<div class="more left"><button id="morebtn"><a href="characters.html">More...</a></button></div>
</div>
<!--card ends-->

<!--card starts-->
<div class="card">
<h2>Contact Us</h2>

<!--contact starts-->
<div class="contact">
<a href="https://www.instagram.com/marvel/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a><br />
<a href="https://www.facebook.com/groups/MCU.Official" target="_blank"><i class="fa fa-facebook"></i> Facebook</a><br />
<a href="https://twitter.com/MarvelStudios" target="_blank"><i class="fa fa-twitter"></i> Twitter</a><br />
<a href="https://www.youtube.com/c/marvel" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a><br />
<a href="mailto: mcuwiki@gmail.com" target="_blank"><i class="fa fa-envelope"></i> E-mail</a><br />
</div>
<!--contact ends-->
</div>
<!--card ends-->

</div>
<!--inner row ends-->
</div>
<!--rightt column ends-->
</div>
<!--row wrapper ends-->

<!--footer starts-->
<div class="footer center">
<p>&copy Copyright JKM, Inc. 2022</p>
</div>
<!--footer ends-->
</div>
<!--body wrapper ends-->

<!--back to top-->
<div class="top">
<a href="#">Top <i class="fa-solid fa-angle-up"></i></a>
</div>

<!--script starts-->
<script>
/* slideshow starts */
var containers = document.getElementsByClassName('slideshow-container');
for (let s = 0; s < containers.length; s++) {
var cycle = containers[s].dataset.cycle;
var slides = containers[s].querySelectorAll('.mySlides');
var slideIndex = 0;
showSlides(slides, slideIndex, cycle);
}

function showSlides(slides, slideIndex, cycle) {
for (i = 0; i < slides.length; i++) {
slides[i].style.display = 'none';
}
slideIndex++;
if (slideIndex > slides.length) {
slideIndex = 1;
}
slides[slideIndex - 1].style.display = 'block';
setTimeout(function () {
showSlides(slides, slideIndex, cycle);
}, cycle);
}
/* slideshow ends */


/* mob-nav starts */
var btn = document.getElementById('menubtn');
var menu = document.getElementById('menu');
var c = 0;

btn.onclick = function () {
c++;
if (c % 2 == 1) {
menu.style.display = 'block';
} else {
menu.style.display = 'none';
}
};
window.addEventListener('mouseup', function (event) {
var menu = document.getElementById('menu');
if (event.target != menu) {
menu.style.display = 'none';
}
});
window.onresize = function () {
menu.style.display = 'none';
};
/* mob-nav ends */

/* go back to top button starts */

var topbutton = document.getElementsByClassName('top')[0];
window.onscroll = function () {
var y = window.scrollY;
if (y >= 800) {
topbutton.style.display = 'block';
} else {
topbutton.style.display = 'none';
}
};
/* go back to top button ends */
</script>
<!-- script ends-->

</body>
<!--body ends-->
</html>
