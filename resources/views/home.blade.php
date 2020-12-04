@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-deck">
            <div class="card border-danger mb-3 text-center" > 
                <div class="card-header text-danger">{{ __('Módulo Empleados') }}</div>
                <img class="card-img-top" src="https://www.icr-evolution.com/wp-content/uploads/2017/10/people.jpg" alt="Card image cap">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="{{ route('user.create') }}"class="btn btn-primary">Crear un Nuevo Empleado</a>

                    <a href="{{ route('user.index') }}" class="btn btn-primary">Listar Empleados</a> 

                    
                    
                </div>                
            </div>

            <div class="card text-center border-success mb-3">                
                <div class="card-header text-success"> <strong>  {{ __('Módulo Productos') }} </strong> </div>
                <img class="card-img-top" src="https://image.freepik.com/vector-gratis/tienda-productos-organicos-supermercado_182089-263.jpg" alt="Card image cap">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Crear un Nuevo Producto</a>

                    <a href="{{ route('product.index') }}" class="btn btn-primary">Listar Productos</a>            


                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
