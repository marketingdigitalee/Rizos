
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="u140"><!-- group -->
     <nav class="MenuBar clearfix grpelem" id="menuu143"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u144"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u145"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem" id="u147" alt="Aliados" src="img/menus/blank.gif?crc=4208392903"/><!-- state-based BG images -->
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u274"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u275"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem" id="u276" alt="Preguntas Frecuentes" src="img/menus/blank.gif?crc=4208392903"/><!-- state-based BG images -->
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u246"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u247"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem" id="u248" alt="Qué es el círculo de experiencias" src="img/menus/blank.gif?crc=4208392903"/><!-- state-based BG images -->
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u218"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u219"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem" id="u220" alt="El Espectador" src="img/menus/blank.gif?crc=4208392903"/><!-- state-based BG images -->
       </div>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u189"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u190"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem" id="u191" alt="Funcionario" src="img/menus/blank.gif?crc=4208392903"/><!-- state-based BG images -->
       </div>
      </div>
     </nav>
    </div>
    <div class="verticalspacer" data-offset-top="0" data-content-above-spacer="62" data-content-below-spacer="438"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="img/menus/u147-r.png?crc=327343518" alt=""/>
   <img class="preload" src="img/menus/u276-r.png?crc=3930943277" alt=""/>
   <img class="preload" src="img/menus/u248-r.png?crc=3766879074" alt=""/>
   <img class="preload" src="img/menus/u220-r.png?crc=44856761" alt=""/>
   <img class="preload" src="img/menus/u191-r.png?crc=21836117" alt=""/>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="js/require.js?crc=4159430777" type="text/javascript" async data-main="js/museconfig.js?crc=172512987" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>