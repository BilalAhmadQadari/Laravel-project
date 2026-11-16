
@extends('layouts.app')

@section('content')

<div class="shop-container">

    <h2 class="shop-title">زموږ محصولات</h2>

    <div class="shop-products">

        @foreach($products as $product)

            <div class="shop-card">

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="shop-card-image"
                >

                <div class="shop-card-body">

                    <h3 class="shop-card-name">
                        {{ $product->name }}
                    </h3>

                    <p class="shop-card-price">
                        {{ $product->price }} افغانۍ
                    </p>

                    <a href="#" class="shop-card-button">
                        جزیات وګورئ
                    </a>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection
