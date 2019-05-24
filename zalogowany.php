<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
	    //$_SESSION['sklep']=array();
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Portfolio Marcin</title>
	<meta name="description" content="Strona na temat tworzenia stron www">
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, WordPress, Joomla, Drupal">
	<meta name="author" content="Marcin">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css" type="text/css">
	<link rel="stylesheet" href="main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
	
</head>

<body onload="odliczanie(), podaj_date(); ">

	
	<header class="sticky">
		
		<nav class="navbar navbar-dark bg-tlonavbar navbar-expand-lg">
		
			<a id="link0" class="navbar-brand" href="#kimjestesmy"><i class="icon-picture"></i> <h1 class="logo">StronyWWW.pl</h1></a>
		
			<button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji" id="przelacznik">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			 
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item" >
						<a id="link1" class="nav-link" href="#kimjestesmy" >	 O nas </a>
					</li>
									
					<li class="nav-item">
						<a id="link2" class="nav-link" href="#team" > Team </a>
					</li>
					
					<li class="nav-item">
						<a id="link3" class="nav-link" href="#cennik"> Cennik </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link disabled" href="#"> Sklep </a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> Kontakt </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu" >
						
							<a id="link5" class="dropdown-item" href="#formularz"> Formularz </a>
							<a id="link6" class="dropdown-item" href="#jak"> Jak do nas dojechac ? </a>
							
						</div>
						
					</li>
				
				</ul>
			
								
					
						<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';

	
			?>
				
				
			
			
		</div>
		</nav>
		
	</header>
	
	<main>
		
			<section id="kimjestesmy">
		
			<div class="container">
				
				<header class="kimjestesmy">	
					<div class="col-md-12" id="data"></div>	
					<div class="col-md-12" id="zegar"></div> 
					
					<h1 class="kimjestesmy">O nas</h1>
							
				</header>
		
				
				<div class="row">
						
					<div class="col-md-12 col-lg-6 mx-auto d-block ">
												
						<p class="textkimjestesmy">Jesteśmy twórcami pochłoniętymi obsesją. Obsesją perfekcji i idealnych realizacji. Dla nas nie ma ograniczeń. Naszym głównym celem jest zrozumienie Twojej idei. To właśnie ona jest dla nas inspiracją. <br><br>
						Kolejnym etapem jest dogłębna analiza potrzeb Twoich, jak i odbiorców, do których jest kierowana treść. Następnie dochodzimy do kluczowego momentu, w którym spełniamy się najbardziej. Przekuwamy nasze myśli i słowa w czyny, następuje kreacja.<br><br>
						Zadzwoń lub napisz do nas, opowiedz nam kim jesteś i czego potrzebujesz, a my powiemy, co możemy dla Ciebie zrobić. Jesteśmy dla Ciebie.</p>

					
					</div>
					
					<div class="col-md-12 col-lg-6" >
					
						<figure class="kimjestesmy">
							<img src="img/Kimjestesmy1.jpg" alt="Obrazek_kim_jestesmy">							
						</figure>
					
					</div>

					<div class="col-md-12 col-lg-6">
					
						<figure class="kimjestesmy">
							<img src="img/Kimjestesmy2.jpg" alt="Obrazek_kim_jestesmy">							
						</figure>
					
					</div>

					<div class="col-md-12 col-lg-6 mx-auto d-block">
						<div class="textkimjestesmy1">
						<p>Od początku działalności kluczową usługą jest tworzenie stron internetowych dla firm oraz korporacji. Obecnie ofertę stanowią cztery wiodące segmenty:</p>
						</div>
						<div class="textkimjestesmy2">
						<p><br><i class="icon-ok"></i> responsywne strony internetowe,<br><br>
						<i class="icon-ok"></i> pozycjonowanie stron internetowych,<br><br>
						<i class="icon-ok"></i> kampanie AdWords,<br><br>
						<i class="icon-ok"></i> kompleksowa opieka firm 	
						</p>
						
					</div>	
				
				</div>
				</div>
				</div>
				
				
		</section>
		
		<section id="team">
		
			<div class="container">
				
				<header>
					
					<h1 class="team">Team</h1>
											
				</header>
				
				<div class="row">
					
					<div class="col-sm-12 col-md-6">
												
						<figure>
							<a href="https://www.facebook.com/" target="_blank" class="team"> <img src="img/Marcin_Koczur.jpg" alt="Marcin Dudek"></a>
							<a href="https://www.facebook.com/" target="_blank" class="teamtext"><p> Marcin Dudek </p></a>
							<figcaption class="teamtext"> Co-founder / Back-end developer / SEO specialist </figcaption>
						</figure>
						
					
					</div>
					
					<div class="col-sm-12 col-md-6">
					
						<figure>
							<a href="https://www.facebook.com/" target="_blank" class="team"><img src="img/Adam_Nowak.jpg" alt="Adam Nowak"></a>
							<a href="https://www.facebook.com/" target="_blank" class="teamtext"><p> Adam Nowak </p></a>
							<figcaption class="teamtext"> Front-end Developer / Designer </figcaption>
						</figure>
					
					</div>

					<div class="col-sm-12 col-md-6">
					
						<figure>
							<a href="https://www.facebook.com/" target="_blank" class="team"><img src="img/elon-musk.jpg" alt="Elon Musk"></a>
							<a href="https://www.facebook.com/" target="_blank" class="teamtext"><p> Elon Musk </p></a>							
							<figcaption class="teamtext"> Ceo </figcaption>
						</figure>
					
					</div>

					<div class="col-sm-12 col-md-6">
					
						<figure>
							<a href="https://www.facebook.com/" target="_blank" class="team"><img src="img/Dawid_Kowalski.jpg" alt="Dawid Kowalski"></a>	
							<a href="https://www.facebook.com/" target="_blank" class="teamtext"><p> Dawid Kowalski </p></a>							
							<figcaption class="teamtext"> Co-founder / Back-end developer / SEO specialist </figcaption>
						</figure>
					
					</div>

					

					
					
					</div>	
				
				</div>
				
				
				
		</section>
		
	
		
		<section id="cennik">
		
			<div class="container">
				
				<header>
					
					<h1 class="Cennik">Cennik</h1>
					<h1 class="Cennik1">Sprawdź naszą ofertę</h1>
					<h4 class="Cennik2">W przypadku pozycjonowania stron ceny ustalane są indywidualnie.</h4>

											
				</header>
				
				<div class="row">
				
					<div class="col-sm-12 col-md-4">
												
							<div class="CennikPojemnikOpcje">
						
								<div class="CennikOpcje">
						
									<div class="CennikTop">
										<h2 class="CennikNapisGlowny">e-Sklepy</h2>			
						
									</div>
						
									<div class="CennikMiddle">
										<h2 class="CennikNapisCena">od 2000 zł</h2>
									</div>
									
									<div class="CennikBottom">									
										<p>
										<i class="icon-ok"></i> Serwer na rok czasu GRATIS!<br><br>
										<i class="icon-ok"></i> Popularne skrypty sprzedażowe<br><br>
										<i class="icon-ok"></i> Pomoc przy wyborze słów kluczowych<br><br>
										<i class="icon-ok"></i> Optymalizacja pod kątem SEO</p>
									</div>
						
								</div>
						
							</div>
						
					
					</div>
					
					<div class="col-sm-12 col-md-4">
					
						<div class="CennikPojemnikOpcje">
						
							<div class="CennikOpcje1">
						
								<div class="CennikTop">
								
								<h2 class="CennikNapisGlowny"><br>Strony WWW</h2>						
						
								</div>
								<div class="CennikMiddle">
										<h2 class="CennikNapisCena">od 800 zł</h2>
									</div>
									
									<div class="CennikBottom">									
										<p class="kolorczarny">
										<br><i class="icon-ok"></i> Serwer na rok czasu GRATIS!<br><br>									
										<i class="icon-ok"></i> 10 Kont Email<br><br>
										<i class="icon-ok"></i> Pomoc przy wyborze domeny<br><br>
										<i class="icon-ok"></i> Optymalizacja pod kątem SEO</p>									
									</div>
						
							</div>
						
						</div>
					
					</div>

							<div class="col-sm-12 col-md-4">
												
							<div class="CennikPojemnikOpcje">
						
								<div class="CennikOpcje">
						
									<div class="CennikTop">
										<h2 class="CennikNapisGlowny">Spoty Reklamowe</h2>		
						
									</div>
						
									<div class="CennikMiddle">
										<h2 class="CennikNapisCena">od 1200 zł</h2>
									</div>
									
									<div class="CennikBottom">									
										<p>
										<i class="icon-ok"></i> Wysoka jakość nagrania Full HD<br><br>
										<i class="icon-ok"></i> Licencjonowany podkład muzyczny<br><br>
										<i class="icon-ok"></i> Bez ograniczeń czasowych<br><br>
										<i class="icon-ok"></i> Profesjonalni lektorzy (za dopłatą)</p>
									</div>
						
								</div>
						
							</div>
						
					
					</div>

					
					</div>	
				
				</div>
				
				
				
		</section>
		
		
		
		<section id="jak">		
		<div class="container">
		<div class="row">
		<div class="col-sm-12">
		
		<header>		
	<h1 class="JakDojechac">Jak do nas dojechac ?</h1>	
	</header>
	</div>
	
	<div class="col-sm-12">
	<div class="textdiv">	
	
		<p class="textjakdojechac">
		-----------------------------------------------<br>
		Adres:<br>
		Klinika Stron WWW i Seo<br>		
		Polska Marcin Koczur<br>
		40-533 Opole<br>
		ul. Ozimska 5 <br>
		----------------------------------------------
		<p>
	</div>
	</div>
	<div class="col-sm-12">
	<div class="wysrodkuj">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.551279152082!2d17.948993795808548!3d50.672591412409346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471053a15d6dac6b%3A0xf604e2541d5e6fb7!2sSalon+NC%2B+Opole!5e0!3m2!1spl!2sus!4v1552498715943"></iframe>
	<div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
		
		<section id="formularz">
		
		<div class="container">		
		<header>
		<h1 class="formularznaglowek">Formularz</h1>
		</header>
		<div class="row">
		<div class="col-sm-12">      
			<div class="wysrodkuj1">
			<form action="mail.php" method="post" enctype="multipart/form-data">
				<input type="text" name="imie" placeholder="Imie"><p></p>
				<input type="email" name="email" placeholder="E-mail"><p></p>
				<label class="dolewej">Telefon Kontaktowy:</label>
				<p></p>
				<div class="dolewej">
			    <input type="tel" size="3" maxlength="3" pattern="[0-9]{3}" value="" onkeyup="FormUtil.tabForward(this)" />				
				<input type="tel" size="3" maxlength="3" pattern="[0-9]{3}" value="" onkeyup="FormUtil.tabForward(this)" />
				<input type="tel" size="3" maxlength="3" pattern="[0-9]{3}" value="" onkeyup="FormUtil.tabForward(this)" />
				</div>
				<p></p>
				<label class="dolewej">Wybierz plik:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
				<input type="file" name="plik" id="plik" accept="image/jpeg,image/gif">  				
				<textarea name="wiadomosc" placeholder="Wiadomosc"></textarea><br>
				<input type="submit" name="submit" value="Wyslij">
			</form>
				
			
		</div>
        </div>
		</div>
		</div>
		</section>
		
	</main>
	
	
	<footer class="footer">
		<div class="tlosocials">
		<div class="container">
		
			<div class="row no-gutters">	
			
				<div class="col-sm-12 col-md-3">
				<a href="https://www.facebook.com/" target="_blank" class="socialwhite">
				<div class="fb">
				
				
						<i class="icon-facebook"></i>
				</div></a>
				</div>
				
				<div class="col-sm-12 col-md-3">
				<a href="https://www.youtube.com/" target="_blank" class="socialwhite">
				<div class="yt">
				
				
				<i class="icon-youtube"></i>
					
					</div></a>
					</div>
				
				<div class="col-sm-12 col-md-3">
				<a href="https://www.twiter.com/" target="_blank" class="socialwhite">
				<div class="tw">
				
				
					<i class="icon-twitter"></i>
				</div></a>
				
				</div>
				<div class="col-sm-12 col-md-3">
				<a href="https://www.gplus.com/" target="_blank" class="socialwhite">
				<div class="gplus">
				
				
				
					<i class="icon-gplus"></i>
				
				</div></a>
				</div>
		</div>
		</div>
		</div>
		
	
	</footer>
	
	<footer class="footer1">
	
		<div class="container">
		<div class="col-12" >
		
			<h5 class="stopka">Wszelkie prawa zastrzeżone !</h5>
			</div>			
			</div>
		
	</footer>
	
	
	<script src="timer.js"></script>
	<script src="data.js"></script>
	
	 <script src="formutil.js"></script>
	
	<script src="jquery-1.11.3.min.js"></script>
	
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	z
	
	<script src="js/bootstrap.min.js"></script>
	
	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="jquery.scrollTo.min.js"></script>





