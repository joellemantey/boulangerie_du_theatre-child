</main>
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>

get_footer();
<footer>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_footer' ); ?>

     <div class="footer">
       <div class="a_propos">
             <nav>
            <h3>A PROPOS</h3>
                <ul>
                    <li>CGV</li>
                    <li>Mentions Légales</li>
                    <li>Conditions générales de vente</li>
                     <li>Politique de confidentialité</li>
                     <li>Conditions générales d’utilisation</li>
                     <li>Les Avis Clients</li>
                     <li>FAQ</li>
                 </ul>
             </nav>
         </div>
         <div class="adresse-tel">
             <h3>Notre adresse</h3>
             <p>Boulangerie du théâtre</p>
             <p>29 place Pierre Renet</p>
             <p>70000 VESOUL</p>
             <p>Téléphone : 03 84 96 35 22</p>
         </div>
         <div class="horaires">
             <h3>Nos Horaires</h3>
             <p>Du Lundi au Samedi : 06h00 - 19h00</p>
             <p>Dimanche : 06h00 - 13h00</p>
         </div>
         <div class="espace-facebook">
             <p>Pour ne pas manquez l’activité de la Boulangerie du Théâtre</p>
             <div class="facebook">
                 <i class="fa fa-facebook-official" aria-hidden="true"></i>
                 <p>Facebook</p>
             </div>
         </div>
     </div>

