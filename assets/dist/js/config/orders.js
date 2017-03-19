function update_statistics(orders_number, total_sales,products_sold) {
    $('#number_of_orders').text(orders_number);
    $('#total_sales').text(numeral(total_sales).format('$0,0.00'));
    $('#products_sold').text(products_sold);
};

function result(start_date, end_date) {

 console.log(start_date);
 console.log(end_date);

    $.ajax('/trigo/ajax/orders/search_by_period', {
        method: 'POST',
        data: { start_date: start_date, end_date: end_date },        
        beforeSend: function() {
            $(".loading").css('display', 'flex');
        },
        dataType: 'json',        
        error: function(resp) {
            $(".loading").css("display", 'none');
            $.each(resp, function(i, j) {
                console.log('respuesta error:' + i + ' ' + j);
            });

        },
        success: function(res) {
            
                if (res != null) {       

                $(".loading").css("display", 'none');   

                update_statistics(res[0]['orders_number'],res[0]['total_sales'],res[0]['products_sold']);                                                                                                               
                                                 
                var orderHTML = ' <div class=" col-md-3 grid-item"> <!-- /.inicia tarjeta de orden -->' +
                '<div class="box">'+
                '<div class="box-header">'+
                    '<h3 class="box-title">Orden  {{orden}}</h3>'+
                    '<div class="box-tools">'                +
                    '<span class="badge bg-green">{{status}}</span>'+
                    '</div>'+
                    
                '</div>'+
                
                '<div class="box-body no-padding">'+
                    '<table class="table">'+
                    '<tbody>'+
                    '<tr>'+
                        '<th style="width: 10px">Cant.</th>'+
                        '<th>Artículo</th>'+
                        '<th>Precio</th>'+
                    '</tr>' +                        
                    '{{details}}'+
                    '</tbody></table>'+
                '</div>'+
                
                '<div class="box-footer clearfix">  <!-- /.box-footer -->'+
                    '<span class="pull-right"><b>Subtotal:</b> {{subtotal}} </span></br>'+
                    '<span class="pull-right"><b>ITBIS:</b> {{itbis}} </span></br>'+
                    '<span class="badge bg-aqua">{{fecha}} </span>'+
                    '<span class="pull-right"><b>Total:</b> {{total}}</span>'+
                '</div>'+
                
                '<div class="box-footer clearfix">  <!-- /.box-footer -->'+
                    '<ul class="pagination pagination-sm no-margin pull-left">'+
                    '<li><span>Cliente: {{cliente}}</span></li>'+
                    '<li><a href="#">Atendió: {{username}}</a></li>'+
                    '</ul>'+
                '</div><!-- /.box-footer -->'+
                '</div> <!-- /.box -->'+
        '</div><!-- /.termina tarjeta de orden --> '
            var order = "";
            var orderTEMP = "";            
            $.each(res, function(index, value) {                         
                        var detail = "";    
                        orderTEMP = orderHTML.replace('{{orden}}', (value.orden > 1000 ? value.orden : '#00' + value.orden));
                        orderTEMP = orderTEMP.replace('{{status}}', value.status);
                         $.each(value.detail, function(index, value1) {                              
                            detail+=                                '<tr>'+
                                                                        '<td>'+value1.cantidad+'</td>'+
                                                                        '<td>'+value1.producto+'</td>'+
                                                                        '<td>'+value1.precio+'</td>'+
                                                                    '</tr>'

                                                                });
                        orderTEMP = orderTEMP.replace('{{details}}', detail);
                        orderTEMP = orderTEMP.replace('{{subtotal}}', numeral(value.subtotal).format('$0,0.00'));
                        orderTEMP = orderTEMP.replace('{{itbis}}', numeral(value.itbis).format('$0,0.00'));
                        var total = parseFloat(value.subtotal) + parseFloat(value.itbis);                        
                        orderTEMP = orderTEMP.replace('{{total}}', numeral(total).format('$0,0.00'));
                        orderTEMP = orderTEMP.replace('{{fecha}}', value.fecha);                        
                        orderTEMP = orderTEMP.replace('{{cliente}}', (value.nombre_cliente =='Default' ? 'N/A' : value.nombre_cliente + ' ' + value.apellido_cliente));
                        orderTEMP = orderTEMP.replace('{{username}}', value.username);
                        order += orderTEMP;
                    });
                    //$(".grid").html(order);    
                    
                    $(".grid").html(order).masonry( {itemSelector: '.grid-item'} );       
                    //var $grid =  $('.grid').masonry({itemSelector: '.grid-item', columnWidth:250 });
                    //$grid.masonry('reloadItems');                  
                  
            } else {                
                update_statistics(0,0,0);
                $(".grid").html("<div class='col-md-8'> <h4>No hay datos para las fechas seleccionadas.</h4></div>");
                $(".loading").css("display", 'none');                 
            }
        }
    });
}

$(document).ready(function() {
  
$(function() {       

    var start = moment().subtract(29, 'days');
    var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('D/MM/YYYY') + ' - ' + end.format('D/MM/YYYY'));
        }
        
        $('#reportrange').daterangepicker({ 
            "locale": {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "Desde",
                    "toLabel": "Hasta",
                    "customRangeLabel": "Seleccionar",
                    "daysOfWeek": [
                        "Do",
                        "Lu",
                        "Ma",
                        "Mi",
                        "Ju",
                        "Vi",
                        "Sa"
                    ],
                    "monthNames": [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Deciembre"
                    ],
                    "firstDay": 1
                },
            startDate: start,
            endDate: end,
            ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '7 Días': [moment().subtract(6, 'days'), moment()],
            'Últimos 30 Días': [moment().subtract(29, 'days'), moment()],
            'Mes en cusrso': [moment().startOf('month'), moment().endOf('month')],
            'Mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }       
        }, cb);

        cb(start, end);    

        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {           
             result(picker.startDate.format('YYYY/MM/D'), picker.endDate.format('YYYY/MM/D'));
        });

        /*$('#reportrange').on('apply.daterangepicker', function(ev, picker) {           
             result(picker.startDate.format('YYYY/M/D'), picker.endDate.format('YYYY/M/D'));
        });*/
    
    });

});
