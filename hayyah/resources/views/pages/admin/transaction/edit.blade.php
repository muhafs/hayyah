@extends('layouts.admin')

@section('title', 'Hayyah Admin | Edit Transaction')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-4">Edit Transaksi</h1>
            </div>

            <div class="row justify-content-center mb-4 mt-3">
                <div class="col-8 card shadow">
                    <div class="card-body">
                        <form action="{{ route('transaction.update', $transaction->id) }}" method="post" class="row">
                            @csrf
                            @method('put')

                            <div class="col-12 mb-3">
                                <label for="transaction_status" class="form-label">Transaction Status</label>
                                <select name="transaction_status" id="transaction_status"
                                    class="form-control @error('transaction_status') is-invalid @enderror">
                                    <option value="IN_CART"
                                        {{ $transaction->transaction_status == 'IN_CART' ? 'selected' : '' }}>In Cart
                                    </option>
                                    <option value="PENDING"
                                        {{ $transaction->transaction_status == 'PENDING' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="SUCCESS"
                                        {{ $transaction->transaction_status == 'SUCCESS' ? 'selected' : '' }}>Success
                                    </option>
                                    <option value="CANCELED"
                                        {{ $transaction->transaction_status == 'CANCELED' ? 'selected' : '' }}>Cancelled
                                    </option>
                                    <option value="FAILED"
                                        {{ $transaction->transaction_status == 'FAILED' ? 'selected' : '' }}>Failed</option>
                                </select>

                                @error('transaction_status')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('transaction.index') }}" class="btn btn-danger">
                                    <i class="fas fa-angle-left"></i> &nbsp;
                                    Kembali
                                </a>

                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
