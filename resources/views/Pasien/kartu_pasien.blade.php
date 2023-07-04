<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kartu Pasien - {{ $data->id_pasien }}</title>
</head>

<body>
    @php
        $rukun = explode(',', $data->rukun);
    @endphp
    <center>
        <h1>Kartu Pasien</h1>
        <h3>{{ $data->nama }} - {{ $data->id_pasien }}</h3>
        <p>{{ $data->no_telp }} | {{ $data->tgl_lahir }} | {{ $data->jenis_kelamin }}</p>
        <small>{{ $data->alamat }}, RT {{ $rukun[0] }}, RW {{ $rukun[1] }},
            {{ $data->kelurahan->first()->kelurahan }},
            {{ $data->kelurahan->first()->kecamatan }},
            {{ $data->kelurahan->first()->kota }}</small>
    </center>
</body>

</html>
