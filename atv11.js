$("#toggle-tab").click(function() {

    $("#tab-content").toggle();
    $("#toggle-tab").toggleClass("flip");

});

$("#toggle-asc").click(function() {

    $("#tab-esc").toggle();
    $("#toggle-asc").toggleClass("flip");

});

$("#toggle-bst").click(function() {

    $("#tab-sus").toggle();
    $("#toggle-bst").toggleClass("flip");

});