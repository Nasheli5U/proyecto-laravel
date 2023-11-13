<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>


  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
      <table class="min-w-full text-center text-sm font-light">
          <thead
          class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Nombre</th>
              <th scope="col" class="px-6 py-4">Apellido Paterno</th>
              <th scope="col" class="px-6 py-4">Apellido Materno</th>
              <th scope="col" class="px-6 py-4">Documento</th>
              <th scope="col" class="px-6 py-4">Celular</th>
              <th scope="col" class="px-6 py-4">Foto</th>
              <th scope="col" class="px-6 py-4">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona ['personaID']}}</td>
                <td>{{ $persona ['nombres']}}</td>
                <td>{{ $persona ['paterno']}}</td>
                <td>{{ $persona ['materno']}}</td>
                <td>{{ $persona ['documento']}}</td>
                <td>{{ $persona ['celular']}}</td>
                <td> <img style= "height: 50px" alt="" src="{{ asset('storage/fotos/', $persona['foto']) }}" ></td>
                <td>
                <div class="inline-flex">
                    <a href = "{{route ('mostar-personas', $persona ['personaID'])}}" class="text-white bg-gradient-to-r from-cyan-500 to-fuchsia-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Detalles
                    </a>
                    <button class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Editar
                    </button>

                     <form action="{{route('eliminar.personas', $persona ['personaID'])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Eliminar
                    </button>
                    </form>

                    

                </div>
                </td>
            </tr>
        @endforeach
    </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</body>
@include('sweetalert::alert')

</html>