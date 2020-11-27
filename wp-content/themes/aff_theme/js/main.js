
function elipser(divnavn){
const tekster = document.querySelectorAll('div.' + divnavn);
Array.prototype.forEach.call(tekster, (tekst) => {  // Loop through each container
    var p = tekst.querySelector('p');
    var divh = tekst.clientHeight;
    while (p.offsetHeight > divh) { // Check if the paragraph's height is taller than the container's height. If it is:
        p.textContent = p.textContent.replace(/\W*\s(\S)*$/, '...'); // add an ellipsis at the last shown space
    }
})
}

var containerstorrelse;
if (jQuery(".container-small")[0]){
  containerstorrelse = '.container-liten';
  }
  else if(jQuery(".container-medium")[0]){
    containerstorrelse = '.container-medium';
  }
  else if(jQuery(".container-stor")[0]){
    containerstorrelse = '.container-stor';
  }else if(jQuery(".container-vstor")[0]){
    containerstorrelse = '.container-vstor';
  }


function m_header(){
    jQuery(".navbar").toggleClass('navbar m-navbar');
    jQuery(".navbuttons").toggleClass('navbuttons m-navbuttons');
    jQuery(".navbutton").toggleClass('navbutton m-navbutton');
    if (jQuery('.arrangement_tittel')[0]) {
    	jQuery(".arrangement_tittel").toggleClass('arrangement_tittel m-arrangement_tittel');
    	jQuery(".forsidebilde-right").toggleClass('forsidebilde-right m-forsidebilde-right');
    	jQuery(".forsidebilde-center").toggleClass('forsidebilde-center m-forsidebilde-center');
  	}
  jQuery(".fnyhetend").toggleClass('fnyhetend m-fnyhetend');
  jQuery(".navforsidelink").show();
  jQuery(".m-navbar").hide();
  jQuery(".burgermeny").show();

  }

  function v_header(){
    jQuery(".m-navbar").show();
    jQuery(".m-navbar").toggleClass('m-navbar navbar');
    jQuery(".m-navbuttons").toggleClass('m-navbuttons navbuttons');
    jQuery(".m-navbutton").toggleClass('m-navbutton navbutton');
    jQuery("#paralaxforbilde").css("height", "510px");

    if (jQuery('.m-arrangement_tittel')[0]) {
        jQuery(".m-arrangement_tittel").toggleClass('m-arrangement_tittel arrangement_tittel');
    	jQuery(".m-forsidebilde-right").toggleClass('m-forsidebilde-right forsidebilde-right');
    	jQuery(".m-forsidebilde-center").toggleClass('m-forsidebilde-center forsidebilde-center');
  	}
  jQuery(".m-fnyhetend").toggleClass('m-fnyhetend fnyhetend');
  jQuery(".navforsidelink").hide();  
  jQuery(".burgermeny").hide();
}

