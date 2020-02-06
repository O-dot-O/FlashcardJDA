let next = document.querySelector('#nextBtn');
let prev = document.querySelector('#prevBtn');
let txt = document.querySelector('.nb_here');
let ans = document.querySelector('.affA');
let petitplus = document.querySelector('.littleplus')
let counter = 1;
let nb_div = 10;
nCards();
$('.ans p').hide(0);
$('.littleplus p').hide(0);
for(let i = 2; i < nb_div; i++){
    $(`.div${i}`).hide();
}
ans.addEventListener('click',affAns);
prev.addEventListener('click',prevC);
next.addEventListener('click',nextC);
function prevC() {
    $(`.div${counter}`).hide();
    counter--;
    console.log(`.div${counter}`);
    $(`.div${counter}`).show(400);
    showBtn();
    clearPlus();
    clearAnswer();
    nCards();
}

function nextC() {
    $(`.div${counter}`).hide();
    counter++;
    console.log(`.div${counter}`);
    $(`.div${counter}`).show(400);
    showBtn();
    clearPlus();
    clearAnswer();
    nCards();
}
function affAns() {
    let txtAfter = document.querySelector('.ans p');
    let txtBefore = document.querySelector('.flashCards-text p');
    $('.ans p').toggle(1000);
}
function clearAnswer() {
    $('.ans p').hide();
}
function clearPlus() {
    $('.littleplus p').hide();
}
/*----------------------------------------------------- 

------------------------------------------------------*/
// function prevC() {
//     $(`.div${counter}`).fadeOut(500);
//     console.log(`.div${counter}`);
//     counter--;
//     $(`.div${counter}`).fadeIn(500);

//     nCards();
// }

// function nextC() {
//     $(`.div${counter}`).fadeOut(500);
//     console.log(`.div${counter}`);
//     counter++;
//     $(`.div${counter}`).fadeIn(500);

//     nCards();
// }


function nCards() {
    if(counter === 0 || counter < 0) {
        txt.innerHTML = "No Cards";
    }else{
        txt.innerHTML = counter;
    }

    if(counter < 0) {
        counter = 0;
    }
}
/*-----------------------------*/

function showBtn() {

    if(counter == 0 || counter < 0) {
        nCards();
        $(ans).hide(100);
    }else if(counter > 0) {
        $(ans).show(100);
    }

}
$('.text-success').on({
    'click' : function() {
        $('.littleplus p').addClass('alert alert-info');
        $('.littleplus p').toggle(1000);
    }
});
 