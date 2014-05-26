<?php get_header(); ?>
      <section class="topArea">
        <div class="topSchedule">
          <h2>UP COMING EVENTS</h2>
          <ul class="flyerList">
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/fullswing.jpg" title="FULLSWING SUNDAY"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/2014_05_15.jpg" title="EVERYDAY DOSS BASS"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/2014_05_17.jpg" title="RAM JAM DANCEHALL"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/fullswing.jpg" title="FULLSWING SUNDAY"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/2014_05_15.jpg" title="EVERYDAY DOSS BASS"></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/2014_05_17.jpg" title="RAM JAM DANCEHALL"></a></li>
          </ul>
        </div>
        <div class="musicBox">
          <h2>SOUNDCLOUD</h2>
          <iframe width="340" height="178" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/7203370&amp;color=0066cc&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
        </div>
        <div class="videoBox">
          <h2>YOUTUBE</h2>
          <iframe width="340" height="240" src="http://www.youtube.com/embed/videoseries?list=FL_JudTxjcsMcFihLBYOYsNQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </section>
      <section class="mainContent">
        <h2>WHAT'S NEW</h2>
        <?php query_posts('&posts_per_page=5'); if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="articleBox">
              <p class="articleDate"><?php echo get_the_date(); ?></p>
              <h3 class="articleTitle shake shake-slow"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php if (has_post_thumbnail()): ?>
              <p class="articleThumb"><a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a></p>
              <?php endif; ?>
              <p class="articleSummery"><?php echo mb_substr(strip_tags($post-> post_content),0,300).'...'; ?></p>
              <p class="continueBtn shake shake-slow"><a href="<?php the_permalink();?>">続きを読む</a></p>
            </div>
        <?php endwhile; // 繰り返し処理終了
        else : ?>
          <div class="post">
            <h3>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
          </div>
        <?php endif; ?>
      </section>
      <?php get_sidebar(); ?>
      <?php get_footer(); ?>