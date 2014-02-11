<?php REQUIRE 'header.php'; ?>
	<div id="contact_us"> 
		<div class="content">
			<h2> CONTACT US </h2>			

				<p class="text_contact"> <span><img src="img/guillemet.png" alt="guillemet"/></span> A question? A problem? An anomaly?</br>
				Fill out the form below if you want to get in touch with team. <span><img src="img/guillemet_end.png" alt="guillement end" /></span></p>


				<span class="error"><p><img src="./img/attention_form.png" alt="attention" width="20px"/> 
					The form has not been sent. Please correct and resubmit the form. Thank you!  </p></span>

				<form id="formulaire_contact" method="post" accept-charset="UTF-8" action="send_mail.php">
					<div class="box">
						<input type="text" class="first" id="name" name="name" placeholder="Your name *"/>
						<input type="text" id="mail" name="mail" placeholder="Your Email *"/>
						<input type="text" id="why" name="why" placeholder="Why to contact us ? *"/>
					</div> 
					<div class="box">
						<textarea class="text_besoin" rows="5" cols="60" name="message_area" id="message_area" placeholder="Shoot your ideas !"></textarea>
						<input type="submit" id="button_send" name="send" value="SEND IT AWAY !" />
					</div> 
				</form>
			
		</div>
	</div>

<?php require 'footer.php'; ?>