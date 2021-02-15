(function ($) {

    $('#meal_preference').parent().append('<ul class="list-item" id="newmeal_preference" name="meal_preference"></ul>');
    $('#meal_preference option').each(function () {
        $('#newmeal_preference').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
    });
    $('#meal_preference').remove();
    $('#newmeal_preference').attr('id', 'meal_preference');
    $('#meal_preference li').first().addClass('init');
    $("#meal_preference").on("click", ".init", function () {
        $(this).closest("#meal_preference").children('li:not(.init)').toggle();
    });

    var allOptions = $("#meal_preference").children('li:not(.init)');
    $("#meal_preference").on("click", "li:not(.init)", function () {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#meal_preference").children('.init').html($(this).html());
        allOptions.toggle();
    });

    $('#meal_preferencec').parent().append('<ul class="list-item" id="newmeal_preferencee" name="meal_preferencec"></ul>');
    $('#meal_preferencec option').each(function () {
        $('#newmeal_preferencee').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
    });
    $('#meal_preferencec').remove();
    $('#newmeal_preferencee').attr('id', 'meal_preferencec');
    $('#meal_preferencec li').first().addClass('init');
    $("#meal_preferencec").on("click", ".init", function () {
        $(this).closest("#meal_preferencec").children('li:not(.init)').toggle();
    });

    var allOptionss = $("#meal_preferencec").children('li:not(.init)');
    $("#meal_preferencec").on("click", "li:not(.init)", function () {
        allOptionss.removeClass('selected');
        $(this).addClass('selected');
        $("#meal_preferencec").children('.init').html($(this).html());
        allOptionss.toggle();
    });

    $('#reset').on('click', function () {
        $('#register-form').reset();
    });

    $('#register-form').validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            company: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone_number: {
                required: true,
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);

let btn = document.querySelector('.submit').addEventListener('click', function (e) {
    // e.preventDefault();
    console.log('ddd');
    Swal.fire({
        title: '<span class="title">Мы отправили вам на номер поверждающий код</span>',
        icon: 'info',
        input: 'text',
        inputPlaceholder: 'Введите смс'
    })
})