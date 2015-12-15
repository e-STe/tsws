/* Permet d'ouvrir ESTHETIQUEMENT un pauvre menu ...
Empêche aussi l'utilisateur de "surcharger la queue du menu"
en spammant sur le bouton ouvrir ...
En jQuery et JavaScript, par E-STE(TIQUEMENT) mdr
*/

var catopened = false;
var antirafale = false;

function catopen() {
  if(antirafale) {return;}
  antirafale = true;
  if (!catopened) {
    $("#categories").animate({
      height: '400%'
    });
    $("#menu").show(1000);
    $("#fleche").rotate({
      animateTo: 180
    });
  catopened = true;
  } else {
    $("#categories").animate({
      height: '55%'
    });
    $("#menu").hide(300);
    $("#fleche").rotate({
      animateTo: 0
    });
    catopened = false;
  }
  setTimeout(function(){
    antirafale = false;
  }, 700);
}
