$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    $("#edit").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/product/category/edit/" + radio;
        }
    });
    $("#delete").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/product/category/delete/" + radio;
        }
    });
    $("#edit_supplier").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/supplier/edit/" + radio;
        }
    });
    $("#delete_supplier").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/supplier/delete/" + radio;
        }
    });
    $("#edit_employee").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/employee/edit/" + radio;
        }
    });
    $("#delete_employee").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/employee/delete/" + radio;
        }
    });
    $("#edit_department").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/department/edit/" + radio;
        }
    });
    $("#delete_department").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/department/delete/" + radio;
        }
    });
    $("#edit_position").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/position/edit/" + radio;
        }
    });
    $("#delete_position").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/position/delete/" + radio;
        }
    });
    $("#edit_user").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/user/edit/" + radio;
        }
    });
    $("#delete_user").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/user/delete/" + radio;
        }
    });
    $("#edit_product").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/product/edit/" + radio;
        }
    });
    $("#delete_product").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/product/delete/" + radio;
        }
    });
});