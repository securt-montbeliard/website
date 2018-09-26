<?php
$pageTitle = "Programme";
include('inc/header.php');


?>


		
		<div id="content">
			<div class="row">
                <?php
                    if(false){ //"true" si la programmation a été déterminée   -   "false" sinon
                ?>
                    <div class="col-sm-6 col-border">
                        <h2>
                            Matin (8h30 -> 12h30)<br>
                            <small>
                                &#60;Conférences&#62;
                            </small>
                        </h2>
                        <div id="article">
                            <p><b>8h30</b> / <i>Pot d'accueil</i></p>

                            <ul>
                                <li>
                                    <b>9h00</b> / <i>Hicham El Hadari</i> : introduction - bases de la blockchain
                                </li>

                                <li>
                                    <b>9h15</b> /<i>Martin Hammerchmidt</i> : Achat/trading/stockage des différentes crypto-monnaies
                                </li>

                                <li>
                                    <b>9h45</b> / <i>André Naz</i> : Les differentes techniques de minage de crypto-monnaies
                                </li>

                                <li>
                                    <b>10h05</b> / <i>Aymeric Vanetti</i> : Le mineur sans fil
                                </li>

                            </ul>

                            <p><b>10h20</b> / <i>PAUSE</i></p>

                            <ul>
                                <li>
                                    <b>10h45</b> / <i>Renaud Lifchitz</i> : « Blockchain, applications distribuées et sécurité »
                                </li>

                                <li>
                                    <b>11h30</b> / <i>David Grout</i> : Crypto-Monnaies, quelles attaques, quelles menaces ?
                                </li>

                                <li>
                                    <b>12h00</b> / <i>Axel Duez</i> : Les dérives des cryptomonnaies : Ponzi, scam, botnet…
                                </li>

                                <li>
                                    <b>12h20</b> / <i>Delphine Prieur</i> : législation et crypto-monnaies
                                </li>
                                <li>
                                    <b>12h35</b> / <i>Vincent Connat</i> : Présentation de Adéo Informatique et du HackGyver
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2>
                            Après-Midi (13h30 -> 20h00)<br>
                            <small>
                                &#60;Animations&#62;
                            </small>
                        </h2>
                        <div id="article">
                            <p class="text-center text-uppercase"></p>
                            <ul>
                                <li>
                                    <b>Dès 13H</b> / Escape game
                                    <ul>
                                        <li>En groupe</li>
                                        <li>Des cadeaux à gagner</li>
                                    </ul>
                                </li>

                                <li>
                                    <b>A partir de 14h</b> / CTF (Capture The Flag)
                                    <ul>
                                        <li>Des épreuves pour tous les niveaux</li>
                                        <li>Seul ou en groupe</li>
                                        <li>Des cadeaux à gagner</li>
                                        <li>Apportez votre ordinateur personnel</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                <?php 
                    } else { //Si la programmation n'a pas encore été déterminé
                ?>       
                    <p>
                        <strong>La programmation de l'édition du <?php echo $dateEvent;?> sera prochainement dévoilée.</strong>
                    </p>
                <?php
                    }
                ?>
                
				
                
                
			</div>
		</div>


<?php
include('inc/footer.php');
?>