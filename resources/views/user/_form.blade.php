@csrf
<div class="form-group">
    <label class="url_clean" for="name">Nombre empleado</label>
    <input class="form-control" type="text" name="name" id="name" value="{{  old('name',$user->name) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="documento">Documento</label>
    <input class="form-control" type="text" name="documento" id="documento" value="{{  old('documento',$user->documento) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="email">E-mail</label>
    <input class="form-control" name="email" id="email" value="{{ old('email',$user->email) }} ">               
</div>    


<div class="form-group">
    <label class="url_clean" for="password">Contraseña</label>
    <input class="form-control" type="text" name="password" id="password" value="{{  old('password',$user->password) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="password">Repetir contraseña</label>
    <input class="form-control" type="text" name="password" id="repeat_password" value="{{  old('password',$user->password) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="salario">Salario</label>
    <input class="form-control" name="salario" id="salario" value="{{  old('salario',$user->salario) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="eps">EPS</label>
    <input class="form-control" name="eps" id="eps" value="{{  old('eps',$user->eps) }}">
</div> 

<div class="form-group">
    <label class="url_clean" for="arl">ARL</label>
    <input class="form-control" name="arl" id="arl" value="{{  old('arl',$user->arl) }}">
</div>

<div class="form-group">
    <label class="url_clean" for="direccion">Dirección</label>
    <input class="form-control" name="direccion" id="direccion" value="{{  old('direccion',$user->direccion) }}">
</div>


<a class="btn btn-outline-dark" href={{ route('home') }}>
    Regresar
</a>

<input type="submit" value="Agregar" class="btn btn-primary" >