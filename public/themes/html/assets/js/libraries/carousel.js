/**! Carousel*/
;(function(e){var t="carousel",n="."+t,r="data-transition",i="data-prev",s="data-prev-title",o="data-next",u="data-next-title",a=t+"-transitioning",f=t+"-item",l=t+"-active",c=t+"-item-prev",h=t+"-item-next",p=t+"-in",d=t+"-out",v=t+"-nav",m,g=function(){var e="webkit Moz O Ms".split(" "),t=false,n;while(e.length){n=e.shift()+"Transition";if(n in document.documentElement.style!==undefined&&n in document.documentElement.style!==false){t=true;break}}return t}(),y={_create:function(){e(this).trigger("beforecreate."+t)[t]("_init")[t]("_addNextPrev").trigger("create."+t)},_init:function(){var n=e(this).attr(r);if(!n){g=false}e(this).addClass(t+" "+(n?t+"-"+n:"")+" ").children().addClass(f).first().addClass(l);e(this)[t]("_addNextPrevClasses");e(this).data(t+"data","init")},_addNextPrevClasses:function(){var t=e(this).find("."+f),n=t.filter("."+l),r=n.next("."+f),i=n.prev("."+f);if(!r.length){r=t.first().not("."+l)}if(!i.length){i=t.last().not("."+l)}t.removeClass(c+" "+h);i.addClass(c);r.addClass(h)},next:function(){e(this)[t]("goTo","+1")},prev:function(){e(this)[t]("goTo","-1")},goTo:function(n){var i=e(this),s=i.attr(r),o=" "+t+"-"+s+"-reverse";e(this).find("."+f).removeClass([d,p,o].join(" "));var u=e(this).find("."+l),a=u.index(),c=(a<0?0:a)+1,h=typeof n==="number"?n:c+parseFloat(n),v=h-1,m=e(this).find("."+f),y="beforegoto."+t,b=m.eq(v),w=typeof n==="string"&&!parseFloat(n)||h>c?"":o,E;i.trigger(y,E={$from:u,$to:b,direction:h>c?"forward":"backward"});if(E.isDefaultPrevented){return}if(!b.length){b=e(this).find("."+f)[w.length?"last":"first"]()}if(g){i[t]("_transitionStart",u,b,w)}else{b.addClass(l);i[t]("_transitionEnd",u,b,w)}i.trigger("goto."+t,[b,v])},update:function(){e(this).children().not("."+v).addClass(f).first().addClass(l);return e(this).trigger("update."+t)},_transitionStart:function(n,r,i){var s=e(this);r.one(navigator.userAgent.indexOf("AppleWebKit")>-1?"webkitTransitionEnd":"transitionend otransitionend",function(){s[t]("_transitionEnd",n,r,i)});e(this).addClass(i);n.addClass(d);r.addClass(p)},_transitionEnd:function(n,r,i){e(this).removeClass(i);n.removeClass(d+" "+l);r.removeClass(p).addClass(l);e(this)[t]("_addNextPrevClasses")},_bindEventListeners:function(){var n=e(this).bind("click",function(r){var i=e(r.target).closest("a[href='#next'],a[href='#prev']");if(i.length){n[t](i.is("[href='#next']")?"next":"prev");r.preventDefault()}});return this},_addNextPrev:function(){var n,r=e(this),a,f;var l=e(this).attr(i)||"Prev",c=e(this).attr(o)||"Next",h=e(this).attr(s)||"Previous",p=e(this).attr(u)||"Next";n=e("<nav class='"+v+"'>"+"<a href='#prev' class='prev bbtn' aria-hidden='true' title='"+h+"'><span class='bdaia-io bdaia-io-angle-left'></span></a>"+"<a href='#next' class='next bbtn' aria-hidden='true' title='"+p+"'><span class='bdaia-io bdaia-io-angle-right'></span></a>"+"</nav>");r.trigger("beforecreatenav."+t,{$nav:n});return r.append(n)[t]("_bindEventListeners")},destroy:function(){}};e.fn[t]=function(n,r,i,s){return this.each(function(){if(n&&typeof n==="string"){return e.fn[t].prototype[n].call(this,r,i,s)}if(e(this).data(t+"active")){return e(this)}e(this).data(t+"active",true);e.fn[t].prototype._create.call(this)})};m=e.extend(e.fn[t].prototype,y)})(jQuery);
!function(t){var a="carousel",n="."+a+"[data-paginate]",i=a+"-pagination",e=a+"-active-page",o={_createPagination:function(){var n,e,o,s=t(this).find("."+a+"-nav"),r=t(this).find("."+a+"-item"),d=t("<ol class='"+i+"'></ol>");s.find("."+i).remove(),r.each(function(a){n=a+1,e=t(this).attr("data-thumb"),o=n,e&&(o="<img src='"+e+"' alt=''>"),d.append("<li><a href='#"+n+"' title='Go to slide "+n+"'>"+o+"</a>")}),e&&d.addClass(a+"-nav-thumbs"),s.addClass(a+"-nav-paginated").find("a").first().after(d)},_bindPaginationEvents:function(){t(this).bind("click",function(n){var e=t(n.target);"IMG"===n.target.nodeName&&(e=e.parent()),e=e.closest("a");var o=e.attr("href");e.closest("."+i).length&&o&&(t(this)[a]("goTo",parseFloat(o.split("#")[1])),n.preventDefault())}).bind("goto."+a,function(a,n){var o=n?t(this).find("div.carousel-item").index(n):0;t(this).find("ol."+i+" li").removeClass(e).eq(o).addClass(e)}).trigger("goto."+a)}};t.extend(t.fn[a].prototype,o),t(document).on("create."+a,n,function(){t(this)[a]("_createPagination")[a]("_bindPaginationEvents")}).on("update."+a,n,function(){t(this)[a]("_createPagination")})}(jQuery);;