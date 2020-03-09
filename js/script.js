var modal = document.getElementById("theModal");
var cardNumber = 0;
$(document).ready(function () {
  $(".nb-here").text(cardNumber);
  $(".prev-btn").click(function () {
    cardNumber--;
    if (cardNumber < 0) {
      cardNumber = 0;
    }
    $(".nb-here").text(cardNumber);
    load();
  });
  $(".next-btn").click(function () {
    cardNumber++;
    $(".nb-here").text(cardNumber);
    load();
  });
  $(".menuicocontainer").click(function () {
    $(this).toggleClass("changetoN");
  });
  $(".modalbtn").click(function () {
    modal.style.display = "block";
  });
  $(".close").click(function () {
    modal.style.display = "none";
  });
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
  
  $(".navbar-burger").click(function () {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
  $(".dropdown-trigger").click(function () {
    $(".dropdown").toggleClass("is-active");
});
  $('.searcher').click(search);
});

function search() {
  if($('.search') != cardNumber && $('.search').val() != '') {
    str = parseInt($('.search').val());
    cardNumber = str;
    $('.search').val('');
    $(".nb-here").text(cardNumber);
    load();
  }
}
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}