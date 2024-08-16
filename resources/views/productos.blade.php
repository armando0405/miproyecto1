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

<!-- <h1 class="text-starts pl-4 ">Torres</h1> -->
      <!-- creacion del contenedor -->
<section class="container-fluid my-3">
  <div class="row">
    <!-- este div solo sera para la columna de los filtros -->
    <div class="col-2 pl-2 " style="background-color: #f2f2f2;">
 
      <!-- ~formulario para el filtro de la pagina -->
      <form>
            <h4 class="">Filtros</h4>
        <div class="form-group">
          <label for="marca" style="font-weight: bold;">Tamaño:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Hp"> pequeño
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Samsung"> Mediano
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="msi"> Grande
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="precio" style="font-weight: bold;">Precio:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="100-200"> $0 -$1.000.000
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="200-500"> $1.000.000-$3000.000
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="500-1000"> $3.000.000-$8000.000
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="ram" style="font-weight: bold;">RAM:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ram[]" value="2GB"> 4GB
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ram[]" value="4GB"> 8GB
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ram[]" value="8GB"> 16GB
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="cpu" style="font-weight: bold;">CPU:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Intel Core i3"> AMD RYZEN 5 4600G
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Intel Core i5"> AMD RYZEN 7 5600G
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Intel Core i7"> Intel Core i7-12500F
            </label>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Filtrar</button>
      </form>


    </div>

              <!-- listra de productos  -->

    <div class="col " >

  <div class="row  row-cols-xxl-5 row-cols-lg-3 row-cols-sm-2 ">
    <div class="col " > 

                  <div class="card  mx-auto w-80 my-1 " >
              <img src="img/t1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Re:Zero</h5>
                <p class="card-text">$ 4.299.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col">
      
    <div class="card mx-auto  card w-80 my-1 " >
              <img src="img/t2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre HxH</h5>
                <p class="card-text">$ 5.690.900  </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col">
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Golden Time</h5>
                <p class="card-text">$ 4.699.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " > 
              <img src="img/t4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">torre Evangelion</h5>
                <p class="card-text">$ 4.199.990 </p> 
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre FMAB</h5>
                <p class="card-text">$ 3.149.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre One Piece</h5>
                <p class="card-text">$ 7.499.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">TOrre Mushoku Tensei</h5>
                <p class="card-text">$ 4.699.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Oregairu</h5>
                <p class="card-text">$ 3.299.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >

            <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Naruto</h5>
                <p class="card-text">$ 7.499.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col">

      <div class="card mx-auto card w-80 my-1 " >
      <img src="img/t10.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Torre Black Clover</h5>
        <p class="card-text">$ 6.549.990 </p>
        <a href="#" class="btn btn-outline-primary">Comprar</a>
        </div>
      </div>

    </div>

    <div class="col" >

            <div class="card mx-auto card w-80 my-1 " >
              <img src="img/t11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Torre Kaguya-Sama</h5>
                <p class="card-text">$ 3.499.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >

<div class="card mx-auto card w-80 my-1 " >
  <img src="img/t12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Torre Bleach</h5>
    <p class="card-text">$ 8.699.990 </p>
    <a href="#" class="btn btn-outline-primary">Comprar</a>
  </div>
</div>

</div>

  </div>
    </div>

  </div>
</section>


</body>
@include('footer')
</html>