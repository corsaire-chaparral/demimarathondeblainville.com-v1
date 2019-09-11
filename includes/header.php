<?php
session_start();

	$registration_url='https://makeitrun.co/races/2019/demi-marathon-de-blainville';
	$lang_opposite_text='ENGLISH';
	$meta_title_text='Le Demi-Marathon de Blainville - 8 septembre 2019';
	$home_text='ACCUEIL';
	$race_day_info_text='INFORMATION';
	$course_map_text='PARCOURS';
	$results_text='RÉSULTATS';
	$photos_text='PHOTOS';
	$videos_text='VIDEOS';
	$photos_and_videos_text='Pictures &amp; Videos';
	$training_text='ENTRAINEMENTS';
	$contact_text='NOUS JOINDRE';
	$sep_08_text='08 SEP';
	$register_now_text='Inscrivez-vous<span>maintenant</span>';
	$menu_text='Navigation';
	$long_date_text='8 SEP 2019';
	$register_now2_text='Inscrivez-vous maintenant';
	$volunteer_text='B&Eacute;N&Eacute;VOLE';
	 
	$home_url='/fr/';
    $info_url='/fr/Information/';
    $course_url='/fr/Cours/';
    $results_url='/fr/Resultats/';
    $photos_url='/fr/Photos/';
    $videos_url='/fr/Videos/';
    $training_url='/fr/Entrainement/';
    $contact_url='/fr/Contact/';
    $volunteer_url='/fr/Benevoles/';
    
    $full_schedule_of_events_text='
    <p class="large-texte">Évitez la file et venez récupérer votre dossard le samedi!</p>
                  <h3>Samedi 7 septembre 2019</h3>
                  <ul id="horaire-samedi" class="schedule-list raceDay">
                    <li>
                        <div class="time">10h-16h</div>
                        <div class="content">
                        Remise des trousses des coureurs au parc Équestre
                        <div class="note"><p>
                        </div>
                    </li>
                  </ul>

                  <h3>Dimanche 8 septembre 2019</h3>
                  <ul id="horaire-dimanche" class="schedule-list raceDay">
                    <li>
                        <div class="time">Dès 7h00</div>
                        <div class="content">Remise des trousses des coureurs</div>
                    </li>
                    <li>
                        <div class="time">7h45</div>
                        <div class="content">D&eacute;part de la course de 10km</div>
                    </li>
                    <li>
                        <div class="time">8h10</div>
                        <div class="content">D&eacute;part de la course de 21km</div>
                    </li>
                    <li>
                        <div class="time">11h10</div>
                        <div class="content">D&eacute;part de la course de 2km et 5km marche</div>
                    </li>
                    <li>
                        <div class="time">11h40</div>
                        <div class="content">D&eacute;part de la course 1km 8 &agrave; 11 ans</div>
                    </li>
                    <li>
                        <div class="time">11h50</div>
                        <div class="content">D&eacute;part de la course 1km 7 ans et moins</div>
                    </li>
                    <li>
                        <div class="time">12h10</div>
                        <div class="content">D&eacute;part du 5km course</div>
                    </li>
                  </ul>';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title><?php echo $meta_title_text; ?></title>

<!-- STYLESHEETS -->
<link rel="stylesheet" href="/css/styleV2.css" />
<link rel="stylesheet" href="/css/magnific.css" />

<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cabin:600' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
  <script type="text/javascript" src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

</head>
<body<?php if ($section=='info') echo ' class="bg2"'; else if ($section=='course') echo ' class="bg3"'; else if ($section=='results') echo ' class="bg4"'; else if ($section=='photos') echo ' class="bg5"'; else if ($section=='videos') echo ' class="bg6"'; else if ($section=='training') echo ' class="bg7"'; else if ($section=='contact' || $section=='volunteer') echo ' class="bg8"'; ?>>
    
