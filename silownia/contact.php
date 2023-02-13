<?php 
/* Template Name: Kontakt */ 
?>

<?php
get_header(); ?>
 <div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Kontakt z nami</h1>
			</div>
		</div>
	</div>
</div>
 <main>
 <div class="container">
	<div class="row">
		<div class="col-lg-6 maps">
			<h2><?php the_field('sub_tytul'); ?></h2>
			<?php the_field('mapa'); ?>
		<div class="inner-row">
			<div class="col-xs-4"><?php the_field('adres'); ?></div>
			<div class="col-xs-4"><?php the_field('telefon'); ?></div>
			<div class="col-xs-4"><?php the_field('email'); ?></div>
		</div>
		</div>
		<div class="col-lg-6 from">
			<div class="panel panel-right">
				<div class="panel-content">
				  <div class="form">
					<h2><?php the_field('title_form'); ?></h2>
					<div class="group">      
					  <input type="text" required>
					  <span class="highlight"></span>
					  <label>Imię i nazwisko</label>
					</div>
					<div class="group">      
					  <input type="text" required>
					  <span class="highlight"></span>
					  <label>Adres Email</label>
					</div>
					<a class="send-btn">Wyślij</a>
				  </div>
				</div>
			  </div>
			  <p><?php the_field('text_bottomForm'); ?></p>
		</div>
	</div>
	</div>
</main>
<?php
get_footer();?>