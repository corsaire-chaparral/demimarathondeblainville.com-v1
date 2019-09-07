<?php 
$section='info';
include getenv("DOCUMENT_ROOT")."/includes/header.php";
include getenv("DOCUMENT_ROOT")."/config.php";
	$title_text='INSCRIPTION TARDIVE';
	$secondary_text='Samedi 7 septembre de 10h à 16h';
?>
    
<section>
    <div class="wrapper">
        
        <div class="content">
          <div class="row">
            <div class="col col_6">
              <h1><?php echo $title_text; ?></h1>
              
              <p>
                <span class="text-secondary"><?php echo $secondary_text; ?></span>
              </p>

              <form>
                <fieldset>
                  <div class="row">
                    <div class="col col_12">
                      <h4>Inscription :</h4>

                      <div class="styled-select">
                        <select id="product-select">
                          <option data-id="inscription-1km"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 1 KM"
                                  value="1 KM">1 KM</option>
                          <option data-id="inscription-2km"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 2 KM"
                                  value="2 KM">2 KM</option>
                          <option data-id="inscription-5km"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 5 KM"
                                  value="5 KM">5 KM</option>
                          <option data-id="inscription-5km-marche"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 5 KM MARCHE"
                                  value="5 KM MARCHE">5 KM marche</option>
                          <option data-id="inscription-10km"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - "
                                  value="10 KM">10 KM</option>
                          <option data-id="chandail-21km"
                                  data-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 21 KM"
                                  value="21 KM">21 KM</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <p>À récupérer avec votre trousse du coureur le samedi 7 septembre de 10h à 16h, ou le jour de la course.</p>

                  <div class="add-button-container" id="add-button-container">
                    <noscript>
                      Javascript doit être activé pour utiliser cette fonctionnalité.
                    </noscript>
                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-1km"
                      data-item-name="Inscription tardive – 1 KM"
                      data-item-price="15.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 1 KM">
                          Ajouter
                    </button>
                    
                    <div role="template" hidden>
                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-1km"
                      data-item-name="Inscription tardive – 1 KM"
                      data-item-price="15.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 1 KM">
                          Ajouter
                    </button>

                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-2km"
                      data-item-name="Inscription tardive – 2 KM"
                      data-item-price="20.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 2 KM">
                          Ajouter
                    </button>

                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-5km-marche"
                      data-item-name="Inscription tardive – 5 KM Marche"
                      data-item-price="40.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 5 KM">
                          Ajouter
                    </button>

                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-5km"
                      data-item-name="Inscription tardive – 5 KM"
                      data-item-price="40.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 5 KM">
                          Ajouter
                    </button>

                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-10km"
                      data-item-name="Inscription tardive – 10 KM"
                      data-item-price="50.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 10 KM">
                          Ajouter
                    </button>

                    <button
                      class="button -is-block snipcart-add-item"
                      data-item-id="inscription-21km"
                      data-item-name="Inscription tardive – 21 KM"
                      data-item-price="70.00"
                      data-item-url="<?php echo $SNIPCART_INSCRIPTION_URL; ?>"
                      data-item-description="Inscription tardive - Demi-Marathon de Blainville 2019 - 21 KM">
                          Ajouter
                    </button>
                    </div>

                  </div>
                </fieldset>
              </form>

            </div>
          </div>
        </div>
    </div>
</section>

<!-- SNIPCART -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="<?php echo $SNIPCART_API_KEY; ?>" id="snipcart"></script>

<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />

<script>
  // Change add-to-cart button attributes on select
  var selectElem = document.getElementById('product-select');
  var buttonElem = document.getElementById('add-button-container').querySelector('button');

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
    var itemDesc = selectElem.options[selectElem.selectedIndex].getAttribute('data-description');
    
    buttonElem.setAttribute('data-item-id', itemId);
    buttonElem.setAttribute('data-item-name', itemName);
    buttonElem.setAttribute('data-item-description', itemDesc);
  }
</script>
    
<?php include getenv("DOCUMENT_ROOT")."/includes/footer.php"; ?>