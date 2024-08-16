<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
          /* Estilo para los links del footer */
          footer a {
            color: #ffffff; /* Color del texto de los links */
            text-decoration: none; /* Quitar la línea debajo de los links */
          }

          /* Hover effect (opcional) */
          footer a:hover {
            color: #ccccff; /* Color del texto de los links al pasar el mouse */
          }
    </style>
</head>
<body>



<!--  footer en creacion -->

<!-- Footer -->
<footer class="footer ">

  <div class="container-fuid mt-5" style="background-color: #00288E;">
    hola
    <div class="container " style="background-color: #00288E;">
    <div class="row">
      <!-- Columna 1: Redes sociales -->
      <div class="col-md-3">

        <h4 style="color: #ffffff;">Productos</h4>
        <ul class="list-unstyled">
           <li><a href="/nosotros">Portatiles </a></li>
           <li><a href="/productos">Torres</a></li>
           <li><a href="/servicios">Perifericos</a></li>
           <li><a href="/servicios">Teclados</a></li>
           <li><a href="/servicios">Mouse</a></li>
           <li><a href="/servicios">Auriculares</a></li>
        </ul>
      </div>

      <!-- Columna 3: Información de la empresa -->
      <div class="col-md-3">

        <h4 style="color: #ffffff;">Acerca de nosotros</h5>
        <ul class="list-unstyled">
          <li><a href="#">Nuestra historia</a></li>
          <li><a href="#">Misión y visión</a></li>
          <li><a href="#">Equipo de trabajo</a></li>
        </ul>
        <br>
        <h4 style="color: #ffffff;">Redes sociales</h4>
        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
          <li><a href="https://x.com/" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
        </ul>
      </div>

      <!-- Columna 2: Atención al cliente -->
      <div class="col-md-3">

        <h4 style="color: #ffffff;">Atención al cliente</h5>
        <ul class="list-unstyled" >
          <li><a href="mailto:gamerstore@gmail.com">gamerstore@gmail.com</a></li>
          <li><a href="#">+57 3215421548</a></li>
          <li><a href="https://www.dian.gov.co/atencionciudadano/PQSRD/Paginas/PQSR.aspx">Preguntas frecuentes</a></li>
        </ul>
      </div>


      <!-- Columna 4: Ubicaciones -->
      <div class="col-md-3">

        <h4 style="color: #ffffff;">Ubicaciones</h5>
        <ul class="list-unstyled">
          <li><a href="https://www.google.com/maps/place/TECNOPLAZA/@3.4666303,-76.5293791,765m/data=!3m2!1e3!4b1!4m6!3m5!1s0x8e30a615a36d0373:0xb767821ae5a55cb9!8m2!3d3.4666303!4d-76.5267988!16s%2Fg%2F1q5bmy199?authuser=0&entry=ttu">Sede principal: Cnetro comercial Tecnoplaza, Cali</a></li>
          <li><a href="https://www.google.com/maps/place/La+Pasarela+del+Sur/@3.4141345,-76.5404703,6723m/data=!3m1!1e3!4m10!1m2!2m1!1stienda+computadores+!3m6!1s0x8e30a153e6e12e4b:0x9b4d040ecc5dabd8!8m2!3d3.3999351!4d-76.541799!15sChN0aWVuZGEgY29tcHV0YWRvcmVzWhUiE3RpZW5kYSBjb21wdXRhZG9yZXOSARdjb21wdXRlcl9yZXBhaXJfc2VydmljZZoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOTE9XUnRZbkozUlJBQuABAA!16s%2Fg%2F1pzpkqgws?authuser=0&entry=ttu">Local 1: Cra. 6 02 local 1, Cali</a></li>
          <li><a href="https://www.google.com/maps/place/LOLO+Computadores/@4.6636524,-74.0586852,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipM6V8H9hB5gfd1eSDa_PWN87rs4wd9BteeEVlZn!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipM6V8H9hB5gfd1eSDa_PWN87rs4wd9BteeEVlZn%3Dw86-h114-k-no!7i3024!8i4032!4m11!1m2!2m1!1stienda+computadores+boogta!3m7!1s0x8e3f9b31c2787a2f:0x7dcb8adc3811d3d0!8m2!3d4.6636097!4d-74.0586069!10e5!15sChp0aWVuZGEgY29tcHV0YWRvcmVzIGJvZ290YVoVIhNjb21wdXRhZG9yZXMgYm9nb3RhkgEQY29tcHV0ZXJfc2VydmljZZoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOYVozWlVPVE5uUlJBQuABAA!16s%2Fg%2F1z44b1wwm?authuser=0&entry=ttu">Local 2: Cra. 15#76-90, Bogota</a></li>
        </ul>
      </div>
    </div>
  </div>

  </div>

</footer>
</body>
</html>