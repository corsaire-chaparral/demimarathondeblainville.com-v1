<?php 
$section='home';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$event1_text='1km';
	$event2_text='2km';
	$event3_text='Marche de 5 km';
	$event4_text='5km';
	$event5_text='10km';
	$event6_text='Demi-Marathon';
	$register_text='Inscris-toi';
	$more_info_text='Plus d\'infos';
	$latest_news_text='Nouvelles';
	$archive_text='ARCHIVE';
	$view_photo_text='<small>Visionner la</small><br/>galerie de photos';
	$schedule_of_events_text='Horaire';
	$news_1_date_text='mai 2019';
	$news_1_text='Nous acceptons maintenant les inscriptions pour 2019.';
    $news_2_date_text='novembre 2016';
	$news_2_text='C\'est le temps de vous entrainer!';
    $news_3_date_text='octobre 2016';
	$news_3_text='Les r&eacute;sultats de la course 2016 sont maintenant disponibles.';
}
else {
	$event1_text='1km';
	$event2_text='2km';
	$event3_text='5km Walk';
	$event4_text='5km';
	$event5_text='10km';
	$event6_text='Half Marathon';
	$register_text='Register';
	$more_info_text='More Info';
	$latest_news_text='<small>LATEST</small> NEWS';
	$archive_text='ARCHIVE';
	$view_photo_text='<small>VIEW THE</small><br/>PHOTO GALLERY';
	$schedule_of_events_text='SCHEDULE <small>OF EVENTS</small>';
	$news_1_date_text='May 2019';
	$news_1_text='2019 Registration is now opened!';
    $news_2_date_text='November 2016';
	$news_2_text='It\'s time to start training for 2017!';
    $news_3_date_text='October 2016';
	$news_3_text='2016 Results now available.';
}
?>
    
<section class="black">
    <div class="wrapper">
        <div id="eventsList">
            <ul>
                <li><?php echo $event1_text; ?></li>
                <li>/</li>
                <li><?php echo $event2_text; ?></li>
                <li>/</li>
                <li><?php echo $event3_text; ?></li>
                <li>/</li>
                <li><?php echo $event4_text; ?></li>
                <li>/</li>
                <li><?php echo $event5_text; ?></li>
                <li>/</li>
                <li><?php echo $event6_text; ?></li>
            </ul>
            
            <div>
                <a href="<?php echo $course_url; ?>"><?php echo $course_map_text; ?></a>
                <a href="<?php echo $registration_url; ?>" target="_blank"><?php echo strtoupper($register_text); ?></a>
                <a href="<?php echo $info_url; ?>"><?php echo strtoupper($more_info_text); ?></a>
                <a href="/files/Guide-du-spectateur-2017.pdf" target="_blank">Guide Du Spectateur</a>
                
            </div>
        </div>
        
        <div class="row">
            
            <!-- SCHEDULE OF EVENTS -->
            <div class="col col_6">
                <h2 class="slab"><?php echo $schedule_of_events_text; ?></h2>
                
                <ul id="schedule">
                    <?php echo $full_schedule_of_events_text; ?>
                </ul>
            </div>
            
            <!-- LATEST NEWS -->
            <div class="col col_6" id="latestNews">
                <h2 class="slab"><?php echo $latest_news_text; ?></h2>
                
                <ul>
                    <li>
                        <a href="#"><img src="/images/news1.jpg" class="pic" /></a>
                        <div class="content">
                            <span><?php echo $news_1_date_text; ?></span>
                            <h4><a href="<?php echo $registration_url; ?>" target="_blank"><?php echo $news_1_text; ?></a></h4>
                        </div>
                    </li>
                    <!--<li>
                        <a href="#"><img src="/images/news2.jpg" class="pic" /></a>
                        <div class="content">
                            <span><?php echo $news_2_date_text; ?></span>
                            <h4><a href="<?php echo $training_url; ?>"><?php echo $news_2_text; ?></a></h4>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img src="/images/news3.jpg" class="pic" /></a>
                        <div class="content">
                            <span><?php echo $news_3_date_text; ?></span>
                            <h4><a href="<?php echo $results_url; ?>"><?php echo $news_3_text; ?></a></h4>
                        </div>
                    </li>-->
                </ul>
                
                <!--<a href="#" class="btn"><?php echo $archive_text; ?></a>-->
            </div>
        </div>
    </div>
</section>
    
<!-- PHOTO GALLERY -->
<section id="photoGallery">
    <div class="table">
        <div class="cell">
            <a href="<?php echo $photos_url; ?>"><?php echo $view_photo_text; ?></a>
        </div>
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>