layui.define("jquery",(function(l){"use strict";var e=layui.$,o=function(l){};o.prototype.load=function(l){var o,t,i,n=this,r=0,a=e((l=l||{}).elem);if(a[0]){var c=e(l.scrollElem||document),m=l.mb||50,f=!("isAuto"in l)||l.isAuto,s=l.end||"没有更多了",u=l.scrollElem&&l.scrollElem!==document,y="<cite>加载更多</cite>",d=e('<div class="layui-flow-more"><a href="javascript:;">'+y+"</a></div>");a.find(".layui-flow-more")[0]||a.append(d);var h=function(l,i){l=e(l),d.before(l),(i=0==i||null)?d.html(s):d.find("a").html(y),t=i,o=null,v&&v()},p=function(){o=!0,d.find("a").html('<i class="layui-anim layui-anim-rotate layui-anim-loop layui-icon ">&#xe63e;</i>'),"function"==typeof l.done&&l.done(++r,h)};if(p(),d.find("a").on("click",(function(){e(this),t||o||p()})),l.isLazyimg)var v=n.lazyimg({elem:l.elem+" img",scrollElem:l.scrollElem});return f?(c.on("scroll",(function(){var l=e(this),n=l.scrollTop();i&&clearTimeout(i),!t&&a.width()&&(i=setTimeout((function(){var t=u?l.height():e(window).height();(u?l.prop("scrollHeight"):document.documentElement.scrollHeight)-n-t<=m&&(o||p())}),100))})),n):n}},o.prototype.lazyimg=function(l){var o,t,i=this,n=0,r=e((l=l||{}).scrollElem||document),a=l.elem||"img",c=l.scrollElem&&l.scrollElem!==document,m=function(l,e){var o=r.scrollTop(),t=o+e,a=c?l.offset().top-r.offset().top+o:l.offset().top;if(a>=o&&a<=t&&!l.attr("src")){var m=l.attr("lay-src");layui.img(m,(function(){var e=i.lazyimg.elem.eq(n);l.attr("src",m).removeAttr("lay-src"),e[0]&&f(e),n++}))}},f=function(l,o){var t=c?(o||r).height():e(window).height(),f=r.scrollTop(),s=f+t;if(i.lazyimg.elem=e(a),l)m(l,t);else for(var u=0;u<i.lazyimg.elem.length;u++){var y=i.lazyimg.elem.eq(u),d=c?y.offset().top-r.offset().top+f:y.offset().top;if(m(y,t),n=u,d>s)break}};(f(),o)||(r.on("scroll",(function(){var l=e(this);t&&clearTimeout(t),t=setTimeout((function(){f(null,l)}),50)})),o=!0);return f},l("flow",new o)}));