@extends('navbar')

@section('content')
<div class="container-fluid">
    <div class="row" style="margin-left: -30px;">
        <div class="col-lg-6">
            <img class="background_home" style="width: 95%" src="{{ asset('storage/home_assets/wave_background.png') }}"></img>
            <img class="robot_home" style="width: 550px" src="{{ asset('storage/home_assets/robot.png') }}"></img>
        </div>
        <div class="col-lg-6" style="">
            <img style="display: block; width: 600px; margin: 3% auto 0 auto" src="{{ asset('storage/home_assets/text_box.png') }}"></img>
            <div style="display: block; width: 100%; margin-top: 3%">
                <p class="text-center" style="font-weight: 600">
                    Hanya dalam waktu 15 menit, temukan jurusan yang paling <br/>
                    sesuai dengan dirimu beserta rekomendasi universitas <br/>
                    yang unggul pada bidangnya.
                </p>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto" style="margin-top: 7%">
                <a href="/form/{{1}}" type="button" class="btn-blue btn-lg rounded-pill inverted-button" style="text-align: center;">
                    MULAI TES ►
                </a>
              </div>
        </div>
    </div>
</div>
@endsection
