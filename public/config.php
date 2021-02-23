<?php
return array (
  'base' => 
  array (
    'edit' => 
    array (
      'type' => 'edit',
      'name' => '后台入口',
      'entry' => 'mojia.php',
      'state' => '1',
      'des' => '选择后台入口文件',
    ),
    'logo' => 
    array (
      'type' => 'image',
      'name' => '网站标志',
      'pic1' => 'https://cdn.jsdelivr.net/gh/amujie/mojia@master/asset/img/logo.png',
      'des1' => '网站LOGO',
      'pic2' => 'https://cdn.jsdelivr.net/gh/amujie/mojia@master/asset/img/favicon.png',
      'des2' => 'favicon小图标',
    ),
    'lazy' => 
    array (
      'type' => 'image',
      'name' => '默认图片',
      'pic1' => '',
      'des1' => '竖版懒加载默认图片',
      'pic2' => '',
      'des2' => '横版懒加载默认图片',
    ),
    'back' => 
    array (
      'type' => 'image',
      'name' => '网页背景',
      'pic1' => '',
      'des1' => '移动端网页背景图片',
      'pic2' => '',
      'des2' => '桌面端网页背景图片',
    ),
    'copy' => 
    array (
      'type' => 'copy',
      'name' => '版权设置',
      'tips' => 'Mojia',
      'link' => 'https://mojia.amujie.com',
    ),
    'head' => 
    array (
      'type' => 'code',
      'name' => '头部代码',
      'code' => '',
      'des' => '支持填写html代码,例如某些统计站点需要验证meta标签等',
    ),
    'foot' => 
    array (
      'type' => 'code',
      'name' => '底部代码',
      'code' => '',
      'des' => '支持填写html代码,例如统计代码',
    ),
  ),
  'nav' => 
  array (
    'base' => 
    array (
      'name' => '基本设置',
      'status' => '1',
      'typing' => '0',
      'search' => '1',
      'type' => 'base',
      'des' => '导航栏基本设置选择项',
    ),
    'home' => 
    array (
      'id' => '0',
      'icon' => 'mo-icon-shouye-line',
      'name' => '首页',
      'link' => '{$maccms[\'path\']}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => 'on',
    ),
    'custom' => 
    array (
      'id' => '7',
      'icon' => 'mo-icon-caidan',
      'name' => '辣品',
      'link' => '{:mac_url(\'label/index\')}',
      'type' => 'mid',
      'desktop' => '0',
      'mobile' => '0',
    ),
    'level' => 
    array (
      'id' => '',
      'icon' => 'mo-icon-shuju-line',
      'name' => '',
      'link' => '',
      'type' => 'vod',
      'desktop' => '0',
      'mobile' => '0',
    ),
    'video' => 
    array (
      'id' => '',
      'icon' => 'mo-icon-shuju-line',
      'name' => '',
      'link' => '',
      'type' => 'vod',
      'desktop' => '0',
      'mobile' => '0',
    ),
    'film' => 
    array (
      'id' => '1',
      'icon' => 'mo-icon-dianying-line',
      'name' => '电影',
      'link' => '{:mac_url_type(array(\'type_id\'=>1))}',
      'type' => 'tid',
      'desktop' => 'on',
      'mobile' => 'on',
    ),
    'drama' => 
    array (
      'id' => '2',
      'icon' => 'mo-icon-shipin',
      'name' => '连续剧',
      'link' => '{:mac_url_type(array(\'type_id\'=>2))}',
      'type' => 'tid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'variety' => 
    array (
      'id' => '3',
      'icon' => 'mo-icon-texiao',
      'name' => '综艺',
      'link' => '{:mac_url_type(array(\'type_id\'=>3))}',
      'type' => 'tid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'comic' => 
    array (
      'id' => '4',
      'icon' => 'mo-icon-ertongpiao',
      'name' => '动漫',
      'link' => '{:mac_url_type(array(\'type_id\'=>4))}',
      'type' => 'tid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'music' => 
    array (
      'id' => '',
      'icon' => 'mo-icon-yanchu-line',
      'name' => '',
      'link' => '',
      'type' => 'tid',
      'desktop' => '0',
      'mobile' => '0',
    ),
    'live' => 
    array (
      'id' => '',
      'icon' => 'mo-icon-zhibo',
      'name' => '',
      'link' => '',
      'type' => 'tid',
      'desktop' => '0',
      'mobile' => '0',
    ),
    'art' => 
    array (
      'id' => '2',
      'icon' => 'mo-icon-yingpingmoban',
      'name' => '资讯',
      'link' => '{:mac_url(\'art/index\')}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => 'on',
    ),
    'actor' => 
    array (
      'id' => '8',
      'icon' => 'mo-icon-mingxinghuodong',
      'name' => '明星',
      'link' => '{:mac_url(\'actor/index\')}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'topic' => 
    array (
      'id' => '3',
      'icon' => 'mo-icon-huati-line',
      'name' => '专题',
      'link' => '{:mac_url(\'topic/index\')}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'site' => 
    array (
      'id' => '11',
      'icon' => 'mo-icon-dingwei-line',
      'name' => '导航',
      'link' => '{:mac_url(\'website/index\')}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => '0',
    ),
    'gbook' => 
    array (
      'id' => '5',
      'icon' => 'mo-icon-pinglun-line',
      'name' => '留言',
      'link' => '{:mac_url(\'gbook/index\')}',
      'type' => 'mid',
      'desktop' => 'on',
      'mobile' => 'on',
    ),
    'user' => 
    array (
      'id' => '6',
      'icon' => 'mo-icon-shequ-line',
      'name' => '我的',
      'link' => '{:mac_url(\'user/index\')}',
      'type' => 'mid',
      'desktop' => '0',
      'mobile' => 'on',
    ),
    'icon' => 
    array (
      'name' => '图标设置',
      'icon' => 'mo-icon-shijian-line',
      'id' => '',
      'btns' => 'record',
      'link' => 'javascript:;',
      'type' => 'icon',
      'des' => '右上角图标设置',
    ),
    'font' => 
    array (
      'name' => '图标设置',
      'icon' => 'mo-icon-shequ-line',
      'id' => '',
      'btns' => 'center',
      'link' => 'javascript:;',
      'type' => 'icon',
      'des' => '右上角图标设置',
    ),
  ),
  'home' => 
  array (
    'banner' => 
    array (
      'id' => '1',
      'type' => 'common',
      'name' => '大图轮播',
      'advs' => '',
      'category' => '',
      'level' => '9',
      'art' => '',
      'mid' => '1',
      'sort' => 'time',
      'sub' => '',
      'num' => '5',
      'state' => '1',
    ),
    'second' => 
    array (
      'id' => '2',
      'type' => 'banner',
      'name' => '小图轮播',
      'advs' => '',
      'category' => '',
      'level' => '9',
      'art' => '',
      'mid' => '1',
      'sort' => 'time',
      'sub' => '8',
      'num' => '5',
      'state' => '0',
    ),
    'notice' => 
    array (
      'id' => '3',
      'type' => 'notice',
      'name' => '站内公告',
      'index' => '9',
      'state' => '1',
      'gbook' => '',
      'gtype' => '0',
      'alert' => '',
      'num' => '3',
      'atype' => '0',
    ),
    'latest' => 
    array (
      'id' => '4',
      'type' => 'common',
      'name' => '最近更新',
      'advs' => '',
      'art' => '',
      'mid' => '1',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '1',
    ),
    'reveal' => 
    array (
      'id' => '5',
      'type' => 'common',
      'name' => '吐血推荐',
      'advs' => '',
      'art' => '',
      'mid' => '2',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '3,6',
      'num' => '3',
      'state' => '0',
    ),
    'cinema' => 
    array (
      'id' => '6',
      'type' => 'common',
      'name' => '正在热播',
      'advs' => '',
      'art' => '',
      'mid' => '1',
      'category' => '',
      'level' => '8',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '0',
    ),
    'sunday' => 
    array (
      'id' => '7',
      'type' => 'common',
      'name' => '周更剧场',
      'advs' => '',
      'art' => '',
      'mid' => '1',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '0',
    ),
    'newest' => 
    array (
      'id' => '8',
      'type' => 'common',
      'name' => '最新资讯',
      'advs' => '',
      'art' => '',
      'mid' => '2',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,8',
      'num' => '8',
      'state' => '1',
    ),
    'sorted' => 
    array (
      'id' => '9',
      'type' => 'common',
      'name' => '视频分类',
      'advs' => '',
      'art' => '',
      'mid' => '1',
      'category' => '1,2,3,4',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '1',
    ),
    'artist' => 
    array (
      'id' => '10',
      'type' => 'common',
      'name' => '文章分类',
      'advs' => '',
      'art' => '',
      'mid' => '2',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,8',
      'num' => '4',
      'state' => '0',
    ),
    'bloger' => 
    array (
      'id' => '11',
      'type' => 'common',
      'name' => '博客布局',
      'advs' => '',
      'art' => '',
      'mid' => '2',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '5,10',
      'num' => '5',
      'state' => '0',
    ),
    'actors' => 
    array (
      'id' => '12',
      'type' => 'common',
      'name' => '饭团剧场',
      'advs' => '',
      'art' => '',
      'mid' => '8',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '6',
      'state' => '1',
    ),
    'siteer' => 
    array (
      'id' => '13',
      'type' => 'common',
      'name' => '推荐站点',
      'advs' => '',
      'art' => '',
      'mid' => '11',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '6,12',
      'num' => '6',
      'state' => '0',
    ),
    'taobao' => 
    array (
      'id' => '14',
      'type' => 'taobao',
      'name' => '精品推荐',
      'qiang' => '',
      'brand' => '',
      'sort' => '0',
      'ver' => '1.2.3',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '0',
    ),
    'topics' => 
    array (
      'id' => '15',
      'type' => 'topics',
      'name' => '最新专题',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '3,6',
      'num' => '6',
      'state' => '0',
    ),
    'friend' => 
    array (
      'id' => '16',
      'type' => 'friend',
      'name' => '友情链接',
      'advs' => '1',
      'category' => 'all',
      'apply' => '1',
      'sort' => 'sort',
      'order' => 'desc',
      'num' => '20',
      'state' => '1',
    ),
  ),
  'play' => 
  array (
    'chat' => 
    array (
      'type' => 'chat',
      'name' => '扫码观看',
      'pic' => 'template/moli/exploit/image/maodajie.png',
      'des' => '选择需要扫码观看的分类',
      'send' => '关键词1',
      'code' => '长城',
      'category' => '13',
    ),
    'advs' => 
    array (
      'type' => 'advs',
      'name' => '视频广告',
      'tips' => '广告倒计时',
      'time' => '5',
      'link' => 'https://baidu.com',
      'group' => '',
      'des' => '视频加载前广告,任意网页均可',
    ),
    'high' => 
    array (
      'type' => 'two',
      'name1' => '视频高度',
      'text1' => '56.25%',
      'name2' => '移动端高度',
      'text2' => '56.25%',
      'des' => '播放器高度设置',
    ),
    'tips' => 
    array (
      'type' => 'input',
      'name' => '视频提示',
      'text' => '关注微信公众号,追剧不迷路',
      'des' => '视频提示',
    ),
    'load' => 
    array (
      'type' => 'input',
      'name' => '加载提示',
      'text' => '正在加载',
      'des' => '视频加载提示',
    ),
    'copy' => 
    array (
      'type' => 'input',
      'name' => '版权提示',
      'text' => '应版权方要求！本片相关资源已关闭！请谅解',
      'des' => '涉及侵权的视频提示',
    ),
    'other' => 
    array (
      'type' => 'other',
      'name' => '其他设置',
      'pass' => '1',
      'sees' => '0',
      'auto' => '1',
      'prim' => '0',
      'cuts' => '0',
      'des' => '其他设置',
    ),
  ),
  'color' => 
  array (
    'type' => 
    array (
      'name' => '1',
    ),
    'white' => 
    array (
      'name' => '全局背景',
      'type' => 'back',
      'back' => '#ffffff',
      'text' => '#333333',
      'des' => '全局前景色',
    ),
    'muted' => 
    array (
      'name' => '灰色背景',
      'type' => 'back',
      'back' => '#f0f0f0',
      'text' => '#666666',
      'des' => '全局背景色',
    ),
    'black' => 
    array (
      'name' => '黑色背景',
      'type' => 'back',
      'back' => '#000000',
      'text' => '#ffffff',
      'des' => '播放器背景色',
    ),
    'lazys' => 
    array (
      'name' => '懒加载色',
      'type' => 'back',
      'back' => '#dedede',
      'text' => '#333333',
      'des' => '懒加载背景色',
    ),
    'fixed' => 
    array (
      'name' => '搜索选择',
      'type' => 'back',
      'back' => '#f8f8f8',
      'text' => '#333333',
      'des' => '联想搜索下拉选中背景',
    ),
    'click' => 
    array (
      'name' => '普通按钮',
      'type' => 'back',
      'back' => '#F2F5FA',
      'text' => '#333333',
      'des' => '普通按钮背景色',
    ),
    'write' => 
    array (
      'name' => '访问按钮',
      'type' => 'back',
      'back' => '#cacaca',
      'text' => '#333333',
      'des' => '已访问按钮背景色',
    ),
    'disad' => 
    array (
      'name' => '禁用按钮',
      'type' => 'back',
      'back' => '#dfdfdf',
      'text' => '#999999',
      'des' => '禁用按钮背景色',
    ),
    'mojia' => 
    array (
      'name' => '全局高亮',
      'type' => 'back',
      'back' => '#2892fc',
      'text' => '#ffffff',
      'des' => '全局高亮背景色',
    ),
    'item1' => 
    array (
      'name' => '排行第一',
      'type' => 'back',
      'back' => '#ff0d29',
      'text' => '#ffffff',
      'des' => '排行榜第一位背景色',
    ),
    'item2' => 
    array (
      'name' => '排行第二',
      'type' => 'back',
      'back' => '#ff920b',
      'text' => '#ffffff',
      'des' => '排行榜第二位背景色',
    ),
    'item3' => 
    array (
      'name' => '排行第三',
      'type' => 'back',
      'back' => '#ffc600',
      'text' => '#ffffff',
      'des' => '排行榜第三位背景色',
    ),
    'items' => 
    array (
      'name' => '排行其他',
      'type' => 'back',
      'back' => '#7f7f8c',
      'text' => '#ffffff',
      'des' => '排行榜其他背景色',
    ),
    'delta' => 
    array (
      'name' => '下拉三角',
      'type' => 'text',
      'text' => '#999999',
      'des' => '下拉三角背景色',
    ),
    'lines' => 
    array (
      'name' => '全局线条',
      'type' => 'text',
      'text' => '#dedede',
      'des' => '全局线条颜色',
    ),
    'plain' => 
    array (
      'name' => '白色文字',
      'type' => 'text',
      'text' => '#ffffff',
      'des' => '白色文字颜色',
    ),
    'darks' => 
    array (
      'name' => '黑色文字',
      'type' => 'text',
      'text' => '#333333',
      'des' => '黑色文字颜色',
    ),
    'dusts' => 
    array (
      'name' => '灰色文字',
      'type' => 'text',
      'text' => '#9FA0A4',
      'des' => '灰色文字颜色',
    ),
    'gules' => 
    array (
      'name' => '红色文字',
      'type' => 'text',
      'text' => '#ff0d29',
      'des' => '登录提示文字颜色',
    ),
    'green' => 
    array (
      'name' => '评论支持',
      'type' => 'text',
      'text' => '#28bd98',
      'des' => '评论支持文字颜色',
    ),
    'blush' => 
    array (
      'name' => '评论反对',
      'type' => 'text',
      'text' => '#ff6f6f',
      'des' => '评论反对文字颜色',
    ),
    'input' => 
    array (
      'name' => '文本输入',
      'type' => 'text',
      'text' => '#333333',
      'des' => '输入框文字颜色',
    ),
  ),
  'ads' => 
  array (
    'head' => 
    array (
      'name' => '全站顶部',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '全站导航栏下方,固定位广告',
    ),
    'foot' => 
    array (
      'name' => '全站底部',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '移动端导航栏上方,固定位广告',
    ),
    'play' => 
    array (
      'name' => '播放上方',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '播放器上方广告,固定位广告',
    ),
    'built' => 
    array (
      'name' => '播放前置',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '播放器前置广告,固定位广告',
    ),
    'list' => 
    array (
      'name' => '播放列表',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '播放列表上方,固定位广告',
    ),
    'down' => 
    array (
      'name' => '下载列表',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '下载列表上方,固定位广告',
    ),
    'info' => 
    array (
      'name' => '视频简介',
      'group' => '',
      'show' => '',
      'area' => '',
      'type' => 'common',
      'des' => '视频简介上方,固定位广告',
    ),
    'float' => 
    array (
      'name' => '漂浮广告',
      'group' => '',
      'show' => '',
      'left' => '',
      'right' => '',
      'type' => 'float',
      'des' => '对联广告',
    ),
  ),
  'seo' => 
  array (
    'index1' => 
    array (
      'aid' => '1',
      'info' => '网站首页',
      'type' => 'article',
      'title' => '{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{$maccms.path}',
      'des' => '{$maccms.site_description}',
    ),
    'index2' => 
    array (
      'aid' => '2',
      'info' => '网站地图',
      'type' => 'article',
      'title' => '网站地图#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("map/index")}',
      'des' => '{$maccms.site_description}',
    ),
    'index4' => 
    array (
      'aid' => '4',
      'info' => '留言板',
      'type' => 'article',
      'title' => '留言板#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("gbook/index")}',
      'des' => '{$maccms.site_description}',
    ),
    'index6' => 
    array (
      'aid' => '6',
      'info' => '个人中心',
      'type' => 'article',
      'title' => '个人中心#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("user/index")}',
      'des' => '{$maccms.site_description}',
    ),
    'index10' => 
    array (
      'aid' => '10',
      'info' => '视频首页',
      'type' => 'article',
      'title' => '视频首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '短视频,搞笑视频,视频分享,免费视频,在线视频,预告片',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("vod/index")}',
      'des' => '提供最新最快的视频分享数据',
    ),
    'index20' => 
    array (
      'aid' => '20',
      'info' => '文章首页',
      'type' => 'article',
      'title' => '资讯首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '新闻资讯,娱乐新闻,八卦娱乐,狗仔队,重大事件',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("art/index")}',
      'des' => '提供最新最快的新闻资讯',
    ),
    'index30' => 
    array (
      'aid' => '30',
      'info' => '专题首页',
      'type' => 'article',
      'title' => '专题首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '电影,电视剧,大片,高清,在线观看,最新电视剧,好看的电视剧,最新电影,好看的电影,在线电影',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("topic/index")}',
      'des' => '影视专题,提供最新最热电影、电视剧、纪录片的专题汇总信息、视频高清在线观看',
    ),
    'index70' => 
    array (
      'aid' => '70',
      'info' => '淘客首页',
      'type' => 'article',
      'title' => '{$mojia["home"]["taoke"]["name"]}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '秒杀,疯抢,优惠,包邮,特价,优惠券',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/index")}',
      'des' => '优惠券折扣直播第一站！每天更新千款，纯人工筛选验货，限时限量特卖，全场1折包邮！',
    ),
    'index80' => 
    array (
      'aid' => '80',
      'info' => '演员首页',
      'type' => 'article',
      'title' => '演员首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '大陆明星,港台明星,日韩明星,欧美明星,最火明星',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("actor/index")}',
      'des' => '明星个人信息介绍',
    ),
    'index90' => 
    array (
      'aid' => '90',
      'info' => '角色首页',
      'type' => 'article',
      'title' => '角色首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '电影角色,电视剧角色,动漫角色,综艺角色',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("role/index")}',
      'des' => '角色人物介绍',
    ),
    'index100' => 
    array (
      'aid' => '100',
      'info' => '剧情首页',
      'type' => 'article',
      'title' => '剧情首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '剧情连载,剧情更新,剧情前瞻,剧情完结',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("plot/index")}',
      'des' => '提供最新的剧情信息',
    ),
    'index110' => 
    array (
      'aid' => '110',
      'info' => '网址首页',
      'type' => 'article',
      'title' => '网址首页#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '上网导航,网址大全,网址导航',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("website/index")}',
      'des' => '全网优质网址及资源的中文上网导航。及时收录影视、音乐、小说、游戏等分类的网址和内容，让您的网络生活更简单精彩。',
    ),
    'index11' => 
    array (
      'aid' => '11',
      'info' => '视频分类',
      'type' => 'article',
      'title' => '{:mac_default($obj["type_title"],mac_filter_html($obj.type_name))}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj)}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index21' => 
    array (
      'aid' => '21',
      'info' => '文章分类',
      'type' => 'article',
      'title' => '{:mac_default($obj["type_title"],mac_filter_html($obj.type_name))}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj)}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index71' => 
    array (
      'aid' => '71',
      'info' => '正在热播',
      'type' => 'article',
      'title' => '{$mojia["home"]["hots"]["name"]#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/front")}',
      'des' => '{$maccms.site_description}',
    ),
    'index81' => 
    array (
      'aid' => '81',
      'info' => '演员分类',
      'type' => 'article',
      'title' => '{:mac_default($obj["type_title"],mac_filter_html($obj.type_name))}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj)}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index111' => 
    array (
      'aid' => '111',
      'info' => '网址分类',
      'type' => 'article',
      'title' => '{:mac_default($obj["type_title"],mac_filter_html($obj.type_name))}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj)}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index12' => 
    array (
      'aid' => '12',
      'info' => '视频筛选',
      'type' => 'article',
      'title' => '{$param.year}#$#,#$#{$param.area}#$#,#$#{$param.lang}#$#,#$#{$param["class"]}#$#,#$#{$obj.type_name}{$param.level?"推荐":null}{$param.letter}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index22' => 
    array (
      'aid' => '22',
      'info' => '文章筛选',
      'type' => 'article',
      'title' => '{:macfilter_html($param["class"].{$obj.type_name}{$param.level?"推荐":null}{$param.letter})}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index72' => 
    array (
      'aid' => '72',
      'info' => '热门排行',
      'type' => 'article',
      'title' => '热门排行#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/rank")}',
      'des' => '{$maccms.site_description}',
    ),
    'index82' => 
    array (
      'aid' => '82',
      'info' => '演员筛选',
      'type' => 'article',
      'title' => '{:macfilter_html({$param.area}#$#{$param.starsign}#$#{$obj.type_name}演员{$param.level?"推荐":null}{$param.letter})}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index112' => 
    array (
      'aid' => '112',
      'info' => '网址筛选',
      'type' => 'article',
      'title' => '{:macfilter_html({$param.area}#$#{$param.lang}#$#{$obj.type_name}{$param.level?"推荐":null}{$param.letter})}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim(mac_default($obj.type_logo,$mojia.other.share.image)))}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index13' => 
    array (
      'aid' => '13',
      'info' => '视频搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director},{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("vod/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index23' => 
    array (
      'aid' => '23',
      'info' => '文章搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director},{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("art/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index33' => 
    array (
      'aid' => '33',
      'info' => '专题搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director}#$#{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("topic/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index73' => 
    array (
      'aid' => '73',
      'info' => '主题授权',
      'type' => 'article',
      'title' => '魔加主题授权#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/mojia")}',
      'des' => '{$maccms.site_description}',
    ),
    'index83' => 
    array (
      'aid' => '83',
      'info' => '演员搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director}#$#{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("actor/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index93' => 
    array (
      'aid' => '93',
      'info' => '角色搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director},{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("role/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index103' => 
    array (
      'aid' => '103',
      'info' => '剧情搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director},{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("plot/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index113' => 
    array (
      'aid' => '113',
      'info' => '网址搜索',
      'type' => 'article',
      'title' => '{$param.wd}#$#{$param.actor}#$#{$param.director}#$#{$param.area}#$#{$param.year}#$#{$param.starsign}_搜索结果#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($mojia.other.share.image))}',
      'key' => '{$param.wd},{$param.actor},{$param.director}#$#{$param.area},{$param.year},{$param.starsign}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("website/search",array("wd"=>$param.wd))}',
      'des' => '{$maccms.site_description}',
    ),
    'index14' => 
    array (
      'aid' => '14',
      'info' => '视频详情',
      'type' => 'videolist',
      'title' => '{:mac_default($obj.vod_name,"404 Not Found")}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.vod_pic))}',
      'key' => '{$obj.vod_actor}#$#{$obj.vod_director}#$#{:mac_filter_html($obj.type.type_name)}#$#{$obj.vod_name}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_vod_detail($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index15' => 
    array (
      'aid' => '15',
      'info' => '视频播放',
      'type' => 'video',
      'title' => '{:mac_default($obj["vod_name"],"404 Not Found")}_{$obj["vod_play_list"][$param["sid"]]["urls"][$param["nid"]]["name"]}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.vod_pic))}',
      'key' => '{$obj.vod_actor}#$#{$obj.vod_director}#$#{:mac_filter_html($obj.type.type_name)}#$#{$obj.vod_name}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_vod_play($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index16' => 
    array (
      'aid' => '16',
      'info' => '视频下载',
      'type' => 'videolist',
      'title' => '{:mac_default($obj["vod_name"],"404 Not Found")}_{$obj["vod_down_list"][$param["sid"]]["urls"][$param["nid"]]["name"]}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.vod_pic))}',
      'key' => '{$obj.vod_actor}#$#{$obj.vod_director}#$#{:mac_filter_html($obj.type.type_name)}#$#{$obj.vod_name}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_vod_down($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index24' => 
    array (
      'aid' => '24',
      'info' => '文章详情',
      'type' => 'article',
      'title' => '{:mac_default($obj.art_name,"404 Not Found")}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.art_pic))}',
      'key' => '{$obj["art_tag"],{:mac_filter_html($obj.type.type_name)},{:mac_default($obj.art_name,"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_art_detail($obj)}',
      'des' => '{:mac_default($obj["art_blurb"],mac_substring(mac_filter_html($obj["art_content"]),120))}',
    ),
    'index34' => 
    array (
      'aid' => '34',
      'info' => '专题详情',
      'type' => 'article',
      'title' => '{:mac_default(mac_default($obj.topic_title,$obj.topic_name),"404 Not Found")}_专题#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.topic_pic))}',
      'key' => '{$obj.topic_sub},{$obj.topic_key},{$obj.topic_type},{:mac_default(mac_default($obj.topic_title,$obj.topic_name),"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_topic_detail($obj)}',
      'des' => '{:mac_default(mac_default($obj.topic_des,$obj.topic_blurb),mac_substring(mac_filter_html($obj.topic_content),120))}',
    ),
    'index74' => 
    array (
      'aid' => '74',
      'info' => '淘客详情',
      'type' => 'article',
      'title' => '{$details["data"]["dtitle"]#$# - #$#{$maccms.site_name}',
      'image' => '{:macurl_img(trim($details["data"]["marketingMainPic"]))}',
      'key' => '{$details["data"]["title"]',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/taoke")?id=$Think.get.id&goodsId=Think.get.goodsId',
      'des' => '{$details["data"]["desc"]',
    ),
    'index84' => 
    array (
      'aid' => '84',
      'info' => '演员详情',
      'type' => 'article',
      'title' => '{:mac_default($obj["actor_name"],"404 Not Found")}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.actor_pic))}',
      'key' => '{$obj["actor_alias"],{:mac_filter_html($obj.type.type_name)},{:mac_default($obj["actor_name"],"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_actor_detail($obj)}',
      'des' => '{:mac_default($obj.actor_blurb,mac_substring(mac_filter_html($obj.actor_content),120))}',
    ),
    'index94' => 
    array (
      'aid' => '94',
      'info' => '角色详情',
      'type' => 'article',
      'title' => '{:mac_default($obj.role_name,"404 Not Found")}_{$obj.role_actor}饰演#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.role_pic))}',
      'key' => '{$obj.role_actor},{:mac_default($obj.role_name,"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_role_detail($obj)}',
      'des' => '{:macsubstring(mac_filter_html($obj.role_content),120)}',
    ),
    'index104' => 
    array (
      'aid' => '104',
      'info' => '剧情详情',
      'type' => 'article',
      'title' => '{:mac_default($obj["vod_name"],"404 Not Found")分集剧情_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.vod_pic))}',
      'key' => '{$obj.vod_actor,$obj["vod_director"],{:mac_filter_html($obj.type.type_name)},{:mac_default($obj["vod_name"],"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_plot_detail($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index114' => 
    array (
      'aid' => '114',
      'info' => '网址详情',
      'type' => 'article',
      'title' => '{:mac_default($obj["website_name"],"404 Not Found")}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mac_url_img(trim($obj.website_logo))}',
      'key' => '{:mac_filter_html($obj.type.type_name)},{:mac_default($obj["website_name"],"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_website_detail($obj)}',
      'des' => '{:mac_substring(mac_filter_html($obj["website_content"]),120)}',
    ),
  ),
  'sole' => 
  array (
    'close' => 
    array (
      'type' => 'close',
      'name' => '站点状态',
      'tips' => '网站维护中，请稍后访问',
      'time' => '2021-05-20 13:14:20',
      'state' => '1',
    ),
    'demo' => 
    array (
      'type' => 'input',
      'name' => '站点演示',
      'text' => 'https://player.alicdn.com/video/aliyunmedia.mp4',
      'state' => '0',
    ),
    'cdn' => 
    array (
      'type' => 'cdn',
      'name' => '静态加速',
      'link' => 'https://cdn.jsdelivr.net/gh/amujie/mojia',
      'debug' => '0',
      'state' => '0',
    ),
    'pic' => 
    array (
      'type' => 'image',
      'name' => '图片圆角',
      'text' => '6px',
      'sub' => '横版图片',
      'category' => '',
      'des' => '图片圆角大小及比例设置',
    ),
    'browse' => 
    array (
      'type' => 'browse',
      'name' => '浏览控制',
      'rule' => '/MSIE\\s[0-9]/i',
      'state' => '0',
      'des' => '某些浏览器打开网站',
    ),
    'chain' => 
    array (
      'type' => 'chain',
      'name' => '图片盗链',
      'url' => 'https://i2.wp.com/',
      'agent' => '3',
      'des' => '解决图片403问题',
      'regex' => '',
    ),
    'taoke' => 
    array (
      'type' => 'taoke',
      'name' => '淘客设置',
      'secret' => '',
      'key' => '',
      'des' => '选择触发更新缓存模块',
      'pid' => '',
      'mid' => '',
    ),
    'ajax' => 
    array (
      'type' => 'ajax',
      'name' => '触发任务',
      'link' => '/api.php/timming/index',
      'mid' => '',
      'des' => '选择触发模块,一行一条',
    ),
  ),
  'fix' => 
  array (
    'call' => 
    array (
      'type' => 'input',
      'name' => '在线客服',
      'icon' => 'mo-icon-zixun',
      'link' => 'https://wpa.qq.com/msgrd?v=3&uin=1234567890&site=qq&menu=yes',
      'state' => '0',
    ),
    'gbook' => 
    array (
      'type' => 'input',
      'name' => '留言反馈',
      'icon' => 'mo-icon-taolunqu',
      'link' => 'javascript:;',
      'state' => '0',
    ),
    'chat' => 
    array (
      'type' => 'chat',
      'name' => '公众号码',
      'icon' => 'mo-icon-weixin',
      'tips' => '关注微信公众号,追剧不迷路',
      'link' => 'javascript:;',
      'state' => '0',
      'pic' => 'https://cdn.jsdelivr.net/gh/amujie/mojia@master/asset/img/favicon.png',
      'des' => '微信公众号二维码',
    ),
    'share' => 
    array (
      'type' => 'share',
      'name' => '分享设置',
      'icon' => 'mo-icon-fenxiang',
      'image' => 'https://cdn.jsdelivr.net/gh/amujie/mojia@master/asset/img/image.jpg',
      'state' => '1',
      'api' => 'https://soso.bz/api?key=kqVGHjRkXAsh&format=json&url=',
      'regex' => '/short\\":\\"(.*)\\"}/i',
      'host' => '',
      'url' => '',
      'agent' => '0',
      'des' => '自定义域名需加http://前缀',
    ),
    'down' => 
    array (
      'type' => 'input',
      'name' => '软件下载',
      'icon' => 'mo-icon-xiazai',
      'link' => 'javascript:;',
      'state' => '0',
    ),
    'color' => 
    array (
      'type' => 'input',
      'name' => '配色切换',
      'icon' => 'mo-icon-yingyuan-line',
      'link' => 'javascript:;',
      'state' => '1',
    ),
    'gotop' => 
    array (
      'type' => 'input',
      'name' => '返回顶部',
      'icon' => 'mo-icon-xiangshang',
      'link' => 'javascript:;',
      'state' => '1',
    ),
  ),
);