<nav id="mobile">
    <div class="table">
        <div class="cell">
            <a href="#" class="close"></a>
            
            <ul>
                <li><a href="<?php echo $home_url; ?>"><?php echo $home_text; ?></a></li>
                <li><a href="<?php echo $info_url; ?>"><?php echo $race_day_info_text; ?></a></li>
                <li><a href="<?php echo $course_url; ?>"><?php echo $course_map_text; ?></a></li>
                <li><a href="<?php echo $results_url; ?>"><?php echo $results_text; ?></a></li>
                <li><a href="<?php echo $photos_url; ?>"><?php echo $photos_text; ?></a></li>
<!--                <li><a href="<?php echo $videos_url; ?>"><?php echo $videos_text; ?></a></li>-->
<!--                <li><a href="<?php echo $training_url; ?>"><?php echo $training_text; ?></a></li>-->
                <li><a href="<?php echo $volunteer_url; ?>"><?php echo $volunteer_text; ?></a></li>
                <li><a href="<?php echo $contact_url; ?>"><?php echo $contact_text; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<section<?php if ($section=='home') echo ' id="homeBanner"'; ?> class="header">
    <div class="wrapper">
        
        <!-- HEADER -->
        <header>
            
            <a href="<?php echo $home_url; ?>"><img src="/images/logo.png" class="logo" alt="Demi-Marathon de Blainville" /></a>
            
            <!-- NAV -->
            <nav>
                <ul>
                    <li><a href="<?php echo $home_url; ?>"<?php if ($section=='home') echo ' class="active"'; ?>><?php echo $home_text; ?></a></li>
                    <li><a href="<?php echo $info_url; ?>"<?php if ($section=='info') echo ' class="active"'; ?>><?php echo $race_day_info_text; ?></a></li>
                    <li><a href="<?php echo $course_url; ?>"<?php if ($section=='course') echo ' class="active"'; ?>><?php echo $course_map_text; ?></a></li>
                    <li><a href="<?php echo $results_url; ?>"<?php if ($section=='results') echo ' class="active"'; ?>><?php echo $results_text; ?></a></li>
                    <li><a href="<?php echo $photos_url; ?>"<?php if ($section=='photos') echo ' class="active"'; ?>><?php echo $photos_text; ?></a></li>
<!--                    <li><a href="<?php echo $videos_url; ?>"<?php if ($section=='videos') echo ' class="active"'; ?>><?php echo $videos_text; ?></a></li>-->
<!--                    <li><a href="<?php echo $training_url; ?>"<?php if ($section=='training') echo ' class="active"'; ?>><?php echo $training_text; ?></a></li>-->
                    <li><a href="<?php echo $volunteer_url; ?>"<?php if ($section=='volunteer') echo ' class="active"'; ?>><?php echo $volunteer_text; ?></a></li>
                    <li><a href="<?php echo $contact_url; ?>"<?php if ($section=='contact') echo ' class="active"'; ?>><?php echo $contact_text; ?></a></li>
                </ul>
                
                <a href="#" class="mobileNav">
                    <div><span></span><span></span><span></span></div>
                    <?php echo $menu_text; ?>
                </a>
                
<!--                <a href="<?php if ($_GET['lang']=='fr') echo '/en/'; else echo '/fr/'; ?>" class="lang"><?php echo $lang_opposite_text; ?></a>-->
            </nav>
        </header>
    </div>
    
    <?php if ($section=='home') { ?>
    <div class="content">
        <h1><span><?php echo $long_date_text; ?></span>LE DEMI-MARATHON<br/>DE BLAINVILLE</h1>
<!--        <a href="<?php echo $registration_url; ?>" target="_blank" class="big-dashed-cta"><?php echo $register_now2_text; ?></a>-->
        <a href="<?php echo $results_url; ?>" target="_blank" class="big-dashed-cta"><?php echo $results_text; ?></a>
    </div>
    
    <!--<video autoplay loop muted poster="images/videoBG_poster.jpg" id="bgvid">-->
    <video autoplay loop muted id="bgvid">
        <source src="/videos/blainvilleVideo.webm" type="video/webm">
        <source src="/videos/blainvilleVideo.mp4" type="video/mp4">
    </video>
    <?php } ?>
</section>