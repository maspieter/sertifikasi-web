
@extends('layouts.main')

@section('container')
<div class="card mb-3">
    <div class="card-body text-center">
        <h1 class="mb-3">About Me</h1>
        <h3 class="">Nama: {{ $name }}</h3>
        <h3 class="">Tempat, Tanggal Lahir : {{ $ttl }}</h3>
        <h3 class="">Email : {{ $email }}</h3>
        <h3 class="">Nomor Telepon : {{ $nomor }}</h3>
        <h3 class="">Alamat : {{ $alamat }}</h3>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="250" 
        class="">
    </div>
</div>
    
@endsection
