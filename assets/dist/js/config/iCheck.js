$(function () {
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });
  $("#edit").on('click', function(e){
    e.preventDefault();
    var radio = $("input[type='radio']:checked").val();
    if (typeof radio !== 'undefined'){
      location.href = "/product/category/edit/"+radio;
    }
  });
  $("#delete").on('click', function(e){
      e.preventDefault();
      var radio = $("input[type='radio']:checked").val();
      if (typeof radio !== 'undefined'){
        location.href = "/product/category/delete/"+radio;
      }
  });
  $("#edit_supplier").on('click', function(e){
    e.preventDefault();
    var radio = $("input[type='radio']:checked").val();
    if (typeof radio !== 'undefined'){
      location.href = "/supplier/edit/"+radio;
    }
  });
  $("#delete_supplier").on('click', function(e){
      e.preventDefault();
      var radio = $("input[type='radio']:checked").val();
      if (typeof radio !== 'undefined'){
        location.href = "/supplier/delete/"+radio;
      }
  });
});