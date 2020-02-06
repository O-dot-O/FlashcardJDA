  var cardNumber = 0;
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
		  LoadCard(cardNumber);
  	});
  	$(".next-btn").click(function () {
		  cardNumber++
		  $(".nb-here").text(cardNumber);
		  LoadCard(cardNumber);
	  });
	  $(".dropdown-toggle").click(function () {
		  $(this).toggleClass("arrow-down");
		  $(this).toggleClass("arrow-up");
	  });
	  $(".menuicocontainer").click(function () {
		$(this).toggleClass("changetoN");
	  });
	});