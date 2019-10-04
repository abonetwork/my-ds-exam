$(document).ready(function() {
  console.log("running");
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });

  $(".slider1").slick({
    infinite: true,
    dots: true,
    arrows: false,
    // autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000
  });

  $("#btn-touch").on("click", () => {
    //   console.log("click");
    $("#my-modal").show();
  });

  $(".close").on("click", () => {
    //   console.log("click");
    $("#my-modal").hide();
  });
});

// NAVIGATION SHOW/HIDE
$("nav ul").hide();

$(".nav-toggle").click(function() {
  $("nav ul").slideToggle("medium");
});

$("nav ul li a, .brand a").click(function() {
  $("nav ul").hide();
});
