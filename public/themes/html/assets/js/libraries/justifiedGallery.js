/**! justifiedGallery */
;(function(e){e.fn.justifiedGallery=function(t){function n(e,t,n){var r;r=e>t?e:t;if(r<=100){return n.settings.sizeRangeSuffixes.lt100}else if(r<=240){return n.settings.sizeRangeSuffixes.lt240}else if(r<=320){return n.settings.sizeRangeSuffixes.lt320}else if(r<=500){return n.settings.sizeRangeSuffixes.lt500}else if(r<=640){return n.settings.sizeRangeSuffixes.lt640}else{return n.settings.sizeRangeSuffixes.lt1024}}function r(t){e(t.currentTarget).find(".caption").slideDown("fast")}function i(t){e(t.currentTarget).find(".caption").slideUp("fast")}function s(t,s,o,u,a,f,l){var c=t.find("img");c.css("width",u);c.css("height",a);c.css("margin-left",-u/2);c.css("margin-top",-a/2);t.width(u);t.height(f);t.css("top",o);t.css("left",s);var h=c.attr("src");var p=h.replace(l.settings.extension,"").replace(l.usedSizeRangeRegExp,"")+n(u,a,l)+h.match(l.settings.extension)[0];c.one("error",function(){c.attr("src",c.data("jg.originalSrc"))});t.stop().fadeTo(300,1,function(){if(h!==p){c.attr("src",p)}});var d=t.data("jg.captionMouseEvents");if(l.settings.captions===true){var v=t.find(".caption");if(v.length===0){var m=c.attr("alt");if(typeof m==="undefined")m=t.attr("title");if(typeof m!=="undefined"){v=e('<div class="caption">'+m+"</div>");t.append(v);v.hide()}}if(v.length!==0&&typeof d==="undefined"){d={mouseenter:r,mouseleave:i};t.on("mouseenter",d.mouseenter);t.on("mouseleave",d.mouseleave);t.data("jg.captionMouseEvents",d)}}else{if(typeof d!=="undefined"){t.off("mouseenter",d.mouseenter);t.off("mouseleave",d.mouseleave);t.removeData("jg.captionMouseEvents")}}}function o(e,t){var n,r,i,s,o,u,a=true;var f=0;var l=e.galleryWidth;var c=l-e.buildingRow.width-(e.buildingRow.entriesBuff.length-1)*e.settings.margins;if(t&&e.settings.lastRow==="hide"&&c/l>.35){for(n=0;n<e.buildingRow.entriesBuff.length;n++){r=e.buildingRow.entriesBuff[n];r.stop().fadeTo(0)}return-1}if(t&&e.settings.lastRow==="nojustify"&&c/l>.35)a=false;for(n=0;n<e.buildingRow.entriesBuff.length;n++){i=e.buildingRow.entriesBuff[n].find("img");s=Math.ceil(i.data("jg.imgw")/(i.data("jg.imgh")/e.settings.rowHeight));if(a){if(n<e.buildingRow.entriesBuff.length-1){o=s+Math.ceil(s/e.buildingRow.width*c)}else{o=l}u=Math.ceil(e.settings.rowHeight*(o/s));if(e.settings.fixedHeight&&u<e.settings.rowHeight){o=s;u=e.settings.rowHeight}}else{o=s;u=e.settings.rowHeight}i.data("jg.imgw",o);i.data("jg.imgh",u);l-=o+(n<e.buildingRow.entriesBuff.length-1?e.settings.margins:0);if(n===0||f>u)f=u}if(e.settings.fixedHeight)f=e.settings.rowHeight;return f}function u(e){e.lastAnalyzedIndex=-1;e.buildingRow.entriesBuff=[];e.buildingRow.width=0;e.offY=0;e.firstRowFlushed=false}function a(e,t){var n,r,i,u=0;i=o(e,t);if(t&&e.settings.lastRow==="hide"&&i===-1){e.buildingRow.entriesBuff=[];e.buildingRow.width=0;return}if(e.settings.maxRowHeight>0&&e.settings.maxRowHeight<i)i=e.settings.maxRowHeight;else if(e.settings.maxRowHeight===0&&1.5*e.settings.rowHeight<i)i=1.5*e.settings.rowHeight;for(var a=0;a<e.buildingRow.entriesBuff.length;a++){n=e.buildingRow.entriesBuff[a];r=n.find("img");s(n,u,e.offY,r.data("jg.imgw"),r.data("jg.imgh"),i,e);u+=r.data("jg.imgw")+e.settings.margins}e.$gallery.height(e.offY+i+(e.spinner.active?e.spinner.$el.innerHeight():0));if(!t){e.offY+=i+e.settings.margins;e.buildingRow.entriesBuff=[];e.buildingRow.width=0;e.firstRowFlushed=true;e.$gallery.trigger("jg.rowflush")}}function f(e){e.checkWidthIntervalId=setInterval(function(){var t=parseInt(e.$gallery.width(),10);if(e.galleryWidth!==t){e.galleryWidth=t;u(e);p(e,true)}},e.settings.refreshTime)}function l(e){clearInterval(e.intervalId);e.intervalId=setInterval(function(){if(e.phase<e.$points.length)e.$points.eq(e.phase).fadeTo(e.timeslot,1);else e.$points.eq(e.phase-e.$points.length).fadeTo(e.timeslot,0);e.phase=(e.phase+1)%(e.$points.length*2)},e.timeslot)}function c(e){clearInterval(e.intervalId);e.intervalId=null}function h(e){e.yield.flushed=0;if(e.imgAnalyzerTimeout!==null)clearTimeout(e.imgAnalyzerTimeout)}function p(e,t){h(e);e.imgAnalyzerTimeout=setTimeout(function(){d(e,t)},.001);d(e,t)}function d(t,n){var r=t.firstRowFlushed;for(var i=t.lastAnalyzedIndex+1;i<t.entries.length;i++){var s=e(t.entries[i]);var o=s.find("img");if(o.data("jg.loaded")===true){var u=Math.ceil(o.data("jg.imgw")/(o.data("jg.imgh")/t.settings.rowHeight));r=t.firstRowFlushed&&i>=t.entries.length-1;if(t.buildingRow.width+(t.settings.fixedHeight?u:u/2)+(t.buildingRow.entriesBuff.length-1)*t.settings.margins>t.galleryWidth){a(t,r);if(++t.yield.flushed>=t.yield.every){p(t,n);return}}t.buildingRow.entriesBuff.push(s);t.buildingRow.width+=u;t.lastAnalyzedIndex=i}else if(o.data("jg.loaded")!=="error"){return}}if(t.buildingRow.entriesBuff.length>0)a(t,r);if(t.spinner.active){t.spinner.active=false;t.$gallery.height(t.$gallery.height()-t.spinner.$el.innerHeight());t.spinner.$el.detach();c(t.spinner)}h(t);if(!n)t.$gallery.trigger("jg.complete");else t.$gallery.trigger("jg.resize")}function v(e){function t(t){if(typeof e.settings.sizeRangeSuffixes[t]!=="string")throw"sizeRangeSuffixes."+t+" must be a string"}function n(t){if(typeof e.settings[t]==="string"){e.settings[t]=parseInt(e.settings[t],10);if(isNaN(e.settings[t]))throw"invalid number for "+t}else if(typeof e.settings[t]==="number"){if(isNaN(e.settings[t]))throw"invalid number for "+t}else{throw t+" must be a number"}}if(typeof e.settings.sizeRangeSuffixes!=="object")throw"sizeRangeSuffixes must be defined and must be an object";t("lt100");t("lt240");t("lt320");t("lt500");t("lt640");t("lt1024");n("rowHeight");n("maxRowHeight");n("margins");if(e.settings.lastRow!=="nojustify"&&e.settings.lastRow!=="justify"&&e.settings.lastRow!=="hide"){throw'lastRow must be "nojustify", "justify" or "hide"'}if(typeof e.settings.fixedHeight!=="boolean"){throw"fixedHeight must be a boolean"}if(typeof e.settings.captions!=="boolean"){throw"captions must be a boolean"}n("refreshTime");if(typeof e.settings.randomize!=="boolean"){throw"randomize must be a boolean"}}var m={sizeRangeSuffixes:{lt100:"",lt240:"",lt320:"",lt500:"",lt640:"",lt1024:""},rowHeight:120,maxRowHeight:0,margins:1,lastRow:"nojustify",fixedHeight:false,captions:true,rel:null,target:null,extension:/\.[^.]+$/,refreshTime:250,randomize:false};return this.each(function(n,r){var i=e(r);i.addClass("justified-gallery");var s=i.data("jg.context");if(typeof s==="undefined"){if(typeof t!=="undefined"&&t!==null&&typeof t!=="object")throw"The argument must be an object";var o=e('<div class="spinner"><span></span><span></span><span></span></div>');s={settings:e.extend({},m,t),imgAnalyzerTimeout:null,entries:null,buildingRow:{entriesBuff:[],width:0},lastAnalyzedIndex:-1,firstRowFlushed:false,yield:{every:2,flushed:0},offY:0,spinner:{active:false,phase:0,timeslot:150,$el:o,$points:o.find("span"),intervalId:null},checkWidthIntervalId:null,galleryWidth:i.width(),$gallery:i};i.data("jg.context",s)}else if(t==="norewind"){}else{s.settings=e.extend({},s.settings,t);u(s)}v(s);s.entries=i.find("a").toArray();if(s.entries.length===0)return;if(s.settings.randomize){s.entries.sort(function(){return Math.random()*2-1});e.each(s.entries,function(){e(this).appendTo(i)})}s.usedSizeRangeRegExp=new RegExp("("+s.settings.sizeRangeSuffixes.lt100+"|"+s.settings.sizeRangeSuffixes.lt240+"|"+s.settings.sizeRangeSuffixes.lt320+"|"+s.settings.sizeRangeSuffixes.lt500+"|"+s.settings.sizeRangeSuffixes.lt640+"|"+s.settings.sizeRangeSuffixes.lt1024+")$");if(s.settings.maxRowHeight>0&&s.settings.maxRowHeight<s.settings.rowHeight)s.settings.maxRowHeight=s.settings.rowHeight;var a=false;e.each(s.entries,function(t,n){var r=e(n);var o=r.find("img");if(o.data("jg.loaded")!==true){o.data("jg.loaded",false);a=true;if(s.spinner.active===false){s.spinner.active=true;i.append(s.spinner.$el);i.height(s.offY+s.spinner.$el.innerHeight());l(s.spinner)}if(s.settings.rel!==null)r.attr("rel",s.settings.rel);if(s.settings.target!==null)r.attr("target",s.settings.target);var u=typeof o.data("safe-src")!=="undefined"?o.data("safe-src"):o.attr("src");o.data("jg.originalSrc",u);o.attr("src",u);var f=new Image;var c=e(f);c.one("load",function(){o.off("load error");o.data("jg.imgw",f.width);o.data("jg.imgh",f.height);o.data("jg.loaded",true);p(s,false)});c.one("error",function(){o.off("load error");o.data("jg.loaded","error");p(s,false)});f.src=u}});if(!a)p(s,false);f(s)})}})(jQuery);;