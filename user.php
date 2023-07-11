<?php
include("componentes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNTHETIC BINARY ACADEMY | Perfil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menuStyle.css">
    <link rel="stylesheet" href="css/perfilStyle.css">
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div id="particles-js"></div>

<?php
  echo $menu;
?>

<section>
  <div class="contenedorPerfil">
    <div class="perfil">
      <div class="fotoPerfil">
        <img src="img/perfil/MAN.png" alt="">
      </div>
      <div class="datosPerfil">
        <br>
        <p><strong>MarioAguilar</strong><br>
        <i>Jose Mario Aguilar Hurtado</i><br>
        <label for="selectActualizar" class="MenuPerfil_1">Actualiza Datos</label><p>   
      </div>

        <label for="selectAcademia" class="MenuPerfil_2">
          <i class="menuPerfil">
            <svg class="iconPerfilSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.11 105.11"><defs><style>.cls1-1{fill:#71c1ec;}.cls1-2{fill:#2987c8;}.cls1-3{fill:#fff;}</style></defs><circle class="cls1-1" cx="52.55" cy="52.55" r="50.55"/><path class="cls1-2" d="M53.86,106.41a52.56,52.56,0,1,1,52.55-52.55A52.61,52.61,0,0,1,53.86,106.41Zm0-101.11a48.56,48.56,0,1,0,48.55,48.56A48.62,48.62,0,0,0,53.86,5.3Z" transform="translate(-1.3 -1.3)"/><circle class="cls1-2" cx="52.55" cy="52.55" r="43.41"/><path class="cls1-3" d="M54.64,28a1.87,1.87,0,0,0-1.57,0L25.17,41a1.86,1.86,0,0,0,.09,3.41L53.17,55.58a1.83,1.83,0,0,0,1.38,0l21.63-8.64v21.8a3.71,3.71,0,0,0-3.72,3.72V79.9H83.62V72.46a3.72,3.72,0,0,0-3.72-3.72V45.45l2.55-1A1.86,1.86,0,0,0,82.54,41Z" transform="translate(-1.3 -1.3)"/><path class="cls1-3" d="M39.63,54a1.86,1.86,0,0,0-2.4,1.08s0,.09,0,.13l-1.86,6.33a1.86,1.86,0,0,0,1.09,2.25l16.75,6.7a1.93,1.93,0,0,0,1.38,0l16.74-6.7a1.86,1.86,0,0,0,1.09-2.25l-1.86-6.33a1.86,1.86,0,0,0-2.3-1.26l-.14,0L53.86,59.31Z" transform="translate(-1.3 -1.3)"/></svg>
            <br>Academia
          </i>
          
        </label>
        <label for="selectFondeo" class="MenuPerfil_3">
          <i class="menuPerfil">
            <svg class="iconPerfilSVG" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.11 105.11"><defs><style>.cls2-1{fill:#f0a0ac;stroke:#e7515a;stroke-miterlimit:10;stroke-width:4px;}.cls2-2{fill:#e7515a;}.cls2-3,.cls2-4{fill:#fff;}.cls2-3{fill-rule:evenodd;}</style></defs><circle class="cls2-1" cx="52.55" cy="52.55" r="50.55"/><circle class="cls2-2" cx="52.55" cy="52.55" r="43.41"/><path class="cls2-3" d="M65,83.9A14.88,14.88,0,1,0,50.14,69,14.88,14.88,0,0,0,65,83.9ZM83.62,69A18.6,18.6,0,1,1,65,50.42,18.6,18.6,0,0,1,83.62,69Z" transform="translate(-1.3 -1.3)"/><path class="cls2-4" d="M59.21,72.53c.17,2.22,1.92,3.94,5.07,4.15v1.64h1.39V76.67c3.26-.23,5.16-2,5.16-4.49,0-2.3-1.45-3.48-4.06-4.09l-1.1-.26V63.36a2.61,2.61,0,0,1,2.5,2h2.45c-.18-2.14-2-3.81-5-4V59.72H64.28v1.67c-2.78.27-4.67,1.94-4.67,4.31,0,2.09,1.41,3.42,3.75,4l.92.22v4.73a2.8,2.8,0,0,1-2.59-2.09H59.21Zm5.06-5c-1.38-.31-2.12-1-2.12-1.94a2.26,2.26,0,0,1,2.13-2.15v4.09Zm1.6,2.78c1.67.39,2.44,1,2.44,2.11,0,1.27-1,2.13-2.64,2.29V70.22Z" transform="translate(-1.3 -1.3)"/><path class="cls2-4" d="M27.82,28.1a3.71,3.71,0,0,0-3.72,3.72V61.58a3.72,3.72,0,0,0,3.72,3.72H43a22.07,22.07,0,0,1,1-3.72H35.26a7.44,7.44,0,0,0-7.44-7.44V39.26a7.44,7.44,0,0,0,7.44-7.44h37.2a7.44,7.44,0,0,0,7.44,7.44V52.38a22.47,22.47,0,0,1,3.72,4.3V31.82A3.72,3.72,0,0,0,79.9,28.1Z" transform="translate(-1.3 -1.3)"/><path class="cls2-4" d="M61.29,47V46.7a7.44,7.44,0,1,0-11.65,6.14A22.27,22.27,0,0,1,61.29,47Z" transform="translate(-1.3 -1.3)"/></svg>
            <br>Fondeo
          </i>
        </label>
        <label for="selectRentabilidad" class="MenuPerfil_4">
          <i class="menuPerfil">
            <svg class="iconPerfilSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.11 105.11"><defs><style>.cls3-1{fill:#8ccbb9;stroke:#29af85;stroke-miterlimit:10;stroke-width:4px;}.cls3-2{fill:#29af85;}.cls3-3{fill:#fff;fill-rule:evenodd;}</style></defs><circle class="cls3-1" cx="52.55" cy="52.55" r="50.55"/><circle class="cls3-2" cx="52.55" cy="52.55" r="43.41"/><path class="cls3-3" d="M24.1,24.1h3.72V79.9h55.8v3.72H24.1Zm37.2,13a1.86,1.86,0,0,1,1.86-1.86H78a1.86,1.86,0,0,1,1.86,1.86V52a1.86,1.86,0,1,1-3.72,0V42.33L62.74,58.76a1.87,1.87,0,0,1-2.62.26L60,58.9l-9.63-9.63L36.76,68a1.86,1.86,0,0,1-3-2.19L48.64,45.32a1.85,1.85,0,0,1,2.59-.41,2.11,2.11,0,0,1,.23.19l9.7,9.71L74.11,39h-11A1.86,1.86,0,0,1,61.3,37.12Z" transform="translate(-1.3 -1.3)"/></svg>
            <br>Rentabilidad
          </i>
        </label>
        <label for="selectReferido" class="MenuPerfil_5">
          <i class="menuPerfil">
            <svg class="iconPerfilSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.11 105.11"><defs><style>.cls4-1{fill:#f9c364;stroke:#f7a813;stroke-miterlimit:10;stroke-width:4px;}.cls4-2{fill:#f7a813;}.cls4-3{fill:#fff;}</style></defs><circle class="cls4-1" cx="52.55" cy="52.55" r="50.55"/><circle class="cls4-2" cx="52.55" cy="52.55" r="43.41"/><path class="cls4-3" d="M50.14,76.18s-3.72,0-3.72-3.72S50.14,57.58,65,57.58s18.6,11.16,18.6,14.88-3.72,3.72-3.72,3.72ZM65,53.86A11.16,11.16,0,1,0,53.86,42.7,11.16,11.16,0,0,0,65,53.86ZM43.5,76.18a8.26,8.26,0,0,1-.8-3.72,17.76,17.76,0,0,1,7.2-13.84,23.41,23.41,0,0,0-7.2-1c-14.88,0-18.6,11.16-18.6,14.88s3.72,3.72,3.72,3.72ZM40.84,53.86a9.3,9.3,0,1,0-9.3-9.3A9.31,9.31,0,0,0,40.84,53.86Z" transform="translate(-1.3 -1.3)"/></svg>
            <br>Referido
          </i>
        </label>
    </div>

    <div class="contenido">
      <input type="radio" name="select_main" id="selectActualizar">
      <input type="radio" name="select_main" id="selectAcademia" checked>
      <input type="radio" name="select_main" id="selectFondeo">
      <input type="radio" name="select_main" id="selectRentabilidad">
      <input type="radio" name="select_main" id="selectReferido">
    </div>
    <div class="noticias">Noticias</div>
  </div>
</section>


<?php
  echo $pie;
?>

<script src="js/particles.js"></script>
<script src="js/lib/stats.js"></script>
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var miElemento = document.getElementById("4");

  miElemento.classList.remove("itemMenu");
  miElemento.classList.add("itemMenuGo");
});
</script>
</html>