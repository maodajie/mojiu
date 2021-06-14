<?php

if (!function_exists('mac_get_mid_code')) {
    exit('请升级最新版苹果CMS后使用 下载地址 https://cdn.jsdelivr.net/gh/magicblack/maccms_down/');
}

if (!function_exists('mao_return')) {
    require '.' . MAC_PATH_TEMPLATE . (is_dir('.' . MAC_PATH_TEMPLATE . 'dev/') ? 'dev/' : 'option/') . 'common.php';
}

if (preg_match(mac_default($mojia['sole']['browse']['preg'], '/MSIE\s[0-9]/i'), $_SERVER['HTTP_USER_AGENT']) == mac_default($mojia['sole']['browse']['type'], 0) && false !== strpos($_SERVER['PHP_SELF'], mac_url('label/update') . '?url=')) {
    header('Location:' . $_GET['url']);
} elseif (preg_match(mac_default($mojia['sole']['browse']['preg'], '/MSIE\s[0-9]/i'), $_SERVER['HTTP_USER_AGENT']) != mac_default($mojia['sole']['browse']['type'], 0) && false === strpos($_SERVER['PHP_SELF'], mac_url('label/update'))) {
    header('Location:' . mac_url('label/update') . '?url=' . rawurlencode($maccms['http_type'] . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']));
}

$maccms['mid'] = 1 == $maccms['aid'] ? 0 : $maccms['mid'];
