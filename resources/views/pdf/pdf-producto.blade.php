<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: 'Monaco';
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            border-radius: 8px;
            background-color: #f1cbd8; 
        }

        .header h1 {
            color: #ffffff; 
            margin: 0;
        }

        .header img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fbd3e9; /* Rosa claro para la tabla */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #fcbad1; /* Rosa más oscuro para el borde de la tabla */
        }

        th {
            background-color: #fcb9d1; /* Rosa más oscuro para el encabezado de la tabla */
            color: #ffffff;
        }

        td {
            background-color: #fadded; /* Rosa medio para las celdas de la tabla */
            color: #3a3a3a;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSjexxzIimuJKa35IezhPm8slYbcQ-82Pwbvlb1pTS6w&s" alt="">
        <h1>Lista de Productos</h1>
    </div>
    <table>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoría</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Fecha de Registro</th>
        </tr>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['categoria']}}</td>
                <td>{{ $producto['descripcion']}}</td>
                <td>{{ $producto['precio']}}</td>
                <td>{{ $producto['stock']}}</td>
                <td>{{ $producto['fecha_registro']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>