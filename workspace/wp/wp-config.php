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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@K|]hMX]+=2]eEype`Do| #tv`UwM1E5[NzYuHPEV%Cn>Y5>r~J~]Iac5td|W,A;');
define('SECURE_AUTH_KEY',  'jqG37Y-R(L`jwwTo>SMYw`R5$;-cZ3RuIAL~86>ZoT/!9x].])7AjIzyR$5`9_ {');
define('LOGGED_IN_KEY',    '_4.<92mu=OAE&g(1NE0T)7x~:ESZHSRG#e<#?m[dr*6;oQ96exg]9e+PQ<a#H@H%');
define('NONCE_KEY',        '-g6{%Bx$]&9sTPbNKhUT0t%4-YB3P9VArD/6plDP57f}/9jl4h5F>gQ#.~Gxv{Na');
define('AUTH_SALT',        'P]|)S7fK~Evz<MfC(P^dG*Ww7+CfB.uxFo@i$.+]?2wh&S&_#}9E9&~D$ZMV^q}f');
define('SECURE_AUTH_SALT', 'jF5RG*)KvsD#gjimacL(B$-5TX{ku@8$&Fyx,^N`}[YM>#PW&Kyt{B_r3wxD~ +}');
define('LOGGED_IN_SALT',   'hi69z_z*byGh)~RzJ5sw9 }f5tm/0!A^g0P;D`l,*MF^kAK7nyjhqRp&^7FEtsX6');
define('NONCE_SALT',       'JyNg9EJZET6fecVb7o01FR;mx@}4OJ,J_aF./xt;GY;gvLZ4CVA/7Um~8sK/e0$7');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