<script>       

      $(document).ready(function() {
    $('a[href^="#"]').click(function() {
        var hash = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(hash).offset().top-125
        }, 1500);
		
        return false;
    });
});
 
     
    </script>
	
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="cookie.js"></script>

<script>
 
$(document).ready(function() {
	var message = 'Używamy plików cookies, aby ułatwić Ci korzystanie z naszego serwisu oraz do celów statystycznych. Jeśli nie blokujesz tych plików, to zgadzasz się na ich użycie oraz zapisanie w pamięci urządzenia. Pamiętaj, że możesz samodzielnie zarządzać cookies, zmieniając ustawienia przeglądarki.';
	var message2 = 'ROZUMIEM, NIE POKAZUJ WIĘCEJ TEGO OKNA.';
 
	var div = '<div class="cookie-alert" style="position:relative;top:0;width:100%;text-align:center;background-color:#000000;color:#FFFFFF;opacity:0.8;font-size:13px;font-weight:bold;font-family:tahoma;padding-top:20px;padding-bottom:10px;"><div style="width:800px;margin:0 auto;">'+message+'<br /><br /><span style="color:red;cursor:pointer;" class="cookie-alert2">'+message2+'</span></div></div>';
 
	var ciastko = getCookie('cookie-alert');
	if(ciastko != 1) {
		$('body').prepend(div);
	}
 
	$('.cookie-alert2').click(function() {
		$('.cookie-alert').slideUp('slow');
		setCookie('cookie-alert', 1, 365);
	});
});
</script>
	
	
	
</body>
</html>