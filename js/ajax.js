function changeButton() {
    $.get("picture.txt", function(text) {
        $("button").replaceWith(text);
    })
};