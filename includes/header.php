<?php
session_start();
if ($_GET['lang']=='fr') {
	$registration_url='https://makeitrun.co/races/2019/demi-marathon-de-blainville';
	$lang_opposite_text='ENGLISH';
	$meta_title_text='Le Demi-Marathon de Blainville - 8 septembre 2019';
	$home_text='ACCUEIL';
	$race_day_info_text='INFORMATION';
	$course_map_text='PARCOURS';
	$results_text='RESULTATS';
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
    
    $full_schedule_of_events_text='<li>
                        <div class="time">7h00</div>
                        <div class="content">Remises des trousses des coureurs</div>
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
                        <div class="content">D&eacute;part de la course de 2km &amp; 5km marche</div>
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
                        <div class="content">D&eacute;part de la course 5km</div>
                    </li>';
}
else {
	$registration_url='https://makeitrun.co/races/2019/demi-marathon-de-blainville';
	$lang_opposite_text='FRAN&Ccedil;AIS';
	$meta_title_text='Le Demi-Marathon de Blainville - September 8, 2019';
	$home_text='Home';
	$race_day_info_text='Race Day Information';
	$course_map_text='Course Map';
	$results_text='Results';
	$photos_text='Photos';
	$videos_text='Videos';
	$photos_and_videos_text='Pictures &amp; Videos';
	$training_text='Training';
	$contact_text='Contact';
	$sep_08_text='SEP 8';
	$register_now_text='REGISTER<span>NOW</span>';
	$menu_text='MENU';
	$long_date_text='SEP 8, 2019';
	$register_now2_text='REGISTER NOW';
	$volunteer_text='VOLUNTEER';
	
	$home_url='/en/';
    $info_url='/Information/';
    $course_url='/Course/';
    $results_url='/Results/';
    $photos_url='/Photos/';
    $videos_url='/Videos/';
    $training_url='/Training/';
    $contact_url='/Contact/';
    $volunteer_url='/Volunteer/';
    
    $full_schedule_of_events_text='<li>
                        <div class="time">7h00</div>
                        <div class="content">Bib &amp; timing chip pick ups</div>
                    </li>
                    <li>
                        <div class="time">7h45</div>
                        <div class="content">Start of the 10km</div>
                    </li>
                    <li>
                        <div class="time">8h10</div>
                        <div class="content">Start of the 21km</div>
                    </li>
                    <li>
                        <div class="time">11h10</div>
                        <div class="content">Start of the 2km &amp; 5km Walk</div>
                    </li>
                    <li>
                        <div class="time">11h40</div>
                        <div class="content">Start of the 1 km 8-11 years old </div>
                    </li>
                    <li>
                        <div class="time">11h50</div>
                        <div class="content">Start of the 1km 7 years and under</div>
                    </li>
                    <li>
                        <div class="time">12h10</div>
                        <div class="content">Start of the 5km</div>
                    </li>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title><?php echo $meta_title_text; ?></title>

<!-- STYLESHEETS -->
<link rel="stylesheet" href="/css/styleV2.css" />
<link rel="stylesheet" href="/css/magnific.css" />

<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cabin:600' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '236810713503679'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=236810713503679&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

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
                <li><a href="<?php echo $videos_url; ?>"><?php echo $videos_text; ?></a></li>
                <li><a href="<?php echo $training_url; ?>"><?php echo $training_text; ?></a></li>
                <li><a href="<?php echo $contact_url; ?>"><?php echo $contact_text; ?></a></li>
                <li><a href="<?php echo $volunteer_url; ?>"><?php echo $volunteer_text; ?></a></li>
            </ul>

            <a href="<?php echo $registration_url; ?>" target="_blank" class="date">
                <div class="left"><span><?php echo $sep_08_text; ?></span>2019</div>
                <div class="right"><?php echo $register_now_text; ?></div>
            </a>
        </div>
    </div>
</nav>

<section<?php if ($section=='home') echo ' id="homeBanner"'; ?> class="header">
    <div class="wrapper">
        
        <!-- HEADER -->
        <header>
            
            <a href="<?php echo $home_url; ?>"><img src="/images/logo.png" class="logo" alt="Demi-Marathon de Blainville" /></a>
            
            <a href="<?php echo $registration_url; ?>" target="_blank" class="date">
                <div class="left"><span><?php echo $sep_08_text; ?></span>2019</div>
	            <div class="right"><?php echo $register_now_text; ?></div>
            </a>
            
            <!-- NAV -->
            <nav>
                <ul>
                    <li><a href="<?php echo $home_url; ?>"<?php if ($section=='home') echo ' class="active"'; ?>><?php echo $home_text; ?></a></li>
                    <li><a href="<?php echo $info_url; ?>"<?php if ($section=='info') echo ' class="active"'; ?>><?php echo $race_day_info_text; ?></a></li>
                    <li><a href="<?php echo $course_url; ?>"<?php if ($section=='course') echo ' class="active"'; ?>><?php echo $course_map_text; ?></a></li>
                    <li><a href="<?php echo $results_url; ?>"<?php if ($section=='results') echo ' class="active"'; ?>><?php echo $results_text; ?></a></li>
                    <li><a href="<?php echo $photos_url; ?>"<?php if ($section=='photos') echo ' class="active"'; ?>><?php echo $photos_text; ?></a></li>
                    <li><a href="<?php echo $videos_url; ?>"<?php if ($section=='videos') echo ' class="active"'; ?>><?php echo $videos_text; ?></a></li>
                    <li><a href="<?php echo $training_url; ?>"<?php if ($section=='training') echo ' class="active"'; ?>><?php echo $training_text; ?></a></li>
                    <li><a href="<?php echo $contact_url; ?>"<?php if ($section=='contact') echo ' class="active"'; ?>><?php echo $contact_text; ?></a></li>
                    <li><a href="<?php echo $volunteer_url; ?>"<?php if ($section=='volunteer') echo ' class="active"'; ?>><?php echo $volunteer_text; ?></a></li>
                </ul>
                
                <a href="#" class="mobileNav">
                    <div><span></span><span></span><span></span></div>
                    <?php echo $menu_text; ?>
                </a>
                
                <a href="<?php if ($_GET['lang']=='fr') echo '/en/'; else echo '/fr/'; ?>" class="lang"><?php echo $lang_opposite_text; ?></a>
            </nav>
        </header>
    </div>
    
    <?php if ($section=='home') { ?>
    <div class="content">
        <h1><span><?php echo $long_date_text; ?></span>LE DEMI-MARATHON<br/>DE BLAINVILLE</h1>
        <a href="<?php echo $registration_url; ?>" target="_blank"><?php echo $register_now2_text; ?></a>
    </div>
    
    <!--<video autoplay loop muted poster="images/videoBG_poster.jpg" id="bgvid">-->
    <video autoplay loop muted id="bgvid">
        <source src="/ideos/blainvilleVideo.webm" type="video/webm">
        <source src="/videos/blainvilleVideo.mp4" type="video/mp4">
    </video>
    <?php } ?>
</section>