$('.navbarr .matierre1').hide();
// $('.bug').on({
// 'click' : function() {
// $('.navbarr .DropDown').show(500);
// },
// 'dblclick' : function() {
// $('.navbarr .DropDown').hide(500);
// }
// });

$('.navbarr .matierre2').hide();
// $('kbd .bug2').on({
// 'click' : function() {
// $('.navbarr .DropDown2').show(500);
// },
// 'dblclick' : function() {
// $('.navbarr .DropDown2').hide(500);
// }
// });
$('.navbarr .categorie1').hide();
let forDrop = document.querySelector('.bug');
let forDrop2 = document.querySelector('.bug2');
let toDrop = document.querySelectorAll('.navbarr .matierre1');
let toDrop2 = document.querySelectorAll('.navbarr .matierre2');
forDrop.addEventListener('click',dropDown1);
forDrop2.addEventListener('click',dropDown2);
$('.tUp').hide();
$('.tUp2').hide();
function dropDown1() {
    $('.tUp').toggle(0);
    $('.tDown').toggle(0)
    $(toDrop).toggle(350);
    $(toDrop2).hide(350);
    $('.tUp2').hide();
    $('.tDown2').show();
}
function dropDown2() {
    $('.tUp2').toggle(0);
    $('.tDown2').toggle(0)
    $(toDrop2).toggle(350);
    $(toDrop).hide(350);
    $('.tUp').hide();
    $('.tDown').show();
}