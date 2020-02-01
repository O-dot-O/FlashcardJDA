$('.ans1').on({
    click : function() {
        $('.ans1').css('background-color','#007bff').css('transition','1s').css('color','#ffffff');
        $('.ans2').css('background-color','#28a745').css('transition','1s').css('color','#ffffff');
        $('.ans3').css('background-color','#dc3545').css('transition','1s').css('color','#ffffff');
    }
});

$('.ans2').on({
    click : function() {
        $('.ans1').css('background-color','#dc3545').css('transition','1s').css('color','#ffffff');
        $('.ans2').css('background-color','#28a745').css('transition','1s').css('color','#ffffff');
        $('.ans3').css('background-color','#dc3545').css('transition','1s').css('color','#ffffff');
    }
});

$('.ans3').on({
    click : function() {
        $('.ans1').css('background-color','#dc3545').css('transition','1s').css('color','#ffffff');
        $('.ans2').css('background-color','#28a745').css('transition','1s').css('color','#ffffff');
        $('.ans3').css('background-color','#007bff').css('transition','1s').css('color','#ffffff');
    }
});