<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'xs566017_wp7' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'xs566017_wp7' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '6qjjrgh1bd' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql12003.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q`:}Vc<kZhAqLlA;`Hem54+a4]c20Ad!?z#Vg|; >7K;}1em{hRfN9[q`19e%qg4' );
define( 'SECURE_AUTH_KEY',  'DByizRgsdW 4a|Xq:DXTMK.w5d`oEidJ@e(~26xLJ]yV5 |h;mZ`11gm.>ui7(0x' );
define( 'LOGGED_IN_KEY',    'a-iw+5G~T:HFXrJ).*y#65KzAXtE@<oBVdMADV(nuo-E&p-V/$x2>.(|{p+|E2Iq' );
define( 'NONCE_KEY',        'kB1)K,S$:fd)E7>sKdGN^zX6-*Fi{80KX4Kj>l!`&q3DT(%y=MJUM T7e9LfwSOj' );
define( 'AUTH_SALT',        'sx-V_BSeOs%;K#;c]/{n~/0/R5JO8Wj6c4]b@5tX?Ody_x L4&3e?UoEJ>#?Jzk.' );
define( 'SECURE_AUTH_SALT', '1]O1n>PaI/?Ir>udVN^?Cri|htfsoNID^RY_HXjn!:_xB:3~5rcp!WU>@%){rCMW' );
define( 'LOGGED_IN_SALT',   '1RabY|R`|r|_[^SGqW7oB8ijo?A9~l<.bBiRI#rp{{&/<9G=fM`&GxE%}7%<&1G0' );
define( 'NONCE_SALT',       'L=h`W?-|~5lEqr ztg^*n1:&Uu[dCAR_`t/~7:O2{2fj:/t!<,.+,3i4;8TU3#Z?' );
define( 'WP_CACHE_KEY_SALT','_@6D8=<QNJ662jLl#2:~l4InHz]23s>~ZzcxNSPd[N#l1jP-nM7vyWP>YF+b[g.@' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
