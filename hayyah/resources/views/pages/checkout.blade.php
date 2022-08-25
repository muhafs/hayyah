@extends('layouts.checkout')

@section('title', 'Checkout')

@push('prepend-style')
    <!-- Gijgo CSS -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
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
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 ps-lg-0">
                        <div class="card card-details">
                            <h1>Who is Going?</h1>
                            <p>Trip to Ubud, Bali, Indonesia</p>

                            <div class="attendee table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>VISA</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/images/avatar-4.png') }}" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Angga Rizky
                                            </td>
                                            <td class="align-middle">
                                                CN
                                            </td>
                                            <td class="align-middle">
                                                N/A
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt=""
                                                        width="20">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/images/avatar-5.png') }}" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Galih Pratama
                                            </td>
                                            <td class="align-middle">
                                                SG
                                            </td>
                                            <td class="align-middle">
                                                30 Days
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt=""
                                                        width="20">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="d-flex flex-md-row align-items-center flex-wrap">
                                    <div class="row">
                                        <div class="col me-3">
                                            <label for="username" class="sr-only ms-2">Name</label>
                                            <input type="text" class="form-control mb-2 me-sm-2" name="username"
                                                id="username" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col me-3">
                                            <label for="visa" class="sr-only ms-2">Visa</label>
                                            <select name="visa" id="visa" class="form-select mb-2 me-sm-2">
                                                <option value="visa" selected>Visa</option>
                                                <option value="30Days">30 Days</option>
                                                <option value="NA">N/A</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col me-3">
                                            <label for="doePassport" class="sr-only ms-2">DOE Passport</label>
                                            <div class="input-group mb-2 me-sm-2">
                                                <input type="text" name="doePassport" id="doePassport"
                                                    class="form-control datepicker" placeholder="DOE Passport">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col me-3 mt-3">
                                            <button type="submit" class="btn btn-add-now px-4">Add Now</button>
                                        </div>
                                    </div>
                                </form>

                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Hayyah.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-end">2 Preson</td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-end">$190,00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-end">$80,00 / Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-end">$280</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique Code)</th>
                                    <td width="50%" class="text-end text-total">
                                        <span class="text-blue">$279,</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>

                            <hr>

                            <h2>Payment Instruction</h2>
                            <p class="payment-instructions">
                                Please complete your payment before to continue the Wonderful Trip
                            </p>

                            <div class="bank">
                                <div class="row align-items-start bank-item">
                                    <div class="col-3 text-center">
                                        <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank image"
                                            class="bank-image">
                                    </div>

                                    <div class="col-9 description">
                                        <h3>PT Hayyah</h3>
                                        <p>
                                            0851 6155 6639
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                </div>

                                <div class="row align-items-start bank-item">
                                    <div class="col-3 text-center">
                                        <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank image"
                                            class="bank-image">
                                    </div>

                                    <div class="col-9 description">
                                        <h3>PT Hayyah</h3>
                                        <p>
                                            0851 6155 6639
                                            <br>
                                            Bank Jago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="join-container">
                            <a href="{{ route('checkout-success') }}" class="btn d-block btn-join-now mt-3 py-2">I Have
                                Made Payment</a>
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="text-muted">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Content Ends -->
@endsection

@push('addon-script')
    <!-- Gijgo JS -->
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            });
        });
    </script>
@endpush
