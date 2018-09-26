'<?php
$pageTitle = "Accueil";
include('inc/header_index.php');
?>

	<div id="bloc_home">
        
		<div id="header">
			<img src="img/logo.png" alt="Sécu'RT" class="img-responsive glitch-img">
			<h2>
				<?php echo $dateEvent; ?><br>
				<small>
					&#60;IUT de Belfort/Montbéliard&#62;<br>
					&#60;Département R&amp;T&#62;
				</small>
			</h2>
		</div>
        
        <?php
		include('inc/navbar.php');
		?>
		
        
        <div class="text-center" style="margin-top: 49px;">
		   	<a href="#video" style="color: white;">
		    	Voir l'affiche 2018 et la vidéo de l'édition 2017<br>
				<i class="fa fa-caret-down" aria-hidden="true"></i>
		    </a>
		</div>
	</div>

	<div class="container" id="video">
		<div class="row">
			<div class="col-md-4">
				<a href="img/affiche2018.png" target="_blank">
					<img src="img/affiche2018.png" class="img-responsive">
				</a>
			</div>
			<div class="col-md-8">
				<div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="1280" height="720" src="https://www.youtube.com/embed/roxSF3dEihM?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
include('inc/footer.php');
?>