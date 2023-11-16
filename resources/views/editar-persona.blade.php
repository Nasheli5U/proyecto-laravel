<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
	<link rel="stylesheet" type="text/css" href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}">

</head>
<body>
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form action = "{{route('actualizar.persona', $persona->personaID)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombres</label>
                      <input type="text" value="{{$persona->nombres}}" class="form-control" name="nombres" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido paterno</label>
                        <input type="text" value="{{$persona->paterno}}" class="form-control" name="paterno" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                        <input type="text" value="{{$persona->materno}}" class="form-control" name="materno" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bibliografia</label>
                        <textarea class="form-control" value="{{$persona->bibliografia}}" name="bibliografia" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <input type="text" hidden value="{{$persona->foto}}" class="form-control" name="fotoeditar" id="exampleInputEmail1" aria-describedby="emailHelp">

                      <div class="mb-3">
                        <div class="row">
                            <div class="col-md-9">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input type="file" class="form-control"  value="{{$persona->foto}}" name="foto" id="input" aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <img style= "height: 50px" alt="" 
                                    src="{{ asset('storage/'.$persona->foto)}}" >                                
                                </div>
                            </div>
                        </div>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Numero de documento</label>
                        <input type="number" class="form-control" value="{{$persona->documento}}" name="documento" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Numero de Celular</label>
                        <input type="text" class="form-control" value="{{$persona->celular}}" name="celular" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      
                      <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Guardar
                      </button>	
                                    
                    </form>
            </div>

        </div>
    </div>

  
</body>
</html>
