@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
    @vite("resources/js/app.js")
</head>
<body>
    <div id="example"></div>
    <div id="root"></div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>usuario</th>
                    <th>numero</th>
                    <th>palabra</th>
                    <th>hola</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$producto_por_usuario->nombre_producto}}</td>
                    <td>{{$palabra}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
