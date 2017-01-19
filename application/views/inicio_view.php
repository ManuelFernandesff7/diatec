<?php
//print_r($todos);
?>
<div class="container">
    <div class="row">
      <div class="col offset-m9 m3 hide-on-small-only offset-l9 l3"><img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/logo-diaTec.png"></div>
      <div class="col s4 hide-on-med-and-up"><img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/descubre.png" style="margin-top: 10px;"></div>
      <div class="hide-on-med-and-up right-align"><img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/logo-diaTec_mini.png" style="margin-top: 25px;"></div>


    </div>
  </div>
   <div class="container" id="dia_tec">
    <div class="row">
      <div class="col m4 s12 l4 hide-on-small-only">
        <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/descubre.png">
      </div>

       <div class="col m8 s12 l8">
         <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
       </div>


    </div>

    <div class="row">
    <div></div>
    <div class="card-panel" style="color: #1b74b8;background-color: #d5de23;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</div>
    </div>

      <style type="text/css">
        .card .card-content{
          padding: 0px;
          padding-left: 10px;
          padding-right: 10px

        }
      </style>
    <div class="row" id="conocelo">
      <div class="col m6 s12 l6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/sesion_info.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/img_sesion.png">
        </div>
      </div>
    </div>
      </div>

       <div class="col m6 s12 l6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="<?php echo base_url(); ?>/assets/images/info_admiciones.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/img_admicion.png">
        </div>
      </div>
    </div>
       </div>


    </div>

    <div class="row">
      <div class="col m6 s12 l6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="<?php echo base_url(); ?>/assets/images/taller_area.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
           <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/img_talleres.png">
        </div>
      </div>
    </div>
      </div>

       <div class="col m6 s12 l6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="<?php echo base_url(); ?>/assets/images/carreras.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
         <img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/img_carreras.png">
        </div>
      </div>
    </div>
       </div>


    </div>
       <div class="row" id="calendario">
      <div class="col offset-m5 m1 offset-s3 s2">
      <img src="<?php echo base_url(); ?>/assets/images/calendar.png">
      </div>
      <div class="col m3 s3"><div style="font-size: 25px;" class="lime-text">Calendario</div>
      </div>

      </div>

      </div>
      <div>
      <!-- *****************************Calendario*******************************  -->
      <style type="text/css">
        .card_lime:hover { background-color: #d5de23; color: #1b74b8;  }

      </style>
        <div style="font-family: GraublauWeb;" >
          <div class="row" style="background-color: #1668b1;">
      <?php
      function genMonth_Text($m) {
 switch ($m) {
  case 1: $month_text = "Enero"; break;
  case 2: $month_text = "Febrero"; break;
  case 3: $month_text = "Marzo"; break;
  case 4: $month_text = "Abril"; break;
  case 5: $month_text = "Mayo"; break;
  case 6: $month_text = "Junio"; break;
  case 7: $month_text = "Julio"; break;
  case 8: $month_text = "Agosto"; break;
  case 9: $month_text = "Septiembre"; break;
  case 10: $month_text = "Octubre"; break;
  case 11: $month_text = "Noviembre"; break;
  case 12: $month_text = "Diciembre"; break;
 }
 return ($month_text);
}
        $cont=0;
      foreach ($todos as $todo) {
        if($todo->status==1){
        $part=explode('-', $todo->fecha);
         // generamos los meses

$fecha=$part[2].' de '.genMonth_Text($part[1]).' '.$part[0];
       ?>

        <div class="col m4 s6 l2">
      <div class="card z-depth-2 hoverable" style="background-color: #1a75bb;">
            <div class="card_lime card-content center-align">
              <p class="color_tec" style="font-size: 18.1px; color: #1b74b8;"><?php echo $todo->sede; ?></p>
              <p style="font-size: 18.1px; padding-top: 20px; padding-bottom: 20px;"><?php echo  $fecha; ?></p>
              <p><?php echo $todo->direccion; ?></p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
      </div>

      <?php }
        }
      ?>
      </div>

  </div>