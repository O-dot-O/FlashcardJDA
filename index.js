      
      let header = document.querySelector(".heade")
      //var requestURL = "json/user.json";
	  var requestURL = 'user.json';
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
          myName.textContent = jsonObj[1]["name"][2];
          header.appendChild(myName);
    }
	      
