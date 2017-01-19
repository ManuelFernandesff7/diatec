<footer class="page-footer white">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <p class="black-text text-lighten-4" style="border:5px solid black;  ">Av. Eugenio Garza Sada 2501 Sur, Col. Tecnológico, C.P. 64849
Monterrey, Nuevo León, México | +52 (81) 8358 2000 D.R.© Instituto
Tecnológico y de Estudios Superiores de Monterrey, México. 2016.</p>
              </div>
              <div class="col l2 s12 valign-wrapper" style="margin-top: 25px;">
               <img src="<?php echo base_url(); ?>/assets/images/face.png" class="valign center">/TecdeMty
              </div>
               <div class="col l2 s12 valign-wrapper" style="margin-top: 25px;">
                <img src="<?php echo base_url(); ?>/assets/images/twi.png" class="valign center">@TecdeMty
              </div>
               <div class="col l2 s12 valign-wrapper" style="margin-top: 25px;">
                <img src="<?php echo base_url(); ?>/assets/images/ins.png" class="valign center">@TecdeMty
              </div>
               <div class="col l2 s12 valign-wrapper" style="margin-top: 25px;">
                <img src="<?php echo base_url(); ?>/assets/images/you.png" class="valign center">/TecnologicoMonterrey
              </div>
            </div>
            <div class="row">
              <div class="col s4">

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container black-text">
              <a href="#" class="black-text">AVISO LEGAL</a> | <a href="#" class="black-text">POLITICAS DE PRIVACIDAD</a> | <a href="#" class="black-text">AVISO DE PRIVACIDAD</a> | <a href="#" class="black-text">SOBRE EL SITIO</a>
           <!-- <a class="black-text text-lighten-4 right" href="#!" class="black-text">More Links</a> -->
            </div>
          </div>
        </footer>
<div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row"></div>

</div>


  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Avisos de Privacidad</h4>
      <h5>Identidad y domicilio del Responsable</h5>
      <p>El Responsable de los datos personales que usted proporciona es El Instituto Tecnológico y de Estudios Superiores de Monterrey (en lo sucesivo “ITESM”) con domicilio ubicado en Av. Eugenio Garza Sada Sur No. 2501, colonia Tecnológico en Monterrey, Nuevo León. C.P. 64849.</p>
      <h5>Datos personales y datos personales sensibles tratados por ITESM</h5>
      <p>Por otro lado, le informamos que ITESM podrá recabar y tratar datos personales de identificación, datos personales de contacto y datos personales laborales de sus familiares y/o terceros[1] con los que usted tenga una relación, ya sea que ejerzan su patria potestad o que le brinden apoyo económico con el propósito de cumplir con las finalidades primarias y necesarias de la relación jurídica establecida con usted. De este modo, al proporcionar los datos personales necesarios relacionados con sus familiares y/o terceros usted reconoce tener el consentimiento de éstos para que ITESM trate éstos para cumplir con las finalidades primarias y necesarias señaladas en el presente Aviso.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet" style="background-color: #1a75bb;">
    <div class="modal-content">
<div class="container">
  <div class="row">
    <div class="col offset-m4 m4">
      <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/info.png">
    </div>
     <div class="modal-footer light-blue darken-3">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
    </div>
  </div>
  <div class="row">
   <div class="col offset-m1 m6 offset-s1 s6  result" style="color: #d5de23;">

          </div>
          </div>
