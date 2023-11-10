<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
      <table class="min-w-full text-center text-sm font-light">
          <thead
          class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
            <tr>
            <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Nombre</th>
              <th scope="col" class="px-6 py-4">Categoría</th>
              <th scope="col" class="px-6 py-4">Descripcion</th>
              <th scope="col" class="px-6 py-4">Imagen</th>
              <th scope="col" class="px-6 py-4">Precio</th>
              <th scope="col" class="px-6 py-4">Stock</th>
              <th scope="col" class="px-6 py-4">Fecha de Registro</th>
              <th scope="col" class="px-6 py-4">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto['productoID']}}</td>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['categoria']}}</td>
                <td>{{ $producto['descripcion']}}</td>
                <td> <img style="height: 50px" src="{{ asset('storage/fotos/' . $producto['foto']) }}" alt="">
                </td>
                <td>{{ $producto['precio']}}</td>
                <td>{{ $producto['stock']}}</td>
                <td>{{ $producto['fecha_registro']}}</td>
                <td>
                <div class="inline-flex">
                    <a href = "{{route ('productos', $producto ['productoID'])}}" class="bg-transparent hover:bg-fuchsia-500 text-purple-700 font-semibold hover:text-white py-2 px-4 border border-violet-500 hover:border-transparent rounded">
                    Detalles
                    </a>
                    <button class="bg-transparent hover:bg-fuchsia-500 text-purple-700 font-semibold hover:text-white py-2 px-4 border border-violet-500 hover:border-transparent rounded">
                    Editar
                    </button>
                    <button class="bg-transparent hover:bg-fuchsia-500 text-purple-700 font-semibold hover:text-white py-2 px-4 border border-violet-500 hover:border-transparent rounded">
                    Eliminar
                    </button>
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
</html>