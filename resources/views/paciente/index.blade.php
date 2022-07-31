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
            <div class="container card col-11 m-3 ">
                <div class="card-body">
                  <div class="col-2">
                    <a href="{{route('paciente.create')}}"><button class="btn btn-primary">Nuevo Paciente</button> </a>
                  </div>
                    <table class="table mt-5">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Paciente</th>
                            <th scope="col">Apellido Paciente</th>
                            <th scope="col">Telefono Paciente</th>
                            <th scope="col">Direccion Paciente</th>
                            <th scope="col">Tipo_documento Paciente</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes as $paciente)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$paciente->  nombre_paciente }}</td>
                                <td>{{$paciente -> apellido_paciente}}</td>
                                <td>{{$paciente -> telefono_paciente}}</td>
                                <td>{{$paciente -> direccion_paciente}}</td>
                                @foreach($tipodoc as $tipodocs)
                                    @if ($paciente->id_tipo_documento == $tipodocs->id)
                                    <td>{{$tipodocs -> tipo_documento}}</td>
                                    @endif
                                @endforeach
                                <td>
                                  <form action="{{ route('paciente.destroy',$paciente->id) }}" method="POST">
                                      <a class="btn btn-sm btn-primary " href="{{ route('paciente.show',$paciente->id)}}"><i class="bi bi-exclamation-circle"></i></a>
                                      <a class="btn btn-sm btn-success" href="{{ route('paciente.edit',$paciente->id)}}"><i class="bi bi-pencil-square"></i></a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                  </form>
                              </td>
                                
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>

            </div>
                 
           </section>
    </section>
    <script src="js/bootstrap.js"></script>
</body>
</html>