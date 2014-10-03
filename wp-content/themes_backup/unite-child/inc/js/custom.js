
$window = $( window ).width();


$( document ).ready(function() {
    if($window > 479) {
        $('.navbar-collapse.collapse li.login').css('display','none');
    }
    if($window > 599) {
        $('.navbar-collapse.collapse li.position').css('display','none');
    }
    if($window > 559) {
        $('.navbar-collapse.collapse li.share').css('display','none');
    }
    if($window > 767) {
        $('.navbar-collapse.collapse li.contact').css('display','none');
        $('.navbar-collapse.collapse li.help').css('display','none');

    }
});