
@extends('backend.app')
@section('content')
    <section class="admin-products ml-5 w-75">
        <h2>Add Projects</h2>
        <p>You can Add new Team meber name, photo and description, you can also change their places, remove and edit.  You can edit general picture of Our team section and Description of the page Screen size for photos 150x253. </p>
        <div class="d-flex">
            <button  class="btn-add-item text-center" data-toggle="modal" data-target="#addProjectModal">
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
            <input class="FieldInput_container__1N6yS" type="date">
        </div>
        <div class="products-body d-flex align-items-center mt-3">
            <div class="product-photo mr-3"></div>
            <div class="product-details mr-3">
                <h3>Project name</h3>
                <p>Location : sdfafdsagafhgafdh</p>
                <span>Project number 01256</span>
                <span>Added date 01.10.2021</span>
            </div>
            <div class="partner-btn mr-3 d-flex">
                <button class="btn-icon"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                <button class="btn-icon"><i class="fas fa-eye"></i></button>
                <button class="btn-icon"><i class="fas fa-trash" aria-hidden="true"></i></button>
            </div>
        </div>
    </section>
@endsection
