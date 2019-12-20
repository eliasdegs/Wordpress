<?php get_header(); ?>

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

    ?>


<section class="bann" style="background-image: url('<?php echo get_field('image')['url'];?>')">
  <div class="container">
    <p class="baseline"><?php the_field("texte_marron")?></p>
    <h1 class="title"><?php the_field("texte_marron_2")?><br /><span class="title title-highlight"><?php the_field("texte_vert")?></span></h1>
    <a href="google.com" class="but1">s'inscrire aux rencontres</a>
  </div>
</section>

<section class="section-2">
  <div>
  <p class="conf underlined"><?php the_field("conf_titre")?></p>

  <p class="txt"> <?php the_field("conf_txt")?></p>

  </div>
</section>

<section class="section-3">
</section>

<section class="section-4">
  <h1 class="titre separator title-spacing"><?php the_field("prog_titre")?></h1>
    <div class="program-wrapper2">
      <div class="sstitreg">
        <h2 class="sstitre"><?php the_field("progtitreg")?></h2>
      </div>
      <div class="sstitred">
        <h2 class="sstitre"><?php the_field("progtitred")?></>
      </div>
    </div>
    <div class="programcont">
      <div class="programcontg">
        <?php
        $program_left=get_field("programcontg");
        foreach($program_left as $line){
        ?>
        <p class="programtxt"><span class="programtxt programh"><?php echo $line["programhourg"]?></span><?php echo $line["programhourdescg"] ?></p>
        <?php } ?>
      </div>
      <div class="programcontg">
        <?php
        $program_right=get_field("programcontd");
        foreach($program_right as $line){
        ?>
        <p class="programtxt"><span class="programtxt programh" ><?php echo $line["programhourd"]?></span><?php echo $line["programhourdescd"] ?></p>
        <?php } ?>
      </div>
    </div>
    <a href="#" class="but2"><?php the_field("programlien")?></a>
  </div>
</section>

<section class="ora">
  <div class="container">
      <h1 class="title separator title-spacing"><?php the_field("oratitre")?></h1>
      <p class="desc"><?php the_field("oraligne")?></p>
      <div class="ora-content-wrapper">
      <?php
        $ora=get_field("oracont");
        foreach($ora as $line){
      ?>
        <div class="ora-content">
          <div class="ora-image" style="background-image: url('<?php echo $line['ora-content-image']['url']?>')"></div>
          <p class="ora-title"><?php echo $line["oraconttitre"]?></P>
          <p class="ora-desc"><?php echo $line["oracontdesc"]?></P>
          <div class="ora-button-wrapper">
            <a href="#" class="ora-button"><?php echo $line["oracontlien"]?></a>
          </div>
        </div>
      <?php } ?>
  </div>
</section>

<section class="informations">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("informationstitre")?></h1>
  </div>
  <div class="bginfo" style="background-image: url('<?php echo get_field('infoimagefond')['url'];?>')">
    <div class="informations-container">
      <div class="informationswrapper">
          <div class="lieuwrapper">
          <i class="fas fa-map-marker-alt"></i>
          <div class="lieutxt">
              <p><?php the_field("informations_location_line_1")?></P>
              <p><?php the_field("informations_location_line_2")?></P>
              <p><?php the_field("informations_location_line_3")?></P>
              <p><?php the_field("informations_location_line_4")?></P>
            </div>
          </div>
          <div class="datewrapper">
          <i class="far fahorl"></i>
            <div class="date-text">
              <p><?php the_field("informations_date_line_1")?></P>
              <p><?php the_field("informations_date_line_2")?></P>
            </div>
          </div>
          <div class="miamwrapper">
            <i class="fas fa-utensils"></i>
            <div class="dinner-text">
              <p><?php the_field("informations_dinner_line_1")?></P>
              <p><?php the_field("informations_dinner_line_2")?></P>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="videos">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("videostitre")?></h1>
  </div>
  <div class="container videoswrapper">
    <?php
      $main_videos=get_field("vidcont");
      foreach($main_videos as $line){
    ?>
    <div class="main-videos-background" style="background-image: url('<?php echo $line['videoback']['url']?>')">
      <div class="main-videos-content">
        <i class="fas fa-play-circle"></i>
        <p class="main-videos-title"><?php echo $line["vidtitreprinc"]?></p>
        <p class="main-videos-desc"><?php echo $line["vidprincdesc"]?></p>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="container videoswrapper">
    <?php
      $secondary_videos=get_field("videos_secondary_content");
      foreach($secondary_videos as $line){
    ?>
    <div class="secondary-videoswrapper">
      <div class="secondary-videos-player" style="background-image: url('<?php echo $line['videos_secondary_content_background_image']['url']?>')">
        <i class="fas fa-play-circle"></i>
      </div>
      <div class="secondary-videos-content">
          <p class="secondary-videos-title"><?php echo $line["videos_secondary_content_title"]?></p>
          <p class="secondary-videos-desc"><?php echo $line["videos_secondary_content_desc"]?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<section class="actus">
  <div class="container">
    <h1 class="title separator title-spacing"><?php the_field("actustitre")?></h1>
    <div class="actus-articles-wrapper">
      <?php
        $actus=get_field("actusart");
        foreach($actus as $line){
      ?>
      <div class="actus-articles">
        <div class="actus-image" style="background-image: url('<?php echo $line['actus_articles_background_image']['url']?>')"></div>
        <div class="actus-content">
          <p class="actus-title"><?php echo $line["actusarttitre"]?></p>
          <p class="actus-desc"><?php echo $line["actusartdesc"]?></p>
          <div class="actus-button-wrapper">
            <a href="#" class="actus-button"><?php echo $line["actuslink"]?></a>
          </div>
          <p class="actus-date"><?php echo $line["actusdate"]?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="tel">
  <div class="container tel-wrapper">
    <?php
      $tel=get_field("telcont");
      foreach($tel as $line){
    ?>
    <div class="tel-border">
      <div class="tel-background" style="background-image: url('<?php echo $line['telcontimg']['url']?>')">
        <i class="fas fa-angle-double-down"></i>
        <p class="tel-title"><?php echo $line["telconttitre"]?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
    <?php
  }
}
?>


<?php get_footer(); ?>
