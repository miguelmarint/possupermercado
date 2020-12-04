@extends('master')

@section('content')          

    @include('partials.validation-error')

            <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data"> 
                @include('user._form')
            </form>  
@endsection
