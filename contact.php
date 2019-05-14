<?php 
$section='contact';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	$title_text='NOUS REJOINDRE';
	$contact_info_text='Les d&eacute;parts et le centre des activit&eacute;s se font &agrave; la Parc &Eacute;questre, au 1025, chemin du Plan-Bouchard, Blainville (Qc)';
}
else {
	$title_text='CONTACT';
	$contact_info_text='All activities and races will be based out of Parc Equestre, 1025 Chemin du Plan-Bouchard, Blainville, Quebec.';
}
?>
<section>
    <div class="wrapper">
            
        <h1><?php echo $title_text; ?></h1>
            
        <div class="row">
            <div class="col col_4">
                <!--<p>34 rue de Franchimont<br/>
                    Blainville, Québec<br/>J7B 1S9</p>-->
                
                <p>
	                <strong>E-mail:</strong> <a href="mailto:info@lacoursedeblainville.com">info+demimarathon@corsaire-chaparral.org</a><br/>
                 </p>
            </div>
            
            <div class="col col_8">
                <!--<h3>Pour s'y rendre</h3>
                
                <ol>
                    <li>De l'autoroute 40, prendre l'autoroute 15 en direction nord</li>
                    <li>Prendre la sortie 20-E pour rejoindre l'autoroute 640 est en direction de Repentigny</li>
                    <li>Prendre la sortie 24 vers le CHEMIN du-BAS-de-STE-THÉRÈSE/MONTÉE LESAGE</li>
                    <li>Tourner à droite sur le Chemin Du Bas-Ste-Thérèse</li>
                    <li>Tourner à droite sur le Boulevard Des Chateaux</li>
                    <li>Tourner à droite sur le Boulevard De Fontainebleau</li>
                    <li>Tourner à droite sur la Rue de Montauban</li>
                </ol>
                
                <p>Les départs et le centre des activités se font à l'école de Fontainebleau au 10, rue de Montauban à Blainville.</p>
                
                <p>À partir de la sortie Chemin du bas Sainte-Thérèse sur l'autoroute 640, les indications pour vous rendre au stationnement seront affichées. Plusieurs navettes seront en fonction entre le site de la course et le stationnement. SVP, prévoir arriver au stationnement incitatif 60 minutes avant le départ de votre course.</p>-->
                <p><?php echo $contact_info_text; ?></p>
            </div>
            
            <div class="col col_12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38157.96937390594!2d-73.895105371489!3d45.68323157153691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc8d62d390a0241%3A0x787d3b64c2c7e5fe!2sParc+%C3%A9questre+de+Blainville!5e0!3m2!1sen!2sca!4v1460572293047" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
            
    </div>
</section>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>