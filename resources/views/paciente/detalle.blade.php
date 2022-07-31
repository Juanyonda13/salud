<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Salud</title>
</head>
<body>
  @include('sweetalert::alert')
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
                    <a class=" nav-link d-flex justify-content-center" href="{{route('paciente.index')}}">Ver pacientes</a>
                    <a class="nav-link d-flex justify-content-center">Crear pacientes</a>
                    <a class="nav-link d-flex justify-content-center">histotial medico</a>
                    <a class="nav-link d-flex justify-content-center">Ajustes</a>
                 </nav>
           </section>
           <section class="col-10 d-flex border">
            <div class="container-fluid">
                <div class="row col-10 justify-content-center mt-5">
                    <div class="col-12 col-lg-3 offset-lg-1">
                        <div class="card ml-4 ml-sm-5 ml-lg-0" id="card-form">
                            <div class="card-body justify-content-center">
                                <div class="card-content mt-md-4">
                                    <h3 class="card-title mt-1" id="title-card">Detalles del Paciente</h3>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <h5 class="font-weight-bold">Nombre</h5>
                                            <h6>{{ $paciente->nombre_paciente }}</h6>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <h5 class="font-weight-bold">Apellido</h5>
                                            <h6>{{ $paciente->apellido_paciente }}</h6>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <h5 class="font-weight-bold">Numero</h5>
                                            <h6>{{ $paciente->telefono_paciente }}</h6>
                                        </div>
                                        {{-- <div class="form-group col-sm-12">
                                            <h5 class="font-weight-bold">Tipo Documento</h5>
                                            <h6>{{ $paciente->id_tipo_documento}}</h6>
                                        </div> --}}
                                        <div class="form-group col-sm-12">
                                            <h5 class="font-weight-bold">Dirección Paciente</h5>
                                            <h6>{{$paciente->direccion_paciente }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 
           </section>
    </section>
    <script src="js/bootstrap.js"></script>
</body>
</html>