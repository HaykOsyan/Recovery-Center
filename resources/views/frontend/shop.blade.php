@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section-shop mt-5">
            <h1>Shop</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">On stock</a>
                </li>
            </ul>
            <div class="main-shop mt-3">
                <select class="shop-sort" name="categories" id="catSelect">
                    <option value="cat1">cat1</option>
                </select>
                <input class="shop-sort" type="number">
                <select class="shop-sort" name="size" id="sizeSelect">
                    <option value="size1">size1</option>
                </select>
                <select class="shop-sort" name="color" id="colorSelect">
                    <option value="color1">color</option>
                </select>
                <select class="shop-sort" name="sort" id="sortBy">
                    <option value="sort">sort</option>
                </select>
                <button type="button" class="btn text-primary float-right"><i class="fas fa-redo-alt"></i> Reset</button>
                <div class="shop-cards d-flex justify-content-between flex-wrap mt-3 mb-5">
                    <div class="card w-30">
                        <div class="header d-flex d-flex justify-content-around">
                            <h5 class="card-title">Product name</h5>
                            <span><i class="far fa-heart text-orange"></i></span>
                            <img src="images/bestseller.png" alt="best-seller" class="best-seller">
                        </div>
                        <div class="card-body">
                            <p class="product-data">22.11.2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img class="card-img-top" src="images/img2.png" alt="Card image cap">
                            <p class="product-price">Price $16</p>
                            <a href="#" class="btn btn-primary w-100">Add to cart</a>
                        </div>
                    </div>
                    <div class="card w-30">
                        <div class="header d-flex d-flex justify-content-around">
                            <h5 class="card-title">Product name</h5>
                            <span><i class="far fa-heart text-orange"></i></span>
                            <img src="images/bestseller.png" alt="best-seller" class="best-seller">
                        </div>
                        <div class="card-body">
                            <p class="product-data">22.11.2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img class="card-img-top" src="images/img2.png" alt="Card image cap">
                            <p class="product-price">Price $16</p>
                            <a href="#" class="btn btn-success w-100">Pre order</a>
                        </div>
                    </div>
                    <div class="card w-30">
                        <div class="header d-flex d-flex justify-content-around">
                            <h5 class="card-title">Product name</h5>
                            <span><i class="far fa-heart text-orange"></i></span>
                            <img src="images/bestseller.png" alt="best-seller" class="best-seller">
                        </div>
                        <div class="card-body">
                            <p class="product-data">22.11.2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <img class="card-img-top" src="images/img2.png" alt="Card image cap">
                            <p class="product-price">Price $16</p>
                            <a href="#" class="btn btn-success w-100">Pre order</a>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
