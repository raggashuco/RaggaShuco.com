<?php
/*
Template Name: blog.php
*/
?>
<?php get_header(); ?>
  <section class="mainContent">
    <?php query_posts('&posts_per_page=5'); if (have_posts('category_name=blog')) :
    while (have_posts()) : the_post('blog'); ?>
    <h2><?php echo get_the_date(); ?></h2>
    <div class="articleBox">
      <div class="articleCategory"><?php the_category(); ?></div>
      <h3 class="articleTitle shake shake-slow"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></h3>
      <div class="articleText">
        <?php the_content(); ?>
      </div>
      <p class="footer-post-meta">
        Tag : <?php the_tags('Tag : ',', '); ?>
      </p>
    </div>
    <?php endwhile;
    else : ?>
    <div class="post">
    <h2>記事はありません</h2>
    <p>お探しの記事は見つかりませんでした。</p>
    </div>
    <?php endif; ?>
    <!-- pager -->
    <div class="navigation">
      <?php if( get_previous_post() ): ?>
        <div class="alignleft pagerBox"><?php previous_post_link('%link', '« previous'); ?></div>
      <?php endif;
      if( get_next_post() ): ?>
        <div class="alignright pagerBox"><?php next_post_link('%link', 'next »'); ?></div>
      <?php endif; ?>
    </div>
    <!-- /pager -->
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>