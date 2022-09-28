/**! Jarallax Version : 1.7.3 GitHub  : https://github.com/nk-o/jarallax */
!function(a){"use strict";function l(){j=a.innerWidth||document.documentElement.clientWidth,k=a.innerHeight||document.documentElement.clientHeight}function o(a,b,c){a.addEventListener?a.addEventListener(b,c):a.attachEvent("on"+b,function(){c.call(a)})}function p(b){a.requestAnimationFrame(function(){"scroll"!==b.type&&l();for(var a=0,c=m.length;a<c;a++)"scroll"!==b.type&&(m[a].coverImage(),m[a].clipContainer()),m[a].onScroll()})}Date.now||(Date.now=function(){return(new Date).getTime()}),a.requestAnimationFrame||function(){for(var b=["webkit","moz"],c=0;c<b.length&&!a.requestAnimationFrame;++c){var d=b[c];a.requestAnimationFrame=a[d+"RequestAnimationFrame"],a.cancelAnimationFrame=a[d+"CancelAnimationFrame"]||a[d+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(a.navigator.userAgent)||!a.requestAnimationFrame||!a.cancelAnimationFrame){var e=0;a.requestAnimationFrame=function(a){var b=Date.now(),c=Math.max(e+16,b);return setTimeout(function(){a(e=c)},c-b)},a.cancelAnimationFrame=clearTimeout}}();var j,k,b=function(){if(!a.getComputedStyle)return!1;var c,b=document.createElement("p"),d={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};(document.body||document.documentElement).insertBefore(b,null);for(var e in d)void 0!==b.style[e]&&(b.style[e]="translate3d(1px,1px,1px)",c=a.getComputedStyle(b).getPropertyValue(d[e]));return(document.body||document.documentElement).removeChild(b),void 0!==c&&c.length>0&&"none"!==c}(),c=navigator.userAgent.toLowerCase().indexOf("android")>-1,d=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!a.MSStream,e=!!a.opera,f=/Edge\/\d+/.test(navigator.userAgent),g=/Trident.*rv[ :]*11\./.test(navigator.userAgent),h=!!Function("/*@cc_on return document.documentMode===10@*/")(),i=document.all&&!a.atob;l();var m=[],n=function(){function b(b,i){var k,j=this;if(j.$item=b,j.defaults={type:"scroll",speed:.5,imgSrc:null,imgWidth:null,imgHeight:null,enableTransform:!0,elementInViewport:null,zIndex:-100,noAndroid:!1,noIos:!0,onScroll:null,onInit:null,onDestroy:null,onCoverImage:null},k=JSON.parse(j.$item.getAttribute("data-jarallax")||"{}"),j.options=j.extend({},j.defaults,k,i),!(c&&j.options.noAndroid||d&&j.options.noIos)){j.options.speed=Math.min(2,Math.max(-1,parseFloat(j.options.speed)));var l=j.options.elementInViewport;l&&"object"==typeof l&&void 0!==l.length&&(l=l[0]),!l instanceof Element&&(l=null),j.options.elementInViewport=l,j.instanceID=a++,j.image={src:j.options.imgSrc||null,$container:null,$item:null,width:j.options.imgWidth||null,height:j.options.imgHeight||null,useImgTag:d||c||e||g||h||f},j.initImg()&&j.init()}}var a=0;return b}();n.prototype.css=function(b,c){if("string"==typeof c)return a.getComputedStyle?a.getComputedStyle(b).getPropertyValue(c):b.style[c];c.transform&&(c.WebkitTransform=c.MozTransform=c.transform);for(var d in c)b.style[d]=c[d];return b},n.prototype.extend=function(a){a=a||{};for(var b=1;b<arguments.length;b++)if(arguments[b])for(var c in arguments[b])arguments[b].hasOwnProperty(c)&&(a[c]=arguments[b][c]);return a},n.prototype.initImg=function(){var a=this;return null===a.image.src&&(a.image.src=a.css(a.$item,"background-image").replace(/^url\(['"]?/g,"").replace(/['"]?\)$/g,"")),!(!a.image.src||"none"===a.image.src)},n.prototype.init=function(){function g(){a.coverImage(),a.clipContainer(),a.onScroll(!0),a.options.onInit&&a.options.onInit.call(a),setTimeout(function(){a.$item&&a.css(a.$item,{"background-image":"none","background-attachment":"scroll","background-size":"auto"})},0)}var a=this,c={position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden",pointerEvents:"none"},d={position:"fixed"};a.$item.setAttribute("data-jarallax-original-styles",a.$item.getAttribute("style")),"static"===a.css(a.$item,"position")&&a.css(a.$item,{position:"relative"}),"auto"===a.css(a.$item,"z-index")&&a.css(a.$item,{zIndex:0}),a.image.$container=document.createElement("div"),a.css(a.image.$container,c),a.css(a.image.$container,{visibility:"hidden","z-index":a.options.zIndex}),a.image.$container.setAttribute("id","jarallax-container-"+a.instanceID),a.$item.appendChild(a.image.$container),a.image.useImgTag&&b&&a.options.enableTransform?(a.image.$item=document.createElement("img"),a.image.$item.setAttribute("src",a.image.src),d=a.extend({"max-width":"none"},c,d)):(a.image.$item=document.createElement("div"),d=a.extend({"background-position":"50% 50%","background-size":"100% auto","background-repeat":"no-repeat no-repeat","background-image":'url("'+a.image.src+'")'},c,d)),i&&(d.backgroundAttachment="fixed"),a.parentWithTransform=0;for(var e=a.$item;null!==e&&e!==document&&0===a.parentWithTransform;){var f=a.css(e,"-webkit-transform")||a.css(e,"-moz-transform")||a.css(e,"transform");f&&"none"!==f&&(a.parentWithTransform=1,a.css(a.image.$container,{transform:"translateX(0) translateY(0)"})),e=e.parentNode}a.css(a.image.$item,d),a.image.$container.appendChild(a.image.$item),a.image.width&&a.image.height?g():a.getImageSize(a.image.src,function(b,c){a.image.width=b,a.image.height=c,g()}),m.push(a)},n.prototype.destroy=function(){for(var a=this,b=0,c=m.length;b<c;b++)if(m[b].instanceID===a.instanceID){m.splice(b,1);break}var d=a.$item.getAttribute("data-jarallax-original-styles");a.$item.removeAttribute("data-jarallax-original-styles"),"null"===d?a.$item.removeAttribute("style"):a.$item.setAttribute("style",d),a.$clipStyles&&a.$clipStyles.parentNode.removeChild(a.$clipStyles),a.image.$container.parentNode.removeChild(a.image.$container),a.options.onDestroy&&a.options.onDestroy.call(a),delete a.$item.jarallax;for(var e in a)delete a[e]},n.prototype.getImageSize=function(a,b){if(a&&b){var c=new Image;c.onload=function(){b(c.width,c.height)},c.src=a}},n.prototype.clipContainer=function(){if(!i){var a=this,b=a.image.$container.getBoundingClientRect(),c=b.width,d=b.height;if(!a.$clipStyles){a.$clipStyles=document.createElement("style"),a.$clipStyles.setAttribute("type","text/css"),a.$clipStyles.setAttribute("id","#jarallax-clip-"+a.instanceID);(document.head||document.getElementsByTagName("head")[0]).appendChild(a.$clipStyles)}var f=["#jarallax-container-"+a.instanceID+" {","   clip: rect(0 "+c+"px "+d+"px 0);","   clip: rect(0, "+c+"px, "+d+"px, 0);","}"].join("\n");a.$clipStyles.styleSheet?a.$clipStyles.styleSheet.cssText=f:a.$clipStyles.innerHTML=f}},n.prototype.coverImage=function(){var a=this;if(a.image.width&&a.image.height){var c=a.image.$container.getBoundingClientRect(),d=c.width,e=c.height,f=c.left,g=a.image.width,h=a.image.height,i=a.options.speed,j="scroll"===a.options.type||"scroll-opacity"===a.options.type,l=0,m=0,n=e,o=0,p=0;j&&(l=i<0?i*Math.max(e,k):i*(e+k),i>1?n=Math.abs(l-k):i<0?n=l/i+Math.abs(l):n+=Math.abs(k-e)*(1-i),l/=2),m=n*g/h,m<d&&(m=d,n=m*h/g),a.bgPosVerticalCenter=0,!(j&&n<k)||b&&a.options.enableTransform||(a.bgPosVerticalCenter=(k-n)/2,n=k),j?(o=f+(d-m)/2,p=(k-n)/2):(o=(d-m)/2,p=(e-n)/2),b&&a.options.enableTransform&&a.parentWithTransform&&(o-=f),a.parallaxScrollDistance=l,a.css(a.image.$item,{width:m+"px",height:n+"px",marginLeft:o+"px",marginTop:p+"px"}),a.options.onCoverImage&&a.options.onCoverImage.call(a)}},n.prototype.isVisible=function(){return this.isElementInViewport||!1},n.prototype.onScroll=function(a){var c=this;if(c.image.width&&c.image.height){var d=c.$item.getBoundingClientRect(),e=d.top,f=d.height,g={position:"absolute",visibility:"visible",backgroundPosition:"50% 50%"},h=d;if(c.options.elementInViewport&&(h=c.options.elementInViewport.getBoundingClientRect()),c.isElementInViewport=h.bottom>=0&&h.right>=0&&h.top<=k&&h.left<=j,a||c.isElementInViewport){var l=Math.max(0,e),m=Math.max(0,f+e),n=Math.max(0,-e),o=Math.max(0,e+f-k),p=Math.max(0,f-(e+f-k)),q=Math.max(0,-e+k-f),r=1-2*(k-e)/(k+f),s=1;if(f<k?s=1-(n||o)/f:m<=k?s=m/k:p<=k&&(s=p/k),"opacity"!==c.options.type&&"scale-opacity"!==c.options.type&&"scroll-opacity"!==c.options.type||(g.transform="translate3d(0, 0, 0)",g.opacity=s),"scale"===c.options.type||"scale-opacity"===c.options.type){var t=1;c.options.speed<0?t-=c.options.speed*s:t+=c.options.speed*(1-s),g.transform="scale("+t+") translate3d(0, 0, 0)"}if("scroll"===c.options.type||"scroll-opacity"===c.options.type){var u=c.parallaxScrollDistance*r;b&&c.options.enableTransform?(c.parentWithTransform&&(u-=e),g.transform="translate3d(0, "+u+"px, 0)"):c.image.useImgTag?g.top=u+"px":(c.bgPosVerticalCenter&&(u+=c.bgPosVerticalCenter),g.backgroundPosition="50% "+u+"px"),g.position=i?"absolute":"fixed"}c.css(c.image.$item,g),c.options.onScroll&&c.options.onScroll.call(c,{section:d,beforeTop:l,beforeTopEnd:m,afterTop:n,beforeBottom:o,beforeBottomEnd:p,afterBottom:q,visiblePercent:s,fromViewportCenter:r})}}},o(a,"scroll",p),o(a,"resize",p),o(a,"orientationchange",p),o(a,"load",p);var q=function(a){("object"==typeof HTMLElement?a instanceof HTMLElement:a&&"object"==typeof a&&null!==a&&1===a.nodeType&&"string"==typeof a.nodeName)&&(a=[a]);var f,b=arguments[1],c=Array.prototype.slice.call(arguments,2),d=a.length,e=0;for(e;e<d;e++)if("object"==typeof b||void 0===b?a[e].jarallax||(a[e].jarallax=new n(a[e],b)):a[e].jarallax&&(f=a[e].jarallax[b].apply(a[e].jarallax,c)),void 0!==f)return f;return a};q.constructor=n;var r=a.jarallax;if(a.jarallax=q,a.jarallax.noConflict=function(){return a.jarallax=r,this},"undefined"!=typeof jQuery){var s=function(){var b=arguments||[];Array.prototype.unshift.call(b,this);var c=q.apply(a,b);return"object"!=typeof c?c:this};s.constructor=n;var t=jQuery.fn.jarallax;jQuery.fn.jarallax=s,jQuery.fn.jarallax.noConflict=function(){return jQuery.fn.jarallax=t,this}}o(a,"DOMContentLoaded",function(){q(document.querySelectorAll("[data-jarallax], [data-jarallax-video]"))})}(window),function(a){"use strict";function b(a){a=a||{};for(var b=1;b<arguments.length;b++)if(arguments[b])for(var c in arguments[b])arguments[b].hasOwnProperty(c)&&(a[c]=arguments[b][c]);return a}function c(){this._done=[],this._fail=[]}function d(a,b,c){a.addEventListener?a.addEventListener(b,c):a.attachEvent("on"+b,function(){c.call(a)})}c.prototype={execute:function(a,b){var c=a.length;for(b=Array.prototype.slice.call(b);c--;)a[c].apply(null,b)},resolve:function(){this.execute(this._done,arguments)},reject:function(){this.execute(this._fail,arguments)},done:function(a){this._done.push(a)},fail:function(a){this._fail.push(a)}};var e=function(){function c(c,d){var e=this;e.url=c,e.options_default={autoplay:1,loop:1,mute:1,controls:0,startTime:0,endTime:0},e.options=b({},e.options_default,d),e.videoID=e.parseURL(c),e.videoID&&(e.ID=a++,e.loadAPI(),e.init())}var a=0;return c}();e.prototype.parseURL=function(a){function b(a){var b=/.*(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/,c=a.match(b);return!(!c||11!==c[1].length)&&c[1]}function c(a){var b=/https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)/,c=a.match(b);return!(!c||!c[3])&&c[3]}function d(a){for(var b=a.split(/,(?=mp4\:|webm\:|ogv\:|ogg\:)/),c={},d=0,e=0;e<b.length;e++){var f=b[e].match(/^(mp4|webm|ogv|ogg)\:(.*)/);f&&f[1]&&f[2]&&(c["ogv"===f[1]?"ogg":f[1]]=f[2],d=1)}return!!d&&c}var e=b(a),f=c(a),g=d(a);return e?(this.type="youtube",e):f?(this.type="vimeo",f):!!g&&(this.type="local",g)},e.prototype.isValid=function(){return!!this.videoID},e.prototype.on=function(a,b){this.userEventsList=this.userEventsList||[],(this.userEventsList[a]||(this.userEventsList[a]=[])).push(b)},e.prototype.off=function(a,b){if(this.userEventsList&&this.userEventsList[a])if(b)for(var c=0;c<this.userEventsList[a].length;c++)this.userEventsList[a][c]===b&&(this.userEventsList[a][c]=!1);else delete this.userEventsList[a]},e.prototype.fire=function(a){var b=[].slice.call(arguments,1);if(this.userEventsList&&void 0!==this.userEventsList[a])for(var c in this.userEventsList[a])this.userEventsList[a][c]&&this.userEventsList[a][c].apply(this,b)},e.prototype.play=function(a){var b=this;b.player&&("youtube"===b.type&&b.player.playVideo&&(void 0!==a&&b.player.seekTo(a||0),b.player.playVideo()),"vimeo"===b.type&&(void 0!==a&&b.player.setCurrentTime(a),b.player.getPaused().then(function(a){a&&b.player.play()})),"local"===b.type&&(void 0!==a&&(b.player.currentTime=a),b.player.play()))},e.prototype.pause=function(){this.player&&("youtube"===this.type&&this.player.pauseVideo&&this.player.pauseVideo(),"vimeo"===this.type&&this.player.pause(),"local"===this.type&&this.player.pause())},e.prototype.getImageURL=function(a){var b=this;if(b.videoImage)return void a(b.videoImage);if("youtube"===b.type){var c=["maxresdefault","sddefault","hqdefault","0"],d=0,e=new Image;e.onload=function(){120!==(this.naturalWidth||this.width)||d===c.length-1?(b.videoImage="https://img.youtube.com/vi/"+b.videoID+"/"+c[d]+".jpg",a(b.videoImage)):(d++,this.src="https://img.youtube.com/vi/"+b.videoID+"/"+c[d]+".jpg")},e.src="https://img.youtube.com/vi/"+b.videoID+"/"+c[d]+".jpg"}if("vimeo"===b.type){var f=new XMLHttpRequest;f.open("GET","https://vimeo.com/api/v2/video/"+b.videoID+".json",!0),f.onreadystatechange=function(){if(4===this.readyState&&this.status>=200&&this.status<400){var c=JSON.parse(this.responseText);b.videoImage=c[0].thumbnail_large,a(b.videoImage)}},f.send(),f=null}},e.prototype.getIframe=function(b){var c=this;if(c.$iframe)return void b(c.$iframe);c.onAPIready(function(){function k(a,b,c){var d=document.createElement("source");d.src=b,d.type=c,a.appendChild(d)}var e;if(c.$iframe||(e=document.createElement("div"),e.style.display="none"),"youtube"===c.type){c.playerOptions={},c.playerOptions.videoId=c.videoID,c.playerOptions.playerVars={autohide:1,rel:0,autoplay:0},c.options.controls||(c.playerOptions.playerVars.iv_load_policy=3,c.playerOptions.playerVars.modestbranding=1,c.playerOptions.playerVars.controls=0,c.playerOptions.playerVars.showinfo=0,c.playerOptions.playerVars.disablekb=1);var f,g;c.playerOptions.events={onReady:function(a){c.options.mute&&a.target.mute(),c.options.autoplay&&c.play(c.options.startTime),c.fire("ready",a)},onStateChange:function(a){c.options.loop&&a.data===YT.PlayerState.ENDED&&c.play(c.options.startTime),f||a.data!==YT.PlayerState.PLAYING||(f=1,c.fire("started",a)),a.data===YT.PlayerState.PLAYING&&c.fire("play",a),a.data===YT.PlayerState.PAUSED&&c.fire("pause",a),a.data===YT.PlayerState.ENDED&&c.fire("end",a),c.options.endTime&&(a.data===YT.PlayerState.PLAYING?g=setInterval(function(){c.options.endTime&&c.player.getCurrentTime()>=c.options.endTime&&(c.options.loop?c.play(c.options.startTime):c.pause())},150):clearInterval(g))}};var h=!c.$iframe;if(h){var i=document.createElement("div");i.setAttribute("id",c.playerID),e.appendChild(i),document.body.appendChild(e)}c.player=c.player||new a.YT.Player(c.playerID,c.playerOptions),h&&(c.$iframe=document.getElementById(c.playerID),c.videoWidth=parseInt(c.$iframe.getAttribute("width"),10)||1280,c.videoHeight=parseInt(c.$iframe.getAttribute("height"),10)||720)}if("vimeo"===c.type){c.playerOptions="",c.playerOptions+="player_id="+c.playerID,c.playerOptions+="&autopause=0",c.options.controls||(c.playerOptions+="&badge=0&byline=0&portrait=0&title=0"),c.playerOptions+="&autoplay="+(c.options.autoplay?"1":"0"),c.playerOptions+="&loop="+(c.options.loop?1:0),c.$iframe||(c.$iframe=document.createElement("iframe"),c.$iframe.setAttribute("id",c.playerID),c.$iframe.setAttribute("src","https://player.vimeo.com/video/"+c.videoID+"?"+c.playerOptions),c.$iframe.setAttribute("frameborder","0"),e.appendChild(c.$iframe),document.body.appendChild(e)),c.player=c.player||new Vimeo.Player(c.$iframe),c.player.getVideoWidth().then(function(a){c.videoWidth=a||1280}),c.player.getVideoHeight().then(function(a){c.videoHeight=a||720}),c.player.setVolume(c.options.mute?0:100);var j;c.player.on("timeupdate",function(a){j||c.fire("started",a),j=1,c.options.endTime&&c.options.endTime&&a.seconds>=c.options.endTime&&(c.options.loop?c.play(c.options.startTime):c.pause())}),c.player.on("play",function(a){c.fire("play",a),c.options.startTime&&0===a.seconds&&c.play(c.options.startTime)}),c.player.on("pause",function(a){c.fire("pause",a)}),c.player.on("ended",function(a){c.fire("end",a)}),c.player.on("loaded",function(a){c.fire("ready",a)})}if("local"===c.type){if(!c.$iframe){c.$iframe=document.createElement("video"),c.options.mute&&(c.$iframe.muted=!0),c.options.loop&&(c.$iframe.loop=!0),c.$iframe.setAttribute("id",c.playerID),e.appendChild(c.$iframe),document.body.appendChild(e);for(var l in c.videoID)k(c.$iframe,c.videoID[l],"video/"+l)}c.player=c.player||c.$iframe;var m;d(c.player,"playing",function(a){m||c.fire("started",a),m=1}),d(c.player,"timeupdate",function(){c.options.endTime&&c.options.endTime&&this.currentTime>=c.options.endTime&&(c.options.loop?c.play(c.options.startTime):c.pause())}),d(c.player,"play",function(a){c.fire("play",a)}),d(c.player,"pause",function(a){c.fire("pause",a)}),d(c.player,"ended",function(a){c.fire("end",a)}),d(c.player,"loadedmetadata",function(){c.videoWidth=this.videoWidth||1280,c.videoHeight=this.videoHeight||720,c.fire("ready"),c.options.autoplay&&c.play(c.options.startTime)})}b(c.$iframe)})},e.prototype.init=function(){var a=this;a.playerID="VideoWorker-"+a.ID};var f=0,g=0;e.prototype.loadAPI=function(){var b=this;if(!f||!g){var c="";if("youtube"!==b.type||f||(f=1,c="//www.youtube.com/iframe_api"),"vimeo"!==b.type||g||(g=1,c="//player.vimeo.com/api/player.js"),c){"file://"===a.location.origin&&(c="http:"+c);var d=document.createElement("script"),e=document.getElementsByTagName("head")[0];d.src=c,e.appendChild(d),e=null,d=null}}};var h=0,i=0,j=new c,k=new c;e.prototype.onAPIready=function(b){var c=this;if("youtube"===c.type&&("undefined"!=typeof YT&&0!==YT.loaded||h?"object"==typeof YT&&1===YT.loaded?b():j.done(function(){b()}):(h=1,a.onYouTubeIframeAPIReady=function(){a.onYouTubeIframeAPIReady=null,j.resolve("done"),b()})),"vimeo"===c.type)if("undefined"!=typeof Vimeo||i)"undefined"!=typeof Vimeo?b():k.done(function(){b()});else{i=1;var d=setInterval(function(){"undefined"!=typeof Vimeo&&(clearInterval(d),k.resolve("done"),b())},20)}"local"===c.type&&b()},a.VideoWorker=e}(window),function(){"use strict";if("undefined"!=typeof jarallax){var a=jarallax.constructor,b=a.prototype.init;a.prototype.init=function(){var a=this;b.apply(a),a.video&&a.video.getIframe(function(b){var c=b.parentNode;a.css(b,{position:"fixed",top:"0px",left:"0px",right:"0px",bottom:"0px",width:"100%",height:"100%",maxWidth:"none",maxHeight:"none",visibility:"visible",margin:0,zIndex:-1}),a.$video=b,a.image.$container.appendChild(b),c.parentNode.removeChild(c)})};var c=a.prototype.coverImage;a.prototype.coverImage=function(){var a=this;c.apply(a),a.video&&"IFRAME"===a.image.$item.nodeName&&a.css(a.image.$item,{height:a.image.$item.getBoundingClientRect().height+400+"px",marginTop:-200+parseFloat(a.css(a.image.$item,"margin-top"))+"px"})};var d=a.prototype.initImg;a.prototype.initImg=function(){var a=this,b=d.apply(a);if(a.options.videoSrc||(a.options.videoSrc=a.$item.getAttribute("data-jarallax-video")||!1),a.options.videoSrc){var c=new VideoWorker(a.options.videoSrc,{startTime:a.options.videoStartTime||0,endTime:a.options.videoEndTime||0});if(c.isValid()&&(a.image.useImgTag=!0,c.on("ready",function(){var b=a.onScroll;a.onScroll=function(){b.apply(a),a.isVisible()?c.play():c.pause()}}),c.on("started",function(){a.image.$default_item=a.image.$item,a.image.$item=a.$video,a.image.width=a.options.imgWidth=a.video.videoWidth||1280,a.image.height=a.options.imgHeight=a.video.videoHeight||720,a.coverImage(),a.clipContainer(),a.onScroll(),a.image.$default_item&&(a.image.$default_item.style.display="none")}),a.video=c,"local"!==c.type&&c.getImageURL(function(b){a.image.src=b,a.init()})),"local"!==c.type)return!1;if(!b)return a.image.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",!0}return b};var e=a.prototype.destroy;a.prototype.destroy=function(){var a=this;e.apply(a)}}}();