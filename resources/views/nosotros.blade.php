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


      <!-- creacion del contenedor -->
<section class="container-fluid my-3">
  <div class="row">
    <!-- este div solo sera para la columna de los filtros -->
    <div class="col-2 pl-2 " style="background-color: #f2f2f2;">
 
      <!-- ~formulario para el filtro de la pagina -->
      <form>
            <h4 class="">Filtros</h4>
        <div class="form-group">
          <label for="marca" style="font-weight: bold;">Marca:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Hp"> Hp
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Samsung"> Lenovo
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="msi"> Msi
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
              <input type="checkbox" name="precio[]" value="500-1000"> $3.000.000-$7000.000
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
              <input type="checkbox" name="cpu[]" value="Intel Core i3"> Intel Core i3
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Intel Core i5"> Intel Core i5
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Intel Core i7"> Intel Core i7
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
              <img src="img/c1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cyborg 15 A12VF I MSI</h5>
                <p class="card-text">$ 6.139.190</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col">
      
    <div class="card mx-auto  card w-80 my-1 " >
              <img src="img/c2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cyborg 15 A1 Alv I MSI</h5>
                <p class="card-text">$ 7.999.000  </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col">
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IdeaPad 1 AMN71 Lenovo</h5>
                <p class="card-text">$ 1.789.889 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " > 
              <img src="img/c4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Katana B13VFK I MSI</h5>
                <p class="card-text">$ 7.399.990 </p> 
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Katana B13VGK I MSI</h5>
                <p class="card-text">$ 9.789.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Portátil 15 EF2523LA I HP</h5>
                <p class="card-text">$ 1.849.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c7.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Portatil Gamer Cyborg 15  m2VF I MSI</h5>
                <p class="card-text">$ 5.989.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Portátil Zephyrus G14 2023 I Asus</h5>
                <p class="card-text">$ 7.279.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/c9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">TUF FA507NU I ASUS</h5>
                <p class="card-text">$ 6.139.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col">

      <div class="card mx-auto card w-80 my-1 " >
      <img src="img/c10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Vivobook X1504ZA-NJ227 I ASUS</h5>
      <p class="card-text">$ 2.369.990 </p>
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