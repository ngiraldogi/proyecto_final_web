<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Productos</title>
</head>
<body>
    <button><a href="{{route('productos.create')}}">Crear Producto</a></button> //con el a y href voy de una pag a otra por medio de un boton o etiqueta
<table class="table">
    <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Imagen</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    <tr>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->descripcion}}</td>
      <td>{{$producto->imagen}}</td>
      <td>{{$producto->precio}}</td>
    </tr>
    @endforeach
</table>
<button><a href="{{route('productos.edit', $producto->id)}}"> Editar Producto</a></button> //con el a y href voy de una pag a otra por medio de un boton o etiqueta
<form action="{{route('productos.destroy', $producto->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar Producto</button>
</body>
</html>