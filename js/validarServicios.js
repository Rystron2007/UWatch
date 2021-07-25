const expresiones = {
  nombres: /^[a-zA-Z]{1,15}$/,
  apellidos: /^[a-zA-Z]{1,15}$/,
  direccion: /^[a-zA-Z0-9\s\-]{4,50}$/,
  marca: /^[a-zA-Z0-9\s\-\s]{4,20}$/,
  correo: /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z0-9-.]+$/i,
  telefono: /^\d{10}$/,
};
const valInputs = {
  nombres: false,
  apellidos: false,
  correo: false,
  direccion: false,
  marca: false,
  telefono: false,
  comentario: false,
  seleccion: false,
};
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");
const texto = document.getElementById("textoIndicador");
const selector = document.getElementById("tipoReloj");
function validarComentario() {
  const texto = document.getElementById("descripcion");
  if (texto.value == "") {
    document.getElementById("texto_errorTexA").classList.remove("normal");
    document.getElementById("texto_errorTexA").classList.add("error");
    valInputs.comentario = false;
  } else {
    document.getElementById("texto_errorTexA").classList.remove("error");
    document.getElementById("texto_errorTexA").classList.add("normal");
    valInputs.comentario = true;
  }
}
function validarSeleccion() {
  if (selector.value == "Seleccione") {
    document.getElementById("texto_errorS").classList.remove("normal");
    document.getElementById("texto_errorS").classList.add("error");
    valInputs.seleccion = false;
  } else {
    document.getElementById("texto_errorS").classList.remove("error");
    document.getElementById("texto_errorS").classList.add("normal");
    valInputs.seleccion = true;
  }
}
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
    case "nombres":
      validarCampo("nombres", e.target, "texto_errorN");
      break;
    case "apellidos":
      validarCampo("apellidos", e.target, "texto_errorA");
      break;
    case "correo":
      validarCampo("correo", e.target, "texto_errorC");
      break;
    case "direccion":
      validarCampo("direccion", e.target, "texto_errorD");
      break;
    case "marca":
      validarCampo("marca", e.target, "texto_errorM");
      break;
    case "telefono":
      validarCampo("telefono", e.target, "texto_errorTel");
      break;
  }
};
inputs.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
});

formulario.addEventListener("submit", (e) => {
  e.preventDefault();
  validarComentario();
  validarSeleccion();
  if (
    valInputs.nombres &&
    valInputs.apellidos &&
    valInputs.correo &&
    valInputs.direccion &&
    valInputs.comentario &&
    valInputs.seleccion
  ) {
    texto.innerHTML = "Afiliacion Correcta";
    texto.classList.remove("text-danger");
    texto.classList.add("correcto");
    formulario.reset();
  } else {
    texto.classList.remove("correcto");
    texto.innerHTML = "Complete todos los campos";
    texto.classList.add("text-danger");
    texto.classList.add("error");
  }
});
