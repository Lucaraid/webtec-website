$(document).ready(function() {
    $.cookie("styleswitcher", "black");
    $('#toggle').change(function () {
        if ($(this).is(':checked')) {
            $('#switch').css('color', '#04DEAD').prop('disabled', false);
            $.cookie("styleswitcher", "magenta");

        } else {
            $('#switch').css('color', '#222').prop('disabled', true);
            $.cookie("styleswitcher", "black");
        }
    });
});