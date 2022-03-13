<?php

// Template Name: Kontakt

get_header();


?>

<!-- THIS IS A TEST OF A SMS-NOTION MODAL -->
<!-- TAKE OFF IF ANNOYING -->

<div class="modal-overlay">
<div class="sms-notion">
	<div class="sms-notion-text-wrapper">
		<span class="sms-notion-close" id="close-notion" onClick="PopUp('hide')"></span>
		<span class="sms-notion-title">Děkujeme Vám<br>za&nbsp;zájem o&nbsp;naše služby! </span>
		<p class="sms-notion-text">Pokud se nám nedovoláte, napište prosím svému lékaři
			SMS zprávu, e-mail na&nbsp;<a href="mailto:psychiatrie.ambulance.sro@gmail.com">naší adresu</a>,
			nebo využijte náš <a href="/napiste-nam/">kontaktní formulář</a>.

			<br><br>Ozveme se Vám zpět co nejrychleji!
		</p>
	</div>
	<img class="sms-notion-image" src="/wp-content/uploads/2021/02/sms-notion-ilustrace.svg" alt="Vyskakovací okno - ilustrace SMS">
</div>
</div>

<script>
var popup = document.querySelector(".modal-overlay");

function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') {
        popup.style.display = "none";
    }
    else  if(localStorage.getItem("smsNotionWasShown") == null) {
        localStorage.setItem("smsNotionWasShown",1);
        popup.removeAttribute('style');
    }
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    }, 4000);
}


function hideNow(e) {
    if (e.target.id == 'popup') popup.style.display = 'none';
}

</script>

<div class="wrapper">

<h1 class="title">Kontakt</h1>

<div class="list-authors-wrapper">
	<div class="list-authors-box">
		<h2 class="box-title">Psychologové</h2>
		<p class="box-info">Psychoterapie, diagnostika, krizová intervence</p>
		<div class="list-authors psychologists">

		<?php
		  $args = [
		    'blog_id' => 1,
		    'role' => 'author',
				'meta_key' => 'last_name',
    		'orderby' => 'meta_value',
		    'order' => 'ASC',
		    'fields' => 'all',
		];
		  $users = get_users($args);
		  foreach ($users as $user) { ?>
		<div class="author">
		<?php echo get_avatar($user->ID);?>
		<div>
		    <p><?php echo get_the_author_meta('first_name', $user->ID); echo '&nbsp;'; echo get_the_author_meta('last_name', $user->ID) ?></p>
		    <p><?php echo get_the_author_meta('author', $user->ID); ?></p>
			<p><?php echo $user->description; ?></p>
		</div>
		</div>
	<?php } // end foreach?>
		</div> <!-- .list-authors -->
	</div>

<div class="list-authors-box">
	<h2 class="box-title">Psychiatři</h2>
	<p class="box-info">Psychiatrické vyšetření, medikace léčivých přípravků, pouze pro plnoleté, psychoterapie</p>
	<div class="list-authors psychiatrists">

	<?php
		$args = [
			'blog_id' => 1,
			'role' => 'editor',
			'meta_key' => 'last_name',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'fields' => 'all',
	];
		$users = get_users($args);
		foreach ($users as $user) { ?>
	<div class="author">
	<?php echo get_avatar($user->ID);?>
	<div>
			<p><?php echo get_the_author_meta('first_name', $user->ID); echo '&nbsp;'; echo get_the_author_meta('last_name', $user->ID) ?></p>
			<p><?php echo get_the_author_meta('author', $user->ID); ?></p>
		<p><?php echo $user->description; ?></p>
	</div>
	</div>
	<?php } // end foreach?>
	</div> <!-- .list-authors -->
</div>

	<div class="list-authors admin">
		<div class="author">
		  <img src="/wp-content/uploads/2020/10/vaclav-sykora.png" alt="Václav Sýkora - Psychiatrie Ambulance s.r.o.">
		  <div>
		    <p>Mgr. Václav Sýkora</p>
		    <p>Jednatel firmy</p>
		    <p>&nbsp;</p>
		  </div>
		</div>
	</div>
</div>





<?php get_footer(); ?>
