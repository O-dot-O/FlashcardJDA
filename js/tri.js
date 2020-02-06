let btn = document.querySelector('.cherche');
let numero = document.querySelector('.numero');
setInterval(cherche,1500);
function cherche() {
    if(numero.value == ''){
        console.log(typeof(numero.value))
        return 0;
    }else {
        if(typeof(numero.value) == String){
            parseInt(numero.value);
        }
    for (let i = 0;i < 1000;i++){
        $(`.div${i}`).hide(100);
    }
    let toCherche = numero.value;
    numero.value = '';
    clearAnswer();
    clearPlus();
    $(`.div${toCherche}`).show(100);
    counter = toCherche;
    showBtn();
    nCards();
} 
}
function clearAnswer() {
    $('.ans p').hide();
}