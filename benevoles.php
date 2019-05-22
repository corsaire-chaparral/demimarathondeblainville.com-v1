<?php 
$section='volunteer';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='B&eacute;n&eacute;vole';
	$content_html_text='<p><strong>Inscrivez-vous en tant que bénévole!</strong> Pour être bénévole, vous devez &ecirc;tre disponible le dimanche 8 septembre 2019 de 6h &agrave; 14h, tout d&eacute;pendamment de votre poste de travail. Vous recevrez une confirmation de votre poste de travail et autres d&eacute;tails pertinents dans la avant la course. Nous vous prions de v&eacute;rifier soigneusement vos courriels.</p>

		<p><strong>Si tu as moins de 15 ans</strong>, nous devrons communiquer avec toi pour vérifier la disponibilité des postes vacants correspondants à ton âge.</p>

        <p>
	        <strong>Par courriel</strong>: <a href="mailto:info+demimarathon@corsaire-chaparral.org">info+demimarathon@corsaire-chaparral.org</a>
        </p>
        
        <h2>Inscription en ligne</h2>';
        
        $thanks_text='MERCI!';
        $name_required_text='Pr&eacute;nom, Nom, &Acirc;ge, Courriel et Telephone requis.';
        $fname_text='Pr&eacute;nom';
        $lname_text='Nom';
        $age_text='&Acirc;ge';
        $email_text='Courriel';
        $select1_text='Premier Choix';
        $select_text='Select';
        $option1_text='Inscriptions et donations';
        $option2_text='Accueil / Information / Vestiaire';
        $option3_text='Ligne de départ/arrivée';
        $option4_text='Maquillage (bénévole avec du talent !!!)';
        $option5_text='Gonflage de ballons';
        $option6_text='Distribution de dépliants';
        $option7_text='Goûter du coureur';
        $option8_text='Brigade verte';
        $option9_text='Sécurité et stationnements';
        $option10_text='Surveillance du parcours';
        $option11_text='Points d’eau';
        $option12_text='Informatique';
        $option13_text='Clown - apportez votre d&eacute;guisement';
        $select2_text='Deuxi&egrave;me Choix';
        $tel_text='Telephone';
        $reference_text='R&eacute;f&eacute;rence';
        $select3_text='Je suis disponible la veille?';
        $yes_text='oui';
        $no_text='non';
        $select4_text='Je suis disponible la semaine avant l’événement?';
        $submit_text='Envoyer ma demande';
}
else {
	$title_text='Volunteers';
	$content_html_text='<p>Register to become a volunteer.</p>

        <p>You will be requested to be available on 8th, 2019 from 6:00am to 2:00pm depending on your role.  We kindly as that you fill out the online form and submit before October 22nd.  You will be contacted via email where your role and tasks will be given.  If you are under the age of 15, we will ensure that your position reflects your age.</p>
		
        <p>
	        <strong>By email</strong>: <a href="mailto:info+demimarathon@corsaire-chaparral.org">info+demimarathon@corsaire-chaparral.org</a>
        </p>
        
        <h2>Sign up Online</h2>';
        
        $thanks_text='THANKS!';
        $name_required_text='Your first name, last name, age, email and phone are required.';
        $fname_text='First name';
        $lname_text='Last name';
        $age_text='Age';
        $email_text='Email';
        $select1_text='1st choice';
        $select_text='Select';
        $option1_text='Registration & donations';
        $option2_text='Welcome group and information';
        $option3_text='Start & Finish line';
        $option4_text='Make up artist';
        $option5_text='Balloon Blower';
        $option6_text='Flyer & marketing material distributor';
        $option7_text='Athlete services food/drinks';
        $option8_text='Green Team';
        $option9_text='Security & Parking area';
        $option10_text='Field Team';
        $option11_text='Water stations';
        $option12_text='IT';
        $option13_text='Clown - bring your costume';
        $select2_text='2nd choice';
        $tel_text='Telephone number';
        $reference_text='Notes';
        $select3_text='Are you available the day before?';
        $yes_text='yes';
        $no_text='no';
        $select4_text='Are you available the week before?';
        $submit_text='Submit';
}

