@extends('layouts.main')
@section('content')
    <section class="detail-product-page">
        <h1 class="mb-3 text-center">Uluwatu Temple</h1>
        <div class="container detail-product-container">
            <img src="{{ asset('img/uluwatu.png') }}" class="mb-5 img-detail-product" alt=" ">
        </div>
        <div class="container description-detail-product">
            <h3 class="title-description">Description : </h3>
            Pura Luhur Uluwatu has always been a popular tourist spot for tourists who are on vacation to the island of Bali for the first time. Interesting things that tourists can see at the Uluwatu temple such as :
            <p>
                1. The location of the temple is at the top of a high cliff, with a cliff height of about 70 meters above sea level. 
            </p>
            <p>
                2. The uniqueness of the temple architecture.
            </p>
            <p>
                3. There are many long-tailed monkeys around the temple area such as the monkeys in the Ubud Monkey Forest. 
            </p>
            <p>
                4. From the top of the cliff tourists can see views of the Indian Ocean. 
            </p>
            <p>
                5. Towards sunset, tourists can watch the sunset view of the Indian Ocean from the top of the cliff without obstruction.
            </p>
            <div class="book-now-product">
                <div class="row price-detail-product">
                    $59.99/Person
                </div>
                <div class="btn-book-now-detail-product-page">
                    <a href="#" class="text-white">Buy Ticket</a>
                </div>
            </div>
        </div>
    </section>
@endsection