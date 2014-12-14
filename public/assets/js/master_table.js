/* Taken from:
http://bootsnipp.com/snippets/featured/bootstrap-snipp-for-datatable
*/

$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
});

function edit_food_item(){
    /*
    $.ajax({
        type: 'STORE',
        url: '/food/store',
        data:$ {
            
        },
        success: function(response){

        },

    }); */ 

}

function delete_food_item(){

    alert('hi');
//try naming the delete button
}
/*

    $.ajax({
        type: 'GET',
        url: '/food/destroy/id',
        success: function(response){

        },
        data: {

        },
    });
}
*/

//use event handler