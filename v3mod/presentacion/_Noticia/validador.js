$().ready(function() {
    $("#form1").validate({
        rules: {
            fecha: {
                required: true,
                date: true
            },
            titulo: {
                required: true
            }
        }
    });
});