<!-- jQuery 3 -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/jquery/dist/jquery.min.js")?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/jquery-ui/jquery-ui.min.js")?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/bootstrap/dist/js/bootstrap.min.js")?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/raphael/raphael.min.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/morris.js/morris.min.js")?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/jquery-knob/dist/jquery.knob.min.js")?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/input-mask/jquery.inputmask.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/input-mask/jquery.inputmask.date.extensions.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/input-mask/jquery.inputmask.extensions.js")?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/moment/min/moment.min.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/bootstrap-daterangepicker/daterangepicker.js")?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/timepicker/bootstrap-timepicker.min.js")?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/select2/dist/js/select2.full.min.js")?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/fastclick/lib/fastclick.js")?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/adminlte2.4.0/dist/js/adminlte.min.js")?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("assets/adminlte2.4.0/dist/js/pages/dashboard.js")?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/adminlte2.4.0/dist/js/demo.js")?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/Chart.js/Chart.js")?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/datatables.net/js/jquery.dataTables.min.js")?>"></script>
<script src="<?php echo base_url("assets/adminlte2.4.0/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url("assets/adminlte2.4.0/plugins/iCheck/icheck.min.js")?>"></script>

<!-- page script -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '10' // optional
    });
  });
</script>

<script>
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
</script>

<!-- chart -->
<script>
  $(function () {
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 100,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Pakaian'
      },
      {
        value    : 35,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Karpet'
      },
      {
        value    : 5,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Sepatu'
      },
      {
        value    : 30,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Bedcover'
      },
      {
        value    : 20,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Seprai'
      },
      {
        value    : 0,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Boneka'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
  })

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 1, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
