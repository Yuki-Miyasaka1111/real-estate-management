<?php
function add_files() {
//style
  wp_enqueue_style( 'css', get_stylesheet_directory_uri() . '/style/style.css', array(), false, 'all');
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', array(), false, 'all');
  wp_enqueue_style( 'slick_theme', get_stylesheet_directory_uri() . '/slick/slick_theme.css', array(), false, 'all');
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), false, 'all');
  wp_enqueue_style( 'api', 'https://fonts.googleapis.com/css?family=Raleway:800,400', array(), false, 'all');

// scripts
  wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.js', array('jquery'), false, true );
  wp_enqueue_script( 'area', get_stylesheet_directory_uri() . '/js/area-search.js', array('jquery'), false, true );
  wp_enqueue_script( 'brand', get_stylesheet_directory_uri() . '/js/brand.js', array('jquery', 'slick'), false, true );
  wp_enqueue_script( 'btn', get_stylesheet_directory_uri() . '/js/btn-disabled.js', array('jquery'), false, true );
  wp_enqueue_script( 'gnavi', get_stylesheet_directory_uri() . '/js/gnavi.js', array('jquery'), false, true );
  wp_enqueue_script( 'modal', get_stylesheet_directory_uri() . '/js/modal.js', array('jquery'), false, true );
  wp_enqueue_script( 'sidebar', get_stylesheet_directory_uri() . '/js/search-sidebar.js', array('jquery'), false, true );
  wp_enqueue_script( 'thumbnail', get_stylesheet_directory_uri() . '/js/thumbnail-slider.js', array('jquery', 'slick'), false, true );
  wp_enqueue_script( 'uncheck', get_stylesheet_directory_uri() . '/js/uncheck.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'add_files');

// admin用スタイルシート
function my_admin_style(){
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/style/admin_style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );

function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
  register_sidebar( array(
    'name' => 'Refined Search',
    'id' => 'refined-serach',
  ) );
  register_sidebar( array(
    'name' => 'トップページバナー上段エリア',
    'id' => 'top-banner-area',
  ) );
  register_sidebar( array(
    'name' => 'トップページバナー下段エリア',
    'id' => 'top-banner-area2',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );


// カスタム投稿追加
function create_post_type() {
  $supports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type( 'rent',  // カスタム投稿ID
    array(
      'label' => '賃貸物件登録',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $supports,  // 投稿画面でどのmoduleを使うか的な設定
      'menu_icon' => 'dashicons-admin-multisite', // このメニューで使用するアイコンの指定
    )
  );
  register_post_type( 'buy',  // カスタム投稿ID
    array(
      'label' => '売買物件登録',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $supports,  // 投稿画面でどのmoduleを使うか的な設定
      'menu_icon' => 'dashicons-admin-home', // このメニューで使用するアイコンの指定
    )
  );
}
add_action( 'init', 'create_post_type' );


//　カテゴリ追加
function taxonomy_area() {
  $name = __('区カテゴリ', 'area');
  $labels = [
      'name' => $name,
      'manu_name' => $name,
      'singular_name' => $name,
      'not_found' => $name . 'は見つかりませんでした',
      'search_items' => $name . 'を検索',
      'popular_items' => $name . 'の人気の項目',
      'all_items' => $name . '一覧',
      'parent_item' => '親カテゴリの選択',
      'parent_item_colon' => null,
      'edit_item'=> $name . 'を編集',
      'update_item' => $name . 'をアップデート',
      'add_new_item' => $name . 'を新規追加' ,
      'new_item_name' => '新しい' . $name . 'の名前',
      'separate_items_with_commas' => '項目をコンマで区切ってください',
      'add_or_remove_items' => '項目の追加または削除',
      'choose_from_most_used' => 'よく使われている項目から選択',
  ];

  $args = [
		'labels' => $labels,
    'hierarchical' => true,
		'public' => true,
		'show_admin_column' => true,
    'show_in_rest' => true, //Gutenbergの中で表示するために必須
  ];
  register_taxonomy('area',array('rent', 'buy'), $args);
  
}
add_action( 'init', 'taxonomy_area' );


//jQueryをダッシュボード以外では使えないようにする
function load_script()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'load_script');


// add_action( 'auth_redirect', 'subscriber_go_to_home' );
// function subscriber_go_to_home( $user_id ) {
// $user = get_userdata( $user_id );
// if ( !$user->has_cap( 'edit_posts' ) ) {
// wp_redirect( get_home_url() );
// exit();
// }
// }

add_filter('template_include','custom_search_template');
function custom_search_template($template){
   if ( is_search() ){
      $post_types = get_query_var('post_type');
      foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
      $templates[] = 'search.php';
      $template = get_query_template('search',$templates);
   }
    return $template;
}


function my_wpmem_register_form_rows( $rows ) {
	if ( isset( $rows['username'] ) ) {
		unset( $rows['username'] );
	}
	return $rows;
}
add_filter( 'wpmem_register_form_rows', 'my_wpmem_register_form_rows' );

function my_wpmem_pre_validate_form( $fields ) {
	if ( ! isset( $fields['username'] ) || $fields['username'] == '' ) {
		$fields['username'] = $fields['user_email'];
	}
	return $fields;
}
add_filter( 'wpmem_pre_validate_form', 'my_wpmem_pre_validate_form' );

//　ログイン回りリダイレクト
add_action( 'wpmem_register_redirect', 'my_reg_redirect' );
  function my_reg_redirect( $fields ) {
    wp_redirect( '/login' );
    exit();
}

//カスタムフィールドによる記事数取得
function loopPostCountRent( $post_meta_key = null ,$post_meta_value = null )
{
    $args = array(
        'post_type' => 'rent',
        'meta_key' => $post_meta_key,
        'meta_value' => $post_meta_value,
        'posts_per_page' => -1
    );
    $meta_posts = get_posts($args);
    $count_post = 0;
    foreach ($meta_posts as $post) {
        $count_post++;
    }
    return $count_post;
}
function loopPostCountBuy( $post_meta_key = null ,$post_meta_value = null )
{
    $args = array(
        'post_type' => 'buy',
        'meta_key' => $post_meta_key,
        'meta_value' => $post_meta_value,
        'posts_per_page' => -1
    );
    $meta_posts = get_posts($args);
    $count_post = 0;
    foreach ($meta_posts as $post) {
        $count_post++;
    }
    return $count_post;
}

// ページネーション

?>


