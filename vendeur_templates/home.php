<?php @include("fixed_layouts.php"); ?>

<div class="small-12 medium-8 messages grid-content">

	<div class="grid-container">
        <br>
        <h4>Ajouter une offre</h4>
        <form>
            <label>
                Nom du produit
                <input type="text" placeholder="Nom">
            </label>
            <label>
                Référence du produit
                <input type="text" placeholder="Référence">
            </label>
            <label>Catégorie</label>
            <select name="" id="">
                <option value="">Choix 1</option>
                <option value="">Choix 2</option>
                <option value="">Choix 3</option>
            </select>
            <label>
                Montant de la réduction
                <input type="text" placeholder="Montant">
            </label>
            <label>
                Description
            </label>
            <textarea>
            </textarea>

        </form>
	</div>
</div>

<div zf-panel id="feed" position="right" class="fast bounceInOut medium-2 medium-grid-content">
  <section class="block-list">
	  <header>Dernières offres des concurrents</header>
	  <ul>
	    <li><a href="#"><h6>iPhone 6</h6>Prix imbattable !</a></li>
	    <li><a href="#"><h6>Samsung Galaxy S6</h6>Des performances hors normes</a></li>
	    <li><a href="#"><h6>Vidéo Projecteur BenQ</h6>Visionner des films comme au cinema</a></li>
	    <li><a href="#"><h6>Proxy Pizza</h6>Aujourd'hui une pizza achetée une pizza offerte</a></li>
	  </ul>
	</section>
</div>
<!-- End Compose Message -->