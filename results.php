<?php 
$section='results';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='RÉSULTATS';
}
else {
	$title_text='RESULTS';
}
?>
    
<section>
    <div class="wrapper">
            
        <h1><?php echo $title_text; ?></h1>
        
        <h2>2018</h2>
        
        <ul class="results">
            <li><a href=" https://www.sportstats.ca/display-results.xhtml?raceid=94627" target="_blank">1km</a></li>
            <li><a href=" https://www.sportstats.ca/display-results.xhtml?raceid=97990" target="_blank">1km CP</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=94626" target="_blank">2km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=94625" target="_blank">5km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=94628" target="_blank">5km Marche</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=94624" target="_blank">10km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=94623" target="_blank">Demi-marathon</a></li>
        </ul>
        
        <h2>2017</h2>
        
        <ul class="results">
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=42173" target="_blank">1km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=42172" target="_blank">2km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=42171" target="_blank">5km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=47303" target="_blank">5km Marche</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=42170" target="_blank">10km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=42169" target="_blank">Demi-marathon</a></li>
        </ul>
        
        <h2>2016</h2>
        
        <ul class="results">
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=41308" target="_blank">1km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=41306" target="_blank">2km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=41305" target="_blank">5km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=41304" target="_blank">10km</a></li>
            <li><a href="https://www.sportstats.ca/display-results.xhtml?raceid=31074" target="_blank">Demi-marathon</a></li>
        </ul>

    </div>
</section>

<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>