<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/favico.png"/>
        <title>Dia tec</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <style type="text/css">
         body {
            color: #d5de23;
            font font-family: arial;
          /*font-family: GraublauWeb; */
          /* Location of the image */
          background-image: url('<?php echo base_url(); ?>/assets/images/back.png');

          /* Background image is centered vertically and horizontally at all times */
          background-position: center top;

          /* Background image doesn't tile */
          background-repeat: no-repeat;

          /* Background image is fixed in the viewport so that it doesn't move when
             the content's height is greater than the image's height */
          background-attachment: fixed;

          /* This is what makes the background image rescale based
             on the container's size */
          background-size: cover;

          /* Set a background color that will be displayed
             while the background image is loading */
          background-color: #464646;
        }
    </style>
<body>

    <div class="container">
      <!--  <h1 style="font-size:20pt">Ajax CRUD with Bootstrap modals and Datatables</h1> -->
 <h2>Bienvenido <?php echo $username; ?>!</h2>
        <h3>Prospectos registrados</h3>
        <br />
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Recargar</button>
        <a href="home/logout" class="btn btn-warning" style="color: black;"><strong>Cerrar sessión</strong></a>
        <br />
        <br />
        <a href="prospecto" class="btn btn-default" style="color: black;"><strong>Ir a prospectos</strong></a>
        <a href="person" class="btn btn-default" style="color: black;"><strong>Ir a Sedes</strong></a>
          <br />
          <br />
        <table id="table" class="table table-bordered" cellspacing="0" width="100%" style="background-color: #1668b1 ;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>email</th>
                    <!--<th>Address</th> -->
                    <th>Fecha registro</th>
                    <th>Sede</th>

                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>email</th>
                <!--<th>Address</th> -->
                <th>Fecha registro</th>
                <th>Sede</th>

            </tr>
            </tfoot>
        </table>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('prospecto/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -0 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });

});



function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}



</script>
</body>
</html>