$("#fa fa-chevron-circle-down").click(function() {
  $("html, body").animate(
    {
      scrollTop: $("#about").offset().top
    },
    2000
  );
});
