@extends('layouts.register_and_login')
@section('content')
    <section class="vh-100 sign-in-and-sign-up">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <img src="{{ asset('img/Logo.png') }}" class="sign-in-and-sign-up-image" alt="">
                                <p class="text-center h1 fw-medium mb-5 mx-1 m-auto">Sign In</p>
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <form class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                    <label for="floatingInput">Email address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                    <label for="floatingPassword">Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-start btn-sign-in">
                                            <button type="button" class="btn text-white m-auto">Sign In</button>
                                        </div>
                                        <div class="container small-login-and-register my-2" style="font-size: 15px;">
                                            Don't have an acoount? 
                                            <a href="#">Register Here!</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="{{ asset('img/sign-in-img.png') }}" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection