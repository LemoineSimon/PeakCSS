<?php 
		REQUIRE 'header.php'; 		
		/*header( 'Cache-Control: no-store, no-cache, must-revalidate' );
		header( 'Cache-Control: post-check=0, pre-check=0', false ); 
		header( 'Pragma: no-cache' );*/
?>
		
	<div id="contact_us"> 
		<div class="content">
			<h2> CONTACT US </h2>			

				<p class="text_contact"> <span><img src="img/guillemet.png" alt="guillemet"/></span> A question? A problem? An anomaly?</br>
				Fill out the form below if you want to get in touch with team. <span><img src="img/guillemet_end.png" alt="guillement end" /></span></p>
				<span class="error"><p><img src="./img/attention_form.png" alt="attention" width="20px"/> 
					The form has not been sent. Please correct and resubmit the form. Thank you!  </p></span>
				
				<form id="formulaire_contact" name="contact" method="post" accept-charset="UTF-8" action="contact.php">
					<div class="box">
						<input type="text" class="first" id="name" name="name" placeholder="Your name *" value="<?php if(!empty($_POST["name"])) echo $_POST["name"]; ?>"/>
						<input type="text" id="mail" name="mail" placeholder="Your Email *" value="<?php if(!empty($_POST["name"])) echo $_POST["mail"]; ?>"/>
						<input type="text" id="why" name="why" placeholder="Why to contact us ? *" value="<?php if(!empty($_POST["name"])) echo $_POST["why"]; ?>"/>
						<input type="hidden" id="hidden" name="hidden" value="0"/>
					</div> 
					<div class="box">
						<textarea class="text_besoin" rows="5" cols="60" name="message_area" id="message_area" placeholder="Shoot your ideas !"><?php if(!empty($_POST["name"])) echo $_POST["message_area"]; ?></textarea>
						<input type="submit" id="button_send" name="send" value="SEND IT AWAY !" />
					</div> 
				</form>
				
				
			<?php
/************************************************* Verif form PHP *************************************************/
					
	$regex_name = '/^[a-zA-Zéèàêùë-\s][^0-9(\)!]{2,30}$/i';                
	$regex_mail = "/[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z](?:[a-z-]*[a-z-])?\.)+(?:[A-Z]{2}|com|org|net|fr)/"; 
	$regex_why = "/^[a-zA-Z0-9éèàêùçë_-\s-!:'()]{3,50}$/"; 
	$regex_area = "/^[a-zA-Z0-9éèàêùçë_-\s-!:?()'']{2,255}$/i";	
					
				if(isset($_POST['send'])){
					if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['why']) && !empty($_POST['message_area'])){
						if(preg_match($regex_name, $_POST['name'])){
							if(preg_match($regex_mail, $_POST['mail'])){ 
								if(preg_match($regex_why, $_POST['why'])){
									if(preg_match($regex_area, $_POST['message_area'])){
										 
										    $to = "mathieu.dou@gmail.com";
											$sujet = 'PeakCSS contact form ';
											$message = 'From : '.$_POST['mail']."\r\n";
													
											$message .= "Name : ".stripcslashes($_POST['name'])."\r\n";
											$message .= "Why : ".stripcslashes($_POST['why'])."\r\n";
											$message .= "Message : ".stripcslashes($_POST['message_area'])."\r\n";											 
													  
											if (mail($to,$sujet,$message)){
												 
												 unset($_POST['name']);
												 unset($_POST['mail']);
												 unset($_POST['why']);
												 unset($_POST['message_area']);
												 
												 header ('Location:mail_valid.php');
												 exit();
											}else {
												 echo '<div class="summary_01">
														 <p> An error occured when submitting the form by email  
														 <a href=\'contact.php\'>Try again !</a> </p>
													   </div>';   
											}
										  
									}/* preg_match textarea */else{
										echo '<div class="summary">
											<p> The textarea field is not correct, check it! 
											Thank you! </p>
											<a href="contact.php"> Try again ! </a>
										</div>';
									}
								}/* preg_match why */else{
									echo '<div class="summary">
										<p> The why field is not correct, check it! 
										Thank you! </p>
										<a href="contact.php"> Try again ! </a>
									</div>';
								}
							}/* preg_match mail */else{
								echo '<div class="summary">
									<p> The mail field is not correct, check it! 
									Thank you! </p>
									<a href="contact.php"> Try again ! </a>
								</div>';
							}
						}/* preg_match name */else{
							echo '<div class="summary">
									<p> The name field is not correct, check it! 
									Thank you! </p>
									<a href="contact.php"> Try again ! </a>
								</div>';
						}							
					}/* empty*/else{
						echo '<div class="summary">
								<p> The form has not been sent. Please check that the fields are not empty. Thank you! </p>
								<a href="contact.php"> Try again !</a>
							  </div>';
				    }
				}/* isset Valid */							
			 ?>
			
			
		</div>
	</div>

<?php require 'footer.php'; ?>