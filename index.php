<?php
    require('portfolio-edit/portfolio.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/portfolio.css" rel="stylesheet" type="text/css">
    <title>Portfolio</title>
</head>

<body>
<iframe src="music/s.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
<audio autoplay loop>
	<source src="music/song.mp3" type="audio/mpeg">
</audio>
<div class="fullscreen-bg">
	<video class="fullscreen-bg__video" loop muted autoplay poster="img/lucy.jpg" >
		<source src="img/lucy.mov" type="video/mp4">
	</video>
</div>

	<a href="#who">
		<div id="header" class="header">
			<h1 class="header-title"> SOFTWARE DEVELOPER WITH VISUAL PASSION AVAILABLE FOR YOU NOW </h1>
			<div class="vl"></div>
		</div>
	</a>

	<a href="#bio">
		<section id="who">
			<img src="img/L90.png" class="logo" alt="logo">
			<h2 class="whoami"> WHO AM I ?</h2>
			<div class="vl"></div>
		</section>
	</a>

	<a href="#portfolio">
		<section id="bio">
			<img src="img/L90.png" class="logo" alt="logo">
			<div class="mybio">My story begins in 1990 when I was born in a small town called  Banska Bystrica in Slovakia. I have  been creative from a young age and it has never left me. I studied  Art at college in Trencin specialising in Design and Photography. In 2012 I moved to England to explore a new country and start a new life. I had just turned 21 and had big life expectations.
				Recently I got caught up in new passion, coding - which led me forward to start the course in Mayden Academy in Bath. I hope my determination and creativity will help me with my course and I cannot wait to become a full stack developer.</div>
				<div class="vl"></div>
		</section>
	</a>


	<section id="portfolio">
		<a href="#contact" class="contact-link"></a>
		<div class="portfolio">
			<img src="img/L90.png" class="logo" alt="logo">
			<h2 class="work">
				<a href="#contact">WORK</a>
				<div class="numbers">
                    <?php
                    if (empty($result)) {
                        echo 'unexpected error';
                    } else {
                        foreach ($result as $project) {
                            echo '<a href="' . $project['url'] . '">' . $project['name'] . '</a>';
                        }
                    }
                         ?>
				</div>
			</h2>
			<div class="vl"></div>
		</div>
	</section>


	<section id="contact">
		<div class="contact_main">
			<img src="img/L90.png" class="logo" alt="logo">
			<h2 class="contacts">
				<a href="#header">LUCY HOLUBOVA</a>
				<div class="details">
					<a href="https://github.com/lucyholubova" class="github">GITHUB</a>
					<a href="mailto:lucy.holubova90@gmail.com" class="email">EMAIL</a>
					<a href="https://www.instagram.com/lucccul/" class="instagram">INSTAGRAM</a>
				</div>
			</h2>
			<div class="vl"></div>
			<p> MADE WITH LOVE </p>
		</div>
	</section>
</body>
</html>

	