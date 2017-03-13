
function ajaxListeLivers() {

    $.ajax({
        url: "./books",
        type: 'GET',
        dataType: 'json',
        async: true,
        success: function (data){
        
            $(data).each(function(e){
                $("#livre").append("<p>"+this.titre+"</p>");
            });
        }
    });
};
setTimeout(function(){
            
        },1000);


















    



































































































