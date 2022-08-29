@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Header Starts -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>

        <p class="mt-3">
            You Will See Beautiful
            <br>
            Moment You Never See Before
        </p>

        <a href="#popular" class="btn btn-get-started px-5 mt-4">
            Get Started
        </a>
    </header>
    <!-- Header Ends -->

    <!-- Statistics Starts -->
    <main>
        <section class="section-stats" id="stats">
            <div class="container">
                <div class="row justify-center">
                    <div class="col-6 col-md-3 stats-detail text-center">
                        <h2>24K</h2>
                        <p>Members</p>
                    </div>

                    <div class="col-6 col-md-3 stats-detail text-center">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>

                    <div class="col-6 col-md-3 stats-detail text-center">
                        <h2>3K</h2>
                        <p>Hotels</p>
                    </div>

                    <div class="col-6 col-md-3 stats-detail text-center">
                        <h2>72</h2>
                        <p>Partners</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Somthing that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($packages as $package)
                        <div class="col-sm-6 col-md-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $package->galleries->count() ? Storage::url($package->galleries->first()->image) : '' }}');">
                                <div class="travel-country">{{ $package->location }}</div>

                                <div class="travel-location">{{ $package->title }}</div>

                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $package->slug) }}" class="btn btn-travel-details px4">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <h2>Our Networks</h2>
                        <p>
                            Companies Are Trusted Us
                            <br>
                            More Than Just a Trip!
                        </p>
                    </div>

                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/partner.png') }}" alt="Partners">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>

                        <p>
                            Moments Were Giving Them
                            <br>
                            The Best Experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonial-content">
            <div class="container">
                <div class="row justify-content-center section-popular-travel">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-1.png') }}" alt="Testimonial Avatar"
                                    class="mb-4 rounded-circle">

                                <h3 class="mb-4">Angga Wijaya</h3>
                                <p class="testimonial">
                                    "It was Glorious and I could not stop to say how I felt after a lifetime of
                                    travelling."
                                </p>
                            </div>

                            <hr>

                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-2.png') }}" alt="Testimonial Avatar"
                                    class="mb-4 rounded-circle">

                                <h3 class="mb-4">Angga Wijaya</h3>
                                <p class="testimonial">
                                    "It was Glorious and I could not stop to say how I felt after a lifetime of
                                    travelling."
                                </p>
                            </div>

                            <hr>

                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-3.png') }}" alt="Testimonial Avatar"
                                    class="mb-4 rounded-circle">

                                <h3 class="mb-4">Angga Wijaya</h3>
                                <p class="testimonial">
                                    "It was Glorious and I could not stop to say how I felt after a lifetime of
                                    travelling."
                                </p>
                            </div>

                            <hr>

                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mx-1 mt-4">I Need Help</a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mx-1 mt-4">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Statistics Ends -->
@endsection
