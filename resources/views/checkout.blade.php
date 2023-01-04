@extends('layouts.main')
@section('content')
    <section class="checkout m-5">
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <h2>Checkout Form</h2>
                    <p class="lead">Please fill the form below to complete your purchase</p>
                </div>
                <div class="col-md-7 col-lg-6 m-auto">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="firstName" class="form-label">Full name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="date" class="form-label">Date of booking</label>
                                <input type="date" class="form-control" id="date" placeholder="123..." required>
                                <div class="invalid-feedback">
                                    Please enter when you want to book.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="quantity" class="form-label">How Many Tickets you want to purchase?</label>
                                <input type="number" class="form-control" id="quantity" placeholder="123..." required>
                                <div class="invalid-feedback">
                                    Please enter how many tickets you want to purchase.
                                </div>
                            </div>
                            
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </main>    
        </div>
    </section>
@endsection