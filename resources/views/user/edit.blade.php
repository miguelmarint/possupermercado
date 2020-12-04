@extends('master')

@section('content')          

    @include('partials.validation-error')

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @method('PUT')
                @include('user._form')
            </form>  
@endsection