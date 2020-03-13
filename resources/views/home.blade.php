<!-- Menghubungkan dengan view template master -->
<!-- @extends('master') -->

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<!-- @section('judul_halaman', 'Halaman Home') -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<!-- @section('konten')

	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>

@endsection -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
