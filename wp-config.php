<?php
# Database Configuration
define( 'DB_NAME', 'wp_expertfools' );
define( 'DB_USER', 'expertfools' );
define( 'DB_PASSWORD', 'fYDctZjGyvMxb2RK' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY', 'ih~+:trE|{?clM2U:q!I;-Z-sna||[eIK+s_3Z?L= |~`|X0ru:Njz*/-TtxcR5.');
define('SECURE_AUTH_KEY', 'K.7W<q:Gx,e/QNh~FGZEUc%h3S2zsL6-jzsr9kk7+cbN).+$p0k/oyG)Hj?{o:6y');
define('LOGGED_IN_KEY', 'E96?L2lR% JR$:W@bZ+|0Fu#9:gzB=#Zk=p)}-iL;2i:VXH/^@%at;>)c?r!5_1.');
define('NONCE_KEY', 'Izs$Oy 6+-B+(%d}M_Giu*3D`+>hs#nVQIcm>twpL72Y++nK-|$.b*pkSxu]n)U,');
define('AUTH_SALT',        'SioYZ/y;9=PsI-IS*FMmV>zsTs.4`0hw[[n-[CL%kTZ)OT1k+lAFY]ciUh;KXWg+');
define('SECURE_AUTH_SALT', ':KPCh3(CGGXy|~.P}[K%.e?yX[+jx.*Iv4>H6E_SJwW1i%3T=<jxlVH;h[KRI)!@');
define('LOGGED_IN_SALT',   '+Db2,d_=xJB)Oo_.7RP$cvW.eUis><Cs[DJTyZYwV|q&5oo#`a1?A2,U%fKBkZHe');
define('NONCE_SALT',       '(Xt + uP#XgjA9uN(B?{(}@Rk?2xO9[#&tRKx^W?_|5.2RlM:_-d f3tBCx+4cWA');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'expertfools' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '43dbd65d6c8001dda36016bbfe25526f28f35ad0' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '1264' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'expertfools.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-1264', );

$wpe_special_ips=array ( 0 => '66.175.213.137', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '66.175.213.137' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
