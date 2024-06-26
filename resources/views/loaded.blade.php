@extends('navbar')

@section('content')
    <div class="container-fluid" style="text-align: center; align-items: center">
        <img class="text-box" style="width: 60vw" src="{{ asset('storage/loaded_assets/text_box.png') }}"></img>
        <div class="text-box-content" style="text-align: center">
            Hasil tesmu sudah berhasil <br/>
            dikalkulasi. Silakan klik tombol di <br/>
            bawah untuk melihat hasil tesmu.
        </div>
    </div>
    <a href="/result" type="button" class="btn-blue btn-lg rounded-pill inverted-button loaded-button" style="text-align: center;">
        Lihat Hasil Tes
    </a>
@endsection
