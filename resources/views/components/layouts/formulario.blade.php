{{-- municipio --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar -> </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
          
          <div class="modal-body">
        
            <div class="mb-3">
                <label  class="col-form-label">Codigo</label>
                <input type="text" name="codigo" class="form-control" value="{{old('value')}}">
            </div>


            <div class="mb-3">
                <label  class="col-form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{old('value')}}">
            </div>



            <div class="mb-3">
                <label  class="col-form-label">Localidad</label>
                <input type="text" name="localidad" class="form-control" value="{{old('value')}}">
            </div>

            <div class="mb-3">
                <label  class="col-form-label">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{old('value')}}">
            </div>

            <div class="mb-3">
                <label  class="col-form-label">Acciones</label>
                <input type="text" name="acciones" class="form-control" value="{{old('value')}}">
            </div>
    
        </div>
        <div class="modal-footer">
          <button type="sub" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="guardar">
        </div>
        </form>

      </div>
    </div>
  </div>


