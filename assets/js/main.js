$('.carousel').carousel({
	interval:3000
})
$("#link3").click(function(){

  $("#drop3").slideToggle();  //Hace que cada vez q clickees, si esta cerrado se despliega y si esta desplegado se cierra.
  $("#drop5").slideUp();  //cierra el otro submenu si esta abierto.

});

$("#link5").click(function(){

  $("#drop5").slideToggle();
  $("#drop3").slideUp();

});
