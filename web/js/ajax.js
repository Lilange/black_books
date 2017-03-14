
function ajaxListeLivers() {

    $.ajax({
        url: "./books",
        type: 'GET',
        dataType: 'json',
        async: true,
        success: function (data){
        
            $(data).each(function(e){
               var date = Date(this.datedeparutionthis);
                
                $("#content").append("<p>"+this.titre+"</p> <br>"+"<p>"+this.isbn+"</p>"+date+"<p>"+"</p>"+"<p>"+this.fkCatgorie+"</p>");
            });
        }
    });
};


$(document).ready(function(){
    ajaxListeLivers();
});
















    



































































































