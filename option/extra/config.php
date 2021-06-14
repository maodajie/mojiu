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
      'pic1' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu@main/static/image/logo.png',
      'des1' => '网站LOGO',
      'pic2' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu@main/static/image/favicon.png',
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
    'wane' => 
    array (
      'type' => 'input',
      'name' => '视频图片',
      'category' => '',
      'sub' => '边框圆角',
      'text' => '6px',
      'des' => '边框圆角大小',
    ),
    'copy' => 
    array (
      'type' => 'copy',
      'name' => '版权设置',
      'title' => 'Mojiu',
      'link' => 'http://mojiu.maodajie.com',
      'des' => '网站底部主题版权设置',
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
    'home' => 
    array (
      'id' => '1',
      'mid' => '0',
      'icon' => 'mo-icon-shouye-line',
      'name' => '首页',
      'href' => '{$maccms.path}',
      'state' => '1',
    ),
    'custom' => 
    array (
      'id' => '2',
      'mid' => '7',
      'icon' => 'mo-icon-caidan',
      'name' => '发现',
      'href' => '{:mac_url(\'label/index\')}',
      'state' => '0',
    ),
    'vod' => 
    array (
      'id' => '3',
      'mid' => '1',
      'icon' => 'mo-icon-zhibo',
      'name' => '视频',
      'href' => '{:mac_url(\'vod/index\')}',
      'state' => '0',
    ),
    'art' => 
    array (
      'id' => '4',
      'mid' => '2',
      'icon' => 'mo-icon-yingpingmoban',
      'name' => '资讯',
      'href' => '{:mac_url(\'art/index\')}',
      'state' => '1',
    ),
    'actor' => 
    array (
      'id' => '5',
      'mid' => '8',
      'icon' => 'mo-icon-mingxinghuodong',
      'name' => '明星',
      'href' => '{:mac_url(\'actor/index\')}',
      'state' => '0',
    ),
    'topic' => 
    array (
      'id' => '6',
      'mid' => '3',
      'icon' => 'mo-icon-huati-line',
      'name' => '专题',
      'href' => '{:mac_url(\'topic/index\')}',
      'state' => '1',
    ),
    'site' => 
    array (
      'id' => '7',
      'mid' => '11',
      'icon' => 'mo-icon-dingwei-line',
      'name' => '导航',
      'href' => '{:mac_url(\'website/index\')}',
      'state' => '0',
    ),
    'gbook' => 
    array (
      'id' => '8',
      'mid' => '5',
      'icon' => 'mo-icon-pinglun-line',
      'name' => '留言',
      'href' => '{:mac_url(\'gbook/index\')}',
      'state' => '1',
    ),
    'user' => 
    array (
      'id' => '9',
      'mid' => '6',
      'icon' => 'mo-icon-shequ-line',
      'name' => '我的',
      'href' => '{:mac_url(\'user/index\')}',
      'state' => '1',
    ),
  ),
  'fix' => 
  array (
    'search' => 
    array (
      'id' => '1',
      'name' => '搜索按钮',
      'icon' => 'mo-icon-sousuo',
      'href' => 'javascript:;',
      'head' => 'on',
      'foot' => '0',
    ),
    'record' => 
    array (
      'id' => '2',
      'name' => '历史记录',
      'icon' => 'mo-icon-shijian-line',
      'href' => 'javascript:;',
      'head' => 'on',
      'foot' => '0',
    ),
    'reload' => 
    array (
      'id' => '3',
      'name' => '刷新页面',
      'icon' => 'mo-icon-shuaxin',
      'href' => 'javascript:location.reload();',
      'head' => 'on',
      'foot' => '0',
    ),
    'online' => 
    array (
      'id' => '4',
      'name' => '客服中心',
      'icon' => 'mo-icon-wode-line',
      'href' => 'https://wpa.qq.com/msgrd?v=3&uin=1234567890&site=qq&menu=yes',
      'head' => '0',
      'foot' => '0',
    ),
    'notice' => 
    array (
      'id' => '5',
      'name' => '公告弹窗',
      'icon' => 'mo-icon-shengyin-line',
      'href' => 'javascript:;',
      'head' => '0',
      'foot' => '0',
    ),
    'follow' => 
    array (
      'id' => '6',
      'name' => '关注我们',
      'icon' => 'mo-icon-weixin',
      'href' => 'javascript:;',
      'head' => '0',
      'foot' => '0',
    ),
    'share' => 
    array (
      'id' => '7',
      'name' => '分享设置',
      'icon' => 'mo-icon-fenxiang',
      'href' => 'javascript:;',
      'head' => '0',
      'foot' => 'on',
    ),
    'color' => 
    array (
      'id' => '8',
      'name' => '主题切换',
      'icon' => 'mo-icon-yingyuan-line',
      'href' => 'javascript:;',
      'head' => '0',
      'foot' => 'on',
    ),
    'gotop' => 
    array (
      'id' => '9',
      'name' => '顶部按钮',
      'icon' => 'mo-icon-xiangshang',
      'href' => 'javascript:;',
      'head' => '0',
      'foot' => 'on',
    ),
  ),
  'home' => 
  array (
    'banner' => 
    array (
      'id' => '1',
      'type' => 'common',
      'name' => '大图轮播',
      'art' => '',
      'adnum' => '2',
      'mid' => '1',
      'category' => '',
      'level' => '9',
      'sort' => 'time',
      'order' => 'desc',
      'num' => '5',
      'state' => '1',
    ),
    'notice' => 
    array (
      'id' => '2',
      'type' => 'notice',
      'name' => '站内公告',
      'index' => '',
      'state' => '0',
      'gbook' => '',
      'gtype' => '0',
      'alert' => '',
      'num' => '3',
      'atype' => '0',
    ),
    'cinema' => 
    array (
      'id' => '3',
      'type' => 'common',
      'name' => '正在热播',
      'art' => '0',
      'adnum' => '1',
      'mid' => '1',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '1',
    ),
    'latest' => 
    array (
      'id' => '4',
      'type' => 'common',
      'name' => '最新影视',
      'art' => '0',
      'adnum' => '1',
      'mid' => '1',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '1',
    ),
    'sunday' => 
    array (
      'id' => '5',
      'type' => 'common',
      'name' => '周更剧场',
      'art' => '0',
      'adnum' => '1',
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
      'id' => '6',
      'type' => 'common',
      'name' => '最新资讯',
      'art' => '0',
      'adnum' => '1',
      'mid' => '2',
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
      'id' => '7',
      'type' => 'taobao',
      'name' => '淘客推荐',
      'qiang' => '',
      'category' => '',
      'brand' => '',
      'sort' => '0',
      'ver' => '1.2.4',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '0',
    ),
    'webnav' => 
    array (
      'id' => '8',
      'type' => 'common',
      'name' => '网址导航',
      'art' => '0',
      'adnum' => '1',
      'mid' => '11',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '6,12',
      'num' => '12',
      'state' => '0',
    ),
    'actors' => 
    array (
      'id' => '9',
      'type' => 'common',
      'name' => '热点人物',
      'art' => '0',
      'adnum' => '1',
      'mid' => '8',
      'category' => '',
      'level' => '',
      'sort' => 'time',
      'order' => 'desc',
      'count' => '4,6,8,12',
      'num' => '12',
      'state' => '0',
    ),
    'topics' => 
    array (
      'id' => '10',
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
      'id' => '11',
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
  'color' => 
  array (
    'type' => 
    array (
      'name' => '1',
    ),
    'color1' => 
    array (
	  'id' => '4',
      'name' => '主前景色',
      'class' => 'white',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#333333',
      'attr1' => 'background-color',
      'color1' => '#ffffff',
    ),
    'color2' => 
    array (
	  'id' => '3',
      'name' => '副前景色',
      'class' => 'front',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#333333',
      'attr1' => 'background-color',
      'color1' => '#f8f8f8',
    ),
    'color3' => 
    array (
	  'id' => '2',
      'name' => '主背景色',
      'class' => 'muted',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#666666',
      'attr1' => 'background-color',
      'color1' => '#f6f6f6',
    ),
    'color4' => 
    array (
	  'id' => '1',
      'name' => '副背景色',
      'class' => 'after',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#333333',
      'attr1' => 'background-color',
      'color1' => '#eaeaea',
    ),
    'color5' => 
    array (
	  'id' => '6',
      'name' => '主选中色',
      'class' => 'mojia',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#ffffff',
      'attr1' => 'background-image',
      'color1' => 'linear-gradient(to right, #04befe, #3385ff, #3385ff)',
    ),
    'color6' => 
    array (
	  'id' => '5',
      'name' => '副选中色',
      'class' => 'click',
      'type' => 'back',
      'attr2' => 'color',
      'color2' => '#333333',
      'attr1' => 'background-color',
      'color1' => '#f2f5fa',
    ),
    'color7' => 
    array (
	  'id' => '11',
      'name' => '文字反色',
      'class' => 'white',
      'type' => 'text',
      'attr' => 'color',
      'color' => '#ffffff',
    ),
    'color8' => 
    array (
	  'id' => '8',
      'name' => '主文字色',
      'class' => 'black',
      'type' => 'text',
      'attr' => 'color',
      'color' => '#333333',
    ),
    'color9' => 
    array (
	  'id' => '7',
      'name' => '副文字色',
      'class' => 'muted',
      'type' => 'text',
      'attr' => 'color',
      'color' => '#9fa0a4',
    ),
    'color10' => 
    array (
	  'id' => '10',
      'name' => '主选文字',
      'class' => 'mojia',
      'type' => 'text',
      'attr' => 'color',
      'color' => '#3385ff',
    ),
    'color11' => 
    array (
	  'id' => '9',
      'name' => '副选文字',
      'class' => 'click',
      'type' => 'text',
      'attr' => 'color',
      'color' => '#28bd98',
    ),
    'color12' => 
    array (
	  'id' => '12',
      'name' => '线条颜色',
      'class' => 'color',
      'type' => 'edge',
      'attr' => 'border-color',
      'color' => '#dedede',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index22' => 
    array (
      'aid' => '22',
      'info' => '文章筛选',
      'type' => 'article',
      'title' => '{$param.class}#$#{$obj.type_name}#$#{$param.level?"推荐":null}#$#{$param.letter}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
      'key' => '{$maccms.site_keywords}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url("label/rank")}',
      'des' => '{$maccms.site_description}',
    ),
    'index82' => 
    array (
      'aid' => '82',
      'info' => '演员筛选',
      'type' => 'article',
      'title' => '{$param.class}#$#{$obj.type_name}#$#{$param.level?"推荐":null}#$#{$param.letter}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
      'key' => '{:mac_default($obj.type_key,mac_filter_html($obj.type_name))}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_type($obj,["area"=>$param.area,"lang"=>$param.lang,"year"=>$param.year],"show")}',
      'des' => '{:mac_default($obj.type_des,$maccms.site_description)}',
    ),
    'index112' => 
    array (
      'aid' => '112',
      'info' => '网址筛选',
      'type' => 'article',
      'title' => '{$param.class}#$#{$obj.type_name}#$#{$param.level?"推荐":null}#$#{$param.letter}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src(mac_default($obj.type_logo,$mojia.sole.share.image),$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($mojia.sole.share.image,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($obj.vod_pic,$mojia.sole.share)}',
      'key' => '{$obj.vod_actor}#$#,#$#{$obj.vod_director}#$#,#$#{:mac_filter_html($obj.type.type_name)}#$#,#$#{$obj.vod_name}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_vod_detail($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index15' => 
    array (
      'aid' => '15',
      'info' => '视频播放',
      'type' => 'video',
      'title' => '{:mac_default($obj["vod_name"],"404 Not Found")}_{$obj["vod_play_list"][$param["sid"]]["urls"][$param["nid"]]["name"]}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src($obj.vod_pic,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($obj.vod_pic,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($obj.art_pic,$mojia.sole.share)}',
      'key' => '{$obj.art_tag},{:mac_filter_html($obj.type.type_name)},{:mac_default($obj.art_name,"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_art_detail($obj)}',
      'des' => '{:mac_default($obj["art_blurb"],mac_substring(mac_filter_html($obj["art_content"]),120))}',
    ),
    'index34' => 
    array (
      'aid' => '34',
      'info' => '专题详情',
      'type' => 'article',
      'title' => '{:mac_default(mac_default($obj.topic_title,$obj.topic_name),"404 Not Found")}_专题#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src($obj.topic_pic,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($details.data.marketingMainPic,$mojia.sole.share)}',
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
      'image' => '{:mao_img_src($obj.actor_pic,$mojia.sole.share)}',
      'key' => '{$obj["actor_alias"]},{:mac_filter_html($obj.type.type_name)},{:mac_default($obj["actor_name"],"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_actor_detail($obj)}',
      'des' => '{:mac_default($obj.actor_blurb,mac_substring(mac_filter_html($obj.actor_content),120))}',
    ),
    'index94' => 
    array (
      'aid' => '94',
      'info' => '角色详情',
      'type' => 'article',
      'title' => '{:mac_default($obj.role_name,"404 Not Found")}_{$obj.role_actor}饰演#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src($obj.role_pic,$mojia.sole.share)}',
      'key' => '{$obj.role_actor},{:mac_default($obj.role_name,"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_role_detail($obj)}',
      'des' => '{:macsubstring(mac_filter_html($obj.role_content),120)}',
    ),
    'index104' => 
    array (
      'aid' => '104',
      'info' => '剧情详情',
      'type' => 'article',
      'title' => '{:mac_default($obj["vod_name"],"404 Not Found")}_分集剧情_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src($obj.vod_pic,$mojia.sole.share)}',
      'key' => '{$obj.vod_actor},{$obj["vod_director"]},{:mac_filter_html($obj.type.type_name)},{:mac_default($obj["vod_name"],"404 Not Found")}',
      'url' => '{$maccms.http_type}#$#{$maccms.site_url}#$#{:mac_url_plot_detail($obj)}',
      'des' => '{:mac_default($obj.vod_blurb,mac_substring(mac_filter_html($obj.vod_content),120))}',
    ),
    'index114' => 
    array (
      'aid' => '114',
      'info' => '网址详情',
      'type' => 'article',
      'title' => '{:mac_default($obj["website_name"],"404 Not Found")}_{:mac_filter_html($obj.type.type_name)}#$# - #$#{$maccms.site_name}',
      'image' => '{:mao_img_src($obj.website_logo,$mojia.sole.share)}',
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
      'time' => '2022-05-20 13:14:20',
      'state' => '1',
    ),
    'cdn' => 
    array (
      'type' => 'cdn',
      'name' => '静态加速',
      'link' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu',
      'debug' => '1',
      'state' => '0',
    ),
    'demo' => 
    array (
      'type' => 'input',
      'name' => '站点演示',
      'text' => 'https://player.alicdn.com/video/aliyunmedia.mp4',
      'state' => '0',
    ),
    'browse' => 
    array (
      'type' => 'browse',
      'name' => '浏览控制',
      'preg' => '/MSIE\\s[0-9]/i',
      'state' => '0',
    ),
    'chain' => 
    array (
      'type' => 'chain',
      'name' => '图片盗链',
      'url' => '',
      'agent' => '0',
	  'code' => '0',
    ),
    'taoke' => 
    array (
      'type' => 'taoke',
      'name' => '淘客设置',
      'secret' => '',
      'key' => '',
      'pid' => '',
      'mid' => '',
    ),
    'share' => 
    array (
      'type' => 'share',
      'name' => '分享设置',
      'image' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu@main/static/image/image.jpg',
      'url' => '/template/mojiu/public/index.php/index/image?pic=',
      'agent' => '0',
	  'code' => '0',
      'api' => '',
      'host' => '',
      'regex' => '/(.*)/i',
    ),
    'advert' => 
    array (
      'type' => 'advert',
      'name' => '视频广告',
      'time' => '5',
      'group' => '',
      'link' => 'https://baidu.com',
    ),
    'play' => 
    array (
      'type' => 'play',
      'name' => '扫码观看',
      'pic' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu@main/static/image/maodajie.png',
      'send' => '',
      'category' => '',
      'code' => '',
      'time' => '1',
    ),
    'follow' => 
    array (
      'type' => 'follow',
      'name' => '关注我们',
      'pic' => 'https://cdn.jsdelivr.net/gh/maodajie/mojiu@main/static/image/maodajie.png',
      'text' => '欢迎关注',
      'icon1' => 'mo-icon-weibo-fill',
      'link1' => '',
      'icon2' => 'mo-icon-wechat-fill',
      'link2' => '',
      'icon3' => 'mo-icon-qq-fill',
      'link3' => '',
      'icon4' => 'mo-icon-alipay-fill',
      'link4' => '',
    ),
    'ajax' => 
    array (
      'type' => 'ajax',
      'name' => '触发任务',
      'mid' => '',
      'link' => '/api.php/timming/index',
    ),
  ),
);