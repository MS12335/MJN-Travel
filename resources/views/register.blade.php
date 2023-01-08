@extends('layouts.register_and_login')
@section('content')
<section class="vh-100 sign-in-and-sign-up">
    <div class="mask d-flex align-items-center h-100    gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <div class="container image-align-sign-up">
                                <img src="{{ asset('img/Logo.png') }}" class="sign-in-and-sign-up-image" alt="">
                            </div>
                            <h2 class="text-uppercase text-center mb-5 fw-medium">Create an account</h2>
                            <form>
                                <div class="form-outline mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="name">
                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email Address</label>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="username">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="password">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="retype password">
                                        <label for="floatingInput">Retype Password</label>
                                    </div>
                                </div>
                                <div class="form-check d-flex justify-content-start mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in 
                                        <a href="#" class="">
                                            Terms of service
                                        </a>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center btn-register">
                                    <button type="button" class="btn text-white">Register</button>
                                </div>
                                <div class="container">
                                    <p class="text-center text-muted mt-2 mb-0">Already have an account? 
                                        <a href="/login" class="">
                                            Login Here
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection