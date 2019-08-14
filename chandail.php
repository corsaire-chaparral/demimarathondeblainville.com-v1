<?php 
$section='info';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
	$title_text='Chandail de l’événement';
	
	$schedule_subject_change_text='Des modifications peuvent être apportées à l\'horaire ci-dessous.';
    $schedule_notes_text='*Les inscriptions ne seront pas possibles le jour de la course.<br/>';
    $all_profits_text='Au profit de l’organisme Centre sportif Blainville';
    $race_proits_more_text='L’organisme Centre sportif Blainville organise depuis 1973 des campagnes de financement pour soutenir des projets de la communauté  et qui fournit des paniers d’effets scolaires pour les familles blainvilloises dans le besoin.';
	$race_takes_place_text='C\'est &agrave; Blainville, &agrave; 20 minutes au nord de Montr&eacute;al, qu\'aura lieu la 4e &eacute;dition du Demi-marathon de Blainville. Notre magnifique parcours dans un secteur r&eacute;sidentiel de prestige vous donnera l\'occasion de participer &agrave; diff&eacute;rentes &eacute;preuves.'; 
?>
    
<section>
    <div class="wrapper">
        
        <div class="content">
          <div class="row">
            <div class="col col_6">
              <h1><?php echo $title_text; ?></h1>
              
              <p>
                <span class="text-secondary">&rarr; Précommandez jusqu’au 19 août!</span>
              </p>

              <p>
                Prix :
                <strong>15,00$</strong>

                <br><small>*Également disponible à 20,00$ sur place. Quantités limitées. Réservez le vôtre dès maintenant!</small>
              </p>
              
              <form>
                <fieldset>
                  <div class="row">
                    <div class="col col_12">
                      <h4>Sélectionnez votre taille :</h4>

                      <div class="styled-select">
                        <select id="product-select">
                          <option data-id="chandail-femme-xs" value="Chandail – Femme – XS">Coupe Femme – XS</option>
                          <option data-id="chandail-femme-s" value="Chandail – Femme – S">Coupe Femme – S</option>
                          <option data-id="chandail-femme-m" value="Chandail – Femme – M">Coupe Femme – M</option>
                          <option data-id="chandail-femme-l" value="Chandail – Femme – L">Coupe Femme – L</option>
                          <option data-id="chandail-femme-xl" value="Chandail – Femme – XL">Coupe Femme – XL</option>
                          <option data-id="chandail-homme-s" value="Chandail – Homme – S">Coupe Homme – S</option>
                          <option data-id="chandail-homme-m" value="Chandail – Homme – M">Coupe Homme – M</option>
                          <option data-id="chandail-homme-l" value="Chandail – Homme – L">Coupe Homme – L</option>
                          <option data-id="chandail-homme-xl" value="Chandail – Homme – XL">Coupe Homme – XL</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="add-button-container">
                    <noscript>
                      Javascript doit être activé pour utiliser cette fonctionnalité.
                    </noscript>
                    <button
                      id="add-button"
                      class="button -is-block snipcart-add-item"
                      data-item-id="chandail-f-xs"
                      data-item-name="Chandail – Femme – XS"
                      data-item-price="15.00"
                      data-item-weight="10"
                      data-item-url="http://myapp.com/products/bacon"
                      data-item-description="Chandail officile - Précommande">
                          Ajouter
                    </button>

                  </div>
                </fieldset>
              </form>
            </div>
            <div class="col col_6">
              <img class="product-thumbnail"
                   src="/images/chandail-apercu.jpg"
                   alt="Chandail officiel du Demi-Marathon de Blainville présenté par Via Capitale" class="" />
            </div>
          </div>
        </div>
    </div>
</section>

<!-- SNIPCART -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="MDc1MzJkZWEtOWI2Ny00ZTRkLWJlMDktZDc0MDI5YWRhMGRhNjM2NzExODEyNTE0MzM0OTk4" id="snipcart"></script>

<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />

<script>
  // Change add-to-cart button attributes on select
  var selectElem = document.getElementById('product-select');
  var buttonElem = document.getElementById('add-button')

  // Bind events on the elem
  // This is IE 9+
  selectElem.addEventListener('change', setButtonAttributes, false);
  
  /**
   * Set Snipcart attributes on add to cart button
   * @param {Object} elem DOM <option> element with `data-id` and `value` attributes 
   */
  function setButtonAttributes(ev) {
    
    var itemId = selectElem.options[selectElem.selectedIndex].getAttribute('data-id');
    var itemName = selectElem.options[selectElem.selectedIndex].getAttribute('value');
    
    buttonElem.setAttribute('data-item-id', itemId);
    buttonElem.setAttribute('data-item-name', itemName);
  }
</script>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>