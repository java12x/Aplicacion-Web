function submitDemoForm() {
    var form = $("form[name=demo_form]");
    $.ajax({
        type: "POST",
        url: form.action ? form.action : document.URL,
        data: $(form).serialize(),
        dataType: "text",
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Ajax-Request", "true");
        },
        success: function(response) {
            $("#demo_div").html(response);
        }
    });
    return false;
}