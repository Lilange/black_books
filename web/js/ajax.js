
$(document).ready(function () {

    $.ajax({
        url: "./books",
        type: 'GET',
        dataType: 'json',
        async: true,
        success: function (data) {
            $("#liste_div").empty();
            var liste = $.parseJSON(livres);
            $(liste).each(function (e) {
                $("#liste_div").append("<p>@" + this.titre + "</p>");
                
            });
        }
    });
});



















    



































































































