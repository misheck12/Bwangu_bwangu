/*! CSS Browser Selector 0.7 */
;function log(e){if(window.console&&showLog){console.log(e)}}function css_browser_selector(e){function w(){var e=(window.outerWidth||y.clientWidth)-34;var i=window.outerHeight||y.clientHeight;var s=9999;t.orientation=e<i?"portrait":"landscape";y.className=y.className.replace(/ ?orientation_\w+/g,"").replace(/ [min|max|cl]+[w|h]_\d+/g,"");for(var o=r-1;o>=0;o--){if(e>=n[o]){t.minw=n[o];if(o<=2){t.maxw=n[o+1]-1}else{t.maxw=s}break}}widthClasses="";for(var u in t){widthClasses+=" "+u+"_"+t[u]}y.className=y.className+widthClasses;return widthClasses}function T(){if(window.devicePixelRatio===undefined)return 1;return window.devicePixelRatio}var t={},n=[0,768,980,1200],r=n.length,i=e.toLowerCase(),s=function(e){return RegExp(e,"i").test(i)},o=function(e,t){t=t.replace(".","_");var n=t.indexOf("_"),r="";while(n>0){r+=" "+e+t.substring(0,n);n=t.indexOf("_",n+1)}r+=" "+e+t;return r},u="gecko",a="webkit",f="chrome",l="firefox",c="safari",h="opera",p="mobile",d="android",v="blackberry",m="lang_",g="device_",y=document.documentElement,b=[!/opera|webtv/i.test(i)&&/msie\s(\d+)/.test(i)?"ie ie"+(/trident\/4\.0/.test(i)?"8":RegExp.$1):s("firefox/")?u+" "+l+(/firefox\/((\d+)(\.(\d+))(\.\d+)*)/.test(i)?" "+l+RegExp.$2+" "+l+RegExp.$2+"_"+RegExp.$4:""):s("gecko/")?u:s("opera")?h+(/version\/((\d+)(\.(\d+))(\.\d+)*)/.test(i)?" "+h+RegExp.$2+" "+h+RegExp.$2+"_"+RegExp.$4:/opera(\s|\/)(\d+)\.(\d+)/.test(i)?" "+h+RegExp.$2+" "+h+RegExp.$2+"_"+RegExp.$3:""):s("konqueror")?"konqueror":s("blackberry")?v+(/Version\/(\d+)(\.(\d+)+)/i.test(i)?" "+v+RegExp.$1+" "+v+RegExp.$1+RegExp.$2.replace(".","_"):/Blackberry ?(([0-9]+)([a-z]?))[\/|;]/gi.test(i)?" "+v+RegExp.$2+(RegExp.$3?" "+v+RegExp.$2+RegExp.$3:""):""):s("android")?d+(/Version\/(\d+)(\.(\d+))+/i.test(i)?" "+d+RegExp.$1+" "+d+RegExp.$1+RegExp.$2.replace(".","_"):"")+(/Android (.+); (.+) Build/i.test(i)?" "+g+RegExp.$2.replace(/ /g,"_").replace(/-/g,"_"):""):s("chrome")?a+" "+f+(/chrome\/((\d+)(\.(\d+))(\.\d+)*)/.test(i)?" "+f+RegExp.$2+(RegExp.$4>0?" "+f+RegExp.$2+"_"+RegExp.$4:""):""):s("iron")?a+" iron":s("applewebkit/")?a+" "+c+(/version\/((\d+)(\.(\d+))(\.\d+)*)/.test(i)?" "+c+RegExp.$2+" "+c+RegExp.$2+RegExp.$3.replace(".","_"):/ Safari\/(\d+)/i.test(i)?RegExp.$1=="419"||RegExp.$1=="417"||RegExp.$1=="416"||RegExp.$1=="412"?" "+c+"2_0":RegExp.$1=="312"?" "+c+"1_3":RegExp.$1=="125"?" "+c+"1_2":RegExp.$1=="85"?" "+c+"1_0":"":""):s("mozilla/")?u:"",s("android|mobi|mobile|j2me|iphone|ipod|ipad|blackberry|playbook|kindle|silk")?p:"",s("j2me")?"j2me":s("ipad|ipod|iphone")?(/CPU( iPhone)? OS (\d+[_|\.]\d+([_|\.]\d+)*)/i.test(i)?"ios"+o("ios",RegExp.$2):"")+" "+(/(ip(ad|od|hone))/gi.test(i)?RegExp.$1:""):s("playbook")?"playbook":s("kindle|silk")?"kindle":s("playbook")?"playbook":s("mac")?"mac"+(/mac os x ((\d+)[.|_](\d+))/.test(i)?" mac"+RegExp.$2+" mac"+RegExp.$1.replace(".","_"):""):s("win")?"win"+(s("windows nt 6.2")?" win8":s("windows nt 6.1")?" win7":s("windows nt 6.0")?" vista":s("windows nt 5.2")||s("windows nt 5.1")?" win_xp":s("windows nt 5.0")?" win_2k":s("windows nt 4.0")||s("WinNT4.0")?" win_nt":""):s("freebsd")?"freebsd":s("x11|linux")?"linux":"",/[; |\[](([a-z]{2})(\-[a-z]{2})?)[)|;|\]]/i.test(i)?(m+RegExp.$2).replace("-","_")+(RegExp.$3!=""?(" "+m+RegExp.$1).replace("-","_"):""):"",s("ipad|iphone|ipod")&&!s("safari")?"ipad_app":""];window.onresize=w;w();var E=new Image;E.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";var S=document.createElement("div");S.innerHTML="<!--[if lt IE 9]><i></i><![endif]-->";var x=S.getElementsByTagName("i").length==1;E.onload=E.onerror=function(){if(this.width!=1||this.height!=1||x){document.getElementsByTagName("html")[0].className+=" no-datauri"}else{document.getElementsByTagName("html")[0].className+=" datauri"}};if(T()>1){document.getElementsByTagName("html")[0].className+=" hidpi"}else{document.getElementsByTagName("html")[0].className+=" no-hidpi"}if(T()>1&&T()<2){document.getElementsByTagName("html")[0].className+=" retina_1x"}else if(T()>=2){document.getElementsByTagName("html")[0].className+=" retina_2x"}var N=b.join(" ")+" js ";y.className=(N+y.className.replace(/\b(no[-|_]?)?js\b/g,"")).replace(/^ /,"").replace(/ +/g," ");return N}showLog=true;css_browser_selector(navigator.userAgent);;