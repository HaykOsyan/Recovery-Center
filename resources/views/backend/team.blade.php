@extends('backend.app')
@section('content')
<section class="admin-team ml-5 w-75">
    <h2>Team</h2>
    <p>You can Add new Team meber name, photo and description, you can also change their places, remove and edit.  You can edit general picture of Our team section and Description of the page Screen size for photos 150x253. </p>
    <div class="d-flex">
        <div class="div-add-item text-center">
            <p class="mb-0 pt-3 p-add-item"><i class="fas fa-plus fa-2x"></i></p>
            <span>Add new member</span>
        </div>
        <div class="div-added-item text-center position-relative">
            <span id="delete-member" class="position-absolute"><i class="fas fa-times fa-3x"></i></span>
            <span >1</span>
        </div>
    </div>
    <div class="d-flex team-desc">
        <div class="w-75">
            <textarea name="team-description" id="team-description"></textarea>
        </div>
        <div class="w-25">
            <button id="save-team-desc" class="w-100">Save</button>
        </div>
    </div>
    <div class="admin-our-team">
        <h2>Our Team</h2>
        <div class="input-group rounded">
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
            <input type="search" class="form-control rounded" placeholder="Search by name" aria-label="Search" aria-describedby="search-addon" />
        </div>
        <button type="button" class="btn btn-secondary">Add new team member</button>
    </div>
    <div class="partners-body d-flex align-items-center mt-3">
        <div class="partner-photo mr-3"></div>
        <div class="partner-details mr-3">
            <h3>Full name</h3>
            <p>Description heredasjd nas l max 150 words</p>
        </div>
        <div class="partner-btn mr-3">
            <p><i class="fas fa-pencil-alt" aria-hidden="true"></i></p>
            <p><i class="fas fa-trash" aria-hidden="true"></i></p>
        </div>
    </div>
</section>
@endsection
