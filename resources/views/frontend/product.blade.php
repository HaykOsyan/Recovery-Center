@extends('frontend.layouts.app')

<div class="container main-product">
    <div class="product-name d-flex justify-content-between">
        <h2 class="card-title">Product name</h5>
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
    <div class="product-description d-flex">
        <div class="prd-desc">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.do eiusmod tempor incididunt ut labore et dolore magna et dolore dolore magna aliqua magna aliqua do eiusmod aliqua. </P>
            <ul>
                <li>Handmade</li>
                <li>Handmade</li>
                <li>Handmade</li>
                <li>Handmade</li>
            </ul>
        </div>
        <div class="prd-price"></div>
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
        <div class="revews-show d-flex">
            <div class="revews-icon">
            <i id="icnUser" class="fas fa-user"></i>
            </div>
            <div class="revews-desc">
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
        <a href="#">See all</a>
    </div>
    <header>
        <h2 class="text-center">You Might Also Like</h2>
    </header>
    <!-- <div class="prd-cards">

    </div> -->
    <div class="shop-cards d-flex justify-content-between flex-wrap">
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