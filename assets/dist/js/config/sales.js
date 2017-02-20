var height = $( window ).height();
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
function setStorage(data){
    var get_all = storage.get('item');
    var indexCount = null;
    var cObject = [];
    if (get_all !== null){
        $.each(get_all, function(index, value){
            if (value.name == data.name){
               indexCount = index;
            }
        });
    }else{
        cObject.push(data);
        storage.set('item', cObject);
    }
    if (indexCount !== null){
        get_all[indexCount].unidad += 1;
        storage.set('item', get_all);
    }
    if (get_all !== null && indexCount == null && data !== null){
        get_all.push(data);
        storage.set('item', get_all);
    }
}
function addItem(data){
    var itemHTML = '<section class="item"><section class="cantidad"><p>{cantidad}</p></section><section class="name"><p>{name}</p></section><section class="tax"><p>{tax}</p></section><section class="price"><p>{price}</p></section><section class="action"><a href="#" onclick="removeItem({index})"><i class="fa fa-close"></i></a></section></section>';
    var get_all = storage.get('item');
    var temp = null;
    var impuesto = 0;
    var item = "";
    var totalImpuesto = 0;
    var totalSubtotal = 0;
    var total = 0;
    if (get_all !== null){
        $.each(get_all, function(index, value){
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price*15/100);
            temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
            totalImpuesto = impuesto*value.unidad;
            totalSubtotal = value.price*value.unidad;
        });
        total = totalImpuesto+totalSubtotal;
        $("#subtotal").html(totalSubtotal.toFixed(2));
        $("#tax").html(totalImpuesto.toFixed(2));
        $("#total, #total-btn").html(total.toFixed(2));
        contentItem.html(item);
    }
    
}
function removeItem(index){
var itemHTML = '<section class="item"><section class="cantidad"><p>{cantidad}</p></section><section class="name"><p>{name}</p></section><section class="tax"><p>{tax}</p></section><section class="price"><p>{price}</p></section><section class="action"><a href="#" onclick="removeItem({index})"><i class="fa fa-close"></i></a></section></section>';
    var gets = storage.get('item');
    gets.splice(index, 1);
    var temp = null;
    var impuesto = 0;
    var item = "";
    var totalImpuesto = 0;
    var totalSubtotal = 0;
    var total = 0;
    if (gets !== null){
        $.each(gets, function(index, value){
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price*15/100);
            temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
            totalImpuesto = impuesto*value.unidad;
            totalSubtotal = value.price*value.unidad;
        });
        storage.set('item', gets);
        total = totalImpuesto+totalSubtotal;
        $("#subtotal").html(totalSubtotal.toFixed(2));
        $("#tax").html(totalImpuesto.toFixed(2));
        $("#total, #total-btn").html(total.toFixed(2));
        contentItem.html(item);
    }
}
$(item).on('click', function(event){
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
$(document).on('ready', function(){
    addItem(null);
});
$("#pay").click(function(){
    var payType = $("input[name='pay-type']").val();
    
});
$("#total-btn").click(function () {
    var item = null;
    var itemT = null;
    var subtotal = 0;
    var impuesto = 0;
    var total = 0;
    var itemPay = '<tr><td>{{nameProduct}}</td><td>{{qty}}</td><td>{{prece}}</td><td>{{total}}</td></tr>';
    if (storage.get('tipo') !== null){
        $("#payModal").modal('show');
        $.each(storage.get('item'), function(index, value){
            subtotal += (value.price*value.unidad);
            impuesto += ((value.price*15/100)*value.unidad);
            console.log(impuesto);
            itemT = itemPay.replace("{{nameProduct}}", value.name);
            itemT = itemT.replace("{{qty}}", value.unidad);
            itemT = itemT.replace("{{prece}}", value.price);
            itemT = itemT.replace("{{total}}", (value.price*value.unidad));
            item += itemT;
        });
        total = (subtotal + impuesto);
        $(".itemPay").html(item);
        $(".subtotalPay").html(subtotal.toFixed(2));
        $(".impuesto").html(impuesto.toFixed(2));
        $(".toPay").html(total.toFixed(2));
    }else{
        $("#tipo").modal('show');
    }
});
$("#add-customer").click(function(){
   var customer = $('ul.typeahead li.active').data('value');
   if (customer != ""){
       storage.set('customer', customer);
       $("#customer").html(customer);
       $("#search-customer").modal('hide');
   }
});
$("#add-type").click(function(){
   var type = $("input[name='tipo']").val();
   if (type != ""){
       storage.set("tipo",type);
       $("#tipo").modal('hide');
   }
});
$(".button-pay").click(function(){
    if(!$(this).hasClass('active')){
        $(".button-pay").toggleClass('active');
    }

})