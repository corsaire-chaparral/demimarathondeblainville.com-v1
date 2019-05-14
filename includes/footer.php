<?php
if ($_GET['lang']=='fr') {
	$copyright_footer_text='&copy; 2019 Le Demi-marathon de Blainville';
	$sponsors_text='Partenaires';
	$gold_text='Or';
	$silver_text='Argent';
	$bronze_text='Bronze';
	$main_sponsor_text='Pr&Eacute;sent&Eacute; par';
}
else {
	$copyright_footer_text='All content &copy; 2019 Le Demi-marathon de Blainville';
	$sponsors_text='SPONSORS';
	$gold_text='GOLD';
	$silver_text='SILVER';
	$bronze_text='BRONZE';
	$main_sponsor_text='PRESENTING SPONSOR';
}	
?>
<!-- FOOTER -->
<footer>
    <div class="wrapper">
        <div id="sponsors">
            <h2 class="slab"><?php echo $sponsors_text; ?></h2>
            
            <div class="tabs">
                <a href="#sponsors_main" class="active"><?php echo $main_sponsor_text; ?></a> | <a href="#sponsors_gold"><?php echo $gold_text; ?></a> | <a href="#sponsors_silver"><?php echo $silver_text; ?></a> | <a href="#sponsors_bronze"><?php echo $bronze_text; ?></a>
            </div>
            
<!--
            <div id="sponsors_main" class="tabContent active">
                <a href="http://www.oasis.ca/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_4.jpg" /></a>
            </div>
-->
            
            <div id="sponsors_gold" class="tabContent">
                <a href="http://blainville.ca/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_1.jpg" /></a>
                <a href="http://info.fbn.ca/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_2.jpg" /></a>
                <a href="http://www.surin.ca/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_surin.jpg" /></a>
                <a href="http://www.fondationbrunysurin.ca/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_4.jpg" /></a>
                <a href="http://www.sprintmanagement.ca/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_5.jpg" /></a>
                <!--<a href="https://www.desjardins.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_15.jpg" /></a>-->
                <!--<a href="#" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_6.jpg" /></a>-->
                <a href="https://www.dalslighting.com/en" target="_blank"><img src="/images/sponsors/gold/sponsors_silver_4.jpg" /></a>
                <a href="https://www.ubisoft.com/fr-CA/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_13.jpg" /></a>
                <a href="https://www.td.com/" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_td.jpg" /></a>
                <a href="https://www.clarins.ca" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_clarins.jpg" /></a>
            </div>
            
            <div id="sponsors_silver" class="tabContent">
                <!--<a href="http://local.progressivewaste.com/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_1.jpg" /></a>-->
                <a href="http://naya.com/en-ca/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_2.jpg" /></a>
                <a href="http://www.synviscone.ca/en" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_3.jpg" /></a>
                <!--<a href="http://www.dalslighting.com/en" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_4.jpg" /></a>-->
                <a href="http://www.festifetes.ca/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_5.jpg" /></a>
                <a href="https://www.sportsexperts.ca/fr-CA/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_6.jpg" /></a>
                <a href="http://www.quebecor.com/fr" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_7.jpg" /></a>
                <a href="http://www.trackiereg.com/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_8.jpg" /></a>
                <a href="http://corsaire-chaparal.org/accueil/" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_9.jpg" /></a>
                <!--<a href="http://www.vision-expert.com" target="_blank"><img src="/images/sponsors/silver/sponsors_silver_10.jpg" /></a>-->
            </div>
            
            <div id="sponsors_bronze" class="tabContent">
                <a href="http://www.villeneuveorthopedique.com/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_1.jpg" /></a>
                <!--<a href="http://www.evolutionphysio.com/en/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_2.jpg" /></a>-->
                <!--<a href="http://www.spalefinlandais.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_3.jpg" /></a>-->
                <a href="http://www.aubainerie.com/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_5.jpg" /></a>
                <a href="http://www.lithomille-iles.com/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_6.jpg" /></a>
                <a href="http://www.autobusyvesseguin.com/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_7.jpg" /></a>
                <!--<a href="https://mtlautoprix.com/home/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_8.jpg" /></a>-->
                <!--<a href="http://w.subway.com/en-ca/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_9.jpg" /></a>-->
                <!--<a href="https://www.jeancoutu.com/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_10.jpg" /></a>-->
                <a href="https://www.discountquebec.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_12.jpg" /></a>
                
                <img src="/images/sponsors/bronze/sponsors_bronze_16.jpg" />
                <!--<a href="http://www.fondationdrapeauetdeschambault.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_17.jpg" /></a>-->
                <img src="/images/sponsors/bronze/sponsors_bronze_18.jpg" />
                <!--<a href="http://www.planetemazda.com/en/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_19.jpg" /></a>-->
                <a href="https://rungum.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_20.jpg" /></a>
                <!--<a href="https://www.kontron.com" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_21.jpg" /></a>-->
                <a href="https://xpnworld.com/en/" target="_blank"><img src="/images/sponsors/bronze/sponsors_bronze_22.jpg" /></a>
                <a href="http://www.timhortons.com/ca/en/index.php" target="_blank"><img src="/images/sponsors/gold/sponsors_gold_7.jpg" /></a>
            </div>
        </div>
        
        <div class="bottom">
            <div><?php echo $copyright_footer_text; ?></div>
            <a href="http://www.trackie.org" title="Trackie" class="trackie" target="_blank">TRACKIE</a>
        </div>
        <p style="text-align:center;"><img src="/images/circuitProv.png" alt="circuitProv" width="312" height="74" /></p></div>
    </div>
</footer>

<!-- JQUERY -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/retina.min.js"></script>
<script src="/js/magnific.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>