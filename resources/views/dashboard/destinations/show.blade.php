@extends('dashboard.layouts.main')
@section('content')
    <section class="detail-product-page mt-3">
        <h1 class="mb-3 text-center">{{ $destinations->title }}</h1>
        <div class="container detail-product-container">
            <img src="https://source.unsplash.com/837x551?{{ $destinations->category->name }}" class="mb-5 img-detail-product-dashboard" alt=" ">
        </div>
        <div class="container description-detail-product">
            <h3 class="title-description">Description : </h3>
            {!! $destinations->body !!}
            <div class="book-now-product">
                <div class="row price-detail-product">
                    ${{ $destinations->price }}/Person
                </div>
            </div>
        </div>
    </section>
@endsection