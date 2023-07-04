@extends('layout')

@section('title')
    Role Choose
@endsection

@push('css')
@endpush

@section('content')
    <div class="row text-center justify-content-center">
        <div class="col-12 col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/default.png') }}" class="card-img-top" alt="person">
                <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                    <p class="card-text">input & edit data kelurahan</p>
                    <a href="{{ route('kelurahan.index') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/default.png') }}" class="card-img-top" alt="person">
                <div class="card-body">
                    <h5 class="card-title">Operator</h5>
                    <p class="card-text">Registrasi Pasien</p>
                    <a href="{{ route('pasien.index') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
