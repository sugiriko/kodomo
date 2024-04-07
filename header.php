<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kodomo</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>"></a>
        </h1>

        <nav id="navi">
            <ul class="menu">
                <li><a href="<?php echo esc_url(home_url('#child')); ?>">児童発達支援とは</a></li>
                <li><a href="<?php echo home_url('#news'); ?>">最新情報</a></li>
                <li><a href="<?php echo home_url('/work-detail'); ?>">活動内容</a></li>
                <li><a href="<?php echo home_url('/usage'); ?>">利用までの流れ</a></li>
                <li><a href="<?php echo home_url('/usage#cost'); ?>">費用について</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
            </ul>
        </nav>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        
    </header>