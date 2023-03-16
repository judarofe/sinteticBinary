<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNTHETIC BINARY ACADEMY | Inicio</title>
    <link rel="stylesheet" href="css/style.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div id="particles-js"></div>
<!--particulas-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark menu">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logoMenu" src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html"><strong class="itemMenuGo">Inicio</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ourCompany.html"><span class="itemMenu">Nosotros</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.html"><span class="itemMenu">Contacto</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.html"><span class="itemMenu">Perfil</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#SesionModal"><span class="itemMenu">Iniciar Sesión</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.html"><span class="itemMenu">Cerrar Sesión</span></a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
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
            <form action="">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg></span>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg></span>
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
          </div>
          <div class="modal-body">
            <form action="" onsubmit="return validarFormularioRegistrar()">
              <label for="firstName" class="form-label">Primer Nombre*</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg></span>
                <input type="text" class="form-control" id="firstName" required>
              </div>
              <label for="secondName" class="form-label">Segundo Nombre</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg></span>
                <input type="text" class="form-control" id="secondName">
              </div>
              <label for="firstLastName" class="form-label">Primer apellido*</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg></span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="firstLastName" required>
              </div>
              <label for="secondLastName" class="form-label">Segundo apellido*</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg></span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="secondLastName" required>
              </div>
              <label for="phone" class="form-label">Telefono*</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg></span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="phone" required>
              </div>
              <label for="email" class="form-label">Email*</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg></span>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar Codigo</button>
              </div>
              <label for="inputcodigo" class="form-label">Codigo*</label>
              <div id="emailHelp" class="form-text">Ingrese el codigo enviado a su email</div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                </svg></span>
                <input type="text" class="form-control" aria-label="Username" id="inputcodigo" aria-describedby="emailHelp" required>
              </div>
              <label for="PasswordV1" class="form-label">Password*</label>
              <div id="emailHelp" class="form-text">Debe tener minimo 8 caracteres, mayusculas, minusculas y alfanumericos (/, -, _, #, $, %, &, *, ?, ¿, !, @, ^, +, =)</div>
              <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg></span>
                <input type="text" class="form-control" id="PasswordV1" required>
              </div>
              <label for="PasswordV2" class="form-label">Repite tu password*</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg></span>
                <input type="password" class="form-control" id="PasswordV2" required>
              </div>
                <input type="text" class="form-control" id="veCod" readonly>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terminosCondiciones">
                <label class="form-check-label" for="terminosCondiciones" required>Crear cuenta y aceptar <a href="">terminos y condiciones</a></label>
              </div>
              <div class="modal_load" id="modal_load">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <div id="mensajeAlerta"></div>
                </div>
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

  <footer></footer>
  
<!--particulas-->
<script src="js/particles.js"></script>
<script src="js/lib/stats.js"></script>
<script src="js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/formRegistro.js"></script>
</body>

</html>