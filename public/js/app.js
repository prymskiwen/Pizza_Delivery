$(document).ready(function () {
    $('.currency').on('change', function (e) {
        var formData = new FormData();
        formData.append('currency', $(this).val());

        $.ajax({
            method: 'POST',
            url: '/set_currency',
            dataType: 'json',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                window.location.reload();
            }
        });
    })
})