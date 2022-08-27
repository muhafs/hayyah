@extends('layouts.admin')

@section('title', 'Hayyah Admin | Create Travel Package')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-4">Tambah Paket Travel</h1>
            </div>

            <div class="row justify-content-center mb-4 mt-3">
                <div class="col-8 card shadow">
                    <div class="card-body">
                        <form action="{{ route('travel-package.store') }}" method="post" class="row">
                            @csrf

                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" placeholder="Masukkan Title" value="{{ old('title') }}">

                                @error('title')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    id="location" name="location" placeholder="Masukkan Location"
                                    value="{{ old('location') }}">

                                @error('location')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description" placeholder="Masukkan Description">{{ old('description') }}</textarea>

                                @error('description')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="featured_event" class="form-label">Featured event</label>
                                <input type="text" class="form-control @error('featured_event') is-invalid @enderror"
                                    id="featured_event" name="featured_event" placeholder="Masukkan Featured event"
                                    value="{{ old('featured_event') }}">

                                @error('featured_event')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="language" class="form-label">Language</label>
                                <input type="text" class="form-control @error('language') is-invalid @enderror"
                                    id="language" name="language" placeholder="Masukkan Language"
                                    value="{{ old('language') }}">

                                @error('language')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="foods" class="form-label">Foods</label>
                                <input type="text" class="form-control @error('foods') is-invalid @enderror"
                                    id="foods" name="foods" placeholder="Masukkan Foods" value="{{ old('foods') }}">

                                @error('foods')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="departure_date" class="form-label">Departure date</label>
                                <input type="date" class="form-control @error('departure_date') is-invalid @enderror"
                                    id="departure_date" name="departure_date" placeholder="Masukkan Departure date"
                                    value="{{ old('departure_date') }}">

                                @error('departure_date')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control @error('duration') is-invalid @enderror"
                                    id="duration" name="duration" placeholder="Masukkan Duration"
                                    value="{{ old('duration') }}">

                                @error('duration')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control @error('type') is-invalid @enderror"
                                    id="type" name="type" placeholder="Masukkan Type" value="{{ old('type') }}">

                                @error('type')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" min="1"
                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                    name="price" placeholder="Masukkan Price" value="{{ old('price') }}">

                                @error('price')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('travel-package.index') }}" class="btn btn-danger">
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
