@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="section-events mt-5">

            <h2 class="events-h2 mb-3">Events</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Upcoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Archive</a>
                </li>
            </ul>
            <div class="events-main">
                <div class="event-card d-flex justify-content-between pt-5">

                    <video class="event-video" controls poster="images/group-of-people-working-out-business-plan-in-an-office 1.png">
                        <source src="../Hayastani orhnerg _ Hymn of Armenia _ Гимн Армении _ Հայաստանի օրհներգ.mp4">
                    </video>
                    <div class="event-desc">
                        <header class="d-flex justify-content-between">
                            <h3>Title</h3>
                            <span>
            <i class="fas fa-share-alt text-orange"></i>
            <i class="far fa-heart text-orange"></i>
        </span>
                        </header>
                        <p class="fs-14"><i class="far fa-clock"></i> 29.10.2020</p>
                        <p class="fs-14"><i class="fas fa-map-marker-alt"></i> 7763 Indian Spring Ave.Medina, OH 44256</p>
                        <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna aliq...
                            <a href="#">Read more »</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-outline-danger">See All</button>
            </div>
        </section>
    </div>
@endsection
