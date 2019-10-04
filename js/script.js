// NAVIGATION SHOW/HIDE
$("nav ul").hide();

$(".nav-toggle").click(function() {
  $("nav ul").slideToggle("medium");
});

$("nav ul li a, .brand a").click(function() {
  $("nav ul").hide();
});