function m_footer(){
    jQuery(".presse").toggleClass('presse m-presse');
    jQuery(".kontakt").toggleClass('kontakt m-kontakt');
    jQuery(".sm").toggleClass('sm m-sm');
    jQuery(".overstefoot").toggleClass('overstefoot m-overstefoot');
    jQuery(".nederstefoot").toggleClass('nederstefoot m-nederstefoot');
  }

  function v_footer(){
    jQuery(".m-presse").toggleClass('m-presse presse');
    jQuery(".m-kontakt").toggleClass('m-kontakt kontakt');
    jQuery(".m-sm").toggleClass('m-sm sm');
    jQuery(".m-overstefoot").toggleClass('m-overstefoot overstefoot');
    jQuery(".m-nederstefoot").toggleClass('m-nederstefoot nederstefoot');
  }

  function m_forside(){
    if (jQuery('.hovednyhet')[0]) {
      jQuery(".hovednyhet").toggleClass('hovednyhet m-hovednyhet');
      jQuery(".hnbilde").toggleClass('hnbilde m-hnbilde');
      jQuery(".hntekst").toggleClass('hntekst m-hntekst');
      jQuery(".fnyhet").toggleClass('fnyhet m-fnyhet');
      jQuery(".fnyhetsbilde").toggleClass('fnyhetsbilde m-fnyhetsbilde');
      jQuery(".fnyhetstekst").toggleClass('fnyhetstekst m-fnyhetstekst');
    }

  }

  function v_forside(){
    if (jQuery('.m-hovednyhet')[0]) {
      jQuery(".m-hovednyhet").toggleClass('m-hovednyhet hovednyhet');
      jQuery(".m-hnbilde").toggleClass('m-hnbilde hnbilde');
      jQuery(".m-hntekst").toggleClass('m-hntekst hntekst');
      jQuery(".m-fnyhet").toggleClass('m-fnyhet fnyhet');
      jQuery(".m-fnyhetsbilde").toggleClass('m-fnyhetsbilde fnyhetsbilde');
      jQuery(".m-fnyhetstekst").toggleClass('m-fnyhetstekst fnyhetstekst');
    }

  }

  function m_page(){
    if (jQuery('.frivillig')[0]) {
      jQuery(".frivillig").toggleClass('frivillig m-frivillig');
    }
  }

  function v_page(){
    if (jQuery('.m-frivillig')[0]) {
      jQuery(".m-frivillig").toggleClass('m-frivillig frivillig');
    }
  }

  function m_nyheter(){
    if (jQuery('.fnyhet')[0]) {
      jQuery(".fnyhet").toggleClass('fnyhet m-fnyhet');
      jQuery(".fnyhetsbilde").toggleClass('fnyhetsbilde m-fnyhetsbilde');
      jQuery(".fnyhetstekst").toggleClass('fnyhetstekst m-fnyhetstekst');
      jQuery(".nyhetstopp").toggleClass('nyhetstopp m-nyhetstopp');
    }
  }

  function v_nyheter(){
        if (jQuery('.m-fnyhet')[0]) {
      jQuery(".m-fnyhet").toggleClass('m-fnyhet fnyhet');
      jQuery(".m-fnyhetsbilde").toggleClass('m-fnyhetsbilde fnyhetsbilde');
      jQuery(".m-fnyhetstekst").toggleClass('m-fnyhetstekst fnyhetstekst');
      jQuery(".m-nyhetstopp").toggleClass('m-nyhetstopp nyhetstopp');
    }
  }

  function m_nyhet(){

  }

  function v_nyhet(){

  }


  function m_arrangementer(){
    if (jQuery('.aarrangementbilde')[0]) {
      jQuery(".vises").toggleClass('vises m-vises');
      jQuery(".aarrangementbilde").toggleClass('aarrangementbilde m-aarrangementbilde');

    }
  }

  function v_arrangementer(){

     if (jQuery('.m-aarrangementbilde')[0]) {
      jQuery(".m-vises").toggleClass('m-vises vises');
      jQuery(".m-aarrangementbilde").toggleClass('m-aarrangementbilde aarrangementbilde');


    }

  }

  function m_arrangement(){
    if (jQuery('.filmtrailer')[0]) {
      jQuery(".filmtrailer").toggleClass('filmtrailer m-filmtrailer');
    }
    if(jQuery('.infobar')[0]){
      jQuery(".info").toggleClass('info m-info');
      jQuery(".knapper").toggleClass('knapper m-knapper');
      jQuery(".infobar").toggleClass('infobar m-infobar');
      jQuery(".arrtekst").toggleClass('arrtekst m-arrtekst');
      
    }
  }

  function v_arrangement(){
    if (jQuery('.m-filmtrailer')[0]) {
      jQuery(".m-filmtrailer").toggleClass('m-filmtrailer filmtrailer');
    }
        if(jQuery('m-infobar')[0]){
          jQuery(".m-info").toggleClass('m-info info');
          jQuery(".m-knapper").toggleClass('m-knapper knapper');
          jQuery(".m-infobar").toggleClass('m-infobar infobar');
          jQuery(".m-arrtekst").toggleClass('m-arrtekst arrtekst');
    }
  }



  function m_container(){
    if(jQuery('.container-liten')[0]){
      jQuery('.container-liten').addClass('m-container');
    }
    if(jQuery('.container-medium')[0]){
      jQuery('.container-medium').addClass('m-container');
    }
    if(jQuery('.container-stor')[0]){
      jQuery('.container-stor').addClass('m-container');
    }
}

function v_container(){
      if(jQuery('.container-liten')[0]){
      jQuery('.container-liten').removeClass('m-container');
    }
    if(jQuery('.container-medium')[0]){
      jQuery('.container-medium').removeClass('m-container');
    }
    if(jQuery('.container-stor')[0]){
      jQuery('.container-stor').removeClass('m-container');
    }
}

var mobile = false;

function domobile(){
  m_container();
  m_forside();
  m_header();
  m_nyheter();
  m_arrangement();
  m_arrangementer();
  m_footer();
  m_page();
	jQuery(".m-arrangement_tittel").css("top", (220-jQuery(".m-arrangement_tittel").height())/2 + "px");
	mobile = true;
	jQuery(".deskHeader").hide();
	jQuery(".mobHeader").show();
  jQuery(".navforsidelink").show();
  jQuery(".m-navbar").hide();
  jQuery(".burgermeny").show();

}

function donormal(){
    jQuery(".m-navbar").show();
  v_container();
  v_forside();
  v_header();
  v_nyheter();
  v_arrangement();
  v_arrangementer();
  v_footer();
  v_page();
  jQuery(".arrangement_tittel").css("top", (510-jQuery(".arrangement_tittel").height())/2 + "px");
  mobile = false;
  jQuery(".deskHeader").show();
jQuery(".mobHeader").hide();

    jQuery(".navforsidelink").hide();
    
  jQuery(".burgermeny").hide();
}

