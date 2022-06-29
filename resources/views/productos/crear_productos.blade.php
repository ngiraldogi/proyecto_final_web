@include('layouts.navbar')

<div class="container text-center">
        <form action="{{route('producto.store')}}" method="POST">
            @csrf <!-- token (obligatorio)-->
            <div class="mb-3">
                <label for="idProdu" class="form-label">Id producto</label>
                <input type="text" name="idProdu" id="idProdu" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre producto</label>
                <input type="text" name="nom" id="nom" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="des" class="form-label">Descripción producto</label>
                <input type="text" name="des" id="des" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="cant" class="form-label">Cantidad del producto</label>
                <input type="text" name="cant" id="cant" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="pre" class="form-label">Precio producto</label>
                <input type="text" name="pre" id="pre" class="form-control" require>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen producto</label>
                <input type="text" name="img" id="img" class="form-control" require>
            </div>
            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>
    </div>
@include('layouts.footer')