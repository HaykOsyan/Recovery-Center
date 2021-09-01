
@extends('backend.app')
@section('content')
    <section class="admin-products ml-5 w-75">
        <h2>Add Products</h2>
        <p>You can Add new Team member name, photo and description, you can also change their places, remove and edit.  You can edit general picture of Our team section and Description of the page Screen size for photos 150x253</p>
        <div class="d-flex">
            <button  class="btn-add-item text-center" data-toggle="modal" data-target="#addProductModal">
                <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
                <span>Add new item</span>
            </button>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type here" aria-label="Type here" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
            </div>
        </div>
        <div class="div-filters">
            <select name="category" id="select-category">
                <option>Choose category</option>
            </select>
            <input class="FieldInput_container__1N6yS" type="date">
            <input id="inp-bestseller" type="checkbox">
            <label for="inp-bestseller">Only Bestsellers</label>
        </div>
        <div class="products-body d-flex align-items-center mt-3">
            <div class="product-photo mr-3"></div>
            <div class="product-details mr-3">
                <h3>Product name</h3>
                <p>Category name</p>
                <button>Bestseller</button>
            </div>
            <div class="product-info">
                <h4>Price 10$</h4>
                <p>Product number 01256</p>
                <p>Added date 01.10.2021</p>
            </div>
            <div class="partner-btn mr-3 d-flex">
                <p><i class="fas fa-pencil-alt" aria-hidden="true"></i></p>
                <p><i class="fas fa-eye"></i></p>
                <p><i class="fas fa-trash" aria-hidden="true"></i></p>
            </div>
        </div>
    </section>
@endsection
