	 let title = document.querySelector('.FCTitle');
	 let question = document.querySelector('.FCQuestion');
	 let answer = document.querySelector('.FCAnswer');
	 let note = document.querySelector('.FCNote');
	 load();
	 function load() {
	 var requestURL = 'cards.json';
	  var request = new XMLHttpRequest();
	  request.open('GET', requestURL);
	  request.responseType = "json";
	  request.send();
	  request.onload = function () {
	  	var loved = request.response;
	  	LoadCard(loved);
	  };

	  function LoadCard(jsonObj) {
		$(title).text(jsonObj[cardNumber]['title']);
		$(question).text(jsonObj[cardNumber]['question']);
		$(answer).text(jsonObj[cardNumber]['answer']);
		$(note).text(jsonObj[cardNumber]['Note']);
	}
}