var modal = document.getElementById("theModal");
let title = document.querySelector(".FCTitle");
let question = document.querySelector(".FCQuestion");
let answer = document.querySelector(".FCAnswer");
let note = document.querySelector(".FCNote");
load();
function load() {
  var requestURL = "cards.json";
  var request = new XMLHttpRequest();
  request.open("GET", requestURL);
  request.responseType = "json";
  request.send();
  request.onload = function() {
    var loved = request.response;
    LoadCard(loved);
  };

  function LoadCard(jsonObj) {
    $(title).text(jsonObj[cardNumber]["title"]);
    $(question).text(jsonObj[cardNumber]["question"]);
    $(answer).text(jsonObj[cardNumber]["answer"]);
    $(note).text(jsonObj[cardNumber]["Note"]);
  }
}

var cardNumber = 0;
$(document).ready(function() {
  $(".nb-here").text(cardNumber);
  $(".dropdown-btn")
    .next()
    .hide();
  $(".dropdown-btn").click(function() {
    $(this)
      .next()
      .toggle(500);
    $(this).toggleClass("arrow-down");
    $(this).toggleClass("arrow-up");
  });
  $(".prev-btn").click(function() {
    cardNumber--;
    if (cardNumber < 0) {
      cardNumber = 0;
    }
    $(".nb-here").text(cardNumber);
    LoadCard(cardNumber);
  });
  $(".next-btn").click(function() {
    cardNumber++;
    $(".nb-here").text(cardNumber);
    LoadCard(cardNumber);
  });
  $(".dropdown-toggle").click(function() {
    $(this).toggleClass("arrow-down");
    $(this).toggleClass("arrow-up");
  });
  $(".menuicocontainer").click(function() {
    $(this).toggleClass("changetoN");
  });
  /*
  $(".themeForm").submit(function() {
    var newUrl;
    $(".themeLoc").attr("href", newUrl);
  });*/
  $(".modalbtn").click(function() {
    modal.style.display = "block";
  });
  $(".close").click(function() {
    modal.style.display = "none";
  });
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});
