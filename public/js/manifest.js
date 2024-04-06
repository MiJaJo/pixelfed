(()=>{"use strict";var e,r,n,o={},t={};function a(e){var r=t[e];if(void 0!==r)return r.exports;var n=t[e]={id:e,loaded:!1,exports:{}};return o[e].call(n.exports,n,n.exports,a),n.loaded=!0,n.exports}a.m=o,e=[],a.O=(r,n,o,t)=>{if(!n){var d=1/0;for(l=0;l<e.length;l++){for(var[n,o,t]=e[l],i=!0,c=0;c<n.length;c++)(!1&t||d>=t)&&Object.keys(a.O).every((e=>a.O[e](n[c])))?n.splice(c--,1):(i=!1,t<d&&(d=t));if(i){e.splice(l--,1);var s=o();void 0!==s&&(r=s)}}return r}t=t||0;for(var l=e.length;l>0&&e[l-1][2]>t;l--)e[l]=e[l-1];e[l]=[n,o,t]},a.n=e=>{var r=e&&e.__esModule?()=>e.default:()=>e;return a.d(r,{a:r}),r},a.d=(e,r)=>{for(var n in r)a.o(r,n)&&!a.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:r[n]})},a.f={},a.e=e=>Promise.all(Object.keys(a.f).reduce(((r,n)=>(a.f[n](e,r),r)),[])),a.u=e=>"js/"+{1179:"daci.chunk",1240:"discover~myhashtags.chunk",1645:"profile~following.bundle",2156:"dms.chunk",2966:"discover~hashtag.bundle",3688:"discover~serverfeed.chunk",4951:"home.chunk",6250:"discover~settings.chunk",6535:"discover.chunk",6740:"discover~memories.chunk",7399:"dms~message.chunk",7413:"error404.bundle",7521:"discover~findfriends.chunk",7744:"notifications.chunk",8087:"profile.chunk",8119:"i18n.bundle",8408:"post.chunk",8977:"profile~followers.bundle",9124:"compose.chunk",9919:"changelog.bundle"}[e]+"."+{1179:"34dc7bad3a0792cc",1240:"fed5d002f378231c",1645:"7ca7cfa5aaae75e2",2156:"2b55effc0e8ba89f",2966:"a0f00fc7df1f313c",3688:"262bf7e3bce843c3",4951:"0939a9050340302e",6250:"65d6f3cbe5323ed4",6535:"c2229e1d15bd3ada",6740:"37e0c325f900e163",7399:"976f7edaa6f71137",7413:"b397483e3991ab20",7521:"b1858bea66d9723b",7744:"0c5151643e4534aa",8087:"974dfe01c259b2b7",8119:"93a02e275ac1a708",8408:"58442e3e57b71587",8977:"5d796e79f32d066c",9124:"a0cfdf07f5062445",9919:"bf44edbbfa14bd53"}[e]+".js",a.miniCssF=e=>({2305:"css/portfolio",2540:"css/landing",3364:"css/admin",6952:"css/appdark",8252:"css/app",8759:"css/spa"}[e]+".css"),a.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),a.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),r={},n="pixelfed:",a.l=(e,o,t,d)=>{if(r[e])r[e].push(o);else{var i,c;if(void 0!==t)for(var s=document.getElementsByTagName("script"),l=0;l<s.length;l++){var f=s[l];if(f.getAttribute("src")==e||f.getAttribute("data-webpack")==n+t){i=f;break}}i||(c=!0,(i=document.createElement("script")).charset="utf-8",i.timeout=120,a.nc&&i.setAttribute("nonce",a.nc),i.setAttribute("data-webpack",n+t),i.src=e),r[e]=[o];var u=(n,o)=>{i.onerror=i.onload=null,clearTimeout(b);var t=r[e];if(delete r[e],i.parentNode&&i.parentNode.removeChild(i),t&&t.forEach((e=>e(o))),n)return n(o)},b=setTimeout(u.bind(null,void 0,{type:"timeout",target:i}),12e4);i.onerror=u.bind(null,i.onerror),i.onload=u.bind(null,i.onload),c&&document.head.appendChild(i)}},a.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.nmd=e=>(e.paths=[],e.children||(e.children=[]),e),a.p="/",(()=>{var e={461:0,6952:0,8252:0,2305:0,3364:0,2540:0,8759:0};a.f.j=(r,n)=>{var o=a.o(e,r)?e[r]:void 0;if(0!==o)if(o)n.push(o[2]);else if(/^((69|82)52|2305|2540|3364|461|8759)$/.test(r))e[r]=0;else{var t=new Promise(((n,t)=>o=e[r]=[n,t]));n.push(o[2]=t);var d=a.p+a.u(r),i=new Error;a.l(d,(n=>{if(a.o(e,r)&&(0!==(o=e[r])&&(e[r]=void 0),o)){var t=n&&("load"===n.type?"missing":n.type),d=n&&n.target&&n.target.src;i.message="Loading chunk "+r+" failed.\n("+t+": "+d+")",i.name="ChunkLoadError",i.type=t,i.request=d,o[1](i)}}),"chunk-"+r,r)}},a.O.j=r=>0===e[r];var r=(r,n)=>{var o,t,[d,i,c]=n,s=0;if(d.some((r=>0!==e[r]))){for(o in i)a.o(i,o)&&(a.m[o]=i[o]);if(c)var l=c(a)}for(r&&r(n);s<d.length;s++)t=d[s],a.o(e,t)&&e[t]&&e[t][0](),e[t]=0;return a.O(l)},n=self.webpackChunkpixelfed=self.webpackChunkpixelfed||[];n.forEach(r.bind(null,0)),n.push=r.bind(null,n.push.bind(n))})(),a.nc=void 0})();