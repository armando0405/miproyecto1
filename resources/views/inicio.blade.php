<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  @include('Navbar')



        
    <!-- ~codig del carrusell  -->
    <section class="container-lg mb-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/car1.png" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/car3.png" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/car4.png" class="d-block w-100 h-80" alt="...">
      </div>
        <div class="carousel-item">
          <img src="img/car2.png" class="d-block w-100 h-80" alt="...">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
    </div >


    </section>





<!-- contenedor de nuevos productos -->
  <section class="container my-5">

  <div class="row">
          <div class="col">
            <h3>Nuevos productos</h3>
          </div>
      </div>
      <div class="row " >
        <div class="col p-3" >

          <div class="card" style="width: 18rem;">
              <img src="img/p5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5>Camara Web C270 HD 720P I Logitech</h5></a>
                <p class="card-text ">  $.99.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col" >
        <div class="card" style="width: 18rem;">
              <img src="img/to2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Satoru Gojo expasion de dominio</h5>
                <p class="card-text">$ 3.850.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col" >
        <div class="card" style="width: 18rem;">
              <img src="img/p4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diadema GamerG435 Inalámbrica I Logitech</h5>
                <p class="card-text">$ 369.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col" >
          
        <div class="card " style="width: 18rem;">
              <img src="img/p3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Soporte para diademas  I Trust</h5>
                <p class="card-text">$ 149.900 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

    </div>
  </div>
  </section>


  <!-- prductos mas vendidos -->

  <section class="container ">

      <div class="row">
      <div class="col-12 mb-2">
            <h3>productos mas vendidos</h3>
        </div>
      </div>
      <div class="row " >
        <div class="col p-3">

          <div class="card" style="width: 18rem;">
              <img src="img/pe1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5>Teclado K630 DragonBorn RGB | Redragon</h5></a>
                <p class="card-text ms-2">  $.79.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col" >
        <div class="card" style="width: 18rem;">
              <img src="img/po1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Teclado K630 DragonBorn RGB | Redragon</h5>
                <p class="card-text">$214.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col"  >
        <div class="card" style="width: 18rem;">
              <img src="img/p2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vivobook X1504ZA-NJ227 | ASUS</h5>
                <p class="card-text">$ 2.369.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

        <div class="col" >
          
        <div class="card " style="width: 18rem;">
              <img src="img/to1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre violet Evargardent</h5>
                <p class="card-text">$ 2.319.900 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
        </div>

    </div>
  </section>


</body>
@include('footer')
</html>