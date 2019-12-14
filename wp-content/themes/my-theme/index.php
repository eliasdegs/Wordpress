<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

    $banner_img = get_field("image_banner");

?>
<section class="section-1" style="background-image:url(<?php echo $banner_img['url']; ?>)">
  <div>
  <p class="renc"><?php the_field("texte_marron"); ?></p>
  <p class="ch"><?php the_field("texte_marron_2"); ?></p>
  <p class="eq"><?php the_field("texte_vert"); ?></p>
  <a href="google.com" class="but1">s'inscrire aux rencontres</a>
</div>
</section>

<section class="section-2">
  <div>
  <p class="conf underlined">La conférence</p>

  <p class="txt"> Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire<br />
    végétale et durabilité:une question d'équilibre" ! Elles se tiendront le 3 décembre prochain à Bruxelles<br />
    et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde,<br />
    qui appelle à favoriser une alimentation plus végétale.
  </div>
</section>

<section class="section-3">
</section>

<section class="section-4">
<p class="conf2 underlined"> au programme <p>

</section>

<?php

  }
}
?>

</div>

<?php get_footer(); ?>
