@extends('backend.app')
@section('content')
<section class="partners ml-5 mt-5">
    <h2>Partners</h2>
    <p class="w-75">You can Add new partner name, upload logo and attach URL. You can also change their places, remove and edit Screen size for photos 150x253. </p>
    <div class="d-flex mt-3">
        <button id="btnPartners" class="btn-add-item text-center mr-3" data-toggle="modal" data-target="#partnersModal">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new partner</span>
        </button>
    </div>
    <div class="partners-body d-flex align-items-center mt-5">
        <div class="partner-id mr-3 p-3">
            <p>1</p>
        </div>
        <div class="partner-photo mr-3 p-3"></div>
        <div class="partner-details mr-3 p-3">
            <h3>Partner name</h3>
            <a href="#">www.url.com</a>
        </div>
        <div class="partner-btn mr-3 p-3">
            <button class="btn-icon w-100"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
            <button class="btn-icon w-100"><i class="fas fa-trash" aria-hidden="true"></i></button>
        </div>
    </div>
</section>
@endsection
