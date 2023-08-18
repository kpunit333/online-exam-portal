$(document).ready(function(){
    $('.links').click(function(){
        $('.active').removeClass('active');
        $(this).addClass('active');

        $(".tabs").hide();
        $(`.${this.id}`).show();

        // if(this.id == "course-link")
        // {
        //     $(".tabs").hide();
        //     $(".course").show();
        // }
        // else if(this.id == "home-link")
        // {
        //     $(".tabs").hide();
        //     $(".home").show();
        // }
    });
});