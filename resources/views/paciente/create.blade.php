<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Salud</title>
</head>
<body>
    <header class="container-fluid d-flex mw-100 border pt-2 ">
        <div class="container d-flex ms-5">
               <h2 class="">Salud</h2>
        </div>
        <div class="container w-50 d-flex justify-content-between ">
            <div class="d-flex form-group">
                <input type="text" class="form-control h-75 w-75 input-group">
                <button class="btn btn-group h-75 btn-primary">Buscar</button>
            </div>
             <div class="d-flex ps-2">
                  <div class="form-group">
                    <select id="my-select" class="form-control" name="">
                      <option selected>juan camilo yonda</option>
                      <option value=""><a href="detail_perfil.html">Ajustes</a></option>
                      <option value="">salir</option>
                    </select>
                  </div>
             </div>
        </div>
    </header>
    <section class="body container-fliud d-flex col-12">
           <section class="col-2 d-flex  border flex-column" style="height: 100vh;">
                 <div class="w-100 d-flex p-5  justify-content-center">
                    <h1 class="font-1 active">S</h1>
                 </div>
                 <nav class="d-flex flex-column nav w-100 p-4 h-50 justify-content-between">
                    <a class=" nav-link d-flex justify-content-center">Ver pacientes</a>
                    <a class="nav-link d-flex justify-content-center">Crear pacientes</a>
                    <a class="nav-link d-flex justify-content-center">histotial medico</a>
                    <a class="nav-link d-flex justify-content-center">Ajustes</a>
                 </nav>
           </section>
           <section class="col-10 d-flex border">
            
            <div class="card ">
                <form class="form-control" action="">
                    <label class="form-control" for="">Nombres</label>
                    <input type="text" class="form-control">
                    <label class="form-control" for="">Apellidos</label>
                    <input type="text" class="form-control">
                    <label class="form-control" for=""></label>
                    <input type="text" class="form-control">
                    <label class="form-control" for="">Telefono</label>
                    <input type="text" class="form-control">
                    <label class="form-control" for="">Direccion</label>
                    <input type="text" class="form-control">
                    <label class="form-control" for="">Nombres</label>
                    <input type="text" class="form-control">


                </form>
            </div>

           </section>
    </section>
    <script src="js/bootstrap.js"></script>
</body>
</html>