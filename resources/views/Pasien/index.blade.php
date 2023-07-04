@extends('layout')

@section('title')
    Kelurahan
@endsection

@push('css')
@endpush

@section('content')
    <!-- Main content -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
                        <a href="{{ route('pasien.create') }}" class="btn btn-outline-secondary">Input Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark text-nowrap">
                                <tr>
                                    <th style="width: 10%">ID Pasien</th>
                                    <th style="width: 20">Nama</th>
                                    <th style="width: 30%">Alamat</th>
                                    <th style="width: 15%">No Telp</th>
                                    <th style="width: 15%">Tanggal Lahir</th>
                                    <th style="width: 5%">Jenis Kelamin</th>
                                    <th style="width: 5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $key => $data)
                                    @php
                                        $rukun = explode(',', $data->rukun);
                                    @endphp
                                    <tr class="text-center text-nowrap">
                                        <td>{{ $data->id_pasien }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td class="text-wrap">{{ $data->alamat }}, RT {{ $rukun[0] }}, RW
                                            {{ $rukun[1] }},
                                            {{ $data->kelurahan->first()->kelurahan }},
                                            {{ $data->kelurahan->first()->kecamatan }},
                                            {{ $data->kelurahan->first()->kota }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td><a href="{{ route('kartu.pasien', $data->id_pasien) }}" class="btn btn-warning"
                                                target="_blank">Kartu</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
