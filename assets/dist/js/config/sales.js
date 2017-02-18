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
    console.log(get_all);
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
    if (get_all !== null && indexCount == null){
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
    console.log(get_all);
    if (get_all !== null){
        $.each(get_all, function(index, value){
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price%15);
            temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
        });

        contentItem.html(item);
    }
    
}
function removeItem(index){
var itemHTML = '<section class="item"><section class="cantidad"><p>{cantidad}</p></section><section class="name"><p>{name}</p></section><section class="tax"><p>{tax}</p></section><section class="price"><p>{price}</p></section><section class="action"><a href="#" onclick="removeItem({index})"><i class="fa fa-close"></i></a></section></section>';
    var get_all = storage.get('item');
    get_all = get_all.indexOf(index);
    var temp = null;
    var impuesto = 0;
    var item = "";
    if (get_all !== null){
        $.each(get_all, function(index, value){
            temp = itemHTML.replace('{cantidad}', value.unidad);
            temp = temp.replace('{name}', value.name);
            impuesto = (value.price%15);
            temp = temp.replace('{tax}', impuesto);
            temp = temp.replace('{price}', value.price);
            temp = temp.replace('{index}', index);
            item += temp;
            temp = null;
        });

        contentItem.html(item);
    }
}
$(item).on('click', function(event){
    event.preventDefault();
    var data = JSON.parse(this.dataset.item);
    
    data = 
        {
            price: data.price,
            name: data.name,
            impuesto: null,
            unidad: 1,
            category: data.name_category,
            supplier: data.suppier_name
        };
    setStorage(data);
    addItem();
    
})
