
(function($){$.dimensions={version:'1.2'};$.each(['Height','Width'],function(i,name){$.fn['inner'+name]=function(){if(!this[0])return;var torl=name=='Height'?'Top':'Left',borr=name=='Height'?'Bottom':'Right';return this.is(':visible')?this[0]['client'+name]:num(this,name.toLowerCase())+num(this,'padding'+torl)+num(this,'padding'+borr);};$.fn['outer'+name]=function(options){if(!this[0])return;var torl=name=='Height'?'Top':'Left',borr=name=='Height'?'Bottom':'Right';options=$.extend({margin:false},options||{});var val=this.is(':visible')?this[0]['offset'+name]:num(this,name.toLowerCase())+num(this,'border'+torl+'Width')+num(this,'border'+borr+'Width')+num(this,'padding'+torl)+num(this,'padding'+borr);return val+(options.margin?(num(this,'margin'+torl)+num(this,'margin'+borr)):0);};});$.each(['Left','Top'],function(i,name){$.fn['scroll'+name]=function(val){if(!this[0])return;return val!=undefined?this.each(function(){this==window||this==document?window.scrollTo(name=='Left'?val:$(window)['scrollLeft'](),name=='Top'?val:$(window)['scrollTop']()):this['scroll'+name]=val;}):this[0]==window||this[0]==document?self[(name=='Left'?'pageXOffset':'pageYOffset')]||$.boxModel&&document.documentElement['scroll'+name]||document.body['scroll'+name]:this[0]['scroll'+name];};});$.fn.extend({position:function(){var left=0,top=0,elem=this[0],offset,parentOffset,offsetParent,results;if(elem){offsetParent=this.offsetParent();offset=this.offset();parentOffset=offsetParent.offset();offset.top-=num(elem,'marginTop');offset.left-=num(elem,'marginLeft');parentOffset.top+=num(offsetParent,'borderTopWidth');parentOffset.left+=num(offsetParent,'borderLeftWidth');results={top:offset.top-parentOffset.top,left:offset.left-parentOffset.left};}return results;},offsetParent:function(){var offsetParent=this[0].offsetParent;while(offsetParent&&(!/^body|html$/i.test(offsetParent.tagName)&&$.css(offsetParent,'position')=='static'))offsetParent=offsetParent.offsetParent;return $(offsetParent);}});function num(el,prop){return parseInt($.curCSS(el.jquery?el[0]:el,prop,true))||0;};})(jQuery);(function($){$.fn.inputHintBox=function(options){options=$.extend({},$.inputHintBoxer.defaults,options);this.each(function(){new $.inputHintBoxer(this,options);});return this;}
$.inputHintBoxer=function(input,options){var $guideObject=$(options.el||input),$input=$(input),box,boxMouseDown=false;if(($guideObject.attr('type')=='radio'||$guideObject.attr('type')=='checkbox')&&$guideObject.parent().is('label')){$guideObject=$($guideObject.parent());}
function init(){var boxHtml=options.html!=''?options.html:options.source=='attr'?$input.attr(options.attr):'';if(typeof boxHtml==="undefined")boxHtml='';box=options.div!=''?options.div.clone():$("<div/>").addClass(options.className);box=box.css('display','none').addClass('_hintBox').appendTo(options.attachTo);if(options.div_sub=='')box.html(boxHtml);else $(options.div_sub,box).html(boxHtml);if($input.is(":focus")){show();}
$input.focus(function(){$('body').mousedown(global_mousedown_listener);show();}).blur(function(){prepare_hide();}).bind('focusin',function(e){$('body').mousedown(global_mousedown_listener);show();}).bind('focusout',function(e){prepare_hide(true);});}
function align(){var guidePos=Runner.getPosition($guideObject[0]),offsets=$guideObject.position(),left=guidePos.left+$guideObject.width()+options.incrementLeft+5+($.browser.safari?5:($.browser.msie?10:($.browser.mozilla?6:0))),top=guidePos.top+options.incrementTop;if(options.pageObj&&options.pageObj.fly&&options.pageObj.win){box.css('z-index',options.pageObj.win.cfg.getProperty("zindex")+1);}
box.css({position:"absolute",top:top,left:left});}
function show(){$('div.shiny_box').hide();align();box.show();}
function prepare_hide(noTimeout){$('body').click(global_click_listener);if(boxMouseDown)return;if(noTimeout){hide(true);}else{$.inputHintBoxer.mostRecentHideTimer=setTimeout(function(){hide()},300);}}
var global_click_listener=function(e){var $e=$(e.target),c='._hintBox';clearTimeout($.inputHintBoxer.mostRecentHideTimer);if($e.parents(c).length==0&&$e.is(c)==false)hide();};var global_mousedown_listener=function(e){var $e=$(e.target),c='._hintBox';boxMouseDown=($e.parents(c).length!=0||$e.is(c)!=false);}
function hide(noTimeout){$('body').unbind('click',global_click_listener);$('body').unbind('mousedown',global_mousedown_listener);align();if(noTimeout){box.hide();}else{box.fadeOut('fast');}}
init();return{}};$.inputHintBoxer.mostRecentHideTimer=0;$.inputHintBoxer.defaults={div:'',className:'input_hint_box',source:'attr',div_sub:'',attr:'title',html:'',incrementLeft:5,incrementTop:0,attachTo:'body'}})(jQuery);