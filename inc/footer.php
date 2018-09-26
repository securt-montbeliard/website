	   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 500);
		});
	</script>

	<div id="copyright">
		<a href="contact" style="color: white;">contact</a> - <i class="fa fa-copyright"></i> Sécu'RT 2014-<?php echo date('Y'); ?> - <a href="https://twitter.com/SecuRT_Montbe"><i class="fa fa-twitter"></i> Compte Twitter</a> - <a href="https://www.facebook.com/SecuRTMontbeliard/"><i class="fa fa-facebook"></i> Page Facebook</a>
	</div>
	
	</body>
</html>