@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="account-h2 mb-3">Account</h2>
    <div class="account d-flex">
        <div class="card text-center">
            <div class="d-flex justify-content-between">
                <img class="account-card-img img-fluid" src="/images/beautiful-female.png" alt="rectangle">
                <div class="align-self-center">
                    <h3>Welcome</h3>
                    <h3>Ann</h3>
                </div>
            </div>
            <div class="d-flex flex-column">
                <button class="btn-account text-left active-account-btn">Account</button>
                <button class="btn-account text-left">Order In Process</button>
                <button class="btn-account text-left">Liked Items</button>
                <button class="btn-account text-left">Order History</button>
                <button class="btn-account text-left">Cancelation Policy</button>
                <button class="btn-account text-left">Support</button>
            </div>
            <div class="card-footer text-muted">Log Out</div>
        </div>
        <div class="account-information w-75">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Your Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Card information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
            </ul>
            <div class="your-account d-none">
                <h2 class="h2-account-info">Your information</h2>
                <div class="d-flex flex-wrap justify-content-around">
                    <div class="form-group w-40">
                        <label for="name" :value="__('Name')">Full name*</label>
                        <input class="form-control" id="name" type="text" name="name" :value="old('name')" required="" autofocus="">
                    </div>
                    <div class="form-group w-40">
                        <label for="phone" :value="__('Phone')">Phone number</label>
                        <input class="form-control" id="phone" type="tel" name="phone" :value="old('phone')">
                    </div>
                    <div class="form-group w-40">
                        <label for="email" :value="__('Email')">E-mail*</label>
                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required="">
                    </div>
                    <div class="form-group w-40">
                        <label for="address" :value="__('Address')">Address</label>
                        <input class="form-control" id="address" type="text" name="address" :value="old('address')" required="" autofocus="">
                    </div>
                </div>
                <button class="btn-change-pswd">Change Password ></button>
            </div>
            <div class="your-card d-none">
                <h2 class="h2-card-info">Credit Card Information</h2>
                <h4>No Credit Card Added</h4>
                <button class="btn-add-card">Add New Card></button>
            </div>
            <div class="support d-none">
                <h2 class="h2-support">Have a Question?</h2>
                <h2 class="h2-support"> Write to Our Support Team</h2>
                <div class="d-flex flex-column justify-content-around">
                    <div class="form-group w-40">
                        <label for="email" :value="__('Email')">E-mail*</label>
                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required="">
                    </div>
                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                </div>
                <button class="btn-change-pswd">Change Password ></button>
            </div>
            <div class="order-in-process d-none">
                <h2 class="h2-support">Your Order in Process <span class="float-right span-date-of-order">Date Of Order 22.11.2020 12 AM</span></h2>
                <div class="cart-product d-flex justify-content-between">
                    <div class="cart-img"></div>
                    <div class="cart-details">
                        <div class="product-qty d-flex justify-content-between">
                            <div class="left-qty">
                                <h2>Product name</h2>
                            </div>
                            <div class="right-qty">
                                <h2>Price 16$</h2>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="cart-product d-flex justify-content-between">
                    <div class="cart-img"></div>
                    <div class="cart-details">
                        <div class="product-qty d-flex justify-content-between">
                            <div class="left-qty">
                                <h2>Product name</h2>
                            </div>
                            <div class="right-qty">
                                <h2>Price 16$</h2>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <p>2 items</p>
                        <p>Delivery</p>
                        <h2>Total</h2>
                    </div>
                    <div>
                        <p>$32</p>
                        <p>$2</p>
                        <h2>$34</h2>
                    </div>
                </div>
            </div>
            <div class="liked-items mt-3 mb-3">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="card w-40 mt-3 position-relative">
                        <img src="images/bestseller.png" alt="best-seller" class="best-seller position-absolute">
                        <div class="header d-flex justify-content-between mt-4 pd-r-l-20">
                            <h5 class="card-title">Product name</h5>
                            <span class="font-sz-20 pr-60"><i class="far fa-heart text-orange" aria-hidden="true"></i></span>
                        </div>
                        <div class="card-body">
                            <p class="product-data">22.11.2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img class="card-img-top" src="images/img2.png" alt="Card image cap">
                            <p class="product-price mt-1">Price $16</p>
                            <a href="#" class="btn btn-primary w-100">Add to cart</a>
                        </div>
                    </div>
                    <div class="card w-40 mt-3 position-relative">
                        <img src="images/bestseller.png" alt="best-seller" class="best-seller position-absolute">
                        <div class="header d-flex justify-content-between mt-4 pd-r-l-20">
                            <h5 class="card-title">Product name</h5>
                            <span class="font-sz-20 pr-60"><i class="far fa-heart text-orange" aria-hidden="true"></i></span>
                        </div>
                        <div class="card-body">
                            <p class="product-data">22.11.2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img class="card-img-top" src="images/img2.png" alt="Card image cap">
                            <p class="product-price mt-1">Price $16</p>
                            <a href="#" class="btn btn-primary w-100">Add to cart</a>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
