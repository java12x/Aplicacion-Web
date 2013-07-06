$().ready(function() {
    $("#form1").validate({
        rules: {
            anio: {
                required: true,
                number: true
            },
            semestre: {
                required: true,
                number: true
            }
        }
    });
});