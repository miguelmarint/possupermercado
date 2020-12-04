@extends('master')

@section('content')    

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">
                Id
            </th>

            <th scope="col">
                Foto
            </th>

            <th scope="col">
                Nombre
            </th>

            <th scope="col">
                Descripción
            </th>

            <th scope="col">
                Precio
            </th>

            <th scope="col">
                S/N
            </th>
            <th scope="col">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="col">
                    {{ $product->id }}
                </th>
                <td>
                    <img class='img-thumbnail img-fluid' src="{{ asset('storage').'/'.$product->foto }}" alt="" width="100">
                    
                </td>
                <td>
                    {{ $product->nombre }}
                </td>
                <td>
                    {{ $product->descripcion }}
                </td>               
                <td>
                    {{ $product->precio }}
                </td>               
                <td>
                    {{ $product->codigo }}
                </td>                
         
                <td>           
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">Actualizar</a>
                
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $product->id }}"
                        class="btn btn-danger"> Eliminar
                    </button>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                ¿Está seguro que desea eliminar el el producto?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>     

                <form id="formDelete" method="POST" action="{{ route('product.destroy',0) }}"
                    data-action="{{ route('product.destroy',0) }}">

                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-dange">Borrar</button>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#formDelete').attr('data-action').slice(0)
            action += id
            $('#formDelete').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar el Juego número: ' + id)
        })
    }
</script>


@endsection