if (jQuery( containerstorrelse ).width() < 600 ){
  domobile();
    jQuery(".closenav").css("display", "none");
}
else{
    jQuery(".closenav").css("display", "none");
  if (jQuery('.arrangement_tittel')[0]) {
  jQuery(".arrangement_tittel").css("top", (510-jQuery(".arrangement_tittel").height())/2 + "px");
}
var aaheight = 0;
  if (jQuery('.aarrangement')[0]) {
    jQuery('.aarrangement').each(function(){
      if(jQuery(this).height() > aaheight){
        aaheight = jQuery(this).height();
      }
    });
    if(aaheight > 0){
      jQuery('.aarrangement').height(aaheight);
    }
  }

  jQuery(".mobHeader").hide();
}

jQuery( window ).resize(function() {
  if (jQuery( containerstorrelse ).width() < 600){
    domobile();
  }
  if (jQuery( containerstorrelse ).width() >= 600){
    donormal();
  }

});

function paralaxsize(){
  if (jQuery('#forbilde')[0]) {
    var h = jQuery("#forbilde").height();
    jQuery("#paralaxforbilde").css("height", Math.ceil(h));
    
  }

  if (jQuery('.contactmainimage')[0]) {
    var h = jQuery(".contactmainimage").height();
    jQuery("#paralaxcontactbilde").css("height", Math.ceil(h));
  }
  if (jQuery('.imgcontainer')[0]) {
  jQuery(".imgcontainer").remove();
}


}

var navShowing = false;
function showNavMenu(){
  if(navShowing){
    jQuery(".m-navbar").css("visibility", "hidden");
    navShowing = false;
  }
  else{
  jQuery(".m-navbar").css("visibility", "visible");
  navShowing = true;
}
}

var datovalgt = false;
var sjangervalgt = false;

function setVises(selectedclass){
    if(mobile){
    jQuery(".aarrangement").removeClass("m-vises");
    jQuery("." + selectedclass).addClass("m-vises");

  }
    else{
      jQuery(".aarrangement").removeClass("vises");
      jQuery("." + selectedclass).addClass("vises");
      
    }
}

jQuery( ".datoer" ).change(function(){

  var datoer = jQuery( ".datoer" ).val().replace(/\./g, "");
  if(datoer!="Velg"){
    datovalgt = true;
  
setVises(datoer);
    if(sjangervalgt){
    var sjangere = jQuery( ".sjangere" ).val();
        jQuery(".vises").each(function(index){
      
      if(!jQuery(this).hasClass(sjangere)){
        if(mobile){
          jQuery(this).removeClass("m-vises");
        }
        else{
        jQuery(this).removeClass("vises");
      }
      }
    });

  }
  }
  else{
  datovalgt = false;
      if(sjangervalgt){
      var sjangere = jQuery( ".sjangere" ).val();
      setVises(sjangere);
    }
    else{
      if(mobile){
      jQuery(".aarrangement").addClass("m-vises");
    }
    else{
      jQuery(".aarrangement").addClass("vises");
    }
    }
}
  

});

jQuery(".sjangere").change(function(){
  var sjangere = jQuery( ".sjangere" ).val();
  if(sjangere != "Velg"){
    sjangervalgt = true;
setVises(sjangere);
    if(datovalgt){
      var datoer = jQuery( ".datoer" ).val().replace(/\./g, "");
    jQuery(".vises").each(function(index){
      
      if(!jQuery(this).hasClass(datoer)){
        if(mobile){
jQuery(this).removeClass("m-vises");
        }else{
        jQuery(this).removeClass("vises");
      }
      }
    });

    }
  }
  else{
    sjangervalgt = false;
    if(datovalgt){
      var datoer = jQuery( ".datoer" ).val().replace(/\./g, "");
      setVises(datoer);
    }
    else{
      if(mobile){
      jQuery(".aarrangement").addClass("m-vises");
    }
    else{
      jQuery(".aarrangement").addClass("vises");
    }
    }
  }
});

jQuery(window).on('scroll',function() {
    var scrolltop = jQuery(this).scrollTop();
    var topOfNav = 510;
    var bottomOfNav = 510;
    if(jQuery("#headerBilde").length){
      topOfNav = jQuery("#headerBilde").height();
      bottomOfNav = jQuery("#headerBilde").height();
    }

    if(scrolltop >= topOfNav) {
      jQuery('.navbar').addClass('posfix');
    }

    else if(scrolltop <= bottomOfNav) {
      jQuery('.navbar').removeClass('posfix');
    }
  });

function menyNav(){
  jQuery(".m-navbar").show();
  jQuery(".closenav").css("display", "block");
    jQuery(".burgermeny").hide();
}

function closeMenyNav(){
  jQuery(".m-navbar").hide();

  jQuery(".closenav").css("display", "none");
  jQuery(".burgermeny").show();
}
