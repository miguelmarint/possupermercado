@extends('master')

@section('content')    

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">
                Id
            </th>

            <th scope="col">
                Nombre
            </th>

            <th scope="col">
                Documento
            </th>

            <th scope="col">
                E-amil
            </th>

            <th scope="col">
                EPS
            </th>

            <th scope="col">
                ARL
            </th>
            <th scope="col">
                Dirección
            </th>
            <th scope="col">
                Salario
            </th>
            <th scope="col">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="col">
                    {{ $user->id }}
                </th>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->documento }}
                </td>               
                <td>
                    {{ $user->email }}
                </td>               
                <td>
                    {{ $user->eps }}
                </td>   
                <td>
                    {{ $user->arl }}
                </td> 
                <td>
                    {{ $user->direccion }}
                </td> 
                <td>
                    {{ $user->salario }}
                </td> 
                             
         
                <td>           
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Actualizar</a>
                
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}"
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
                ¿Está seguro que desea eliminar el empleado?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>     

                <form id="formDelete" method="POST" action="{{ route('user.destroy',0) }}"
                    data-action="{{ route('user.destroy',0) }}">

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