<?
//Carrega biblioteca do Wordpress
require( dirname( __FILE__ ) . '/../blog/wp-load.php' );

//Carrega biblioteca do Sistema
require( dirname( __FILE__ ) . '/../includes/autoload.php' );

//Pega 5 ultimos posts
$recent = new WP_Query("showposts=5");
while($recent->have_posts()) {
  $recent->the_post();

  $dataPub = get_the_date('Y-m-d H:i:s');

  $data = new girafaDate($dataPub, ENUM_DATE_FORMAT::YYYY_MM_DD_HH_II_SS);
  ?>
  <div class="feed-element">
    <div>
      <a href="<?php the_permalink(); ?>" target="_blank">
        <div class="thumb"
             style="background-image: url('<?= the_post_thumbnail_url(); ?>');"></div>
        <small class="pull-right text-navy">há <?=  tempo_corrido($dataPub); ?></small>
        <strong class="title"><?php the_title(); ?></strong>

        <div><?= the_excerpt(); ?></div>
        <small class="text-muted"><?= $data->GetDayOfWeekLong() . ', ' . $data->GetFullDateForLong() ?></small>
      </a>
    </div>
  </div>

<?
}
?>