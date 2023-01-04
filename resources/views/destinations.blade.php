@extends('layouts.main')
@section('content')
<section class="explore-destination">
    <h1 class="mb-3 text-center">All Destination</h1>
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts" method="GET">
                        <input type="hidden" name="category" value="">
                        <input type="hidden" name="author" value="">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-search" placeholder="Search.." name="search" value="">
                        <button class="btn btn-form" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/uluwatu.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Uluwatu Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Bali
                                <br>
                                <span class="price">
                                    $59.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Eiffel.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Eiffel Tower</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.8K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                France
                                <br>
                                <span class="price">
                                    $69.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Borobudur.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Borobudur Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Yogyakarta
                                <br>
                                <span class="price">
                                    $99.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/uluwatu.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Uluwatu Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Bali
                                <br>
                                <span class="price">
                                    $59.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Eiffel.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Eiffel Tower</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.8K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                France
                                <br>
                                <span class="price">
                                    $69.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Borobudur.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Borobudur Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Yogyakarta
                                <br>
                                <span class="price">
                                    $99.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/uluwatu.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Uluwatu Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Bali
                                <br>
                                <span class="price">
                                    $59.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Eiffel.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Eiffel Tower</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.8K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                France
                                <br>
                                <span class="price">
                                    $69.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('img/Borobudur.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Borobudur Temple</h5>
                        <p class="card-text">
                            <div class="container card-text-first">
                                <img src="{{ asset('img/stars.png') }}" alt="" class="card-img-stars">
                                4.9K Reviews
                                <br>
                            </div>
                            <div class="container card-text-first">
                                <img src="{{ asset('img/Location.png') }}" alt="" class="card-img-location">
                                Yogyakarta
                                <br>
                                <span class="price">
                                    $99.99/Person
                                </span>
                            </div>
                        </p>
                        <div class="container btn-book-now">
                            <a href="#" class="text-white">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection