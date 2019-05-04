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
        
        <ul class="results">
            <li><a href="/images/final21km-2018.pdf" target="_blank">Demi-marathon</a></li>
            <li><a href="/images/final10km-2018.pdf" target="_blank">10km</a></li>
            <li><a href="/images/final5km-2018.pdf" target="_blank">5km</a></li>
            <li><a href="/images/final5km-2018.pdf" target="_blank">5km Marche</a></li>
            <li><a href="/images/final2km-2018.pdf" target="_blank">2km</a></li>
            <li><a href="/images/final1km-2018.pdf" target="_blank">1km</a></li>
        </ul>
        
        <ul class="results">
            <li><a href="/images/PLAN-AGRANDI-DU-MANEGE.pdf" target="_blank">PLAN AGRANDI DU MANEGE</a></li>
            <li><a href="/images/PLAN-AGRANDI-DEPART-ARRIVEE.pdf" target="_blank">PLAN AGRANDI DE&#769;PART/ARRIVE&#769;E</a></li>
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