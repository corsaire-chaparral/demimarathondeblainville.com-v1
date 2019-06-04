<?php 
$section='info';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='Déroulement de la journée';
	
	$schedule_subject_change_text='Des modifications peuvent être apportées à l\'horaire ci-dessous.';
    $schedule_notes_text='*Les inscriptions ne seront pas possibles le jour de la course.<br/>';
    $all_profits_text='Au profit de l’organisme Centre sportif Blainville';
    $race_proits_more_text='L’organisme Centre sportif Blainville organise depuis 1973 des campagnes de financement pour soutenir des projets de la communauté  et qui fournit des paniers d’effets scolaires pour les familles blainvilloises dans le besoin.';
	$race_takes_place_text='C\'est &agrave; Blainville, &agrave; 20 minutes au nord de Montr&eacute;al, qu\'aura lieu la 4e &eacute;dition du Demi-marathon de Blainville. Notre magnifique parcours dans un secteur r&eacute;sidentiel de prestige vous donnera l\'occasion de participer &agrave; diff&eacute;rentes &eacute;preuves.'; 
    $list_races_text='
        <li>Course de 5 km, 10 km et 21km</li>
        <li>Marche de 5 km</li>
        <li>Course de 2 km</li>
        <li>P\'tit marathon de Blainville 1 km</li>';

    $services_full_html_text='
                <p>De nombreux services seront mis &agrave; votre disposition afin de rendre votre course agr&eacute;able et enrichissante.</p>

                <ul class="list">
                    <li>⏱ Chronom&eacute;trage professionnel par <a href="https://www.sportstats.ca/events.xhtml?eventname=demi-marathon+de+blainville" style="color:rgb(65, 168, 95);"><em><strong>Sportstats</strong></em></a></li>
                    <li>🥈 Certification ARGENT par la F&eacute;d&eacute;ration qu&eacute;b&eacute;coise d&rsquo;athl&eacute;tisme</li>
                    <li>💧 Points d&rsquo;eau sur le parcours</li>
                    <li>🚑 Premiers soins sur place</li>
                    <li>🚧 Parcours s&eacute;curis&eacute;</li>
                    <li>🏁 Marquage au km</li>
                    <li>🍎 D&eacute;salt&eacute;ration et go&ucirc;ter apr&egrave;s la course</li>
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
                                <li>8 ans</li>
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
                                <li>11-12 ans</li>
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
                                <li>15-19 ans</li>
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
                                <li>17-19 ans</li>
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
    $schedule_notes_text='*Race entries will not be possible on the race day.';
    $all_profits_text='All profits are given to the Centre sportif de Blainville Foundation.';
	$race_takes_place_text='The race takes place in the beautiful city Blainville, situated 20 minutes north of Montreal. Our races that take place in a prestigious residential area of Blainville will allow participants to cover the following distances. '; 
    $list_races_text='
        <li>5 km, 10 km & 21km races</li>
        <li>5 km walk</li>
        <li>2 km race</li>
        <li>1km kids race</li>';
        
    $services_full_html_text='
                <p>Many services will be offered that will make your experience that much better.</p>
                
                <ul class="list">
                    <li>⏱ Professional chip timing provided by <a href="https://www.sportstats.ca/events.xhtml?eventname=demi-marathon+de+blainville" style="color:rgb(65, 168, 95);"><em><strong>Sportstats</strong></em></a></li>
                    <li>🥈 Certified SILVER by the F&eacute;d&eacute;ration qu&eacute;b&eacute;coise d&rsquo;athl&eacute;tisme</li>
                    <li>💧 On-course water stations</li>
                    <li>🚑 On-site first-aid professionals</li>
                    <li>🚧 Security provided by the city of Blainville’s police force</li>
                    <li>🏁 Official kilometer markings for all distances</li>
                    <li>🍎 Food, fun & entertainment after the races!</li>
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
                                <li>5 years old</li>
                                <li>6-7 years old</li>
                                <li>8-9 years old</li>
                                <li>10-11 years old</li>
                            </ul>
                        </div>
                        <div class="course">
                            <h4>2 km</h4>

                            <ul class="list">
                                <li>8 years old</li>
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
                                <li>11-12 years old</li>
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
                                <li>15-19 years old</li>
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
                                <li>17-19 years old</li>
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
        
        <div class="content">
            <p>
                Inscription 2019 : <br>
            </p> 
            <p>
                <a href="<?php echo $registration_url; ?>" target="_blank" class="big-dashed-cta"><?php echo $register_now2_text; ?></a>
            </p>
        </div>
        <div class="row">
            
            <div class="col col_12">
                <h1><?php echo $title_text; ?></h1>
                <p><?php echo $schedule_subject_change_text; ?></p>
                
                <ul id="schedule" class="raceDay">
                    <?php echo $full_schedule_of_events_text; ?>
                </ul>
                
                <div><p class="note"><?php echo $schedule_notes_text; ?></p></div>
            </div>
            
<!--
            <div id="eventsList">
	            <a href="/files/Guide-du-spectateur-2017.pdf" target="_blank">Guide Du Spectateur</a>
            </div>
-->
            
            <div class="col col_6">
                <h2><?php echo $all_profits_text; ?></h2>
                <p><?php echo $race_proits_more_text; ?></p>
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
                <?php // echo $full_medals_html_text; ?>
            </div>
            
            <div class="col col_12">    
                <?php echo $full_category_html_text; ?>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col col_6">
                <h2>T-shirt</h2>
                
                <p>Le t-shirt n'est pas inclus dans votre inscription, mais vous pouvez vous le proucrer en complément de votre inscription!</p>
            </div>
            <div class="col col_6">
                <h2>Plan de commandite</h2>
                
                <p>Téléchargez le <a href="/files/Plan_Commandite_DMBlainville_2019.pdf">plan de commandite</a></p>
            </div>
        </div>
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>