<?php 
$section='home';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
$event1_text='1km';
$event2_text='2km';
$event3_text='Marche de 5 km';
$event4_text='5km';
$event5_text='10km';
$event6_text='Demi-Marathon';
$register_text='Inscris-toi';
$more_info_text='Plus d\'infos';
$latest_news_text='Inscrivez-vous dès maintenant!';
$archive_text='ARCHIVE';
$view_photo_text='<small>Visionner la</small><br/>galerie de photos';
$schedule_of_events_text='Horaire';
$news_1_date_text='mai 2019';
$news_1_heading='Code promo : 25% jusqu’au 1<sup>er</sup> juin 2019!';
$news_1_text='Inscrivez-vous tôt pour l’édition 2019 et profitez d’un prix réduit!';
$news_2_date_text='novembre 2016';
$news_2_text='C\'est le temps de vous entrainer!';
$news_3_date_text='octobre 2016';
$news_3_text='Les r&eacute;sultats de la course 2016 sont maintenant disponibles.';

?>
    
<section class="black">
    <div class="wrapper">
        <div class="row">
            
            <!-- SCHEDULE OF EVENTS -->
            <div class="col col_6">
                <h2 class="heading-large">Bonne nouvelle!</h2>
                
            </div>
            
            <!-- LATEST NEWS -->
            <div class="col col_6" id="latestNews">
                
                <p>
                    Le <strong>Demi-marathon de Blainville</strong> revient pour sa 4e édition!
                </p>
                <p>
                    Une même organisation à une toute nouvelle date!
                </p>
                <p>
                    En plus d’offrir de magnifiques parcours de 1 km et 2 km pour les enfants et de 5 km, 10 km et 21 km pour les coureurs de tous les niveaux, de nombreux services seront disponibles: chronométrage par puce, points d’eau sur le parcours, équipe de premiers soins, parcours sécurisés, marquage au km, collation après la course, animation pour les plus petits et de nombreux bénévoles pour assurer la réussite de l’événement!
                </p>
              
<!--
                <h2><?php echo $latest_news_text; ?></h2>
                
                <ul>
                    <li>
                        <div class="content">
                            <div class="wrapper">
                                <h4><a href="<?php echo $registration_url; ?>" target="_blank"><?php echo $news_1_heading; ?></a></h4>

                                <p><?php echo $news_1_text; ?></p>
                            </div>
                        </div>
                    </li>
                </ul>
-->
            </div>
        </div>

        <div id="eventsList" class="row">
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
<!--                <a href="javascript:void()" target="_blank">Guide Du Spectateur <em>(à venir)</em></a>-->
                
            </div>
        </div>
          <hr>
              <br>
      
      <div class="row">
        <div class="col col_4">
              <h3>Chandail</h3>
              <p><strong>Procurez-vous le T-shirt officiel de l'événement, en prévent dès maintenant!</strong></p>
              <p>100% tissu respirant synthétique, procurant confort et légèreté!</p>
              <p>Choisissez votre grandeur préférée, en coupe femme ou homme!</p>
              
              <a class="button" href="/fr/Chandail/">Acheter</a>
        </div>

        <div class="col col_8">
          <img class="product-thumbnail" src="/images/chandail-apercu.jpg" alt="T-shirt officiel">
        </div>
      </div>
    </div>
</section>
    
<!-- PHOTO GALLERY -->
<!--
<section id="photoGallery">
    <div class="table">
        <div class="cell">
            <a href="<?php echo $photos_url; ?>"><?php echo $view_photo_text; ?></a>
        </div>
    </div>
</section>
    
-->
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>