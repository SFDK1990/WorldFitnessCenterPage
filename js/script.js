//Esconder img
$(".PopUp").hide();

//Mostrar img
$("#gal-1").click(function () {
  $("#Img-1").slideDown(700);
});
$("#gal-2").click(function () {
  $("#Img-2").slideDown(700);
});
$("#gal-3").click(function () {
  $("#Img-3").slideDown(700);
});
$("#gal-4").click(function () {
  $("#Img-4").slideDown(700);
});
$("#gal-5").click(function () {
  $("#Img-5").slideDown(700);
});
$("#gal-6").click(function () {
  $("#Img-6").slideDown(700);
});

//Cerrar img
$(".close").click(function () {
  $(".PopUp").hide();
});
//Footer

(function ($) {
  "use strict";

  $('[data-toggle="tooltip"]').tooltip();
})(jQuery);

