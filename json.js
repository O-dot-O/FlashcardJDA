let header = document.querySelector('tbody');

let name = document.querySelector('#name');
let firstName = document.querySelector('#first-name');
let age = document.querySelector('#age');
let classe = document.querySelector('#classe');
let friends = document.querySelector('#friends');
let submit = document.querySelector('#btn');
let pupil = {
    name ,
    firstName,
    age ,
    classe,
    friends
};
submit.addEventListener('click',add)
function add() {
    pupil.name = name.value,
    pupil.firstName = firstName.value,
    pupil.age = age.value,
    pupil.classe = classe.value,
    pupil.friends = friends.value;

    friends.value = classe.value = age.value = firstName.value = name.value = ""

    let myName = document.createElement('td');
    myName.textContent = pupil.name;
    header.appendChild(myName);

    let myPara = document.createElement('td');
    myPara.textContent = pupil.firstName;
    header.appendChild(myPara);

    let myPara2 = document.createElement('td');
    myPara2.textContent = pupil.age;
    header.appendChild(myPara2);

    let myPara3 = document.createElement('td');
    myPara3.textContent = pupil.classe;
    header.appendChild(myPara3);

    let myPara4 = document.createElement('td');
    myPara4.textContent = pupil.friends;
    header.appendChild(myPara4);
    
    let newLine = document.createElement('tr');
    header.appendChild(newLine);
}

let requestURL = 'user.json';
let request = new XMLHttpRequest();
request.open('GET',requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
    let waiting = request.response;
    populateHeader(waiting);
}
function populateHeader(jsonObj) {
    for (let i = 0;i < jsonObj.length;i++) {
    let myName = document.createElement('td');
    myName.textContent = jsonObj[i]["name"];
    header.appendChild(myName);

    let myPara = document.createElement('td');
    myPara.textContent = jsonObj[i]["firstName"];
    header.appendChild(myPara);

    let myPara2 = document.createElement('td');
    myPara2.textContent = jsonObj[i]["age"];
    header.appendChild(myPara2);

    let myPara3 = document.createElement('td');
    myPara3.textContent = jsonObj[i]["class"];
    header.appendChild(myPara3);

    let myPara4 = document.createElement('td');
    if(i!= 0) {myPara4.textContent = jsonObj[i]["friends"];}
    else{
        myPara4.textContent = jsonObj[0]["friends"][0]["name"] + ",";
        for(j = 1;j<jsonObj[0]["friends"].length;j++) {
            myPara4.textContent += jsonObj[0]["friends"][j];
        }
        
    }
    header.appendChild(myPara4);
    
    let newLine = document.createElement('tr');
    header.appendChild(newLine);
    console.log(jsonObj);
}
   let Last = document.createElement('td');
   Last.textContent = jsonObj[0]["friends"][0]["friends"][2]
    header.appendChild(Last);

    let newLine = document.createElement('tr');
    header.appendChild(newLine);
}