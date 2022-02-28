<!DOCTYPE html>
<html lang="cs">
	<head>

		<!--
			Site author: Matyáš Hub
			Contact: hubmatyas@gmail.com
			GitHub: https://github.com/hubmatyas/psychiatrie-ambulance

			 _           _                     _
			| |__  _   _| |__  _ __ ___   __ _| |_ _   _  __ _ ___   ___ ____
			| '_ \| | | | '_ \| '_ ` _ \ / _` | __| | | |/ _` / __| / __|_  /
			| | | | |_| | |_) | | | | | | (_| | |_| |_| | (_| \__ \| (__ / /
			|_| |_|\__,_|_.__/|_| |_| |_|\__,_|\__|\__, |\__,_|___(_)___/___|
			                                       |___/

		-->

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php if(is_front_page()){
				echo "Psychiatrie - Ambulance s.r.o. | Plzeň, Třemošná a Plasy";
				} else{
				wp_title(''); echo ' | ';  bloginfo( 'name' );
				}?>
		</title>
		<meta name="description" content="Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči. Všechny naše výkony jsou hrazeny zdravotními pojišťovnami.">

		<!-- Connect Google Fonts (Poppins) -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

		<!-- OpenGraph -->
		<meta name="content-language" content="cs">
		<meta property="og:title" content="Psychiatrie - Ambulance s.r.o. | Plzeň, Třemošná a Plasy">
		<meta property="og:image" content="https://www.psychiatrie-ambulance.cz/wp-content/uploads/2022/01/og-image-2022.jpg">
		<meta property="og:description" content="Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči. Všechny naše výkony jsou hrazeny zdravotními pojišťovnami.">
		<meta property="og:site_name" content="Psychiatrie-Ambulance.cz">
		<meta property="og:type" content="website">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="Psychiatrie - Ambulance s.r.o. | Plzeň, Třemošná a Plasy">
		<meta name="twitter:description" content="Poskytujeme psychiatrickou, psychologickou a psychoterapeutickou péči. Všechny naše výkony jsou hrazeny zdravotními pojišťovnami.">
		<meta name="twitter:image" content="https://www.psychiatrie-ambulance.cz/wp-content/uploads/2022/01/og-image-2022.jpg">
		<meta name="format-detection" content="telephone=no">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-W3LY67WLWZ"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="main-navigation">
			<div class="wrapper">
					<a href="/" class="logo">
						<svg
							viewBox="0 0 62.7 23.41">
							<path d="M1.07,5.31V8.65H0V.12H2.72A2.46,2.46,0,0,1,4.59.83a2.64,2.64,0,0,1,.68,1.89,2.62,2.62,0,0,1-.65,1.9,2.54,2.54,0,0,1-1.83.69Zm0-.92H2.72A1.35,1.35,0,0,0,3.81,4,1.76,1.76,0,0,0,4.2,2.73,1.86,1.86,0,0,0,3.8,1.5,1.33,1.33,0,0,0,2.72,1H1.07Z" />
							<path d="M10.38,6.49a1.33,1.33,0,0,0-.35-1,3.77,3.77,0,0,0-1.25-.66A5.19,5.19,0,0,1,7.4,4.17a2.32,2.32,0,0,1-.71-.8,2.21,2.21,0,0,1-.24-1A2.22,2.22,0,0,1,7.13.66,2.42,2.42,0,0,1,8.9,0a2.69,2.69,0,0,1,1.34.33,2.33,2.33,0,0,1,.9.94,2.73,2.73,0,0,1,.32,1.31H10.38A1.83,1.83,0,0,0,10,1.35,1.39,1.39,0,0,0,8.9.92a1.37,1.37,0,0,0-1,.36,1.42,1.42,0,0,0-.35,1,1.17,1.17,0,0,0,.38.9,3.48,3.48,0,0,0,1.2.65,4.08,4.08,0,0,1,1.8,1,2.29,2.29,0,0,1,.54,1.59,2.14,2.14,0,0,1-.67,1.66A2.58,2.58,0,0,1,9,8.77a2.92,2.92,0,0,1-1.37-.33,2.49,2.49,0,0,1-1-.91,2.57,2.57,0,0,1-.36-1.35H7.31a1.66,1.66,0,0,0,.44,1.23A1.64,1.64,0,0,0,9,7.85,1.44,1.44,0,0,0,10,7.48,1.34,1.34,0,0,0,10.38,6.49Z" />
							<path d="M15.09,4.4,16.83.12h1.22L15.62,5.47V8.65H14.55V5.47L12.12.12h1.22Z" />
							<path d="M24.34,5.94A3.18,3.18,0,0,1,23.57,8a2.65,2.65,0,0,1-2,.73,2.47,2.47,0,0,1-2-1,4.24,4.24,0,0,1-.75-2.65V3.6A4.12,4.12,0,0,1,19.57,1a2.57,2.57,0,0,1,2.12-1A2.46,2.46,0,0,1,23.6.74a3.19,3.19,0,0,1,.74,2.11H23.26a2.67,2.67,0,0,0-.44-1.48A1.38,1.38,0,0,0,21.69.92a1.54,1.54,0,0,0-1.34.68,3.56,3.56,0,0,0-.47,2V5.17a3.72,3.72,0,0,0,.44,2,1.4,1.4,0,0,0,1.27.7,1.54,1.54,0,0,0,1.21-.42,2.69,2.69,0,0,0,.46-1.49Z" />
							<path d="M31.38,8.65H30.3V4.71H26.87V8.65H25.79V.12h1.08V3.79H30.3V.12h1.08Z" />
							<path d="M34.35,8.65H33.28V.12h1.07Z" />
							<path d="M40.32,6.42H37.44l-.67,2.23h-1.1L38.42.12h.92l2.75,8.53H41Zm-2.6-.92H40L38.88,1.62Z" />
							<path d="M47.48,1H45.24V8.65H44.17V1H41.93V.12h5.55Z" />
							<path d="M51.32,5.2h-1.5V8.65H48.74V.12h2.39A2.53,2.53,0,0,1,53,.77a2.61,2.61,0,0,1,.65,1.91,2.67,2.67,0,0,1-.35,1.38,2.14,2.14,0,0,1-1,.89L54,8.58v.07H52.84Zm-1.5-.92h1.3a1.41,1.41,0,0,0,1.08-.44,1.62,1.62,0,0,0,.4-1.16c0-1.1-.5-1.64-1.49-1.64H49.82Z" />
							<path d="M56.23,8.65H55.16V.12h1.07Z" />
							<path d="M62.2,4.71h-3v3H62.7v.92H58.11V.12h4.53V1H59.19V3.79h3Z" />
							<path d="M4.92,21.06H2l-.66,2.23H.28L3,14.76H4L6.7,23.29H5.6Zm-2.6-.92H4.65L3.48,16.26Z" />
							<path d="M9.24,14.76l2.23,7,2.23-7h1.38v8.53H14V20l.1-3.33-2.24,6.65h-.82L8.83,16.67l.1,3.3v3.32H7.86V14.76Z" />
							<path d="M16.92,23.29V14.76h2.44a2.43,2.43,0,0,1,1.75.57A2.29,2.29,0,0,1,21.7,17a1.87,1.87,0,0,1-.3,1.05,2,2,0,0,1-.81.71,1.66,1.66,0,0,1,.93.72,2.39,2.39,0,0,1,.34,1.31,2.51,2.51,0,0,1-.63,1.81,2.38,2.38,0,0,1-1.79.65ZM18,18.4h1.37a1.15,1.15,0,0,0,.9-.37,1.45,1.45,0,0,0,.35-1,1.49,1.49,0,0,0-.31-1,1.3,1.3,0,0,0-.95-.32H18Zm0,.9v3.07h1.46a1.22,1.22,0,0,0,1-.4,1.63,1.63,0,0,0,.36-1.13c0-1-.44-1.54-1.3-1.54Z" />
							<path d="M28.56,14.76v6.07a2.61,2.61,0,0,1-.71,1.9,2.64,2.64,0,0,1-1.93.68A2.6,2.6,0,0,1,24,22.74a2.67,2.67,0,0,1-.68-1.91V14.76h1.07v6a2,2,0,0,0,.36,1.29,1.5,1.5,0,0,0,1.18.42,1.5,1.5,0,0,0,1.19-.42,1.91,1.91,0,0,0,.37-1.29v-6Z" />
							<path d="M31.29,22.37h3.34v.92H30.21V14.76h1.08Z" />
							<path d="M40,21.06H37.12l-.67,2.23h-1.1l2.75-8.53H39l2.75,8.53h-1.1Zm-2.6-.92h2.32l-1.16-3.88Z" />
							<path d="M48.51,23.29H47.43L44,16.72v6.57H42.93V14.76H44l3.43,6.61V14.76h1.07Z" />
							<path d="M55.71,20.58a3.12,3.12,0,0,1-.77,2.1,2.57,2.57,0,0,1-2,.73,2.43,2.43,0,0,1-2-1,4.21,4.21,0,0,1-.76-2.65V18.24A4.08,4.08,0,0,1,51,15.61a2.56,2.56,0,0,1,2.12-1,2.47,2.47,0,0,1,1.91.73,3.27,3.27,0,0,1,.73,2.12H54.63A2.63,2.63,0,0,0,54.19,16a1.36,1.36,0,0,0-1.12-.44,1.53,1.53,0,0,0-1.35.68,3.54,3.54,0,0,0-.47,2v1.56a3.74,3.74,0,0,0,.44,2,1.42,1.42,0,0,0,1.28.69,1.52,1.52,0,0,0,1.2-.42,2.56,2.56,0,0,0,.46-1.49Z" />
							<path d="M61.26,19.35h-3v3h3.51v.92H57.17V14.76H61.7v.92H58.24v2.75h3Z" />
							<rect
								x="30.34"
								y="-19.36"
								width="1.07"
								height="61.75"
								transform="translate(42.4 -19.36) rotate(90)" />
						</svg>
				</a>
				<nav id="menu">
					<a onclick="closeNav()" id="menuClose">&#x2715;</a>
					<!-- <a href="/aktuality/">aktuality</a> -->
					<a href="/napiste-nam/" class="btn <?php if(is_page('napiste-nam')):?>active<?php endif; ?>">Napište nám</a>
					<a href="/ordinacni-hodiny/" class="btn <?php if(is_page('ordinacni-hodiny')):?>active<?php endif; ?>">Ordinační hodiny</a>
					<a href="/kontakt/" class="btn <?php if(is_page('kontakt')):?>active<?php endif; ?>">Kontakt</a>
				</nav>
				<span id="menuToggle" onclick="openNav()">&#9776;</span>
			</div>
		</div>
		<div class="content">
