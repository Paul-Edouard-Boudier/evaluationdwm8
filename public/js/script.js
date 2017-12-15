$(document).ready(function() {
    $('.click').on('click', function() {
        var link = String(($(this).find('a').attr('href')));
        window.location.href = link;
    });
    $('#barchart').on('click', function() {
        var test = $(this).find('svg');
        console.log(test);
    })
});