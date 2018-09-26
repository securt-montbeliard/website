<?php
$pageTitle = "Infos pratiques";
include('inc/header.php');
?>


		
		<div id="content">
			<div class="row">
				<div class="col-sm-6 col-border">
					<h2>
						Informations Pratiques<br>
						<small>
							&#60;≠infos&#62;
						</small>
					</h2>
					<div id="article">
						<ul style="text-align:left"> 
							<li>Présentation</li>
								<small>
									<p>
										&emsp; &#62;Sécu'RT est <b>un évènement gratuit et ouvert à toutes et tous</b> sur le thème de la sécurité informatique. Il est organisé chaque année depuis 2014 par le département R&amp;T de l'IUT de Belfort/Montbéliard avec l'aide du Hackgyver et du hackerspace de Belfort.
									</p>
								</small>
							<li>Thème de l'année</li>
								<small>
									<p>
										&emsp; &#62;<?php echo $theme; ?>
									</p>
								</small>
							<li>Lieu</li> 
								<small>
									<p>
										&emsp; &#62;Campus des Portes du Jura, 4 place Tharradin<br>Département Réseaux &amp; Télécommunications
									</p>
								</small>
							<li>Date/Horaires</li>
								<small>
									<p>
										&emsp; &#62;<?php echo $dateEvent; ?><br/>
										&emsp; &#62;De 8h00 à 20h00
									</p>
								</small>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<h2>
						Accès au site<br>
						<small>
							&#60;map&#62;
						</small>
					</h2>
					<div id="article">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2266.861056119244!2d6.801351556990231!3d47.49444646831609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792172791149439%3A0x4dc03ddeb8739ac9!2zSVVUIFLDqXNlYXV4IFTDqWzDqWNvbXM!5e0!3m2!1sfr!2sfr!4v1506457920907" width="486" height="364" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					</div>
				</div>
			</div>
		</div>


<?php
include('inc/footer.php');
?>