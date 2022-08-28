@extends('layouts.admin')

@section('title', 'Hayyah Admin | Transaction Detail')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-4">Detail Transaksi {{ $transaction->user->name }}</h1>
            </div>

            <div class="row justify-content-center mb-4 mt-3">
                <div class="col-8 card shadow bg-dark">
                    <div class="card-body bg-dark">
                        <a href="{{ route('transaction.index') }}" class="btn btn-danger mb-3">
                            <i class="fas fa-angle-left"></i> &nbsp;
                            Kembali
                        </a>

                        <div class="table-responsive">
                            <table
                                class="table table-sm table-dark table-striped table-hover table-bordered align-middle text-center w-100"
                                cellspacing="0">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $transaction->id }}</td>
                                </tr>

                                <tr>
                                    <th>Travel Package</th>
                                    <td>{{ $transaction->travel_package->title }}</td>
                                </tr>

                                <tr>
                                    <th>Buyer</th>
                                    <td>{{ $transaction->user->name }}</td>
                                </tr>

                                <tr>
                                    <th>Additional Visa</th>
                                    <td>{{ $transaction->additional_visa }}</td>
                                </tr>

                                <tr>
                                    <th>Transaction Total</th>
                                    <td>{{ $transaction->transaction_total }}</td>
                                </tr>

                                <tr>
                                    <th>Transaction Status</th>
                                    <td>
                                        {{ ucwords(str_replace('_', ' ', strtolower($transaction->transaction_status))) }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>Members</th>
                                    <td>
                                        <table
                                            class="table table-sm table-dark table-striped table-hover table-bordered align-middle text-center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Nationality</th>
                                                    <th>VISA</th>
                                                    <th>DOE Passport</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($transaction->transaction_details as $detail)
                                                    <tr>
                                                        <td>{{ $detail->id }}</td>
                                                        <td>{{ $detail->username }}</td>
                                                        <td>{{ $detail->nationality }}</td>
                                                        <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                                        <td>{{ $detail->doe_passport }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
