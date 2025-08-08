<?php
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}
if (!defined('WP_HOME')) {
    define('WP_HOME', 'https://avertguard.com');
}
if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', 'https://avertguard.com');
}
define('FORCE_SSL_ADMIN', true);

if (array_key_exists('HTTP_X_FORWARDED_PROTO', $_SERVER) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}
