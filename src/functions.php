<?php
/*======================================
  コンテンツ幅
======================================*/
if (!isset($content_width)) {
  $content_width = 970;
}

/*======================================
  スタイルの追加
======================================*/
function blog_scripts()
{
  /*
    css
  ----------------------------------- */
  wp_enqueue_style('blog-common', get_theme_file_uri() . '/assets/css/common.css');
  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap', array(), null);

  /*
    js
  ----------------------------------- */
  wp_register_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '1.0');

  wp_register_script('gsap-scrollTrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), '1.0');

  wp_register_script('gsap-text', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js', array(), '1.0');

  wp_enqueue_script('blog-script', get_theme_file_uri() . '/assets/js/main.js', array('gsap', 'gsap-scrollTrigger', 'gsap-text'), '1.0', false);
}
add_action('wp_enqueue_scripts', 'blog_scripts');

// main.jsにdeferを追加
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle)
{
  // 識別名がmain_script以外はそのまま返却
  if ($handle !== 'blog-script') {
    return $tag;
  }

  // deferを追加して返却する
  return str_replace(' src=', ' defer src=', $tag);
}

// main.jsにasyncを追加
add_filter('script_loader_tag', 'add_async', 10, 2);

function add_async($tag, $handle)
{
  if ($handle !== 'blog-script') {
    return $tag;
  }

  return str_replace(' src=', ' async src=', $tag);
}

/*======================================
  初期設定
======================================*/
function blog_setup()
{
  /*
    Titleタグ
  ----------------------------------- */
  add_theme_support('title-tag');


  /*
    アイキャッチ画像
  ----------------------------------- */
  add_theme_support('post-thumbnails');

  // 画像サイズを追加
  set_post_thumbnail_size(700, 469, true); //投稿ページ用
  add_image_size('article-thumbnail', 327, 245, true); //投稿一覧用


  /*
    カスタムメニュー
  ----------------------------------- */
  $locations = [
    'header_nav' => 'header Navigation',
    'footer_nav' => 'footer Navigation'
  ];

  register_nav_menus($locations);
}

add_action('after_setup_theme', 'blog_setup');

// メニューリンクの内容をspanでラップするフィルター
function add_span_to_menu_items($items)
{
  $items = preg_replace('/<a(.*?)>(.*?)<\/a>/', '<a$1><span>$2</span></a>', $items);
  return $items;
}
add_filter('wp_nav_menu_items', 'add_span_to_menu_items');

//ナビゲーションのliにクラスを付与
function add_class_to_nav($classes, $item, $args)
{
  // ヘッダーメニューの場合
  if ($args->theme_location === 'header_nav') {
    $classes[] = 'p-global-nav__list js-global-nav__list -menu'; // ヘッダーメニューの各<li>に付与するクラス名
  }
  // フッターメニューの場合
  elseif ($args->theme_location === 'footer_nav') {
    $classes[] = 'p-footer-nav__list -menu'; // フッターメニューの各<li>に付与するクラス名
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_class_to_nav', 10, 3);


// 不要なクラスを削除
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var)
{
  return is_array($var) ? array_intersect($var,  array('current-menu-item', 'p-global-nav__list js-global-nav__list -menu', 'p-footer-nav__list -menu')) : '';
}

/*======================================
  ウィジェットの有効化
======================================*/
function header_widgets_init()
{
  $args = [
    'name' => 'search',
    'id' => 'search',
    'class' => 'p-header__widget',
    'before_widget' => '<form id="%1$s" class="p-header__widget %2$s">',
    'after_widget' => '</form>',
  ];
  register_sidebar($args);
}
add_action('widgets_init', 'header_widgets_init');

/*======================================
  抜粋文 カスタマイズ
======================================*/

//末尾の[…]を変更
function custom_excerpt_more($more)
{
  return '…';
}
add_filter('excerpt_more', 'custom_excerpt_more');


//文字数制限を変更
function custom_excerpt_length($length)
{
  return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//自動整形を無効化（HTMLタグを除外）
remove_filter('the_excerpt', 'wpautop');
