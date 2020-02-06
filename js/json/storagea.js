	  var requestURL = 'cards.json';
	  var request = new XMLHttpRequest();
	  request.open('GET', requestURL);
	  request.responseType = "json";
	  request.send();

	  request.onload = function () {
	  	var jsonObj = request.response;
	  	LoadCard(0, jsonObj);
	  };

	  function LoadCard(loadCardN, jsonObj) {
	  	$(".FCTitle").text(jsonObj[0]['title']);
	  	$(".FCQuestion").text(jsonObj[0]['question']);
	  };