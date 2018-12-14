//clone and display block schools attended

$('.add-attended').on('click', function(){
    var $div = $('div[id^="schoolsAttended-0"]:last');
    var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
    $('#schoolsAttended-0').clone(true).insertAfter($div).prop('id', 'schoolsAttended-0'+ num);
    $(".wrapper-schools-attended").fadeIn("slow").css("display","block");
});


//sidebar student

$('#sidebarCollapse').click(function() {
    $('#sidebar').toggle('fast');
    if($('.wrap-collapse').hasClass('collapse-active')){
        $('.wrap-collapse').removeClass('collapse-active');
    }else{
        $('.wrap-collapse').addClass('collapse-active');
    }
});
