  var cardNumber = 0;
  let header = document.querySelectorAll('header .heade');
  $(document).ready(function () {

  	$(".nb-here").text(cardNumber);
  	$(".dropdown-btn").next().hide();
  	$(".dropdown-btn").click(function () {
  		$(this).next().toggle(500);
  		$(this).toggleClass("arrow-down");
  		$(this).toggleClass("arrow-up");
  	});
  	$(".prev-btn").click(function () {
		  cardNumber--
		  if (cardNumber < 0) {
			  cardNumber = 0;
		  }
		  $(".nb-here").text(cardNumber);
  	});
  	$(".next-btn").click(function () {
		  cardNumber++
		  $(".nb-here").text(cardNumber);
	  });
	  $(".dropdown-toggle").click(function () {
		  $(this).toggleClass("arrow-down");
		  $(this).toggleClass("arrow-up");
	  });
	  $(".menuicocontainer").click(function () {
		$(this).toggleClass("changetoN");
	  });
	  //var requestURL = "json/user.json";
	  var requestURL = 'https://raw.githubusercontent.com/O-dot-O/FlashcardJDA/version-2/js/json/user.json';
	  var request = new XMLHttpRequest();
	  request.open('GET', requestURL);
	  request.responseType = "json";
	  request.send();

	  request.onload = function () {
	  	var waiting = request.response;
		populateHeader(waiting);
	  }
	  function populateHeader(jsonObj) {
		  var myName = document.createElement("h5");
		  myName.textContent = jsonObj[1]["name"];
		  header.appendChild(myName);

	  }
  });