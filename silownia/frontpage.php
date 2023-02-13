<?php 
/* Template Name: CustomPageT1 */ 

?>

<?php
get_header(); ?>

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center d-flex justify-content-center">
				<div class="header__title">
					<h2><?php the_field('tytul_strony'); ?></h2>
				</div>
				<div class="header__context">
					<h1><?php the_field('pod_tytul'); ?> </h1>
				</div>
			</div>
		</div>
	</div>
  </header>

  <section class="discipline">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center  light__title">
            <?php the_field('tytul_sekcji_dyscypliny'); ?> 
			</div>
			<div class="col-md-3">
				<div class="discipline__box ">
                <?php 
                    $image = get_field('dyscypliny_obrazek1');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
					
					<h3><?php the_field('dyscypliny_tytul1'); ?> </h3>
				</div>
			</div>
			<div class="col-md-3">
				<div class="discipline__box">
                <?php 
                    $image = get_field('dyscypliny_obrazek2');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
					<h3><?php the_field('dyscypliny_tytul2');?> </h3>
				</div>
			</div>
			<div class="col-md-3">
				<div class="discipline__box">
                <?php 
                    $image = get_field('dyscypliny_obrazek3');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h3><?php the_field('dyscypliny_tytul3');?> </h3>
				</div>
			</div>
			<div class="col-md-3">
				<div class="discipline__box">
                <?php 
                    $image = get_field('dyscypliny_obrazek4');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h3><?php the_field('dyscypliny_tytul4');?> </h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="price" id="price">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center dark__title">
				<h3>  <?php the_field('tytul_sekcji_cennik'); ?> </h3>
			</div>

				<!--price tab-->
				<div class="plan">
				  <div class="plan-inner">
					<div class="entry-title">
					  <h3><?php the_field('tytul_pakietu1'); ?></h3>
					  <div class="price"><?php the_field('cena1'); ?>
					  </div>
					</div>
					<div class="entry-content">
                        <?php the_field('opcje_pakietu1'); ?>
					</div>
				  </div>
				</div>
				<!-- end of price tab-->
				<!--price tab-->
				<div class="plan basic">
				  <div class="plan-inner">
					<div class="hot">Popularne</div>
					<div class="entry-title">
                    <h3><?php the_field('tytul_pakietu2'); ?></h3>
					  <div class="price"><?php the_field('cena2'); ?>
					  </div>
					</div>
					<div class="entry-content">
                    <?php the_field('opcje_pakietu1'); ?>
					</div>
				  </div>
				</div>
				<!-- end of price tab-->
				<!--price tab-->
				<div class="plan standard">
				  <div class="plan-inner">
					<div class="entry-title">
                    <h3><?php the_field('tytul_pakietu3'); ?></h3>
					  <div class="price"><?php the_field('cena3'); ?>
					  </div>
					</div>
					<div class="entry-content">
                    <?php the_field('opcje_pakietu1'); ?>
					</div>
				  </div>
				</div>
				<!-- end of price tab-->
		</div>
	</div>
</section>

<section class="progress  light__sections">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3>Z każdym dniem stawaj się lepsszym</h3>
				<h1>stawaj się lepsszym</h1>
			</div>
		
		</div>
		<div class="row progress">
			<div class="progress__box"><div class="col-md-3 progress__img"><img src="https://prowess.qodeinteractive.com/wp-content/uploads/2018/02/h2-process-img-1.png" class="rounded-circle" alt=""><h2 class="progress__number">#1</h2></div><div class="progress__desc"><h3>lorem</h3><p class="text-center">Lorem, ipsum dolor.</p></div></div>
			<div class="progress__box"><div class="col-md-3 progress__img"><img src="https://prowess.qodeinteractive.com/wp-content/uploads/2018/02/h2-process-img-2.png" class="rounded-circle" alt=""><h2 class="progress__number">#2</h2></div><div class="progress__desc"><h3>lorem</h3><p class="text-center">Lorem, ipsum dolor.</p></div></div>
			<div class="progress__box"><div class="col-md-3 progress__img"><img src="https://prowess.qodeinteractive.com/wp-content/uploads/2018/02/h2-process-img-3.png" class="rounded-circle" alt=""><h2 class="progress__number">#3</h2></div><div class="progress__desc"><h3>lorem</h3><p class="text-center">Lorem, ipsum dolor.</p></div></div>
			<div class="progress__box"><div class="col-md-3 progress__img"><img src="https://prowess.qodeinteractive.com/wp-content/uploads/2018/02/h2-process-img-4.png" class="rounded-circle" alt=""><h2 class="progress__number">#4</h2></div><div class="progress__desc"><h3>lorem</h3><p class="text-center">Lorem, ipsum dolor.</p></div></div>
		</div>
	</div>
