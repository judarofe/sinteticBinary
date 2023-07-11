<?php
include("componentes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNTHETIC BINARY ACADEMY | Nosotros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menuStyle.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div id="particles-js"></div>

<?php
  echo $menu;
?>

<section>
  <h2>MISIÓN</h2>
<div class="contenedor forma_1">
      <div class="grid_1_1 txtContenido">
        <p class="txtSeccion">
        Que nuestros socios entiendan el ingreso pasivo, para que experimenten el poder de los mercados digitales.
        </p>
      </div>
      <div class="grid_1_2 imgContenido">
        <iframe id="video" src="https://drive.google.com/file/d/1TPt7MMleovvzVYYoiTUeMDx2n5KZPDMz/preview"></iframe>
      </div>
    </div>
</section>
<section>
<h2>VISIÓN</h2>
    <div class="contenedor forma_1">
      <div class="grid_1_1 imgContenido">
        <iframe id="video" src="https://drive.google.com/file/d/1jpqVqxNy3kG4vudHFq43IaYo7OgPl5dc/preview"></iframe>
      </div>
      <div class="grid_1_2 txtContenido">
        <p class="txtSeccion">
        Ser una de las academias de Trading más grandes a nivel Latinoamérica, conservando la rentabilidad en aumento constante generando confianza.
        </p>
      </div>
    </div>
</section>

<?php
  echo $pie;
?>

<script src="js/particles.js"></script>
<script src="js/lib/stats.js"></script>
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var miElemento = document.getElementById("2");

  miElemento.classList.remove("itemMenu");
  miElemento.classList.add("itemMenuGo");

});
</script>
</body>
</html>