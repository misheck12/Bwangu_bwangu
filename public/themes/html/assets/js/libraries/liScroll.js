/*! liScroll 1.0 */
jQuery.fn.liScroll=function(t){return t=jQuery.extend({travelocity:.07},t),this.each(function(){function i(t,e){r.animate({left:"-="+t},e,"linear",function(){r.css("left",c),i(s,o)})}var r=jQuery(this);r.addClass("newsticker");var e=1;r.find("li").each(function(t){e+=jQuery(this,t).outerWidth(!0)});var n=r.wrap("<div class='mask'></div>"),a=r.parent().wrap("<div class='tickercontainer'></div>"),c=r.parent().parent().width();r.width(e);var s=e+c,o=s/t.travelocity;i(s,o),r.hover(function(){jQuery(this).stop()},function(){var r=jQuery(this).offset(),n=r.left+e;i(n,n/t.travelocity)})})},jQuery.fn.liScrollRight=function(t){return t=jQuery.extend({travelocity:.07},t),this.each(function(){function i(t,e){r.animate({right:"-="+t},e,"linear",function(){r.css("right",c),i(s,o)})}var r=jQuery(this);r.addClass("newsticker");var e=0,n=r.wrap("<div class='mask'></div>"),a=r.parent().wrap("<div class='tickercontainer'></div>"),c=r.parent().parent().width();r.find("li").each(function(t){e+=jQuery(this,t).width()}),r.width(e);var s=e+c,o=s/t.travelocity;i(s,o),r.hover(function(){jQuery(this).stop()},function(){var r=jQuery(this).offset(),n=r.left+e;i(n,n/t.travelocity)})})};