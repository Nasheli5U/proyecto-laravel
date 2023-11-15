<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>

    <div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSjexxzIimuJKa35IezhPm8slYbcQ-82Pwbvlb1pTS6w&s" alt="">
        </div>
    </div>

    <h1>Lista de    personas</h1>
    <table class="min-w-full text-center text-sm font-light">
        <thead
        class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
          <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">ID</th>
            <th scope="col" class="px-6 py-4">Nombre</th>
            <th scope="col" class="px-6 py-4">Apellido Paterno</th>
            <th scope="col" class="px-6 py-4">Apellido Materno</th>
            <th scope="col" class="px-6 py-4">Documento</th>
            <th scope="col" class="px-6 py-4">Celular</th>
          </tr>
        </thead>
        <tbody>
            
        @foreach ($personas as $persona)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $persona ['personaID']}}</td>
            <td>{{ $persona ['nombres']}}</td>
            <td>{{ $persona ['paterno']}}</td>
            <td>{{ $persona ['materno']}}</td>
            <td>{{ $persona ['documento']}}</td>
            <td>{{ $persona ['celular']}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>