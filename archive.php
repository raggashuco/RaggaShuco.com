<?php get_header(); ?>
  <section class="mainContent">
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
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
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>