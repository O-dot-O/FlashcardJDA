let math = document.querySelector('.math');

math.addEventListener('click',tri());

function triMath() {
    let i = 0, j;
    $('div .flashCards').hide();
    $(`.${counter}-math`).show(1000);
}