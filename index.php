<?php
include("componentes.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNTHETIC BINARY ACADEMY | Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menuStyle.css">
    <link rel="stylesheet" href="css/modalStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div id="particles-js"></div>

<?php
  echo $menu;
?>
<!-- Modal -->
<div class="modal fade" id="SesionModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="SesionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="">
      <input type="radio" name="select_main" id="select_1" class="main_select_s" checked>

        <div class="select_content">
          <div class="modal-header">
            <h5 class="modal-title" id="SesionModalLabel">Inicio de sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_email; ?>
                </span>
                <input type="email" class="form-control" id="exampleInputEmail1" required>
              </div>
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_pass; ?>
                </span>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Iniciar sesión">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="">
      <input type="radio" name="select_main" id="select_2" class="main_select_s">

        <div class="select_content">
          <div class="modal-header">
            <h5 class="modal-title" id="SesionModalLabel">Registrate</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <label for="firstName" class="form-label">Primer Nombre*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_name; ?>
                </span>
                <input name="firstName" type="text" class="form-control" id="firstName" required>
              </div>
              <label for="secondName" class="form-label">Segundo Nombre</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_name; ?>
                </span>
                <input name="secondName" type="text" class="form-control" id="secondName">
              </div>
              <label for="firstLastName" class="form-label">Primer apellido*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_name; ?>
                </span>
                <input name="firstLastName" type="text" class="form-control" id="firstLastName" required>
              </div>
              <label for="secondLastName" class="form-label">Segundo apellido*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_name; ?>
                </span>
                <input name="secondLastName" type="text" class="form-control" id="secondLastName" required>
              </div>
              <label for="phone" class="form-label">Telefono*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_phone; ?>
                </span>
                <input name="phone" type="text" class="form-control" id="phone" required>
              </div>
              <label for="email" class="form-label">Email*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_email; ?>
                </span>
                <input name="email" type="email" class="form-control" id="email" required>
                <button class="btn btn-outline-secondary" type="button" id="enviarCodigo">Enviar Codigo</button>
              </div>
              <label for="inputcodigo" class="form-label">Codigo*</label>
              <div class="form-text">Ingrese el codigo enviado a su email</div>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_codigo; ?>
                </span>
                <input name="codigo" type="text" class="form-control" id="inputcodigo" required>
              </div>
              <label for="PasswordV1" class="form-label">Password*</label>
              <div class="form-text">Debe tener minimo 8 caracteres, mayusculas, minusculas y alfanumericos (/, -, _, #, $, %, &, *, ?, ¿, !, @, ^, +, =)</div>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_pass; ?>
                </span>
                <input name="Pass_1" type="password" class="form-control" id="PasswordV1" required>
              </div>
              <label for="PasswordV2" class="form-label">Repite tu password*</label>
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <?php echo $icono_pass; ?>
                </span>
                <input name="Pass_2" type="password" class="form-control" id="PasswordV2" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terminosCondiciones">
                <label class="form-check-label" for="terminosCondiciones" required>Crear cuenta y aceptar <a href="">terminos y condiciones</a></label>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Registrar">
              </div>
            </form>
          </div>

          
        </div>
      </div>

      <div class="footerOP">
        <div class="row">
          <div class="col"><label class="btn_pest btn-link" for="select_1">Ya tengo usuario</label></div>
          <div class="col"><label class="btn_pest btn-link" for="select_2">No estoy registrado</label></div>
        </div>
      </div>
       
    </div>
  </div>
</div>

  <section>
    <div class="contenedor forma_1">
      <div class="grid_1_1 txtContenido">
        <p class="txtInicio">La forma más sencilla de invertir adaptada a tu forma de entender el mundo digital.</p>
        <div class="linea-I"></div>
      </div>
      <div class="grid_1_2 imgContenido">
        <img src="img/img_1.png" alt="">
      </div>
    </div>
  </section>
  <section>
    <div class="contenedor forma_1">
      <div class="grid_1_1 txtContenido">
        <p class="txtSeccion">
          ¿Qué es SYNTHETIC BINARY ACADEMY? <br><br>
          Somos una academia de Trading que proporciona soluciones
          financieras. Aquí te capacitamos para convertirte en un mejor
          emprendedor y obtener ganancias. Nuestra principal prioridad
          es suministrar el conocimiento correcto de los mercados digitales
          y financieros a las personas para que puedan prosperar
          económicamente y mejorar su calidad de vida.
        </p>
      </div>
      <div class="grid_1_2 imgContenido">
        <img src="img/img_1.png" alt="">
      </div>
    </div>
  </section>
  <section>
    <div class="contenedor">
      <div class="txtContenido">
        <p class="txtSeccion">
          Donde inviertes tu dinero es más importante de lo que imaginas.
          Cuando lo haces, impulsas proyectos y valores, decides que futuro
          quieres para ti y para tu familia.<br><br>
          Te brindamos un acceso simple al mercado bursátil de los índices
          sintéticos, apoyados en la AI con una impresionante plataforma que
          permite ver los rendimientos diariamente en uno de los mercados
          más rentables del mundo y que por medio de nuestra academia
          podrás aprender a realizar operaciones rentables como lo hacen los
          expertos y los grandes fondos de inversión.
        </p>
      </div>
    </div>
  </section>
  <section>
    <div class="contenedor forma_2">
      <div class="grid_2_1 imgContenido">
        <img src="img/Recurso 1.png" alt="">
      </div>
      <div class="grid_2_2 txtContenido_2">
        <p class="txtSeccion">
          Abrir puertas de oportunidad para que las personas
          logren sus objetivos financieros educándose con el
          conocimiento correcto de los mercados digitales
          proporcionando un fácil acceso a operaciones rentables
          con un mínimo riesgo.
        </p>
      </div>
      <div class="grid_2_3 txtContenido_2">
        <p class="txtSeccion">Convertirnos en una academia de trading líder y
          de confianza en el mundo para llevar la realización
          financiera a la humanidad a través de soluciones
          financieras profesionales.</p>
      </div>
      <div class="grid_2_4  imgContenido">
        <img src="img/Recurso 2.png" alt="">
      </div>
    </div>
  </section>
  <section>
    <div class="contenedor forma_1">
      <div class="grid_1_1 txtContenido">
        <p class="txtSeccion">
          Academia<br><br>
          Creemos que la educación financiera es una base sólida
          para que las personas tomen el control de su economía
          y contribuyan en el desarrollo de sus familias y comunidades,
          con un enfoque único que revolucionará el mercado financiero
          y de criptomonedas al establecer una academia de
          capacitación en el mercado financiero para sus socios. 
        </p>
      </div>
      <div class="grid_1_2 imgContenido">
        <img src="img/img_1.png" alt="">
      </div>
    </div>
  </section>
  <section>
    <div class="contenedor">
      
    </div>
  </section>

<?php
  echo $pie;
?>

<script src="js/particles.js"></script>
<script src="js/lib/stats.js"></script>
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/formRegistro.js"></script>
</body>

</html>