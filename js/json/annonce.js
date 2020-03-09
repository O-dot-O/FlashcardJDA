/* Prototype donc pas implémenter stp :) */

// var titleOfAnnonce = $('.titleOfAnnonce');
// var subject = $('.subject');
// var message = $('.messageOfAdmin');

// loadAnnonce()

// function loadAnnonce() {
//     var requestURL = 'js/json/annonce.json';
//      var request = new XMLHttpRequest();
//      request.open('GET', requestURL);
//      request.responseType = "json";
//      request.send();
//      request.onload =  () => {
//          var loved = request.response;
//          LoadCard(loved);
//      };
     
//      function LoadCard(jsonObj) {
//        $(titleOfAnnonce).text(jsonObj['title']);
//        $(subject).text(jsonObj['subject']);
//        $(message).text(jsonObj['message']);
//        $('.from').text(jsonObj['from']);
//        $('.time').text(jsonObj['time']);
//     }
//     }