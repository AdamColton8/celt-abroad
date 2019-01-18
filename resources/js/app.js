require('./bootstrap');
require('slick-carousel/slick/slick');
require('@fancyapps/fancybox/dist/jquery.fancybox.js');

require('./layout/_vendor');

$(".dropdown-menu li a").click(function(){
    $(this).parents(".btn-group").find('.btn').html($(this).text() + ' <span class="caret"></span>');
    $(this).parents(".btn-group").find('.btn').val($(this).data('value'));
});