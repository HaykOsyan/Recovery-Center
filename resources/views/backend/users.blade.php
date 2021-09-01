@extends('backend.app')
@section('content')
    <section class="users ml-5">
        <h2>Signed Users</h2>
        <p>You can change cover photos and Videos. Max 10 items. Screen size for photos 150x253 and videos 250px</p>
        <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker d-flex">
            <input placeholder="Filter by date" type="text" id="inp-date-picker" class="form-control">
            {{--            <label for="inp-date-picker">Try me...</label>--}}
            {{--            <i class="fas fa-calendar input-prefix" tabindex=0></i>--}}
            <input placeholder="Search by Order Id" type="text" id="inp-search-order" class="form-control">
        </div>
        <table class="table">
            <thead>
            <tr class="bg-secondary">
                <th scope="col">Date</th>
                <th scope="col">Full name</th>
                <th scope="col">Email</th>
                <th scope="col">No</th>
                <th scope="col"></th>
            </tr>
            <button class="btn btn-secondary">Filter by date</button>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Name</td>
                <td>12.08.2021</td>
                <td>new</td>
                <td>Finished</td>
                <td>3000</td>
                <td>
                    <p><i class="fas fa-trash" aria-hidden="true"></i></p>
                    <p><i class="fas fa-eye"></i></p>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Name</td>
                <td>12.08.2021</td>
                <td>new</td>
                <td>Finished</td>
                <td>3000</td>
                <td>
                    <p><i class="fas fa-trash" aria-hidden="true"></i></p>
                    <p><i class="fas fa-eye"></i></p>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Name</td>
                <td>12.08.2021</td>
                <td>new</td>
                <td>Finished</td>
                <td>3000</td>
                <td>
                    <p><i class="fas fa-trash" aria-hidden="true"></i></p>
                    <p><i class="fas fa-eye"></i></p>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
@endsection
