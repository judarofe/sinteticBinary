function validarFormularioRegistrar() {
    var firstName = document.getElementById("firstName").value;
    var secondName = document.getElementById("secondName").value;
    var firstLastName = document.getElementById("firstLastName").value;
    var secondLastName = document.getElementById("secondLastName").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var inputcodigo = document.getElementById("inputcodigo").value;
    var terminosCondiciones = document.getElementById("terminosCondiciones");
    var mensajeFalta = "";
    var mensaje = "";
    var miDiv = document.getElementById("mensajeAlerta");
    var Pass1 = document.getElementById("PasswordV1").value;
    var Pass2 = document.getElementById("PasswordV2").value;

    const err_Name = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/;
    const err_Correo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const err_Codigo = /^[a-zA-Z0-9]{1,8}$/;
    const err_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\/\-_#$%&*?¿!@^+=]{8,}$/;

    miDiv.innerHTML = "";

    if (firstName == ""){
        mensajeFalta = mensajeFalta + "<li>Primer nombre</li>";
    } else {
        if (err_Name.test(firstName) == false){
            mensaje = mensaje + "<li>Primer nombre</li>";
        }
    }

    if (secondName == ""){
        mensaje = mensaje
    }else{
        if (err_Name.test(secondName) == false){
            mensaje = mensaje + "<li>Segundo nombre</li>";
        }
    }

    if (firstLastName == ""){
        mensajeFalta = mensajeFalta + "<li>Primer apellido</li>";
    } else {
        if (err_Name.test(firstLastName) == false){
            mensaje = mensaje + "<li>Primer apellido</li>";
        } 
    }

    if (secondLastName == ""){
        mensajeFalta = mensajeFalta + "<li>Segundo apellido</li>";
    } else {
        if (err_Name.test(secondLastName) == false){
            mensaje = mensaje + "<li>Segundo apellido</li>";
        } 
    }

    if (phone == ""){
        mensajeFalta = mensajeFalta + "<li>Teléfono</li>";
    } else {
        if (isNaN(phone)){
            mensaje = mensaje + "<li>Telefono</li>";
        }
    }
    
    if (email == ""){
        mensajeFalta = mensajeFalta + "<li>Email</li>";
    } else {
        if (err_Correo.test(email) == false){
            mensaje = mensaje + "<li>Email</li>";
        }
    }

    if (inputcodigo == ""){
        mensajeFalta = mensajeFalta + "<li>Transcriba el codigo enviado a su email</li>";
    } else {
        if (err_Codigo.test(inputcodigo) == false){
            mensaje = mensaje + "<li>Transcriba el codigo enviado a su email</li>";
        }
    }

    if (Pass1 == "" || Pass2 == ""){
        mensajeFalta = mensajeFalta + "<li>Ingrese su contraseña</li>";
    } else {
        if (err_pass.test(Pass1) == false || err_pass.test(Pass2) == false){
            mensaje = mensaje + "<li>Su contraseña no cumple con los requerimientos</li>";
        }else{
            if (Pass1 != Pass2) {
                mensaje = mensaje + "<li>Las contraseñas no son iguales</li>";
            }
        }
    }

    if (terminosCondiciones.checked){
        mensajeFalta = mensajeFalta;
    }else{
        mensajeFalta = mensajeFalta + "<li>No se acepto términos y condiciones</li>";
    }

    if (mensajeFalta != "" || mensaje != ""){
        
        if(mensajeFalta != ""){
            miDiv.innerHTML += "<p><strong>Lo siento!</strong></p><p>Te falta:</p><ul>" + mensajeFalta;
        }
        if(mensaje != ""){
            miDiv.innerHTML += "</ul><p>Error de caracteres en:</p><ul>" + mensaje + "</ul>";
        }

        document.getElementById("modal_load").style.display = "block";

        return false;
    }

    return true;
}