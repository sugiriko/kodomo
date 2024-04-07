<?php get_header(); ?>
<div class="container">
    <section class="contact">
        <h2 class="contact-title">お問い合わせ</h2>
        <?php the_content(); ?>
        <div class="contact-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/19287_color.png'); ?>">
            <p>疑問・質問など、どうぞお気軽にお問い合わせください。</p>
        </div>
    </section>
    <?php get_footer(); ?>