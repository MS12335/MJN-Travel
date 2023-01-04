@extends('layouts.main')
@section('content')
    <section class="Categories">
        <h1 class="mb-3 text-center">All Categories</h1>
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
            <div class="row">
                <div class="col-lg-4">
                    <a href="#">
                        <div class="card">
                            <img src="{{ asset('img/uluwatu.png') }}" class="card-img-categories" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title flex-fill title-card-categories">Bali</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <div class="card">
                            <img src="{{ asset('img/Eiffel.png') }}" class="card-img-categories" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title flex-fill title-card-categories">France</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <div class="card">
                            <img src="{{ asset('img/Borobudur.png') }}" class="card-img-categories" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title flex-fill title-card-categories">Yogyakarta</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection