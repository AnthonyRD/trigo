var height = $(window).height();
$(".sidebar-sales").css("min-height", height);

var item = $(".products a");
var contentItem = $('.sales-content');
var storage = $.localStorage;
Array.prototype.indexOf || (Array.prototype.indexOf = function(d, e) {
    var a;
    if (null == this) throw new TypeError('"this" is null or not defined');
    var c = Object(this),
        b = c.length >>> 0;
    if (0 === b) return -1;
    a = +e || 0;
    Infinity === Math.abs(a) && (a = 0);
    if (a >= b) return -1;
    for (a = Math.max(0 <= a ? a : b - Math.abs(a), 0); a < b;) {
        if (a in c && c[a] === d) return a;
        a++
    }
    return -1
});

function clear() {
    var cero = 0;
    var cliente = storage.get('customer');
    localStorage.clear();
    storage.set('customer', cliente);
    $(contentItem).html("");
    $("#subtotal, .subtotalPay").html(cero.toFixed(2));
    $("#tax, .impuesto").html(cero.toFixed(2));
    $("#total, #total-btn, .toPay").html(cero.toFixed(2));
}

function cancel() {
    var cero = 0;
    localStorage.clear();
    $(contentItem).html("");
    $("#subtotal, .subtotalPay").html(cero.toFixed(2));
    $("#tax, .impuesto").html(cero.toFixed(2));
    $("#total, #total-btn, .toPay").html(cero.toFixed(2));
    $("#customer").html("Default");
}

function setStorage(data) {

    var get_all = storage.get('item');
    var indexCount = null;
    var cObject = [];
    if (get_all !== null) {
        $.each(get_all, function(index, value) {
            if (value.name == data.name) {
                indexCount = index;
            }
        });
    } else {
        cObject.push(data);
        storage.set('item', cObject);
    }
    if (indexCount !== null) {
        get_all[indexCount].unidad += 1;
        storage.set('item', get_all);
    }
    if (get_all !== null && indexCount == null && data !== null) {
        get_all.push(data);
        storage.set('item', get_all);
    }
}

function addItem(data) {
    var itemHTML = '<section class="item"><section class="cantidad"><p>{cantidad}</p></section>' +
        '<section class="name"><p>{name}</p></section>' +
        //'<section class="tax"><p>{tax}</p></section>' +
        '<section class="tax"><p>{price}</p></section>' +
        '<section class="action"><a href="#" onclick="removeItem({index})"><i class="fa fa-close"></i></a></section></section>';
    var get_all = storage.get('item');
    var temp = null;
    var impuesto = 0.00;
    var item = "";
    var totalImpuesto = 0;
    var totalSubtotal = 0;
    var total = 0.00;
    if (get_all !== null) {
        $.each(get_all, function(index, value) {
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price * 18 / 100.00);
            //temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.unidad * value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
            totalImpuesto += impuesto * value.unidad;
            totalSubtotal += value.price * value.unidad;
        });
        total = totalImpuesto + totalSubtotal;
        storage.set('total', total);
        storage.set('tax', totalImpuesto);
        storage.set('subtotal', totalSubtotal);
        $("#subtotal, .subtotalPay").html(totalSubtotal.toFixed(2));
        $("#tax, .impuesto").html(totalImpuesto.toFixed(2));
        $("#total, #total-btn, .toPay").html(total.toFixed(2));
        contentItem.html(item);
    }
    if (storage.get('customer') == null) {
        storage.set('customer', 'Default');
        $("#customer").html(storage.get('customer'));
    } else {
        $("#customer").html(storage.get('customer'));
    }

}

function removeItem(index) {
    var itemHTML = '<section class="item"><section class="cantidad"><p>{cantidad}</p></section><section class="name"><p>{name}</p></section><section class="tax"><p>{tax}</p></section><section class="price"><p>{price}</p></section><section class="action"><a href="#" onclick="removeItem({index})"><i class="fa fa-close"></i></a></section></section>';
    var gets = storage.get('item');
    gets.splice(index, 1);
    var temp = null;
    var impuesto = 0;
    var item = "";
    var totalImpuesto = 0;
    var totalSubtotal = 0;
    var total = 0;
    if (gets !== null) {
        $.each(gets, function(index, value) {
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price * 15 / 100);
            temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
            totalImpuesto = impuesto * value.unidad;
            totalSubtotal = value.price * value.unidad;
        });
        storage.set('item', gets);
        total = totalImpuesto + totalSubtotal;
        storage.set('total', total);
        storage.set('tax', totalImpuesto);
        storage.set('subtotal', totalSubtotal);
        $("#subtotal, .subtotalPay").html(totalSubtotal.toFixed(2));
        $("#tax, .impuesto").html(totalImpuesto.toFixed(2));
        $("#total, #total-btn, .toPay").html(total.toFixed(2));
        contentItem.html(item);
    }
}

function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
$(document).on('click', '.products a', function(event) {
    event.preventDefault();
    var data = JSON.parse(this.dataset.item);

    data = {
        id: data.id,
        price: data.price,
        name: data.name,
        impuesto: null,
        unidad: 1,
        category: data.name_category,
        supplier: data.suppier_name
    };

    setStorage(data);
    addItem();

});
$(document).on('ready', function() {
    addItem(null);
});
$("#pay").click(function() {
    var payType = $("input[name='pay-type']").val();

});

function prm() {
    var cero = parseInt($("#total-btn").html());
    if (cero > 0) {
        var item = null;
        var itemT = null;
        var subtotal = 0;
        var impuesto = 0;
        var total = 0;
        var itemPay = '<tr><td>{{nameProduct}}</td><td>{{qty}}</td><td>{{prece}}</td><td>{{total}}</td></tr>';
        var totalStorage = storage.get('total');
        if (storage.get('tipo') !== null) {
            if (totalStorage != 0) {
                $("#payModal").modal('show');
                $.each(storage.get('item'), function(index, value) {
                    subtotal += (value.price * value.unidad);
                    impuesto += ((value.price * 15 / 100) * value.unidad);
                    console.log(value);
                    itemT = itemPay.replace("{{nameProduct}}", value.name);
                    itemT = itemT.replace("{{qty}}", value.unidad);
                    itemT = itemT.replace("{{prece}}", value.price);
                    itemT = itemT.replace("{{total}}", (value.price * value.unidad));
                    item += itemT;
                });
                total = (subtotal + impuesto);
                $(".itemPay, .itemPays").html(item);
                $(".subtotalPay").html(subtotal.toFixed(2));
                $(".impuesto").html(impuesto.toFixed(2));
                $(".toPay").html(total.toFixed(2));
            } else {
                alert('No hay ningún artículo en la cesta.');
            }
        } else {
            $("#tipo").modal('show');
        }
    } else {
        alert('Primero debes añadir un item a la cesta.');
    }
}
$("#total-btn").click(function() {
    prm();
});
$("#add-customer").click(function() {
    var customer = $('ul.typeahead li.active').data('value');
    if (customer != "") {
        storage.set('customer', customer);
        $("#customer").html(customer);
        $("#search-customer").modal('hide');
    }
});
$("#add-type").click(function() {
    var type = document.getElementById('input-tipo').value;
    if (type != "") {
        storage.set("tipo", type);
        $("#tipo").modal('hide');
        $("#payModal").modal('show');
        prm();
    }
});
$(".button-pay").click(function() {
    if (!$(this).hasClass('active')) {
        $(".button-pay").toggleClass('active');
    }

});
$("#confirm").click(function() {
    var type = $(".active input[name='pay-type']").val();
    storage.set('payment_type', type);
    if (type == "1") {
        $("#payModal").modal("hide");
        $("#confirmM").modal('show', {
            backdrop: 'static',
            keyboard: false
        });
    } else if (type == "3") {
        $("#payModal").modal("hide");
        $("#hs").addClass('hide');
        $("#cobro-invoice").modal('show', {
            backdrop: 'static',
            keyboard: false
        });
    }

});
$("#efectivo").click(function() {
    var efectivo = $("input[name='efectivo']");
    var efectivo_val = parseFloat(efectivo.val());
    var total_pago = storage.get('total');
    if (efectivo_val != '' && !isNaN(efectivo_val) && efectivo_val >= total_pago) {
        var devuelta = efectivo_val - total_pago;
        $(".devuelta").html(devuelta.toFixed(2));
        $(".pago").html(efectivo_val);
        storage.set('pago', efectivo_val);
        efectivo.parent().removeClass('has-error');
        efectivo.parent().addClass('has-success');
        $("#confirmM").modal('hide');
        $("#cobro-invoice").modal('show');
    } else {
        efectivo.parent().removeClass('has-success');
        efectivo.parent().addClass('has-error');
    }
});
$("#cobro").click(function() {
    var customer = (storage.get('customer') == null) ? 'Default' : storage.get('customer');
    var data = {
        order: storage.get('item'),
        tipo: storage.get('tipo'),
        customer: customer,
        subtotal: storage.get('subtotal'),
        tax: storage.get('tax'),
        payment_type: storage.get('payment_type')
    };
    $.ajax('/trigo/ajax/order/create', {
        method: 'POST',
        data: data,
        dataType: 'json',
        beforeSend: function() {
            $(".loading").css('display', 'flex');
        },
        success: function(resp) {
            $("#hs").removeClass('hide');
        },
        error: function(resp) {
            $(".loading").css("display", 'none');
            console.log(resp);
        },
        complete: function(data, a) {
            if (a == "success") {
                $(".loading").css("display", 'none');
                PopupCenter("/order/print", "Print Invoice", '900', '500');
            } else {
                alert("Error al guardar la factura.");
            }
        }
    });
});

function result(category, str) {
    $.ajax('/trigo/ajax/products/getall', {
        method: 'POST',
        data: { category: category, str: str },
        dataType: 'json',
        success: function(res) {
            if (res != null) {
                var itemHTML = '<a href="#" class="item" data-item=\'{{data}}\'><section class="item-header"><img src="/trigo/uploads/products/{{img}}"/></section><section class="item-body"><h3>{{name}}</h3></section></a>';
                var item = "";
                var itemTEMP = "";
                $.each(res, function(index, value) {
                    itemTEMP = itemHTML.replace('{{data}}', JSON.stringify(value));
                    itemTEMP = itemTEMP.replace('{{img}}', value.image_url);
                    itemTEMP = itemTEMP.replace('{{name}}', value.name);
                    item += itemTEMP;
                });
                $(".products").html(item);
            } else {
                $(".products").html("<div class='col-md-8'> <h4>Su requerimiento no genera resultados.</h4></div>")
            }
        }
    });
}
$(document).ready(function() {
    var ul = $(".navbar-nav")[1];
    var category = ul.children[0].innerText;
    result(category, "");
});
$("input[name='search-item']").keyup(function() {
    if (this.value == "") {
        var ul = $(".navbar-nav")[1];
        var category = ul.children[0].innerText;
        result(category, "");
    } else {
        result("", this.value);
    }
});
$("#category li").click(function() {
    result(this.innerText, "");
});
$("#clear").click(function() {
    var r = confirm('¿Está seguro de limpiar la cesta?');
    if (r == true) {
        clear();
    }
});
$("#cancel").click(function() {
    var r = confirm('¿Está  seguro que quieres cancelar la orden?');
    if (r == true) {
        cancel();
    }
});