<!DOCTYPE>
<html lang="es">
<head>

  <!-- @ Metadata -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- @ BoostrapCSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

  <!-- @ -->
  <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css?v=<?php echo uniqid(); ?>">
  <link rel="stylesheet" type="text/css" href="./assets/css/all.css?v=<?php echo uniqid(time()); ?>">

</head>
<body>

  <!-- @ -->
  <header class="row">

    <!-- @ Logo -->
    <img src="./assets/img/logo.svg" class="pull-left" />

    <!-- @ Phone -->
    <h1><i class="fas fa-phone"></i> 0810-220-6173</h1>

    <!-- @ Menu -->
    <menu type="toolbar">

      <a href="#">Casa</a>
      <a href="#">Auto</a>
      <a href="#">Empresas</a>

      <!-- @ -->
      <div id="layoutLogin">

        <!-- @ -->
        <a href="javascript:void(0);"> Ingresar <i class="fas fa-user"></i></a>

        <!-- @ -->
        <div id="loginContent">

          <!-- @ -->
          <h1>Iniciar Sesion</h1>

          <!-- @ -->
          <form>

            <!-- @ -->
            <fieldset>
              <input type="email" required>
              <label>Email</label>
            </fieldset>

            <!-- @ -->
            <fieldset>
              <input type="password" required>
              <label>Contraseña</label>
              <small>
                <a href="#

                ">Olvide mi contraseña.</a>
              </small>
            </fieldset>

            <!-- @ -->
            <button>Entrar</button>

          </form>

          <!-- @ -->
          <h2>¿ Todavía no tienes una cuenta ?</h2>

          <!-- @ -->
          <nav>
            <a href="#">Registrarte gratis</a>
            <a href="#">Registro de profesionales</a>
          </nav>

          <!-- @ -->
          <span>Ó</span>

          <!-- @ -->
          <a href="#">Continuar con <i class="fab fa-facebook-f"></i> </a>

        </div>

      </div>

      <!-- @ -->
      <a href="#">
        <i class="fas fa-menu"></i>
      </a>

    </menu>

  </header>
  <!-- @ -->
  <header id="mobileHeader">

    <!-- @ Logo -->
    <img src="./assets/img/logo.svg" class="pull-left" />

    <!-- @ Menu -->
    <menu type="toolbar">
      <a href="#" class="openMenu"><i class="fas fa-bars"></i></a>
    </menu>

  </header>
  <menu id="mobileMenu">

    <!-- @ Logo -->
    <img src="./assets/img/logo.svg" />

    <!-- @ -->
    <nav>
      <a href="#">Casa</a>
      <a href="#">Auto</a>
      <a href="#">Empresas</a>
      <a href="#" id="openLogin">Ingresar <i class="fas fa-user"></i></a>
    </nav>

    <!-- @ Phone -->
    <a href="tel:0810-220-6173"><i class="fas fa-phone"></i> 0810-220-6173</a>

    <!-- @ -->
    <button id="menuClose"><i class="far fa-times-circle"></i> Cerrar</button>

  </menu>

  <!-- @ -->
  <main class="content-fluid">

    <!-- @ -->
    <section id="breadcrums" class="breadcrumb">
      <nav>
        <a href="#">Contratar un servicio</a>
        <a href="#">Instalación de aire acondicionado</a>
      </nav>
    </section>

    <!-- @ -->
    <section id="product" class="row">

      <!-- @ -->
      <div id="gallery" class="col col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1" data-widget="gallery">

        <!-- @ -->
        <ol class="col col-xs-12 col-sm-4 col-md-4 col-lg-3">
          <li><center>Cargando...</center></li>
        </ol>

        <!-- @ -->
        <figure class="col col-sm-7 col-md-8 col-lg-9">
          <figcaption><a href="#"><i class="fas fa-search-plus"></i> Ampliar imagen</a></figcaption>
        </figure>

      </div>

      <!-- @ -->
      <div id="productShop" class="col col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-mt-20 col-sm-10 col-md-5 col-lg-4">

        <!-- @ -->
        <h1>Instalación de aire acondicionado split.</h1>

        <!-- @ -->
        <p>$ 698.00</p>

        <!-- @ -->
        <form id="productChoose">

          <!-- @ -->
          <fieldset>

            <!-- @ -->
            <label>Frigorias</label>

            <!-- @ -->
            <select>
              <option selected disabled>Cargando...</option>
            </select>

          </fieldset>

          <!-- @ -->
          <fieldset>

              <!-- @ -->
              <div id="changeQty">
                <button role="product.minus" data-value="-1"><i class="fa fa-minus"></i></button>
                <center data-min="2">2</center>
                <button role="product.plus" data-value="1"><i class="fa fa-plus"></i></button>
              </div><small>unidades.</small>            

          </fieldset>

          <!-- @ -->
          <button>PROGRAMAR VISITA</button>

        <form>

      </div>

      <!-- @ -->
      <div id="productWathsItCovers" class="col col-xs-offset-1 col-xs-11 col-sm-offset-1 col-sm-11 col-md-5 col-lg-6">

        <!-- @ -->
        <h5>Qué incluye</h5>
        <!-- @ -->
        <ol>
          <li><i class="fas fa-check"></i> Desinstalación del equipo anterior.</li>
          <li><i class="fas fa-check"></i> Colocación de nuevo equipo: unidad interior y exterior.</li>
          <li><i class="fas fa-check"></i> Colocación de drenaje.</li>
        </ol>

      </div>

    </section>

    <!-- @ -->
    <section id="productMore" class="row">

      <!-- @ -->
      <nav>
        <a href="#" data-rel="details" class="active">Detalles del servicio</a>
        <a href="#" data-rel="notIncludes">Qué no incluye</a>
      </nav>

      <!-- @ -->
      <div data-rel="details" class="container col col-xs-offset-1 col-xs-10">
        <p>Colocación del nuevo equipo: unidad interior (hasta 2,5 mts de altura, incluido el taparroyos) y exterior (en lugares accesibles, hasta 2,5 mts de altura), Colocación de drenaje. Presurización, vacio y control de carga. Ménsulas estándar. Cañería de interconexión hasta 3 mts (3 mts de caño de cobre 1/2 o 1/4 , 3 mts de cable tipo taller - 5 1/2, 3 mts de mangera de desagüe para drenaje, cinta PVC, Kit de tornillos y/o caños equivalentes según el equipo). Prueba del equipo. Limpieza del lugar</p>
        <p>Colocación del nuevo equipo: unidad interior (hasta 2,5 mts de altura, incluido el taparroyos) y exterior (en lugares accesibles, hasta 2,5 mts de altura), Colocación de drenaje. Presurización, vacio y control de carga. Ménsulas estándar. Cañería de interconexión hasta 3 mts (3 mts de caño de cobre 1/2 o 1/4 , 3 mts de cable tipo taller - 5 1/2, 3 mts de mangera de desagüe para drenaje, cinta PVC, Kit de tornillos y/o caños equivalentes según el equipo). Prueba del equipo. Limpieza del lugar</p>
      </div>

      <!-- @ -->
      <div data-rel="notIncludes" class="container"></div>

    </section>

    <!-- @ -->
    <section id="otherProducts" class="container">
      <center>Cargando...</center>
    </section>

  </main>

  <!-- @ -->
  <footer class="content-fluid">

    <!-- @ -->
    <section id="footerHeader">

      <!-- @ -->
      <img src="./assets/img/logo.svg">

      <!-- @ -->
      <ol>

        <!-- @ -->
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-envelope"></i></a></li>

      </ol>      

    </section>

    <!-- @ -->
    <section id="footerBody">

      <!-- @ -->
      <div class="row">

        <!-- @ -->
        <h1>Casa <hr></h1>
        <!-- @ -->
        <ol class="col col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
        </ol>

        <!-- @ -->
        <ol class="col col-sm-12 col-md-12 col-lg-6">
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
        </ol>

      </div>

      <!-- @ -->
      <div class="row">

        <!-- @ -->
        <h1>Autos <hr></h1>
        <!-- @ -->
        <ol class="col col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
        </ol>

        <!-- @ -->
        <ol class="col col-sm-12 col-md-12 col-lg-6">
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
          <li class="col col-xs-6 col-sm-4 col-md-4 col-lg-5"><a href="#">Albañileria</a></li>
        </ol>


      </div>

    </section>

    <!-- @ -->
    <section id="footerCopyright">

      <!-- @ -->
      <span class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">Copyright 2016. All right reserved | <a href="#">IguanaFix</a></span>

      <!-- @ -->
      <ol class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <li>
          <a href="#">
            <img src="./assets/img/android@market.svg">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="./assets/img/apple@market.svg">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="./assets/img/datafiscal.jpg">
          </a>
        </li>
      </ol>

    </section>

  </footer>

  <!-- @ jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- @ BoostrapJS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

  <!-- @ -->
  <script type="text/javascript" src="./assets/js/gallery.js"></script>
  <script type="text/javascript" src="./assets/js/shop.js"></script>
  <script type="text/javascript" src="./assets/js/main.js"></script>

</body>
</head>
