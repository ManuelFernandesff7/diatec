 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/favico.png"/>
        <title>Dia tec</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
        <style>
        @font-face {
        font-family: GraublauWeb;
        font-weight: bold;
        src: url("<?php echo base_url(); ?>/assets/fonts/bebas_neue/BebasNeue.otf") format("opentype");
        }
        @font-face {
        font-family: OS_leter;
        font-weight: bold;
        src: url("<?php echo base_url(); ?>/assets/fonts/Oswald-Regular.ttf") format("opentype");
        }


        .color_tec{
          background-color: #d5de23;
        }
        .color_tec_text{
          color: #1b74b8;
        }
        body {
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
          <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content z-depth-3" >
      <li><a href="#!" class="black-text">PROFECIONAL</a></li>
        <li class="divider"></li>
        <li><a href="#calendario" class="black-text">Calendario</a></li>
        <li><a href="#conocelo" class="black-text">Conocelo</a></li>
        <li><a href="#dia_tec" class="black-text">Dia tec</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content z-depth-3">
      <li><a href="#!" class="black-text">PREPARATORIA</a></li>
        <li class="divider"></li>
        <li><a href="#calendario" class="black-text">Calendario</a></li>
        <li><a href="#conocelo" class="black-text">Conocelo</a></li>
        <li><a href="#dia_tec" class="black-text">Dia tec</a></li>
      </ul>
      <nav class="white" style="font-family: OS_leter;">
        <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons"  style="color: black;">menu</i></a>
          <a href="#!" class="brand-logo"><img class="responsive-img" src="<?php echo base_url(); ?>/assets/images/logo_tec.png"></a>
          <ul class="right hide-on-med-and-down">

            <li><a href="sass.html" class="black-text">INICIO</a></li>
             <li><a class="dropdown-button" href="#!" data-activates="dropdown2" style="color: black;">PREPARATORIA<i class="material-icons right">arrow_drop_down</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="color: black;">PROFECIONAL<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('login') ?>" class="black-text">ADMIN</a></li>
          </ul>
        </div>
      </nav>

        <ul id="slide-out" class="side-nav" style="font-family: OS_leter;">
          <li><div class="userView">
            <div class="background">
              <img src="<?php echo base_url(); ?>/assets/images/logo_dia_mini.png">
            </div>
            <a href="#!user"><img class="circle" src="<?php echo base_url(); ?>/assets/images/logo1.png"></a>
            <a href="#!name"><span class="black-text name">itesm</span></a>
            <a href="#!email"><span class="black-text email">http://www.itesm.mx/</span></a>
          </div></li>
          <li><a href="#!"><i class="material-icons">home</i>Inicio</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Preparatoria</a></li>
          <li><a class="waves-effect" href="#calendario"><i class="material-icons">send</i>Calendario</a></li>
          <li><a class="waves-effect" href="#conocelo"><i class="material-icons">send</i>Conocelo</a></li>
          <li><a class="waves-effect" href="#dia_tec"><i class="material-icons">send</i>Dia tec</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Profecional</a></li>
          <li><a class="waves-effect" href="#calendario"><i class="material-icons">send</i>Calendario</a></li>
          <li><a class="waves-effect" href="#conocelo"><i class="material-icons">send</i>Conocelo</a></li>
          <li><a class="waves-effect" href="#dia_tec"><i class="material-icons">send</i>Dia tec</a></li>
          <li><div class="divider"></div></li>
          <li><a href="<?php echo site_url('login') ?>""><i class="material-icons">Admin</i>Inicio</a></li>
        </ul>