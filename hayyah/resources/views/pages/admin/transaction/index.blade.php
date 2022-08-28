@extends('layouts.admin')

@section('title', 'Hayyah Admin | Transaction')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mt-4">Transaksi</h1>

                <a href="{{ route('transaction.create') }}" class="btn btn-sm btn-primary shadow-sm py-2 px-3">
                    <i class="fas fa-plus"></i> &nbsp;
                    Tambah Transaksi
                </a>
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            class="table table-sm table-dark table-striped table-hover table-bordered align-middle text-center w-100"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Travel</th>
                                    <th>User</th>
                                    <th>Visa</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->travel_package->title }}</td>
                                        <td>{{ $transaction->user->name }}</td>
                                        <td>{{ $transaction->additional_visa }}</td>
                                        <td>{{ $transaction->transaction_total }}</td>
                                        <td>{{ ucwords(str_replace('_', ' ', strtolower($transaction->transaction_status))) }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('transaction.show', $transaction->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('transaction.edit', $transaction->id) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-pencil"></i>
                                            </a>

                                            <form action="{{ route('transaction.destroy', $transaction->id) }}"
                                                method="post" class="d-inline" onclick="return confirm('Are you sure?')">
                                                @csrf
                                                @method('delete')

                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Data Kososng
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
