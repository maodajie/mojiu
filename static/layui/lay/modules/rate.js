layui.define("jquery",(function(e){"use strict";var a=layui.jquery,l={config:{},index:layui.rate?layui.rate.index+1e4:0,set:function(e){var l=this;return l.config=a.extend({},l.config,e),l},on:function(e,a){return layui.onevent.call(this,n,e,a)}},i=function(){var e=this;return{setvalue:function(a){e.setvalue.call(e,a)},config:e.config}},n="rate",t="layui-icon-rate",o="layui-icon-rate-solid",s="layui-icon-rate-half",u="layui-icon-rate-solid layui-icon-rate-half",r="layui-icon-rate layui-icon-rate-half",c=function(e){var i=this;i.index=++l.index,i.config=a.extend({},i.config,l.config,e),i.render()};c.prototype.config={length:5,text:!1,readonly:!1,half:!1,value:0,theme:""},c.prototype.render=function(){var e=this,l=e.config,i=l.theme?'style="color: '+l.theme+';"':"";l.elem=a(l.elem),l.value>l.length&&(l.value=l.length),parseInt(l.value)!==l.value&&(l.half||(l.value=Math.ceil(l.value)-l.value<.5?Math.ceil(l.value):Math.floor(l.value)));for(var n='<ul class="layui-rate" '+(l.readonly?"readonly":"")+">",s=1;s<=l.length;s++){var u='<li class="layui-inline"><i class="layui-icon '+(s>Math.floor(l.value)?t:o)+'" '+i+"></i></li>";l.half&&parseInt(l.value)!==l.value&&s==Math.ceil(l.value)?n=n+'<li><i class="layui-icon layui-icon-rate-half" '+i+"></i></li>":n+=u}n+="</ul>"+(l.text?'<span class="layui-inline">'+l.value+"星":"")+"</span>";var r=l.elem,c=r.next(".layui-rate");c[0]&&c.remove(),e.elemTemp=a(n),l.span=e.elemTemp.next("span"),l.setText&&l.setText(l.value),r.html(e.elemTemp),r.addClass("layui-inline"),l.readonly||e.action()},c.prototype.setvalue=function(e){this.config.value=e,this.render()},c.prototype.action=function(){var e=this.config,l=this.elemTemp,i=l.find("i").width();l.children("li").each((function(n){var c=n+1,f=a(this);f.on("click",(function(n){(e.value=c,e.half)&&(n.pageX-a(this).offset().left<=i/2&&(e.value=e.value-.5));e.text&&l.next("span").text(e.value+"星"),e.choose&&e.choose(e.value),e.setText&&e.setText(e.value)})),f.on("mousemove",(function(n){(l.find("i").each((function(){a(this).addClass(t).removeClass(u)})),l.find("i:lt("+c+")").each((function(){a(this).addClass(o).removeClass(r)})),e.half)&&(n.pageX-a(this).offset().left<=i/2&&f.children("i").addClass(s).removeClass(o))})),f.on("mouseleave",(function(){l.find("i").each((function(){a(this).addClass(t).removeClass(u)})),l.find("i:lt("+Math.floor(e.value)+")").each((function(){a(this).addClass(o).removeClass(r)})),e.half&&parseInt(e.value)!==e.value&&l.children("li:eq("+Math.floor(e.value)+")").children("i").addClass(s).removeClass("layui-icon-rate-solid layui-icon-rate")}))}))},c.prototype.events=function(){this.config},l.render=function(e){var a=new c(e);return i.call(a)},e(n,l)}));