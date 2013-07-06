$().ready(function() {
    $("#form1").validate({
        rules: {
            ci: {
                required: true
            },
            registro: {
                required: true
            },
            nombres: {
                required: true
            },
            apellidos: {
                required: true
            },
            fechanac: {
                required: true,
                date: true
            },
            nombreU: {
                required: true
            },
            contraseniaU: {
                required: true
            },
            contraseniaU_: {
                required: true,
                equalTo: "#contraseniaU"
            }
        }
    });
});