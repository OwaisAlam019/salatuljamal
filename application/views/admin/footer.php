  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 2.4.0 -->
    </div>
    <strong>Copyright &copy; 2016-2018 <a href="https://itretina.com">ITRETINA</a>.</strong> All rights
    reserved.

    <!-- jQuery 3 -->
<script src="<?=base_url()?>assets/library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url()?>bower_components/Chart.js/Chart.js"></script>
<script src="<?=base_url()?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>dist/js/demo.js"></script>
<script src="<?=base_url()?>dist/sweetalert.min.js"></script> 

<script type="text/javascript">

  var status = <?= isset($status) ?json_encode($status):"''";?>;
  if(status)
   {swal(status,"Thanks", "success");};

  function delete_record(id) {
        swal({
                title             : "Are you sure?",
                text              : "Once deleted, you will not be able to recover this record",
                type              : "warning",
                showCancelButton  : true,
                confirmButtonColor: "#f44242",
                confirmButtonText : "Yes, Delete!",
                cancelButtonText  : "No, cancel",
                closeOnConfirm    : false,
                closeOnCancel     : false
            },
            function (isConfirm) {
                //  event.preventDefault();
                if (isConfirm) {
                   // swal("Deleted!", "Record deleted", "success");
                    window.location = "../delete/"+id;
                } else {
                    swal("Cancelled", "", "error");
                    return false;
                }
            });
        return false;
    }


 function completed(id) {
        swal({
                title             : "Are you sure?",
                text              : "The reservtaion has been completed..?",
                type              : "info",
                showCancelButton  : true,
                confirmButtonColor: "#3c8dbc",
                confirmButtonText : "Yes, Mark as complete!",
                cancelButtonText  : "No, cancel",
                closeOnConfirm    : false,
                closeOnCancel     : false
            },
            function (isConfirm) {
                //  event.preventDefault();
                if (isConfirm) {
                   // swal("Deleted!", "Record deleted", "success");
                    window.location = "../completed/"+id;
                } else {
                    swal("Cancelled", "", "error");
                    return false;
                }
            });
        return false;
    }

	 $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

   //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
        //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $("#edit-btn").click(function() {
       //$(".disabled").attr("disabled", "false");
       $(".editable").prop('disabled', false);
      // $("textarea").prop('disabled', false);
       $("#edit-submit").show();
       $("#edit-btn").hide();
       $("#completed-btn").hide();
  // alert( "Handler for .click() called." );
});
   
</script>
</footer>

<!-- </div> -->
<!-- ./wrapper -->

<
</body>
</html>

