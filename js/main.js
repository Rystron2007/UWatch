class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <header>
      <nav id="navBar" class="navbar navbar-expand-lg navbar-light " style="background-color: #ffc300;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" style="font-size: 40px;">
            <img class="d-inline-block mx-auto" src="img/logo.png" alt="" width="100" height="100">
            UWATCH
          </a>
          <div class="container-sm">
            <ul id="menu" class="nav navbar-nav nav-fill" style="font-size: 20px;">
              <li class="nav-item"><a class="nav-link" href="catalogo.html">Catálogo</a></li>
              <li class="nav-item"><a class="nav-link" href="afiliados.html">Afiliados</a></li>
              <li class="nav-item"><a class="nav-link" href="promociones.html">Promociones</a></li>
              <li class="nav-item"><a class="nav-link" href="servicios.html">Servicios</a></li>
              <li class="nav-item"><a class="nav-link" href="ventas.html">Ventas</a></li>
              <li class="nav-item"><a class="nav-link" href="contacto.html">Contactos</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    `;
  }
}

customElements.define("my-header", MyHeader);

class MyFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <footer>
      <div class="container-fluid m-0 p-0" style="background-color: #ffc300;">
        <div class="row text-center" >
          <div class="col m-3 p-1">
            <h6>Suscripción</h6>
            <form  class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <p class="text-dark">Suscríbase a nuestros planes de por vida.</p>
                  <input type="email" class="form-control text-center" id="suscripcionEmail" placeholder="Correo electrónico">
                </div>
                <div class="col-12 pt-3">
                    <button type="submit" onclick = "" class="btn btn-primary">Suscribirse</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col m-3 p-1">
            <h6>Empresa</h6>
            <a class="nav-link" href="#">Quienes Somos</a>
            <a class="nav-link" href="#">Contactos</a>
          </div>
          <div class="col m-3 p-1">
            <h6>Tienda</h6>
            <a class="nav-link" href="catalogo.html">Catálogo</a>
            <a class="nav-link" href="afiliados.html">Afiliación</a>
            <a class="nav-link" href="servicios.html">Servicios</a>
          </div>
          <div class="col m-3 p-1">
            <h6>Redes Sociales</h6>
            <a class="nav-link" href="https://www.facebook.com/">Facebook</a>
            <a class="nav-link" href="https://www.instagram.com/">Instagram</a>
          </div>
        </div>
      </div>
    </footer>
    `;
  }
}

customElements.define("my-footer", MyFooter);