<form method="POST" action="#" id="form" class="col s12 z-depth-4">
      <div class="row">
        <div class="input-field col s12 m6 l6">
           <i class="material-icons prefix">account_circle</i>
          <input id="nombre" name="nombre" type="text" class="validate" required="">
          <label for="nombre" style="color: #d5de23;">Nombre completo</label>
        </div>
        <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">account_circle</i>
          <input id="apellidos" name="apellidos" type="text" class="validate" required="">
          <label for="apellidos" style="color: #d5de23;">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6 l6">
        <i class="material-icons prefix">home</i>
         <select id="sede" name="sede">
      <option value="" disabled selected style="color: #d5de23;">Elije una opción</option>
      <?php foreach ($todos as $todo) { ?>
 <option value="<?php echo $todo->id; ?>"><?php echo $todo->sede; ?></option>


      <?php } ?>
    </select>
    <label style="color: #d5de23;">Selecciona ciudad</label>
        </div>
        <div class="col s12 m6 l6">
          <div class="input-field inline">
          <i class="material-icons prefix">email</i>
            <input id="email" name="email" type="email" class="validate" required="">
            <label for="email" data-error="wrong" data-success="right" style="color: #d5de23;">Email</label>
          </div>

        </div>
      </div>
         <div class="row">
        <div class="col s12 m6 lime-text" style="color: #d5de23;">
          Al hacer clic en “enviar” aceptas y confirmas haber leído nuestras <a style=" text-decoration: underline;" class="waves-effect waves-light" href="#modal2"><strong>Políticas de privacidad</strong></a><br />


        </div>
         <div class="hide-on-small-only col s12 m6 " style="padding-bottom: 20px;">
         <button class="btn waves-effect waves-light color_tec" type="reset" class="reset" value="Reset" style="color: #1b74b8;">Borrar</button>
        <button class="btn waves-effect waves-light color_tec" type="submit"  name="action" style="color: #1b74b8;">Enviar</button>



        </div>
         <div class="hide-on-med-and-up col s12 m6 right-align" style="padding-bottom: 20px;">
         <button class="btn waves-effect waves-light color_tec" type="reset" class="reset" value="Reset" style="color: #1b74b8;">Borrar</button>
        <button class="btn waves-effect waves-light color_tec" type="submit"  name="action" style="color: #1b74b8;">Enviar</button>


        </div>


        </div>

    </form>
</div>


    </div>

  </div>
  <div class="fixed-action-btn horizontal">
    <a  href="#modal1" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">email</i></a>
  </div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/materialize.min.js"></script>
      <script type="text/javascript">
      	(function($){

  $(document).ready(function(){
     $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
      $('.modal').modal();
      $(document).ready(function() {
    $('select').material_select();
  });
   });

})(jQuery); // end of jQuery name space
      </script>
      <script type="text/javascript">
       $('form').submit(function(event) {
        $.ajax({
        url : "<?php echo site_url('inicio/agregar_prospecto')?>",
        type: "POST",
        data: $('#form').serialize()+ "&nom_sede="+$("#sede option:selected").text(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
               // $('#modal_form').modal('hide');
            //    reload_table();
            email=$("#email").val();
            $(".result").html('<h4>Usuario agregado correctamente</h4>');
            setTimeout(
                  function()
                  {
                                    var postData = {
                  'email' : email
                };

                $.ajax({
                     type: "POST",
                     url: "<?php echo site_url('inicio/enviar_correos')?>",
                     data: postData , //assign the var here
                     success: function(msg){
                      //  alert( "Data Saved: " + msg );
                     }
                });
                    //do something special
                     $('#modal1').modal('close');
                     $(".result").html('');
                  }, 5000);

            $('#btnSave').attr('disabled',false); //set button enable

            }else{

               $(".result").html('<h4>Usuario registrado previamente</h4>');
               setTimeout(
                  function()
                  {
                    //do something special
                     $('#modal1').modal('close');
                     $(".result").html('');
                  }, 5000);

            }

          //  $('#btnSave').text('save'); //change button text



        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
           // $('#btnSave').text('save'); //change button text
          //  $('#btnSave').attr('disabled',false); //set button enable

        }
    });
        event.preventDefault();
       })
        function save()
{
    //$('#btnSave').text('saving...'); //change button text
    //$('#btnSave').attr('disabled',true); //set button disable

    // ajax adding data to database

}

      </script>
    </body>
  </html>