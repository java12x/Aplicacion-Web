function submitDemoForm(formName) {
    var form = $("form[name=" + formName + "]");
    $.ajax({
        type: "POST",
        url: form.action ? form.action : document.URL,
        data: $(form).serialize(),
        dataType: "text",
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Ajax-Request", "true");
        },
        success: function(response) {
            $("#dContenedor").html(response);
        }
    });
    return false;
}