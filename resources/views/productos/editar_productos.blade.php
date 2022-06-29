@include('layouts.navbar')
<div class="container text-center">
        <form action="{{route('productos.update',$producto->id)}}" method="POST">   //va al metodo update de la ruta productos
            @method('PUT') 
            @csrf <!-- token (obligatorio)-->
            <div class="mb-3">
                <label for="idProdu" class="form-label">Id producto</label>
                <input value="{{$productos->id}}" type="text" name="idProdu" id="idProdu" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre producto</label>
                <input value="{{$productos->nombre}}" type="text" name="nom" id="nom" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="des" class="form-label">Descripción producto</label>
                <input value="{{$productos->descripcion}}" type="text" name="des" id="des" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="cant" class="form-label">Cantidad del producto</label>
                <input value="{{$productos->stock}}" type="text" name="cant" id="cant" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="pre" class="form-label">Precio producto</label>
                <input value="{{$productos->precio}}"  type="number" name="pre" id="pre" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen producto</label>
                <input value="{{$productos->imagen}}" type="text" name="img" id="img" class="form-control" require> //el value es para que se muestre el valor actual del producto
            </div>
            <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>
    </div>
    @include('layouts.footer')