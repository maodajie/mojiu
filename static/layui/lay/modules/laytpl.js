layui.define((function(e){"use strict";var r={open:"{{",close:"}}"},n=function(e,n,c){var t=["#([\\s\\S])+?","([^{#}])*?"][e||0];return o((n||"")+r.open+t+r.close+(c||""))},c=function(e){return String(e||"").replace(/&(?!#?[a-zA-Z0-9]+;)/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/'/g,"&#39;").replace(/"/g,"&quot;")},t=function(e,r){var n="Laytpl Error：";return"object"==typeof console&&console.error(n+e+"\n"+(r||"")),n+e},o=function(e){return new RegExp(e,"g")},p=function(e){this.tpl=e};p.pt=p.prototype,window.errors=0,p.pt.parse=function(e,p){var a=e,l=o("^"+r.open+"#",""),u=o(r.close+"$","");e='"use strict";var view = "'+(e=e.replace(/\s+|\r|\t|\n/g," ").replace(o(r.open+"#"),r.open+"# ").replace(o(r.close+"}"),"} "+r.close).replace(/\\/g,"\\\\").replace(o(r.open+"!(.+?)!"+r.close),(function(e){return e.replace(o("^"+r.open+"!"),"").replace(o("!"+r.close),"").replace(o(r.open+"|"+r.close),(function(e){return e.replace(/(.)/g,"\\$1")}))})).replace(/(?="|')/g,"\\").replace(n(),(function(e){return'";'+(e=e.replace(l,"").replace(u,"")).replace(/\\/g,"")+';view+="'})).replace(n(1),(function(e){var n='"+(';return e.replace(/\s/g,"")===r.open+r.close?"":(e=e.replace(o(r.open+"|"+r.close),""),/^=/.test(e)&&(e=e.replace(/^=/,""),n='"+_escape_('),n+e.replace(/\\/g,"")+')+"')})))+'";return view;';try{return this.cache=e=new Function("d, _escape_",e),e(p,c)}catch(i){return delete this.cache,t(i,a)}},p.pt.render=function(e,r){var n,o=this;return e?(n=o.cache?o.cache(e,c):o.parse(o.tpl,e),r?void r(n):n):t("no data")};var a=function(e){return"string"!=typeof e?t("Template not found"):new p(e)};a.config=function(e){for(var n in e=e||{})r[n]=e[n]},a.v="1.2.0",e("laytpl",a)}));