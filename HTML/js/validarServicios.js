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
  archivo: false,
};
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");
const texto = document.getElementById("textoIndicador");
const archivo = document.getElementById("archivoSubir");
archivo.setAttribute("accept", "application/pdf");

function validarComentario() {
  const texto = document.getElementById("descripcion");
  if (texto.value === null || texto.value == "") {
    document.getElementById("texto_errorTexA").classList.remove("normal");
    document.getElementById("texto_errorTexA").classList.add("error");
  } else {
    document.getElementById("texto_errorTexA").classList.remove("error");
    document.getElementById("texto_errorTexA").classList.add("normal");
    valInputs.comentario = true;
  }
}
function validarArchivo() {
  if (archivo.files.length == 0) {
    document.getElementById("texto_errorAr").classList.remove("normal");
    document.getElementById("texto_errorAr").classList.add("error");
  } else {
    document.getElementById("texto_errorAr").classList.remove("error");
    document.getElementById("texto_errorAr").classList.add("normal");
    valInputs.archivo = true;
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
  validarArchivo();
  if (
    valInputs.nombres &&
    valInputs.apellidos &&
    valInputs.correo &&
    valInputs.marca &&
    valInputs.direccion &&
    valInputs.telefono &&
    valInputs.archivo &&
    valInputs.comentario
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
