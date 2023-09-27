

<h1>formulario t4g</h1>

<div class="dad">
    <div class="two">
        <form action="{{route('producto.add')}}" method="POST">
            @csrf   
        {{-- @if ($errors-> all() =! )
            
        @endif --}}

        
        <span>nombre</span>
        <input type="text" name="nombre" placeholder="Digita el nombre del articulo" value="{{old('nombre')}}">
        
        @error('nombre')
        <small style="color: red ">{{$message}}</small>
        @enderror
        
        <span>Precio</span>
        <input type="number" name="precio" placeholder="Digita el precio del articulo" value="{{old('precio')}}">
        @error('precio')
        <small style="color: red ">{{$message}}</small>
        @enderror

        <button type="submit">Enviar informacion</button>
        </form>
    </div>
</div>
