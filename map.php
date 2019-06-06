<?php 
$section='course';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='Parcours';
	$course_1_text='<strong>1km</strong> (aller-retour)';
	$course_2_text='<strong>2km</strong> (aller-retour)';
	$course_3_text='<strong>5km</strong> (aller-retour)';
	$course_4_text='<strong>10km</strong>';
	$course_5_text='<strong>Demi-marathon</strong>';
}
else {
	$title_text='Course Map';
	$course_1_text='<strong>1km</strong> (aller-retour)';
	$course_2_text='<strong>2km</strong> (aller-retour)';
	$course_3_text='<strong>5km</strong> (aller-retour)';
	$course_4_text='<strong>10km</strong>';
	$course_5_text='<strong>Half Marathon</strong>';
}
?>
    
<section>
    <div class="wrapper">
            
        <h1><?php echo $title_text; ?></h1>
        
        <p>
            Les départs et le centre des activités se font au
            <strong>Parc Équestre, au 1025, chemin du Plan-Bouchard, Blainville (Qc) J7C 3B9</strong>
        </p>
        
        <ul class="results">
            <li><a href="/files/cartes-parcours/21km-compressed.pdf" target="_blank">Demi-marathon</a></li>
            <li><a href="/files/cartes-parcours/10km-compressed.pdf" target="_blank">10km</a></li>
            <li><a href="/files/cartes-parcours/5km-compressed.pdf" target="_blank">5km</a></li>
            <li><a href="/files/cartes-parcours/5km-compressed.pdf" target="_blank">5km Marche</a></li>
            <li><a href="/files/cartes-parcours/2km-compressed.pdf" target="_blank">2km</a></li>
            <li><a href="/files/cartes-parcours/1km-compressed.pdf" target="_blank">1km</a></li>
        </ul>
        
        <ul class="results">
            <li><a href="/files/cartes-parcours/manege_depart_arrivee.pdf" target="_blank">Plan agrandi départ/arrivée</a></li>
            <li><a href="/files/cartes-parcours/demi-marathon_de_Blainville_denivele_2019-compressed.pdf" target="_blank">Plan du dénivelé</a></li>
        </ul>
            
        
        <!--<p><a href="/images/LacoursedeBlainvilletouslesparcours2017.pdf" class="mfp-image"><img src="/images/courseMap2017_1.jpg" class="map" /></a></p>
        
        <p><a href="/images/LacoursedeBlainvilletouslesparcours2017.pdf" class="mfp-image"><img src="/images/courseMap2017_2.jpg" class="map" /></a></p>
        
        <p><a href="/images/LacoursedeBlainvilletouslesparcours2017.pdf" class="mfp-image"><img src="/images/courseMap2017_3.jpg" class="map" /></a></p>-->
        
        <!--<legend class="course">
            <div><span class="km1"></span> <?php echo $course_1_text; ?></div>
            <div><span class="km2"></span> <?php echo $course_2_text; ?></div>
            <div><span class="km5"></span> <?php echo $course_3_text; ?></div>
            <div><span class="km10"></span> <?php echo $course_4_text; ?></div>
        </legend>
           
        <a href="/images/courseMap.jpg" class="mfp-image"><img src="/images/courseMap.jpg" class="map" /></a>
        
        <p>&nbsp;</p>
        <legend class="course">
            <div><span class="km2"></span> <?php echo $course_5_text; ?></div>
        </legend>
            
        <a href="/images/courseMap2.jpg" class="mfp-image"><img src="/images/courseMap2.jpg" class="map" /></a>-->
            
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>