@extends('backend.app')
@section('content')
<section class="cover-photo ml-5 mt-5">
    <h2>Home page</h2>
    <p>You can change cover photos and Videos. Max 10 items. Screen size for photos 150x253 and videos 250px</p>
    <div class="d-flex pt-3">
        <button id="btnUpload" class="btn-add-item text-center mr-3" data-toggle="modal" data-target="#uploadModal">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new item</span>
        </button>
        <div class="div-added-item text-center position-relative">
            <button id="delete-item" class="position-absolute delete-icon"><i class="fas fa-times fa-3x"></i></button>
            <span >1</span>
        </div>
    </div>
    <h2 class="mt-5">Listing bestsellers</h2>
    <div class="d-flex pt-3">
        <button class="btn-add-item text-center mr-3">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new best</span>
        </button>
        <button class="btn-add-item text-center mr-3">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new best</span>
        </button>
    </div>
</section>
@endsection
