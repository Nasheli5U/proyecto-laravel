<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
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
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $producto['productoID']}}
          </th>
            <td class="px-6 py-4">{{ $producto['nombre'] }}</td>
            <td class="px-6 py-4">{{ $producto['categoria']}}</td>
            <td class="px-6 py-4">{{ $producto['descripcion']}}</td>
            <td class="px-6 py-4"> <img style="height: 50px" src="{{ asset('storage/fotos/' . $producto['foto']) }}" alt="">
            </td>
            <td class="px-6 py-4">{{ $producto['precio']}}</td>
            <td class="px-6 py-4">{{ $producto['stock']}}</td>
            <td class="px-6 py-4">{{ $producto['fecha_registro']}}</td>
            <td class="px-6 py-4">
              <div class="inline-flex">
                <a href = "{{route ('mostar-productos', $producto ['productoID'])}}" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Detalles
                </a>
                <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                  Editar
                </button>

                <form action="{{route('eliminar.productos', $producto ['productoID'])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
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

@include('sweetalert::alert')

</body>
</html>