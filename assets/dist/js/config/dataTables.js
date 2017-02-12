  $(function () {
    $('#datatables').DataTable();
    $("tbody > tr").click(function(){
      var checkbox = this.getElementsByTagName('input')[0];
      $(checkbox).iCheck("check");
    })
  });