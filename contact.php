<?php
$pageTitle = "Nous contacter";
include('inc/header.php');
?>

		
		<div id="content">
			<div class="row">
				<div class="col-sm-7 col-border">
					<?php
					if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
							$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
						} else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
							 $ip  = $_SERVER['HTTP_CLIENT_IP'];	
						} else {
							$ip = $_SERVER['REMOTE_ADDR'];
						}

					if(isset($_POST['send'])) {
						$format_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

						if(empty($_POST['g-recaptcha-response'])) {
							echo '<div class="alert alert-danger text-center"><i class="fa fa-times"></i> Veuillez renseigner le reCAPATCHA</div>';
						} else if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

							$secret = '6LfpYzsUAAAAAL75jsb6J9F69-HMiTR5cyK8Qovf';
							$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
							$responseData = json_decode($verifyResponse);
						
						if($responseData->success) {

						if(empty($_POST['name']) OR empty($_POST['object']) OR empty($_POST['origin']) OR empty($_POST['message']) OR empty($_POST['email'])) {
								echo '<div class="alert alert-danger text-center"><i class="fa fa-times"></i> Tous les champs sont obligatoires</div>';
						} else if(!preg_match($format_email, $_POST['email'])) {
								echo '<div class="alert alert-danger text-center"><i class="fa fa-times"></i> Format adresse e-mail non valide</div>';
						} else {

							require_once 'lib/swift_required.php';

							$transport = Swift_SmtpTransport::newInstance('node-email-1.pulsepanel.eu', 587, 'TLS')
								->setUsername('contact@securt.fr')
								->setPassword('d/*@az4523Cdz')
								;

							$mailer = Swift_Mailer::newInstance($transport);
							$subject = "Formulaire de contact Sécu'RT : ".htmlspecialchars($_POST['object']);
							$mail = "E-mail envoyé par ".htmlspecialchars($_POST['name'])." (".htmlspecialchars($_POST['origin']).")

Contenu du message : 
".$_POST['message']."

Pour recontacter ".htmlspecialchars($_POST['name'])." :
".htmlspecialchars($_POST['email'])."

Adresse IP :
".$ip."
							";

						
							$message = Swift_Message::newInstance($subject)
								->setFrom(array('contact@securt.fr' => "Sécu'RT"))
								->setTo(array("securt@univ-fcomte.fr"))
								//->setTo(array("yohann.hammad@edu.univ-fcomte.fr"))
								->setBody($mail);

							if($result = $mailer->send($message)) {
								echo '<div class="alert alert-success text-center"><i class="fa fa-check"></i> Votre e-mail a été envoyé</div>';
							} else {
								echo '<div class="alert alert-danger text-center"><i class="fa fa-times"></i> Une erreur est survenue</div>';
							}
						}
						} else {
							echo '<div class="alert alert-danger text-center"><i class="fa fa-times"></i> Erreur reCAPATCHA</div>';
						}
					}
					}
					?>
					
					<form method="post">
						<input required type="text" name="name" class="form-control" placeholder="Votre prénom et nom">

						<input required type="email" name="email" class="form-control" placeholder="Votre adresse e-mail">

						<input required type="text" name="object" class="form-control" placeholder="L'objet de votre demande">

						<select required name="origin" class="form-control">
							<option disabled="" selected="">Vous êtes...</option>
							<option value="etudiant">Un étudiant</option>
							<option value="enseignant">Un enseignant</option>
							<option value="entreprise">Une entreprise</option>
							<option value="professionnel">Un professionnel</option>
							<option value="autre">Autre</option>
						</select>

						<textarea required class="form-control" name="message" placeholder="Votre message"></textarea>

						<div style="width: 304px;margin: 0 auto;">
							<div class="g-recaptcha" data-sitekey="6LfpYzsUAAAAAAgZcYnyG8FFbWbFqrAaFje79Tyz"></div>
						</div>

						<button type="submit" name="send" class="btn btn-default"><i class="fa fa-send"></i> Envoyer</button>
					</form>
				</div>
				<div class="col-sm-5">
					<p class="text-justify">
						<b>Nous contacter</b><br>
						Utilisez le formulaire de cette page ou envoyez directement un e-mail à securt@univ-fcomte.fr

						<br><br>
						<b>Étudiants responsables de l'évènement</b><br>
						Arthur REITER - arthur.reiter@edu.univ-fcomte.fr <br> +33 (0)6.25.24.75.42<br/>
                        Kilian LESUEUR - kilian.lesueur@edu.univ-fcomte.fr <br> +33 (0)6.99.73.18.39

						<br><br>
						<b>Note importante</b><br>
						Par mesure de sécurité, vous acceptez que votre adresse IP <b><?php echo $ip; ?></b> soit renseignée dans l'e-mail en appuyant sur le bouton "Envoyer"
					</p>
				</div>
			</div>	
		</div>

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php
include('inc/footer.php');
?>