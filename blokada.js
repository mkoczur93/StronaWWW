var MSIE = navigator.appName == "Microsoft Internet Explorer"?true:false;
var NN = navigator.appName == "Netscape"?true:false;
function blockMouseClick(evt)
{
  if(MSIE && (event.button == 2)){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
  else if(NN && ((evt.which == 2) || (evt.which == 3))){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
}
document.onmousedown=blockMouseClick;
