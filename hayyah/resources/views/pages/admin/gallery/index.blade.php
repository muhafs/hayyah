@extends('layouts.admin')

@section('title', 'Hayyah Admin | Gallery')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mt-4">Galeri</h1>

                <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm py-2 px-3">
                    <i class="fas fa-plus"></i> &nbsp;
                    Tambah Galeri
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
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td>{{ $gallery->travel_package->title }}</td>
                                        <td>
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img src="{{ Storage::url($gallery->image) }}"
                                                    alt="{{ $gallery->travel_package->title }}" style="width: 150px"
                                                    class="img-thumbnail">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-pencil"></i>
                                            </a>

                                            <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post"
                                                class="d-inline" onclick="return confirm('Are you sure?')">
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
