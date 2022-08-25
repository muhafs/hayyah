@extends('layouts.app')

@section('title', 'Detail Travel')

@push('prepend-style')
    <!-- XZoom CSS -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.min.css') }}">
@endpush

@section('content')
    <!-- Content Starts -->
    <main>
        <section class="section-details-header"></section>

        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 ps-lg-0">
                        <div class="card card-details">
                            <h1>Nusa Peninda</h1>
                            <p>Republic of Indonesia Raya</p>

                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/details-1@2x.jpg" class="xzoom w-100" id="xzoom-default"
                                        xoriginal="frontend/images/details-1@2x.jpg">
                                </div>

                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/details-1@2x.jpg">
                                        <img src="frontend/images/details-1@2x.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1@2x.jpg">
                                    </a>

                                    <a href="frontend/images/details-1@2x.jpg">
                                        <img src="frontend/images/details-1@2x.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1@2x.jpg">
                                    </a>

                                    <a href="frontend/images/details-1@2x.jpg">
                                        <img src="frontend/images/details-1@2x.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1@2x.jpg">
                                    </a>

                                    <a href="frontend/images/details-1@2x.jpg">
                                        <img src="frontend/images/details-1@2x.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1@2x.jpg">
                                    </a>

                                    <a href="frontend/images/details-1@2x.jpg">
                                        <img src="frontend/images/details-1@2x.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/details-1@2x.jpg">
                                    </a>
                                </div>
                            </div>

                            <h2>Tentang Wisata</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam quam amet quae a facilis
                                porro, soluta dicta iste et illum quisquam libero rerum, eos sint, animi voluptatum voluptas
                                nemo fugiat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, dicta quae maxime quod culpa
                                veniam?</p>

                            <div class="row features">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="frontend/images/ic_event@2x.png" alt="" class="img-features">
                                        <div class="description">
                                            <h3>Featured Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="frontend/images/ic_bahasa@2x.png" alt="" class="img-features">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="frontend/images/ic_foods@2x.png" alt="" class="img-features">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are Going</h2>

                            <div class="members my-2">
                                <img src="frontend/images/avatar-2@2x.png" class="members-img me-1">
                                <img src="frontend/images/avatar-3@2x.png" class="members-img me-1">
                                <img src="frontend/images/avatar-4@2x.png" class="members-img me-1">
                                <img src="frontend/images/avatar-5@2x.png" class="members-img me-1">
                                <img src="frontend/images/avatar-2@2x.png" class="members-img me-1">
                            </div>

                            <hr>

                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-end">22 Aug, 2022</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-end">4 Days, 3 Nights</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-end">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-end">$8,000 / Person</td>
                                </tr>
                            </table>
                        </div>

                        <div class="join-container">
                            <a href="checkout.html" class="btn d-block btn-join-now mt-3 py-2">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Content Ends -->
@endsection

@push('addon-script')
    <!-- XZoom JS -->
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
