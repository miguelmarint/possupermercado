@extends('master')

@section('content')          

    @include('partials.validation-error')

            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @method('PUT')
                @include('product._form')
            </form>  
@endsection