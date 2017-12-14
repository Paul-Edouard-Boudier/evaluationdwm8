$(document).ready(function() {
    $('.click').click(function() {
        // alert('You clicked the DIV.');
        var link = String(($(this).find('a').attr('href')));
        /*var test = $(this).find('a');
        console.log($(test));*/
        window.location.href = link;
    });
});