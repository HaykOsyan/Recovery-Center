@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <section class="section-events mt-5">

            <div class="events-main">
                <div class="container d-flex">
                    <video class="event-video col-lg-5" controls poster="images/group-of-people-working-out-business-plan-in-an-office 1.png">
                        <source src="../Hayastani orhnerg _ Hymn of Armenia _ Гимн Армении _ Հայաստանի օրհներգ.mp4">
                    </video>
                    <div class="event-images row col-lg-6">
                        <div class="col-lg-4" data-toggle="modal" data-target="#caruselEventsModal"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="col-lg-1">
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
                <div class="event-card d-flex justify-content-between pt-5">

                    <div class="event-desc">
                        <header class="d-flex justify-content-between">
                            <h3>Title</h3>
                        </header>
                        <p class="fs-14"><i class="far fa-clock"></i> 29.10.2020</p>
                        <p class="fs-14"><i class="fas fa-map-marker-alt"></i> 7763 Indian Spring Ave.Medina, OH 44256</p>
                        <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna aliq. sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna aliq.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
