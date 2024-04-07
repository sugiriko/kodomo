<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{


    wp_enqueue_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet'
    );

    // reset style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/style.css',
        array('reset_style'),
        '1.0'
    );
}


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');


    //JSの読み込み

    //jqueryを登録
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0',
        true
    );

    // main.jsを最後に実行
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        // 'jquery_script' , 'slick-script' が読み込まれた後に'main_script'を読み込む
        '1.0',
        true
    );

    // 通常scriptタグが<head>に置かれるが、wp_enqueue_scriptの5番目の引数をtrueにすることによって
    // </body>の前に配置される
}

// サムネイル設定を有効化
add_theme_support('post-thumbnails');
