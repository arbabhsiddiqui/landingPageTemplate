/* ---------------------------- for tooltip style --------------------------- */

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

/* ---------------------------- for model opening --------------------------- */

$("#exampleModal").on("show.bs.modal", (event) => {
  var button = $(event.relatedTarget);
  var modal = $(this);
  // Use above variables to manipulate the DOM
});
