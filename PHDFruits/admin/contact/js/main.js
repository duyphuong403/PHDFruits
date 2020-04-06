$(document).ready(function () {


    $('.remove').map(function (index) {
        $(this).click(function () {

            var selector = ".userid:eq(" + index + ")";

            $('#confirm-modal').modal('show');
            $('#btn-yes').click(function () {
                $.post("delete.php", {
                    id: parseInt($(selector).text())
                }).done(function () {
                    location.reload();
                });
            });
        });
    });
});

