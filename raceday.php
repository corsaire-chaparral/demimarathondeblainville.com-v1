<?php 
$section='info';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='Déroulement de la journée';
	
	$schedule_subject_change_text='Des modifications peuvent être apportées à l\'horaire ci-dessous.';
    $schedule_notes_text='*Les inscriptions ne seront pas possibles le dimanche 28 octobre 2018.<br/>*Les coureurs peuvent se procurer leur trousse de d&eacute;part et puces de chronom&eacute;trage le samedi 27 octobre 2018 entre 10hres et 16hres directement au Parc &Eacute;questre, au 1025, chemin du Plan-Bouchard, Blainville (Qc) ou la journ&eacute;e m&ecirc;me de l\'&eacute;v&egrave;nement.';
    $all_profits_text='Au profit de la Fondation Bruny Surin';
	$race_takes_place_text='C\'est &agrave; Blainville, &agrave; 20 minutes au nord de Montr&eacute;al, qu\'aura lieu la 8e &eacute;dition de la Course de Blainville. Notre magnifique parcours dans un secteur r&eacute;sidentiel de prestige vous donnera l\'occasion de participer &agrave; diff&eacute;rentes &eacute;preuves.'; 
    $list_races_text='
        <li>course de 5 km, 10 km et 21km</li>
        <li>Marche de 5 km</li>
        <li>Course de 2 km</li>
        <li>P\'tit marathon de Blainville 1 km</li>';

    $services_full_html_text='
                <p>De nombreux services seront mis &agrave; votre disposition afin de rendre votre course agr&eacute;able et enrichissante.</p>
                
                <ul class="list">
                    <li>Chronom&eacute;trage par puce</li>
                    <li>Points d&rsquo;eau sur le parcours</li>
                    <li>&Eacute;quipe m&eacute;dicale sur place</li>
                    <li>Parcours s&eacute;curis&eacute;</li>
                    <li>Marquage au km</li>
                    <li>D&eacute;salt&eacute;ration et go&ucirc;ter apr&egrave;s la course</li>
                </ul>';
                
    $full_medals_html_text='
                <h2>Médailles</h2>
                <p>Une médaille de participation sera remise aux coureurs et marcheurs des différentes épreuves. Des prix seront offerts aux gagnants uniquement.</p>';
            
    $full_category_html_text='
                <h2>Catégories d\'âge par course</h2>
                
                <div class="row">
                    <div id="courseAges">
                        <div class="course">
                            <h4>1 km</h4>

                            <ul class="list">
                                <li>5 ans et moins</li>
                                <li>6-7 ans</li>
                                <li>8-9 ans</li>
                                <li>10-11 ans</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>2 km</h4>

                            <ul class="list">
                                <li>8 ans et moins</li>
                                <li>9-10 ans</li>
                                <li>11-12 ans</li>
                                <li>13-19 ans</li>
                                <li>20-39 ans</li>
                                <li>40 ans et plus</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>5 km</h4>

                            <ul class="list">
                                <li>12 ans et moins</li>
                                <li>13-15 ans</li>
                                <li>16-19 ans</li>
                                <li>20-29 ans</li>
                                <li>30-39 ans</li>
                                <li>40-49 ans</li>
                                <li>50-59 ans</li>
                                <li>60-69 ans</li>
                                <li>70-79 ans</li>
                                <li>80 ans et plus</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>10 km</h4>

                            <ul class="list">
                                <li>19 ans et moins</li>
                                <li>20-29 ans</li>
                                <li>30-39 ans</li>
                                <li>40-49 ans</li>
                                <li>50-59 ans</li>
                                <li>60-69 ans</li>
                                <li>70-79 ans</li>
                                <li>80 ans et plus</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>Demi-marathon</h4>

                            <ul class="list">
                                <li>19 ans et moins</li>
                                <li>20-29 ans</li>
                                <li>30-39 ans</li>
                                <li>40-49 ans</li>
                                <li>50-59 ans</li>
                                <li>60-69 ans</li>
                                <li>70-79 ans</li>
                                <li>80 ans et plus</li>
                            </ul>
                        </div>'; 
}
else {
	$title_text='Race Day Information';
	$schedule_subject_change_text='Note schedule is subject to change.';
    $schedule_notes_text='*Race entries will not be possible on October 28th, 2017.<br/>*Participants can pick up their bibs and timing chips on Saturday October 27th from 10:00am &ndash; 4:00pm at the race headquarters. Participants can also pick up their bibs and timing chips on race day beginning at 7:00am. The race headquarters are situated at Parc &Eacute;questre 1025, chemin du Plan-Bouchard, Blainville, Quebec.';
    $all_profits_text='All profits are given to the Bruny Surin Foundation.';
	$race_takes_place_text='The race takes place in the beautiful city Blainville, situated 20 minutes north of Montreal.  Our races that take place in a prestigious residential area of Blainville will allow participants to cover the following distances. '; 
    $list_races_text='
        <li>5 km, 10 km & 21km races</li>
        <li>5 km walk</li>
        <li>2 km race</li>
        <li>1km kids races</li>';
        
    $services_full_html_text='
                <p>Many services will be offered that will make your experience that much better.</p>
                
                <ul class="list">
                    <li>Chip timing</li>
					<li>Water stations</li>
					<li>On-site medical professionals</li>
					<li>On-site massage therapists</li>
					<li>Security provided by the city of Blainville’s police force</li>
					<li>Official kilometer markings for all distances.</li>
					<li>Food, fun & entertainment after the races!</li>
                </ul>';
                
    $full_medals_html_text='
                <h2>MEDALS</h2>
                <p>Each competitor in the races will receive a participation medal.  Prizes will be offered for overall winners only. </p>';
            
    $full_category_html_text='
                <h2>AGE CLASSES</h2>
                <p>*Note these are subject to change based on entries</p>
                <div class="row">
                    <div id="courseAges">
                        <div class="course">
                            <h4>1 km</h4>

                            <ul class="list">
                                <li>5 years and under</li>
                                <li>6-7 years old</li>
                                <li>8-9 years old</li>
                                <li>10-11 years old</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>2 km</h4>

                            <ul class="list">
                                <li>8 and under</li>
                                <li>9-10 years old</li>
                                <li>11-12 years old</li>
                                <li>13-19 years old</li>
                                <li>20-39 years old</li>
                                <li>40 years old and up</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>5 km</h4>

                            <ul class="list">
                                <li>12 years and under</li>
                                <li>13-15 years old</li>
                                <li>16-19 years old</li>
                                <li>20-29 years old</li>
                                <li>30-39 years old</li>
                                <li>40-49 years old</li>
                                <li>50-59 years old</li>
                                <li>60-69 years old</li>
                                <li>70-79 years old</li>
                                <li>80 years and up</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>10 km</h4>

                            <ul class="list">
                                <li>19 years and under</li>
                                <li>20-29 years old</li>
                                <li>30-39 years old</li>
                                <li>40-49 years old</li>
                                <li>50-59 years old</li>
                                <li>60-69 years old</li>
                                <li>70-79 years old</li>
                                <li>80 years and up</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>Half Marathon</h4>

                            <ul class="list">
                                <li>19 years old and under</li>
                                <li>20-29 years old</li>
                                <li>30-39 years old</li>
                                <li>40-49 years old</li>
                                <li>50-59 years old</li>
                                <li>60-69 years old</li>
                                <li>70-79 years old</li>
                                <li>80 years and up</li>
                            </ul>
                        </div>'; 
}
?>
    
<section>
    <div class="wrapper">
        <div class="row">
            
            <div class="col col_12">
                <h1><?php echo $title_text; ?></h1>
                <p><?php echo $schedule_subject_change_text; ?></p>
                
                <ul id="schedule" class="raceDay">
                    <?php echo $full_schedule_of_events_text; ?>
                </ul>
                
                <div><p class="note"><?php echo $schedule_notes_text; ?></p></div>
            </div>
            
            <div id="eventsList">
	            <a href="/files/Guide-du-spectateur-2017.pdf" target="_blank">Guide Du Spectateur</a>
            </div>
            
            <div class="col col_6">
                <h2><?php echo $all_profits_text; ?></h2>
                <p><?php echo $race_takes_place_text; ?></p>
                
                <ul class="list">
                    <?php echo $list_races_text; ?>
                </ul>
            </div>
            
            <div class="col col_6">
                <h2>Services</h2>
                <?php echo $services_full_html_text; ?>
            </div>
            
            <div class="col col_12">
                <?php echo $full_medals_html_text; ?>
            </div>
            
            <div class="col col_12">    
                <?php echo $full_category_html_text; ?>
            </div>
            
        </div>
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>