@csrf
<div class="form-group">
    <label class="url_clean" for="nombre">Nombre Producto</label>
    <input class="form-control" type="text" name="nombre" id="nombre" value="{{  old('nombre',$product->nombre) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="precio">Precio</label>
    <input class="form-control" type="text" name="precio" id="precio" value="{{  old('precio',$product->precio) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="title">Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3">
        {{ old('descripcion',$product->descripcion) }}                
    </textarea>
</div>    


<div class="form-group">
    <label class="url_clean" for="codigo">S/N</label>
    <input class="form-control" type="text" name="codigo" id="codigo" value="{{  old('codigo',$product->codigo) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="image">Imagen</label>
    <input  type="file" name="foto" id="foto" value="{{  old('foto',$product->foto) }}">
</div> 


<a class="btn btn-outline-dark" href={{ route('home') }}>
    Regresar
</a>

<input type="submit" value="Actualizar" class="btn btn-primary" >

