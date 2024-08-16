
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

<!-- <h2 class="text-starts pl-4  ">Perifericos</h1> -->
      <!-- creacion del contenedor -->
<section class="container-fluid my-3">
  <div class="row">
    <!-- este div solo sera para la columna de los filtros -->
    <div class="col-2 pl-2 " style="background-color: #f2f2f2;">
 
      <!-- ~formulario para el filtro de la pagina -->
      <form>
            <h4 class="">Filtros</h4>
        <div class="form-group">
          <label for="marca" style="font-weight: bold;">Categoria:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Hp"> Auriculares
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Samsung"> Teclados
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Mouse"> Mouse
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="MousePad"> MousePad
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="marca[]" value="Camara"> Camara
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="precio" style="font-weight: bold;">Precio:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="100-200"> $0 - $100.000
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="200-500"> $100.000 -$400.000
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="precio[]" value="500-1000"> $400.000 -$800.000
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="ram" style="font-weight: bold;">Coneccion:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ram[]" value="2GB"> Alambrico
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ram[]" value="4GB"> Inalambrico
            </label>
          </div>

        </div>
        <div class="form-group">
          <label for="cpu" style="font-weight: bold;">Marca:</label>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Logitech">Logitech
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Redragon"> Redragon
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="cpu[]" value="Fantech"> Fantech
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
              <img src="img/e1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Combo Teclado Kumara K552</h5>
                <p class="card-text">$ 329.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col">
      
    <div class="card mx-auto  card w-80 my-1 " >
              <img src="img/e16.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Case PC Aluminio </h5>
                <p class="card-text">$ 69.990  </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col">
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diadema Ares H120 </h5>
                <p class="card-text">$ 79 ,990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " > 
              <img src="img/e4.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diadema G PRO I Logitech</h5>
                <p class="card-text">$ 505.990 </p> 
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >
    <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diadema Gamer Cloud Stinger</h5>
                <p class="card-text">$ 234.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>

    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mouse Captain T-TGM302</h5>
                <p class="card-text">$ 149.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mouse Ergonómico Alámbrico</h5>
                <p class="card-text">$ 59.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mousepad Gamer G640 Rigido</h5>
                <p class="card-text">$ 108.990</p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    <div class="col" >

                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e9.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mouse 6903 RGB Hero</h5>
                <p class="card-text">$ 599.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>

    </div>
    
    <div class="col">
      
      <div class="card mx-auto card w-80 my-1 " >
        <img src="img/e10.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Teclado K60 RGB I Corsair</h5>
          <p class="card-text">$ 466.990 </p>
          <a href="#" class="btn btn-outline-primary">Comprar</a>
        </div>
      </div>
      
    </div>
    
    <div class="col" >
      
      <div class="card mx-auto card w-80 my-1 " >
        <img src="img/e11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Teclado K630 DragonBorn RGB</h5>
          <p class="card-text">$ 214.990</p>
          <a href="#" class="btn btn-outline-primary">Comprar</a>
        </div>
      </div>
      
    </div>
    
    <div class="col" >
    
                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Teclado Kumara K552</h5>
                <p class="card-text">$ 279.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    
    </div>
    <div class="col" >
    
                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e13.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Teclado Maxpower MK853</h5>
                <p class="card-text">$ 294.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    
          </div>

    <div class="col" >
    
                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e15.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cámara Web Helix</h5>
                <p class="card-text">$ 169.990 </p>
                <a href="#" class="btn btn-outline-primary">Comprar</a>
              </div>
            </div>
    
    </div>
    <div class="col" >
    
                  <div class="card mx-auto card w-80 my-1 " >
              <img src="img/e14.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cámara Web Hitman GW800</h5>
                <p class="card-text">$ 245.000 </p>
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