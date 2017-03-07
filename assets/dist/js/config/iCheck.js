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
            location.href = "/trigo/product/category/edit/" + radio;
        }
    });
    $("#delete").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/product/category/delete/" + radio;
        }
    });
    $("#edit_supplier").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/supplier/edit/" + radio;
        }
    });
    $("#delete_supplier").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/supplier/delete/" + radio;
        }
    });
    $("#edit_customer").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/customer/edit/" + radio;
        }
    });
    $("#delete_customer").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/customer/delete/" + radio;
        }
    });
    $("#edit_employee").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/employee/edit/" + radio;
        }
    });
    $("#delete_employee").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/employee/delete/" + radio;
        }
    });
    $("#edit_department").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/department/edit/" + radio;
        }
    });
    $("#delete_department").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/department/delete/" + radio;
        }
    });
    $("#edit_location").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/location/edit/" + radio;
        }
    });
    $("#delete_location").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/location/delete/" + radio;
        }
    });
    $("#edit_position").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/position/edit/" + radio;
        }
    });
    $("#delete_position").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/position/delete/" + radio;
        }
    });
    $("#edit_user").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/user/edit/" + radio;
        }
    });
    $("#delete_user").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/user/delete/" + radio;
        }
    });
    $("#edit_product").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/product/edit/" + radio;
        }
    });
    $("#delete_product").on('click', function(e) {
        e.preventDefault();
        var radio = $("input[type='radio']:checked").val();
        if (typeof radio !== 'undefined') {
            location.href = "/trigo/product/delete/" + radio;
        }
    });
});