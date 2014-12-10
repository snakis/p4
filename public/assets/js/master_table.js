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
/*
var delete_modal = $('#delete');

delete_modal.on('click', '#submit-modal', function() {
    alert('hi');
});
*/