$show_success=false;
$fname=$lname=$age=$email=$subject1=$subject2=$phone=$reference=$subject3=$subject4='';

if(isset($_POST['g-recaptcha-response'])) {
	$secretKey='6Lfw-iEUAAAAANwJw3OnWxCSUSz_SGtc0JKIeS0V';
    $response=$_POST['g-recaptcha-response'];     
    $remoteIp=$_SERVER['REMOTE_ADDR'];
	
    $reCaptchaValidationUrl=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp");
    $result=json_decode($reCaptchaValidationUrl, TRUE);
	
    //get response along side with all results
    //print_r($result);

    if($result['success'] == 1) {
     	$fname=trim($_POST['fname']);
	 	$lname=trim($_POST['lname']);
	 	$age=trim($_POST['age']);
	 	$email=trim($_POST['email']);
	 	$subject1=trim($_POST['subject1']);
	 	$subject2=trim($_POST['subject2']);
	 	$phone=trim($_POST['phone']);
	 	$reference=trim($_POST['reference']);
	 	$subject3=trim($_POST['subject3']);
	 	$subject4=trim($_POST['subject4']);
	 	
	 	if ($fname!='' && $lname!='' && $age!='' && $email!='' && $phone!='') {
	 		$your_message='<strong>Prenom :</strong> '.$fname.'<br/><strong>Nom :</strong> '.$lname.'<br/><strong>Age :</strong> '.$age.'<br/><strong>Courriel :</strong> '.$email.'<br/><strong>Premier Choix :</strong> '.$subject1.'<br/><strong>Deuxieme Choix :</strong> '.$subject2.'<br/>Reference : '.$phone.'<br/>Reference : '.$reference.'<br/>Je suis disponible la veille? '.$subject3.'<br/>Je suis disponible la semaine avant? '.$subject4;
	 		
	 		// Send out email 
	 		$headers = '';
	 		$headers = "MIME-Version: 1.0\r\n";
	 		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	 		$headers .= "X-Priority: 1\n";
	 		$headers .= "From: noreply@trackie.com\r\n";
	 		$subject='Benevole pour Demi-Marathon de Blainville';
	 		
	 		$recipient = 'adam@trackie.com';
	 		if(mail($recipient, $subject, html_entity_decode($your_message), $headers)) {}
	 		
	 		$recipient = 'alouis.lauzon@sympatico.ca';
	 		if(mail($recipient, $subject, html_entity_decode($your_message), $headers)) {}
	 		
	 		/*$recipient = 'kris@suringroup.ca';
	 		if(mail($recipient, $subject, html_entity_decode($your_message), $headers)) {}*/
	 		
	 		$show_success=true;
	 	}
	 	else {
	 		echo '<script>alert(\''.$name_required_text.'\');</script>';
	 	}   
    } else {
        die('Please contact info@lacoursedeblainville.com or 514 451-0928 (voice mail)');
    }
}
?> 
<section>
    <div class="wrapper">
            
        <h1><?php echo $title_text; ?></h1>
        <?php if ($show_success) echo '<h2>'.$thanks_text.'</h2>'; else { echo $content_html_text; ?>
        <form id="benevoles" action="<?php if ($_GET['lang']=='fr') echo '/fr/Benevoles/'; else echo '/Volunteer/'; ?>" method="post">
	        <script>
			   function submitForm() {
			       document.getElementById("benevoles").submit();
			   }
			</script>
	        <input type="hidden" name="action" value="true" />
            <div class="row">
                <div class="col col_6">
                    <label><?php echo $fname_text; ?></label>
                    <input type="text" class="text" name="fname" value="<?php echo $fname; ?>" />
                </div>
                <div class="col col_6">
                    <label><?php echo $lname_text; ?></label>
                    <input type="text" class="text" name="lname" value="<?php echo $lname; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col col_6">
                    <label><?php echo $age_text; ?></label>
                    <input type="text" class="text" name="age" value="<?php echo $age; ?>" />
                </div>
                <div class="col col_6">
                    <label><?php echo $email_text; ?></label>
                    <input type="text" class="text" name="email" value="<?php echo $email; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col col_6">
                    <label><?php echo $select1_text; ?></label>
                    <div class="styled-select">
                        <select name="subject1">
                            <option value=""><?php echo $select_text; ?></option>
                            <option class="optcolors" value="Inscriptions et donations"<?php if ($subject1=='Inscriptions et donations') echo ' selected="selected"'; ?>><?php echo $option1_text; ?></option>
                            <option class="optcolors" value="Accueil / Information / Vestiaire"<?php if ($subject1=='Accueil / Information / Vestiaire') echo ' selected="selected"'; ?>><?php echo $option2_text; ?></option>
                            <option class="optcolors" value="Ligne de depart/arrivee"<?php if ($subject1=='Ligne de depart/arrivee') echo ' selected="selected"'; ?>><?php echo $option3_text; ?></option>
                            <option class="optcolors" value="Maquillage (benevole avec du talent !!!)"<?php if ($subject1=='Maquillage (benevole avec du talent !!!)') echo ' selected="selected"'; ?>><?php echo $option4_text; ?></option>
                            <option class="optcolors" value="Gonflage de ballons"<?php if ($subject1=='Gonflage de ballons') echo ' selected="selected"'; ?>><?php echo $option5_text; ?></option>
                            <option class="optcolors" value="Distribution de depliants"<?php if ($subject1=='Distribution de depliants') echo ' selected="selected"'; ?>><?php echo $option6_text; ?></option>
                            <option class="optcolors" value="Gouter du coureur"<?php if ($subject1=='Gouter du coureur') echo ' selected="selected"'; ?>><?php echo $option7_text; ?></option>
                            <option class="optcolors" value="Brigade verte"<?php if ($subject1=='Brigade verte') echo ' selected="selected"'; ?>><?php echo $option8_text; ?></option>
                            <option class="optcolors" value="Securite et stationnements"<?php if ($subject1=='Securite et stationnements') echo ' selected="selected"'; ?>><?php echo $option9_text; ?></option>
                            <option class="optcolors" value="Surveillance du parcours"<?php if ($subject1=='Surveillance du parcours') echo ' selected="selected"'; ?>><?php echo $option10_text; ?></option>
                            <option class="optcolors" value="Points deau"<?php if ($subject1=='Points deau') echo ' selected="selected"'; ?>><?php echo $option11_text; ?></option>
                            <option class="optcolors" value="Informatique"<?php if ($subject1=='Informatique') echo ' selected="selected"'; ?>><?php echo $option12_text; ?></option>
                            <option class="optcolors" value="Clown - apportez votre deguisement"<?php if ($subject1=='Clown - apportez votre deguisement') echo ' selected="selected"'; ?>><?php echo $option13_text; ?></option>
                        </select>
                    </div>
                </div>
                <div class="col col_6">
                    <label><?php echo $select2_text; ?></label>
                    <div class="styled-select">
                        <select name="subject2">
                            <option value=""><?php echo $select_text; ?></option>
                            <option class="optcolors" value="Inscriptions et donations"<?php if ($subject2=='Inscriptions et donations') echo ' selected="selected"'; ?>><?php echo $option1_text; ?></option>
                            <option class="optcolors" value="Accueil / Information / Vestiaire"<?php if ($subject2=='Accueil / Information / Vestiaire') echo ' selected="selected"'; ?>><?php echo $option2_text; ?></option>
                            <option class="optcolors" value="Ligne de depart/arrivee"<?php if ($subject2=='Ligne de depart/arrivee') echo ' selected="selected"'; ?>><?php echo $option3_text; ?></option>
                            <option class="optcolors" value="Maquillage (benevole avec du talent !!!)"<?php if ($subject2=='Maquillage (benevole avec du talent !!!)') echo ' selected="selected"'; ?>><?php echo $option4_text; ?></option>
                            <option class="optcolors" value="Gonflage de ballons"<?php if ($subject2=='Gonflage de ballons') echo ' selected="selected"'; ?>><?php echo $option5_text; ?></option>
                            <option class="optcolors" value="Distribution de depliants"<?php if ($subject2=='Distribution de depliants') echo ' selected="selected"'; ?>><?php echo $option6_text; ?></option>
                            <option class="optcolors" value="Gouter du coureur"<?php if ($subject2=='Gouter du coureur') echo ' selected="selected"'; ?>><?php echo $option7_text; ?></option>
                            <option class="optcolors" value="Brigade verte"<?php if ($subject2=='Brigade verte') echo ' selected="selected"'; ?>><?php echo $option8_text; ?></option>
                            <option class="optcolors" value="Securite et stationnements"<?php if ($subject2=='Securite et stationnements') echo ' selected="selected"'; ?>><?php echo $option9_text; ?></option>
                            <option class="optcolors" value="Surveillance du parcours"<?php if ($subject2=='Surveillance du parcours') echo ' selected="selected"'; ?>><?php echo $option10_text; ?></option>
                            <option class="optcolors" value="Points deau"<?php if ($subject2=='Points deau') echo ' selected="selected"'; ?>><?php echo $option11_text; ?></option>
                            <option class="optcolors" value="Informatique"<?php if ($subject2=='Informatique') echo ' selected="selected"'; ?>><?php echo $option12_text; ?></option>
                            <option class="optcolors" value="Clown - apportez votre deguisement"<?php if ($subject2=='Clown - apportez votre deguisement') echo ' selected="selected"'; ?>><?php echo $option13_text; ?></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col_6">
                    <label><?php echo $tel_text; ?></label>
                    <input type="text" class="text" name="phone" value="<?php echo $phone; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col col_12">
                    <label><?php echo $reference_text; ?></label>
                    <textarea name="reference"><?php echo $reference; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col col_6">
                    <label><?php echo $select3_text; ?></label>
                    <div class="styled-select">
                        <select name="subject3">
                            <option value=""><?php echo $select_text; ?></option>
                            <option class="optcolors" value="oui"<?php if ($subject3=='oui') echo ' selected="selected"'; ?>><?php echo $yes_text; ?></option>
                            <option class="optcolors" value="non"<?php if ($subject3=='non') echo ' selected="selected"'; ?>><?php echo $no_text; ?></option>
                        </select>
                    </div>
                </div>
                <div class="col col_6">
                    <label><?php echo $select4_text; ?></label>
                    <div class="styled-select">
                        <select name="subject4">
                            <option value=""><?php echo $select_text; ?></option>
                            <option class="optcolors" value="oui"<?php if ($subject4=='oui') echo ' selected="selected"'; ?>><?php echo $yes_text; ?></option>
                            <option class="optcolors" value="non"<?php if ($subject4=='non') echo ' selected="selected"'; ?>><?php echo $no_text; ?></option>
                        </select>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col col_6">
                    <label>Calculer 4 + 5</label>
                    <input type="text" class="text" />
                </div>
            </div>-->
            <div class="row">
                <div class="col col_12">
                    <button
					class="g-recaptcha submit"
					data-sitekey="6Lfw-iEUAAAAAFFNEE4bxvTPVyRtwP7XVj635ipq"
					data-callback="submitForm">
					<?php echo $submit_text; ?>
					</button>
                    <!--<input type="submit" class="submit" value="<?php echo $submit_text; ?>" />-->
                </div>
            </div>
        </form>
         <?php } ?>   
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>