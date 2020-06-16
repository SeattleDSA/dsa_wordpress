<?php
/*
Template Name: Action Network Form
*/
?>

<?php get_header(); ?>
  <style>
    .wp-block-embed__wrapper { display: none; }
    .article-header { display: none; }
    #inner-content { text-align: center; }
    #main { margin: auto; }

    #can_thank_you { background-color: transparent !important; }
    #action_info { border-top: none !important; }
    #action_thank_you_text { text-align: center !important; }
  </style>

  <div id="content" class="grid-container fluid">

    <div id="inner-content" class="grid-x grid-margin-x">

        <main id="main" class="cell medium-8 large-9 dsa-readable" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'documentation' ); ?>

        <?php endwhile; endif; ?>

      </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>
