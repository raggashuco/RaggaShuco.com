<?php
/*
Template Name: blog.php
*/
?>
<?php get_header(); ?>
  <section class="mainContent">
    <?php $paged = get_query_var('paged');
    query_posts("showposts=3&paged=$paged"); ?>
    <?php if (have_posts()) :
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
        <div class="alignleft pagerBox"><?php previous_posts_link('%link', '« previous'); ?></div>
        <div class="alignright pagerBox"><?php next_posts_link('%link', 'next »'); ?></div>
    </div>
<?php wp_reset_query(); ?>
    <!-- /pager -->
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>