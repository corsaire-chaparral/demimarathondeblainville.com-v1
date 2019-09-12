<?php 
$section='photos';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
if ($_GET['lang']=='fr') {
	
}
else {
	
}
?>
    
<section>
    <div class="wrapper">
            
        <h1>PHOTOS 2019</h1>
      
      <div class="content">
        <p class="large-texte">Consultez nos albums de l’événement et téléchargez gratuitement vos photos! <br>
          <em><small>Gracieuseté de Louis-Olivier Brassard</small></em></p>

        <p><strong>Note</strong>&nbsp;: Certaines photos n’ont pas encore été indexées. Revenez plus tard si vous ne voyez pas votre dossard ou parcourez nos albums! 👇</p>
        
      <form action="https://photos.demimarathondeblainville.com/qsearch.php" id="photo-search-form">
        <fieldset>
          <div class="row">
            <div class="col col_4">
              <label for="photo-search-number">Dossard :</label>
              <input id="photo-search-number" name="q" type="number" min="1" max="1000" />
            </div>
            <div class="col col_6">
              <button class="button" type="submit" value="Chercher">Chercher par dossard</button>
            </div>
          </div>
        </fieldset>
      </form>
        
        <h3>Albums :</h3>
        <br>
        
        <ul class="results">
          <li><a href="https://photos.demimarathondeblainville.com/index.php?/category/11" title="21,1 km">21,1 km</a></li>
          <li><a href="https://photos.demimarathondeblainville.com/index.php?/category/10" title="10 km">10 km</a></li>
          <li><a href="https://photos.demimarathondeblainville.com/index.php?/category/9" title="5 km">5 km</a></li>
          <li><a href="https://photos.demimarathondeblainville.com/index.php?/category/7" title="2 km">2 km</a></li>
          <li><a href="https://photos.demimarathondeblainville.com/index.php?/category/8" title="Divers">Divers</a></li>
        </ul>
      </div>
      
        <p><a class="button -is-block" href="https://photos.demimarathondeblainville.com">VOIR L’ALBUM COMPLET &rarr;</a></p>
            
        <div class="photoGallery row">
            <a href="https://photos.demimarathondeblainville.com/index.php?/category/11" target="_blank" title="21,1 km"><img src="https://photos.demimarathondeblainville.com/i.php?/edition-2019/21km/_PS83798-me.JPG" />
              <span>21,1 km</span>
          </a>
            <a href="https://photos.demimarathondeblainville.com/index.php?/category/10" target="_blank" title="10 km"><img src="https://photos.demimarathondeblainville.com/i.php?/edition-2019/10km/_PS83283-me.JPG" />
              <span>10 km</span>
          </a>
            <a href="https://photos.demimarathondeblainville.com/index.php?/category/9" target="_blank" title="5 km"><img src="https://photos.demimarathondeblainville.com/_data/i/edition-2019/5km/_PS84756-me.JPG" />
              <span>5 km</span>
          </a>
            <a href="https://photos.demimarathondeblainville.com/index.php?/category/7" target="_blank" title="2 km"><img src="https://photos.demimarathondeblainville.com/i.php?/edition-2019/2km/_PS84319-me.JPG" />
              <span>2 km</span>
          </a>
            <a href="https://photos.demimarathondeblainville.com/index.php?/category/8" target="_blank" title="Divers"><img src="https://photos.demimarathondeblainville.com/_data/i/edition-2019/divers/_PS83253-me.JPG" />
              <span>Divers</span>
          </a>
            
        </div>
      
    </div>
</section>

<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>