</section>

<section class="trainers">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 dark__title text-center">
				<h3><?php the_field('tytul_sekcji_trenerzy'); ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 trainers__box text-center">

                <?php 
                    $image = get_field('zdjecie_trenera1');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

				<?php the_field('opis_trenera1'); ?>
			</div>
			<div class="col-md-3 trainers__box text-center">
				
            <?php 
                    $image = get_field('zdjecie_trenera2');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

				<?php the_field('opis_trenera2'); ?>
			</div>
			<div class="col-md-3 trainers__box text-center">
				
            <?php 
                    $image = get_field('zdjecie_trenera3');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
				<?php the_field('opis_trenera3'); ?>
			</div>
			<div class="col-md-3 trainers__box text-center">
				
            <?php 
                    $image = get_field('zdjecie_trenera4');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
				<?php the_field('opis_trenera4'); ?>
			</div>
		</div>
	</div>
</section>
<section class="places light__sections">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
            <?php the_field('tytul_sekcji_nasze_placowki'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 places__img"><h2 class="places__title">Rzeszów</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-4 places__img"><h2 class="places__title">Warszawa</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-4 places__img"><h2 class="places__title">Katowice</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-4 places__img"><h2 class="places__title">Gdynia</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-4 places__img"><h2 class="places__title">Wrocław</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
			<div class="col-md-4 places__img"><h2 class="places__title">Lublin</h2><img src="https://cdn.pixabay.com/photo/2016/01/08/01/53/gymer-1126999_960_720.jpg" alt="" class="img-fluid"></div>
		</div>
	</div>
</section>

<div class="col-lg-12 dark__title text-center" id="calc">
<?php the_field('tytul_sekcji_kalkulator'); ?>
</div>
		<p><section class="calculator">
			<div class="container">
				<div class="row">

					<div class="col-lg-6 calculator__table">
						<table>
							<thead>
							<tr>
							<th>BMI</th>
							<th>Poziom wagi</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<td>18.5 - i mneij</td>
							<td>Niedowaga</td>
							</tr>
							<tr>
							<td>18.5 - 24.9</td>
							<td>Waga w normie</td>
							</tr>
							<tr>
							<td>25.0 - 29.9</td>
							<td>Nadwaga</td>
							</tr>
							<tr>
							<td>30.0 - i więcej</td>
							<td>Otyłość</td>
							</tr>
							</tbody>
							</table>
					</div>
					<div class="col-lg-6 calculator__calculate ">
						<div class="calculator__content">
						</div>
						<form name="bmiForm">
							<div class="bmi-calculator">
							  <h1 style="margin-bottom: 1em;">Oblicz swoje BMI</h1>
							  <div class="bmi-calculator-weight">
								<input class="weight-slider" name="realweight" id="myWeight" type="range" min="25" max="180" value="60"/>
								<p style="margin-top: 1.8em;">
								  Waga: 
								  <input name="Teža" id="inputWeight" type="number" value="60" min="25" max="180" oninput="showValWeight(this.value)"/>
								  <span id="weight"></span> kg
								</p>
							  </div>
							  <div class="bmi-calculator-height">
								<input class="height-slider" name="realheight" id="myHeight" type="range" min="100" max="220" value="160">
								<p style="margin-top: 1.8em;">
								  Wzrost:
								  <input name="Višina" id="inputHeight" type="number" value="160" min="100" max="220" oninput="showValHeight(this.value)"/>
								  <span id="height"></span> cm
								</p>
							  </div>
							  <input class="gumb" type="button" value="Oblicz" onclick="calculateBmi()" style="margin-top: 0.5em">
							 <p style="margin-top: 1em;font-size: 1.2em;">
							   <strong>Twoje BMI:</strong>
							   <span id="yourbmi" style="font-size: 1.2em;margin-left: 8px;"></span>
							 </p>
							 <p></p>
							 <p>
							   <span id="evaluationMessage"></span>
							 </p>
							</div>
							</form>
					</div>
				</div>
			</div>
		</section></p>


<script>
	'use strict';
// Define variables for range sliders
// Weight variables
var weightSlider = document.getElementById("myWeight");
var weightOutput = document.getElementById("inputWeight");
// Height variables
var heightSlider = document.getElementById("myHeight");
var heightOutput = document.getElementById("inputHeight");
// Display slider value
weightOutput.innerHTML = weightSlider.value;
heightOutput.innerHTML = heightSlider.value;
// Update sliders in real time while dragging it
weightSlider.oninput = function () {
  weightOutput.innerHTML = this.value;
}
heightSlider.oninput = function () {
  heightOutput.innerHTML = this.value;
}
// Change weight-slider value on weight-number input
function showValWeight(newVal) {
  weightSlider.value=newVal;
};
// Change height-slider value on height-number input
function showValHeight(newVal) {
  heightSlider.value=newVal;
};
// *** Change number input when dragging slider ***
// Add 2 eventListeners for weight and input sliders
weightSlider.addEventListener("input", updateValueWeight);
heightSlider.addEventListener("input", updateValueHeight);
function updateValueWeight(e) {
  weightOutput.value = e.srcElement.value;
}
function updateValueHeight(e) {
  heightOutput.value = e.srcElement.value;
}
// Calculate BMI
function calculateBmi() {
  var weight = document.bmiForm.realweight.value;
  var height = (document.bmiForm.realheight.value)/100;
  var realbmi = (weight)/Math.pow(height, 2);
  var realbmiOutput = document.getElementById("yourbmi");
  var messageOutput = document.getElementById("evaluationMessage");
  var roundedBmi = realbmi.toFixed(1);
  messageOutput.innerHTML = ""; // Clear message before calculating new BMI
  realbmiOutput.innerHTML = " " + roundedBmi; // Print BMI
  // Appropriate message for your BMI rating
  if (roundedBmi > 26) {
    messageOutput.innerHTML = "Masz poważną otyłość.";
  } else {
    
  }
  // Console loggings
  console.log('Teža: ' + weight + " kg");
  console.log('Višina: ' + height + " m");
  console.log('BMI: ' + realbmi);
}
</script>
<script>

/

 


</script>
<!-- --------------------tabs-------------------- -->
<script>
	// JavaScript Document	
$(document).ready(function(e) {
	// Show the first tab by default
	$('.tabs-stage .tabcontent').hide();
	$('.tabs-stage .tabcontent:first').show();
	$('.tabs-nav li:first').addClass('tab-active');
	
	// Change tab class and display content
	$('.tabs-nav a').on('click', function(event){
	  event.preventDefault();
	  $('.tabs-nav li').removeClass('tab-active');
	  $(this).parent().addClass('tab-active');
	  $('.tabs-stage .tabcontent').hide();
	  $($(this).attr('href')).show();
	});
});
</script>
<script>
	/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
	initComparisons();
	</script>

<script type="text/javascript">

	//     function showSliderRange() {
	//         var arrMin = new Array();
	//         var arrMax = new Array();
	
	//         //pobranie wszystkich elementów strony z nazwą "slider"
	//         var elements = document.getElementsByName('slider');
	
	
	//         for (var i=0;i<elements.length;i++) {
	//             arrMin[i] = document.getElementById("slider"+(i+1)).min;
	//             arrMax[i] = document.getElementById("slider"+(i+1)).max;
	//         }        
	
	//         for(var i=0;i<elements.length;i++) {
	//             document.getElementById("slider" + (i+1) + "Min").innerHTML = parseFloat(arrMin[i]).toFixed(1);
	//             document.getElementById("slider" + (i+1) + "Max").innerHTML = parseFloat(arrMax[i]).toFixed(1);
	//         }
	//     }
	
		function showSliderValue() {
	
			//pobranie wszystkich elementów strony z nazwą "slider"
			var elements = document.getElementsByName('slider');
	
			for(var i=0;i<elements.length;i++) {
				var wartosc = document.getElementById("slider" + (i+1)).value    
				document.getElementById("slider"+(i+1)+"Val").innerHTML = parseFloat(wartosc).toFixed(1);
			}      
		}
		</script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	


  <?php
get_footer();?>