@extends('backend.app')
@section('content')
<section class="cover-photo ml-5">
    <h2>Home page</h2>
    <p>You can change cover photos and Videos. Max 10 items. Screen size for photos 150x253 and videos 250px</p>
    <div class="d-flex">
        <div class="div-add-item text-center">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new item</span>
        </div>
        <div class="div-added-item text-center position-relative">
            <span id="delete-item" class="position-absolute delete-icon"><i class="fas fa-times fa-3x"></i></span>
            <span >1</span>
        </div>
    </div>
    <h2>Listing bestsellers</h2>
    <div class="d-flex">
        <div class="div-add-item text-center">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new best</span>
        </div>
        <div class="div-add-item text-center">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new best</span>
        </div>
    </div>
</section>
@endsection
