@extends('master')

@section('content')          

    @include('partials.validation-error')

            <form action="{{ route("product.store") }}" method="POST" enctype="multipart/form-data"> 
                @include('.product._form')
            </form>  
@endsection
