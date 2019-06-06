<?php 
$section='volunteer';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='B&eacute;n&eacute;vole';
	$content_html_text='';
        
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
	        <strong>By email</strong>: <a href="mailto:demimarathon@corsaire-chaparral.org">demimarathon@corsaire-chaparral.org</a>
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

        <p><strong>Inscrivez-vous en tant que bénévole!</strong> Pour être bénévole, vous devez &ecirc;tre disponible le dimanche 8 septembre 2019 de 6h &agrave; 14h, tout d&eacute;pendamment de votre poste de travail. Vous recevrez une confirmation de votre poste de travail et autres d&eacute;tails pertinents dans la semaine avant la course. Nous vous prions de v&eacute;rifier soigneusement vos courriels.</p>

		<p><strong>Si tu as moins de 15 ans</strong>, nous devrons communiquer avec toi pour vérifier la disponibilité des postes vacants correspondants à ton âge.</p>

        <p>
	        <strong>Par courriel</strong>: <a href="mailto:demimarathon@corsaire-chaparral.org">demimarathon@corsaire-chaparral.org</a>
        </p>
      <ul class="results">
          <li>
              <a href="https://fichiers.corsaire-chaparral.org/s/cJY6oaijWxo5tS4" target="_blank">Plan des bénévoles</a>
          </li>
      </ul>
        
        <h2>Inscription en ligne</h2>
      
      <script type="text/javascript" src="//campagnes.corsaire-chaparral.org/form/generate.js?id=48"></script>
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>