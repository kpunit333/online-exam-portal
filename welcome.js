$(document).ready(function(){

    
    $('.hamburger').click(function(){
        $('.nav-bottom-phn').slideToggle(500);
    });
    
    $('.nav-bottom-phn').slideUp();
    
    $('.tab-links').click(function(){
        let tab = this.id;
        $('.dash-items').hide();
        $(`.${tab}`).show();

        $('.tab-links').removeClass('active-tab-link');
        $(this).addClass('active-tab-link');

        console.log("clickkkkk");
    });

    
    $('td>a').addClass('disabled');
    $('#readycheck').change(function isCheck(){
        if ($(this).is(':checked')) {
            $('td>a').removeClass('disabled');
        } 
        else {
            console.log("Checkbox is not checked..");
            $('td>a').addClass('disabled');
        }
    });


})