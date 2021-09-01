@extends('layouts.app')
@section('content')
    <div class="container main-product">
        <div class="product-name d-flex justify-content-between mt-5">
            <h2 class="card-title">Product name</h2>
            <span><i class="far fa-heart"></i></span>
        </div>
        <div class="product-images d-flex justify-content-between">
            <div class="prd-img1"></div>
            <div class="prd-img2">
                <div class="prd-img-up"></div>
                <div class="prd-img-down"></div>
            </div>
            <div class="prd-img3 position-relative">
            <button type="button" class="btn btn-light position-absolute">See All</button>
            </div>
        </div>
        <div class="product-description d-flex justify-content-between">
            <div class="prd-desc">
                <h3 class="mt-2">Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.do eiusmod tempor incididunt ut labore et dolore magna et dolore dolore magna aliqua magna aliqua do eiusmod aliqua. </P>
                <ul>
                    <li>Handmade</li>
                    <li>Handmade</li>
                    <li>Handmade</li>
                    <li>Handmade</li>
                </ul>
            </div>
            <div class="prd-price" tabindex="1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Price</h5>
                            <span type="button" class="close">%16</span>
                        </div>
                        <div class="modal-body">
                            <span type="button" class="close"><i class="fas fa-minus-circle"></i></span>
                            <span type="button" class="close">2</span>
                            <span type="button" class="close"><i class="fas fa-plus-circle"></i></span>
                            <p>QTY</p>
                            <span type="button" class="close"><i class="far fa-square"></i></span>
                            <p>Frame (+1$)</p>
                            <span type="button" class="close"><i class="fas fa-chevron-down"></i></span>
                            <span type="button" class="close"><i class="fas fa-chevron-up"></i></span>
                            <details>
                                <summary>Add Your Signature (+1$)</summary>
                                <div class="more-details d-flex flex-wrap justify-content-between w-100">
                                    <textarea class="w-100 h-70" name="add-signature" id="add-signature" placeholder="Type here......"></textarea>
                                    <span>0/25</span>
                                    <span>Save</span>
                                </div>
                            </details>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary w-100">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rating-revews">
            <header class="d-flex">
                <h3>Rating and revews</h3>
                <i class="fas fa-star text-orange"></i>
                <i class="far fa-star text-orange"></i>
            </header>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Revews (13)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Leave a revew</a>
                </li>
            </ul>
            <div class="revews-show">
                <div id="singleReview" class="d-flex">
                    <div class="revews-icon pt-3">
                        <i id="icnUser" class="fas fa-user"></i>
                    </div>
                    <div class="revews-desc pt-3 mt-3 ml-3">
                        <p><span class="revewer-name">Anna</span> <span class="reveiw-data">01.01.2021</span></p>
                        <p>
                            <i class="fas fa-star text-orange"></i>
                            <i class="far fa-star text-orange"></i>
                        </p>
                        <article class="reveiw-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        </article>
                    </div>
                </div>
            </div>
            <a class="link-prd-see-all" href="#">See all</a>
        </div>
        <header>
            <h2 class="text-center">You Might Also Like</h2>
        </header>
      <div class="shop-cards d-flex justify-content-between flex-wrap">
          <div class="card w-30">
            <div class="header d-flex justify-content-around">
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
            <div class="header d-flex justify-content-around">
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
              <a href="#" class="btn btn-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
    </div>
@endsection
