var cardNumber = 0;
$(".FCAnswer").hide();
$(document).ready(function() {
  lodcarde();
  $(".nb-here").text(cardNumber);
  $(".prev-btn").click(function() {
    cardNumber--;
    if (cardNumber < 0) {
      cardNumber = 0;
    }
    $(".FCAnswer").hide();
    $(".Affa").attr("value", "Afficher la réponse");

    $(".nb-here").text(cardNumber);
    load();
  });
  $(".next-btn").click(function() {
    cardNumber++;
    $(".FCAnswer").hide();
    $(".Affa").attr("value", "Afficher la réponse");
    $(".nb-here").text(cardNumber);
    load();
  });
  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
  $(".dropdown-trigger").click(function() {
    $(".dropdown").toggleClass("is-active");
  });
  $(".searcher").click(search);
  $(".Affa").click(function() {
    if ($(this).attr("value") == "Afficher la réponse") {
      $(".FCAnswer").show();
      $(this).attr("value", "Masquer la réponse");
    } else {
      $(".FCAnswer").hide();
      $(this).attr("value", "Afficher la réponse");
    }
    $(".FCAnswer").fadeToggle();
  });
});

function search() {
  if ($(".search") != cardNumber && $(".search").val() != "") {
    str = parseInt($(".search").val());
    cardNumber = str;
    $(".search").val("");
    $(".nb-here").text(cardNumber);
    load();
  }
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function lodcarde() {
  if (isadminchecked) {
    $(".vtag").text("Vérifié");
    $(".vtag").addClass("is-success");
    $(".vtag").removeClass("is-light");
  } else {
    $(".vtag").text("Non vérifié");
    $(".vtag").addClass("is-light");
    $(".vtag").removeClass("is-success");
  }
}
