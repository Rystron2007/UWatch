//Expresiones Regulares
const expresiones = {
  nombres: /^[a-zA-Z]{1,15}$/,
  apellidos: /^[a-zA-Z]{1,15}$/,
  direccion: /^[a-zA-Z\s\-\_]{1,25}$/,
  contraseña: /^.{8,}$/,
  correo: /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z0-9-.]+$/i,
};
const valInputs = {
  nombres: false,
  apellidos: false,
  correo: false,
  contraseña: false,
  genero: false,
};
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");
const selector = document.getElementById("seleccion");
const terminos = document.getElementById("terminos");
const texto = document.getElementById("textoIndicador");
const google = document.getElementById("google");
const facebook = document.getElementById("facebook");
const selectorGenero = () => {
  if (selector.value == "Seleccione") {
    document.getElementById("texto_errorG").classList.remove("normal");
    document.getElementById("texto_errorG").classList.add("error");
    valInputs.genero = false;
  } else {
    document.getElementById("texto_errorG").classList.remove("error");
    document.getElementById("texto_errorG").classList.add("normal");
    valInputs.genero = true;
  }
};
const seleccionTerminos = () => {
  if (terminos.checked) {
    document.getElementById("texto_errorCas").classList.remove("error_casilla");
    document.getElementById("texto_errorCas").classList.add("normal");
  } else {
    document.getElementById("texto_errorCas").classList.remove("normal");
    document.getElementById("texto_errorCas").classList.add("error_casilla");
  }
};
function validarCampo(valor, input, campo) {
  if (expresiones[valor].test(input.value)) {
    document.getElementById(`${campo}`).classList.remove("error");
    document.getElementById(`${campo}`).classList.add("normal");
    valInputs[`${valor}`] = true;
  } else {
    document.getElementById(`${campo}`).classList.remove("normal");
    document.getElementById(`${campo}`).classList.add("error");
    valInputs[`${valor}`] = false;
  }
}
const validarFormulario = (e) => {
  switch (e.target.name) {
    case "nombre":
      validarCampo("nombres", e.target, "texto_errorN");
      break;
    case "apellido":
      validarCampo("apellidos", e.target, "texto_errorA");
      break;
    case "correos":
      validarCampo("correo", e.target, "texto_errorC");
      break;
    case "contraseñas":
      validarCampo("contraseña", e.target, "texto_errorCon");
      break;
  }
};
inputs.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
});
google.addEventListener("click", () => {
  alert("Gracias por iniciar secion con Google");
});
facebook.addEventListener("click", () => {
  alert("Gracias por iniciar secion con Facebook");
});
formulario.addEventListener("submit", (e) => {
  e.preventDefault();
  selectorGenero();
  seleccionTerminos();
  if (
    valInputs.nombres &&
    valInputs.apellidos &&
    valInputs.contraseña &&
    valInputs.correo &&
    valInputs.genero &&
    terminos.checked
  ) {
    texto.innerHTML = "Solicitud enviada Correctamente";
    texto.classList.remove("text-danger");
    texto.classList.add("correcto");
    formulario.reset();
  } else {
    texto.innerHTML = "Complete todos los campos";
    texto.classList.remove("correcto");
    texto.classList.add("text-danger");
    texto.classList.add("error");
  }
});
