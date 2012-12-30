<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ryan Rich | Designer | Developer | Entrepreneur</title>
  <meta name="description" content="Ryan Rich | Blog">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p>Please update your browser to view this webpage. Thank you!</p><![endif]-->
<div class="explain">
  my name is ryan rich. i am a designer and font-end web developer. this is my blog.
</div>
<div class="wrap">
  <header><a href="http://blog.roarr.us">yes, this is blog...</a><span class="huh">?</span></header>
  <nav>
<script>
$(".huh").click(function(){
  $(".explain").fadeToggle(500);
});
</script>
    <p class="navTitle">archived posts</p>
    <ul>
      <?php wp_get_archives( array(
        'type'            => 'postbypost',
        'limit'           => 20,
        'format'          => 'html',
        'show_post_count' => false, 
        'echo'            => 1    
      ) ); ?>
    </ul>
  </nav>
  <article>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p class="title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>
      <span><?php the_time('Y-m-d') ?> </span>
    </p>
    <p class="text"> <?php the_content(); ?></p>
  </article>
  <?php endwhile; else: ?>
  <p><?php _e( 'hi...sorry' ); ?></p><?php endif; ?>
  <footer></footer>
</div>
</body>
</html>