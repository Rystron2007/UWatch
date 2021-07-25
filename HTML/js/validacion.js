const expresiones = {
  hola: "saludor",
  nombres: /^[a-zA-Z]{1,15}$/,
  apellidos: /^[a-zA-Z]{1,15}$/,
  direccion: /^[a-zA-Z\s\-\_]{1,25}$/,
  contraseña: /^.{8,}$/,
  correo: /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z0-9-.]+$/i,
  telefono: /^\d{10}/,
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
const selectorGenero = () => {
  if (selector.value == "Seleccione") {
    document.getElementById("texto_errorG").classList.remove("normal");
    document.getElementById("texto_errorG").classList.add("error");
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
    texto.innerHTML = "Afiliacion Correcta";
    texto.classList.remove("text-danger");
    texto.classList.add("correcto");
    formulario.reset();
  } else {
    texto.innerHTML = "Complete todos los campos";
    texto.classList.add("text-danger");
    texto.classList.add("error");
  }
});
