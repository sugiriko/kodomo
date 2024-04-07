<footer>
        <div class="footer-list">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>"></a>
            <ul>
                <li><a href="<?php echo esc_url(home_url('#child')); ?>">児童発達支援とは</a></li>
                <li><a href="<?php echo esc_url(home_url('/work-detail')); ?>">活動内容</a></li>
                <li><a href="<?php echo home_url('/usage'); ?>">利用までの流れ</a></li>
                <li><a href="<?php echo home_url('/work-detail#schedule'); ?>">一日のスケジュール</a></li>
                <li><a href="<?php echo home_url('/usage#cost'); ?>">費用について</a></li>
                <li><a href="<?php echo home_url('#news'); ?>">最新情報</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
            </ul>
        </div>
        <img class="animal" src="<?php echo esc_url(get_template_directory_uri() . '/img/animals_01.png'); ?>">
    </footer>
    <?php wp_footer(); ?>
</body>
</html>