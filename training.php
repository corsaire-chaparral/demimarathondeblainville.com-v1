<?php 
$section='training';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='ENTRAINEMENTS';
	$program_1_text='D&eacute;butant';
    $view_pdf_text='Lire le XLS';
    $program_2_text='Moyen';
    $program_3_text='Avanc&eacute;';
    $program_4_text='ID Fitness';
	$view_website_text='Acc&eacute;der au site web';
	$coming_soon_text='A venir';
}
else {
	$title_text='TRAINING';
	$program_1_text='Beginner';
    $view_pdf_text='View PDF';
    $program_2_text='Intermediate';
    $program_3_text='Advanced';
    $program_4_text='ID Fitness';
	$view_website_text='View Website';
	$coming_soon_text='Coming soon';
}
?>
    
<section>
    <div class="wrapper">
            
        <h1><?php echo $title_text; ?></h1>
            
        <div id="training" class="row">
            <div class="col col_4">
                <i><a href="/training/Beginner-plan-Blainville.xlsx">5<small>km</small></a></i>
                <h3><?php echo $program_1_text; ?></h3>
                <a href="/training/Beginner-plan-Blainville.xlsx"><?php echo $view_pdf_text; ?></a>
            </div>
            <div class="col col_4">
                <i><a href="/training/5k-10k-plan-Blainville.xlsx">10<small>km</small></a></i>
                <h3><?php echo $program_2_text; ?></h3>
                <a href="/training/5k-10k-plan-Blainville.xlsx"><?php echo $view_pdf_text; ?></a>
            </div>
            <div class="col col_4">
                <i><a href="/training/5k-10k-half-marathon-plan-Blainville.xlsx">21.1<small>km</small></a></i>
                <h3><?php echo $program_3_text; ?></h3>
                <a href="/training/5k-10k-half-marathon-plan-Blainville.xlsx"><?php echo $view_pdf_text; ?></a>
            </div>
        </div>
            
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>