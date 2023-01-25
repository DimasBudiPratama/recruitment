@extends('dashboard.layouts.dalem')
@section('judul','Keahlian')
@section('sub-judul','Edit Data')
@section('isi')

<div class="page-wrapper">
    <div class="row mt-4">
        <div class="col-lg-10 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data</h6>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <form action="/keahlian/{{ $keahlian->id }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="input-group input-group-static my-4">
                            <label for="keahlian" class="form-label">Keahlian</label>
                            <input type="text" class="form-control @error('name_keahlian') is-invalid @enderror" id="keahlian" name="name_keahlian" autofocus value="{{ old('name_keahlian', $keahlian->name_keahlian) }}">
                            <div class="text-danger">
                                @error('name_keahlian')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn bg-gradient-dark m-0 ms-2">Update</button>
                            <a href="/keahlian" class="btn btn-light m-0">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection