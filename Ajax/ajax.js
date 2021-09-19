var conexion = new XMLHttpRequest();

addEventListener('load', inicio, false);

function inicio() {
  var ref = document.getElementById('boton');
  ref.addEventListener('click', clickBoton, false);
}
function clickBoton() {
  establecerDatos();
}

function establecerDatos() {
  conexion.onreadystatechange = mostrarRespuesta;
  conexion.open('POST', 'Ajax/listar.php');
  conexion.send();
}

function mostrarRespuesta() {
  var respuesta = document.getElementById('contenedor');
  if (conexion.readyState == 4) {
    var array = JSON.parse(conexion.responseText);
    var contenedor = document.createDocumentFragment();
    array.forEach((item) => {
      var element = document.createElement('div');

      element.innerHTML = `
      
      <img class="card-img-top" 
      src="assets/images/logo.png"alt="Producto"
      height=200px >
      <div class="card-body d-flex flex-column justify-content-center text-center">
        <h4 class="card-title">
          ${item['nombre']}
        </h4>
        <p class="card-text">
          ${item['descripcion']}
        </p>
        <p class="card-text">
          $ ${item['precio']}
        </p>
      
      </div>
    `;
      element.classList.add(
        'card',
        'border',
        'border-primary',
        'm-2',
        'p-2',
        'rounded',
        'rounded-3'
      );
      contenedor.appendChild(element);
    });
    respuesta.innerHTML = '';
    respuesta.appendChild(contenedor);
  } else {
    respuesta.innerHTML = 'Espere por favor..!';
  }
}
