<?php require 'header.php'?>
    
<div id="contact_us">
  <div class="content">
        	
     <?php
        
        header("Cache-Control: no-cache, must-revalidate" );
        
        // Mis en place de regex de vérification   
            $regex_name = '/^[a-zA-Zéèàêùë-\s][^0-9(\)!]{2,30}$/i';                
            $regex_mail = "/[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z](?:[a-z-]*[a-z-])?\.)+(?:[A-Z]{2}|com|org|net|fr)/"; 
            $regex_why = "/^[a-zA-Z0-9éèàêùçë_-\s-!:']{3,50}$/"; 
            $regex_area = "/^[a-zA-Z0-9éèàêùçë_-\s-!:?()'']{2,255}$/i";
            
      // Vérification des champs non vide 
         if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['why']) && !empty($_POST['message_area'])){
			 // Vérification des regex sur les champs en question
	            if(preg_match($regex_name, $_POST['name']) && preg_match($regex_mail, $_POST['mail'])  && preg_match($regex_area, $_POST['message_area']) && preg_match($regex_why, $_POST['why'])){
						//Préparation de l'envoie du mail
							if(isset($_POST['send'])){                                                    
							  // Préparation de l'en-tête du mail reçu
								 $to = "mathieu.dou@gmail.com";
								 $sujet = 'PeakCSS contact form ';
								 $message = 'From : '.$_POST['mail']."\r\n";
								
							  // On récupère la valeur de chaque champs et on le stock dans une variable                    
								 $message .= "Name : ".stripcslashes($_POST['name'])."\r\n";
								 $message .= "Why : ".stripcslashes($_POST['why'])."\r\n";
								 $message .= "Message : ".stripcslashes($_POST['message_area'])."\r\n";
								
							  // Condition sur la fonction mail() de php
								 if (mail($to,$sujet,$message)){
								   //Le mail a été envoyé
									 echo '<div class="summary_01">
											 <p> Message delivered successfully! </p>
										   </div>';
										   
								   // Récapitulatif du mail
									 echo '<div class="summary">
											 <p> Your personal information </p></br></br>
											 <p> Your name : '.$_POST['name'].'</p>
											 <p> Your mail : '.$_POST['mail'].'</p>
											 <p> The subject : '.$_POST['why'].'</p>
											 <p> Your message : '.$_POST['message_area'].'</p>
										   </div>';
										   
								   // Redirection vers header (eviter le F5)
										header ("Refresh: 5;URL=index.php");
										exit();
									
								 } else {
									//Le mail n'a pas été envoyé
									  echo '<div class="summary_01">
											  <p> An error occured when submitting the form by email  
											  <a href=\'contact.php\'>Try again !</a> </p>
											</div>';   
								 }
				   }
								   
				}/* if(peg_match()) */else{
					echo '<div class="summary">
                    		<p> The form has not been sent. </br> 
                    		Please verify that all fields are correct and correspond to information requested. </br>
                    		Thank you! </p>
                    		<a href="contact.php"> Try again ! </a>
                  		  </div>'; 
				}
							   
	   }/* if(!empty) */else{
       		echo '<div class="summary">
                    <p> The form has not been sent. </br> Please check that the fields are not empty. Thank you! </p>
                    <a href="contact.php"> Try again ! </a>
                  </div>';
       }
        
            
     ?>
        	
        	
  </div>
</div>  