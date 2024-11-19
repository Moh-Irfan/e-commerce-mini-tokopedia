@extends('layouts.app')

@section('content')
<h1>Products</h1>
<div>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>${{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }}">Details</a>
        </div>
    @endforeach
</div>
@endsection
