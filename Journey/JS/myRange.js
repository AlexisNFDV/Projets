$("#slider-range").slider({
  range: true,
  min: 0,
  max: 500,
  values: [15, 300],
  slide: function (event, ui) {
    $("#amount").val("€" + ui.values[0] + " - €" + ui.values[1]);
  }
});
$("#amount").val("€" + $("#slider-range").slider("values", 0) +
  " - €" + $("#slider-range").slider("values", 1));


$("#slider-range2").slider({
  min: 0,
  max: 120,
  values: [45],
  slide: function (event, ui) {
    $("#amount2").val(ui.values[0] + "km");
  }
});
$("#amount2").val($("#slider-range2").slider("values", 0) + "km");