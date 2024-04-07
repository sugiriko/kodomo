<?php get_header(); ?>
<section class="news-top container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <h2 class="sec-title2">最新情報</h2>
            <div class="news-text">
                <div class="news-text1">
                    <p class="news-title"><?php the_title(); ?></p>
                    <p><?php the_time('m月d日'); ?></p>
                </div>
                <?php the_content(); ?>
            </div>
            <div class="news-items">
                <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
                <img src="<?php the_field('img1'); ?>">
                <img src="<?php the_field('img2'); ?>">
            </div>
        <?php
        endwhile;
    else :
        ?>
        <p>投稿データはありません</p>
    <?php endif; ?>
    <a class="btn3" href="<?php echo esc_url(home_url()); ?>">HOMEに戻る</a>
</section>
<?php get_footer(); ?>