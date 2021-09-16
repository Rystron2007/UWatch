function cargoEspecial(){
  var valor = document.getElementById("cargo").value;

  var url="index.php?controlador=Usuarios&a=cargoEspecial&valor="+ valor;
  var xmlh = new XMLHttpRequest();
  xmlh.open("GET", url, true);
  xmlh.send();

  // lectura de respuesta
  xmlh.onreadystatechange = function(){
    if(xmlh.readyState === 4 && xmlh.status===200){
      var respuesta = xmlh.responseText;
      var productos = JSON.parse(respuesta);
      //actualizar cierta parte de la pagina
      console.log(productos);
      // actualizar cierta parte de la pagina
      resultados = '';
      if(producto.nombre == bus){
        resultados += '<tr>';
        resultados += '<td>' + producto.prod_id + '</td>';
        resultados += '<td>' + producto.prod_codigo + '</td>';
        //o tambien  resultados += '<td>' + producto['prod_codigo']+ '</td>';
        resultados += '<td>' + producto.prod_nombre + '</td>';
        resultados += '<td>' + producto.nombre + '</td>';
        resultados += '<td>' + producto.prod_precio + '</td>';

        if (producto.prod_estado === 1) {
          resultados += '<td>Activo</td>';
        } else {
          resultados += '<td>Inactivo</td>';
        }
        resultados += '<td>' + producto.ruta_imagen + '</td>';
        resultados += '<td>' +
        "<a href='index.php?c=Productos&a=mostrarDatos&id=" + producto.prod_id +
        "' " + "class='btn btn-primary'><i class='fas fa-marker'></i></a>" +
        "<a href='index.php?c=Productos&a=eliminar&id=" + producto.prod_id + "'" +
        "class='btn btn-danger' onclick = 'if (!confirm(\'Desea eliminar la actividad: '" + producto.prod_nombre
        + " \')) return false; " + " ><i class='far fa-trash-alt'></i> </a>" + '</td>';
        resultados += '</tr>';
      }
      document.getElementById('tbodyProd').innerHTML = resultados;
    }
  };
}
