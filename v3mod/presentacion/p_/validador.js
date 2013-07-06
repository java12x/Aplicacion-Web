$().ready(function() {
    $("#form1").validate({
        rules: {
            sigla: {
                required: true
            },
            nombre: {
                required: true
            },
            semestre: {
                required: true,
                number: true
            },
            hteoricas: {
                required: true,
                number: true
            },
            hpracticas: {
                required: true,
                number: true
            },
            hsemestre: {
                required: true,
                number: true
            },
            creditos: {
                required: true,
                number: true
            }
        }
    });
});