$().ready(function() {
    $("#form1").validate({
        rules: {
            nombre: {
                required: true
            }
        }
    });
});