
var ympIdx=null;var ympRunner=null;var GlobalYmpLoader=null;function YmpLoader(){var stack=[];var stackContext=[];var stackArg=[];var isLoaded=false;var self=this;this.loadScript=function(){var js=document.createElement('script');js.setAttribute('type','text/javascript');var loaded_=function(){if(YAHOO.mediaplayer&&YAHOO.mediaplayer.loadPlayerScript){YAHOO.mediaplayer.loadPlayerScript();}
if(YAHOO&&YAHOO.mediaplayer&&YAHOO.mediaplayer.elPlayerSource){if(Runner.isIE){YAHOO.mediaplayer.elPlayerSource.onreadystatechange=function(){if(YAHOO.mediaplayer.elPlayerSource.readyState=='complete'||YAHOO.mediaplayer.elPlayerSource.readyState=='loaded'){self.loaded();}};}else{YAHOO.mediaplayer.elPlayerSource.onload=self.loaded;}}}
if(Runner.isIE){js.onreadystatechange=function(){if(js.readyState=='complete'||js.readyState=='loaded'){loaded_();}};}else{js.onload=loaded_;}
js.setAttribute('src',"http://webplayer.yahooapis.com/legacy/player.js");document.getElementsByTagName('HEAD')[0].appendChild(js);}
this.onLoad=function(f,context){stack.push(f);stackContext.push(context);if(this.isLoaded){this.fireLoad();}}
this.fireLoad=function(){for(var i=0;i<stack.length;i++){stack[i].apply(stackContext[i]?stackContext[i]:this);}
stack=[];stackContext=[];stackArg=[];}
this.loaded=function(){self.isLoaded=true;self.fireLoad();}}
function include_runnerJS_ymp_init(idx){ympIdx=idx;ympRunner=this;GlobalYmpLoader=new YmpLoader();GlobalYmpLoader.loadScript();}