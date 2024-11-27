<?php
$nombre="";
$apellido="";
$tel="";
$mail="";
$error="";
if(isset($_POST["existe"])){
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$tel=$_POST["telefono"];
	$mail=$_POST["gmail"];
	
	$error="<h1>este usuario no esta registrado todavia</h1>";
}
?>
<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head><script src="../js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>contacto</title>



<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/carousel.rtl.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }
      .textbord{
       border: 1px;
       padding: 10px;
       width: 200px;
       text-align: left;
      }
      .supp{
        position: absolute;
        top: 150px;
        left:350px;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

</head>
<body style="padding-top: 0px;">
<form action="#" method="post" class="">
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-center me-lg-auto mb-2 justify-content-center mb-md-0">
        
          <li><a href="../index.php" class="nav-link px-2 text-secondary"><svg xmlns="http://www.w3.org/2000/svg" height="22" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>inicio</a></li>
          <li><a href="/ini.php" class="nav-link px-2 text-white">productos</a></li>
          <li><a href="/cont.php" class="nav-link px-2 text-white">contacto<svg xmlns="http://www.w3.org/2000/svg" height="22" width="18" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 0 0 0 0s0 0 0 0s0 0 0 0c0 0 0 0 0 0l.3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg></a></li>
       
       <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="w-25 form-control form-control-dark text-bg-white" placeholder="buscar..." aria-label="Search">
        </form>
       </ul>
      </div>
    </div> 
    </header>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
      <span class="visually-hidden" id="bd-theme-text">Tipo de tema</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
          claro
          <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
          oscuro
          <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
          Automatica
          <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
        </button>
      </li>
    </ul>
  </div>
  
    
    <div class="textbord">
  <h4 class="mb-3">contacto</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+1195863728</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+11 9586-3728</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">samd@gmail.com</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">intragram</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">facebook</a></li>
      </ul>
    </div>
    <center>
        <div class="supp">
    <div class="col-md-7 col-lg-8">
    <form action="..\PHP\mens.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $nombre?>" required>
              <div class="invalid-feedback">
               el nombre es requerido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="apellido" class="form-label">apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="<?php echo $apellido?>" required>
              <div class="invalid-feedback">
                el apellido es requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="telefono" class="form-label">telefono</label>
                <input type="number" class="form-control" id="tel" name="tele" placeholder="1199999999" required>
              <div class="invalid-feedback">
                  tu numero de telefono es requerido.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Correo Electronico <span class="text-body-secondary"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ejemplo@hotmail.com">
              <div class="invalid-feedback">
                ingrese un correo electronico valido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="mensaje" class="form-label">mensaje</label>
              <input type="text" class="form-control" placeholder="..." name="mens"  required>
              <div class="invalid-feedback">
              <?php echo $error
			        ?>
              </div>
            </div>
    </div>
          <hr class="my-4">
          <input type="submit" name ="env" class="w-100 btn btn-primary btn-lg"  name="env" value="enviar" >
        </form>
      </div>
      </center>
     </main>
    
 <script src="../js/bootstrap.bundle.min.js"></script>
	</body>
</html>