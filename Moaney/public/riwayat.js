$(document).ready(function () {
    $(".btn-status").click(function () {
        $(this).addClass("btn-active");
        $(".btn-status").not(this).removeClass("btn-active");
    });


    $('#list_status_title a').click(function (event) {
        var filter = $(event.target).attr('data-filter');
        $('#list_status_item tr').each(function () {
            var item = $(this);
            console.log(item.attr('data-category').indexOf(filter) != -1);

            if (filter == '*' || (item.attr('data-category').indexOf(filter) != -1))
                item.show();
            else
                item.hide();
        });
    });
});