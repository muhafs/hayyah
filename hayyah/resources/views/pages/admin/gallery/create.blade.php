@extends('layouts.admin')

@section('title', 'Hayyah Admin | Create Travel Package')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-4">Tambah Galeri</h1>
            </div>

            <div class="row justify-content-center mb-4 mt-3">
                <div class="col-8 card shadow">
                    <div class="card-body">
                        <form action="{{ route('gallery.store') }}" method="post" class="row" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12 mb-3">
                                <label for="travel_package_id" class="form-label">Travel Package</label>
                                <select name="travel_package_id" id="travel_package_id"
                                    class="form-control @error('travel_package_id') is-invalid @enderror">
                                    <option value="" selected disabled>-- Select a Travel --</option>
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->title }}</option>
                                    @endforeach
                                </select>

                                @error('travel_package_id')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image">

                                @error('image')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('gallery.index') }}" class="btn btn-danger">
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
