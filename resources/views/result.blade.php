@extends('navbar')
@section('content')
    <div id= "result" class="container">
        <h2 style="padding: 3% 0 0 4%; color: #486194; font-weight: 600; letter-spacing: 3px">
            Hasil Tesmu
        </h2>
        <div class="row first-row">
            <div class="col d-flex justify-content-end" style="margin-left: 45px">
                <div class="card top-card" style="width: 670px;">
                    <div class="row g-0 top-card" style="align-items: center">
                        <div class="col-md-4">
                            <img style="width: 260px" src="{{ asset('storage/home_assets/robot.png') }}"></img>
                        </div>
                        <div class="col-md-8" style="padding-left: 20px">
                        <div class="card-body">
                            <h4 class="card-title" style="letter-spacing: 1px; line-height: 40px; margin-bottom: -10px">Jurusan yang paling cocok denganmu adalah</h4>
                            <br/>
                            <h2 class="card-title text-wrap" style="margin-right: 10px">
                                <mark>{{$predictions[0]['major']}}</mark>
                            </h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-start" style="margin-left: 2%">
                <div class="card top-card" style="width: 500px;">
                    <div class="row" style="">
                        <h5 class="card-title" style="margin-top:20px; font-weight: 600;  text-align: center; font-size: 25px; letter-spacing: 2px">
                            Diagram Hasil Tes
                        </h5>
                    </div>
                    <div class="row g-0 top-card" style="justify-content: center;">
                        <div class="col-md-10 d-flex justify-content-center">
                            <div style="margin:-60px 0">
                                <canvas style="width: 400px;" id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 style="padding: 3% 0 0 4%; color: #486194; font-weight: 600; letter-spacing: 3px">
            Top 3 Jurusan Untuk Anda
        </h3>
        <div class="row second-row">
            <div class="col d-flex justify-content-end">
                <div class="card bottom-card" style="width: 380px;">
                    <h5 id="major1" data-value="{{$predictions[0]['major']}}" class="card-title bottom-card-title">
                        {{$predictions[0]['major']}}
                    </h5>
                    <div class="row g-0 bottom-card">
                        <div class="card-body" style="align-items: center">
                            <div class="row" style="width:100%; margin-left: 4%; letter-spacing: 2px; padding-bottom: 3%">
                                <div class="col-md-10">
                                    <b>Kecocokan</b>
                                </div>
                                <div id="major1-percent" data-value="{{$predictions[0]['percent']}}" class="col-md-2" style="font-weight: 600">
                                    {{$predictions[0]['percent']}}%
                                </div>
                            </div>
                            <div class="row" style="width:100%; margin-left: 4%">
                                <div class="progress">
                                    <div class="bar" style="width: {{$predictions[0]['percent']}}%; background-color: #001F5D"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center" style="margin-top: 9%;">
                                    <a id="recommendation-btn1" href="/recommendation/{{$predictions[0]['major']}}" type="button" class="btn-blue btn-lg inverted-button"
                                    style="text-align: center; width: 160px; font-size: 18px; letter-spacing: 1px">
                                        Rekomendasi Universitas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card bottom-card" style="width: 380px;">
                    <h5 id="major2" data-value="{{$predictions[1]['major']}}" class="card-title bottom-card-title">
                        {{$predictions[1]['major']}}
                    </h5>
                    <div class="row g-0 bottom-card">
                        <div class="card-body" style="align-items: center">
                            <div class="row" style="width:100%; margin-left: 4%; letter-spacing: 2px; padding-bottom: 3%">
                                <div class="col-md-10">
                                    <b>Kecocokan</b>
                                </div>
                                <div id="major2-percent" data-value="{{$predictions[1]['percent']}}" class="col-md-2" style="font-weight: 600">
                                    {{$predictions[1]['percent']}}%
                                </div>
                            </div>
                            <div class="row" style="width:100%; margin-left: 4%">
                                <div class="progress">
                                    <div class="bar" style="width: {{$predictions[1]['percent']}}%; background-color: #6282C2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center" style="margin-top: 9%;">
                                    <a id="recommendation-btn2" href="/recommendation/{{$predictions[1]['major']}}" type="button" class="btn-blue btn-lg inverted-button"
                                    style="text-align: center; width: 160px; font-size: 18px; letter-spacing: 1px">
                                        Rekomendasi Universitas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-start">
                <div class="card bottom-card" style="width: 380px;">
                    <h5 id="major3" data-value="{{$predictions[2]['major']}}" class="card-title bottom-card-title">
                        {{$predictions[2]['major']}}
                    </h5>
                    <div class="row g-0 bottom-card">
                        <div class="card-body" style="align-items: center">
                            <div class="row" style="width:100%; margin-left: 4%; letter-spacing: 2px; padding-bottom: 3%">
                                <div class="col-md-10">
                                    <b>Kecocokan</b>
                                </div>
                                <div id="major3-percent" data-value="{{$predictions[2]['percent']}}" class="col-md-2" style="font-weight: 600">
                                    {{$predictions[2]['percent']}}%
                                </div>
                            </div>
                            <div class="row" style="width:100%; margin-left: 4%">
                                <div class="progress">
                                    <div class="bar" style="width: {{$predictions[2]['percent']}}%; background-color: #2D72FE"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center" style="margin-top: 9%;">
                                    <a id="recommendation-btn3" href="/recommendation/{{$predictions[2]['major']}}" type="button" class="btn-blue btn-lg inverted-button"
                                    style="text-align: center; width: 160px; font-size: 18px; letter-spacing: 1px">
                                        Rekomendasi Universitas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <img class="result-text-box" style="width: 700px" src="{{ asset('storage/result_assets/robot_dog_text_box.png') }}"></img>
                <div class="result-text-box-content" style="text-align: center">
                    Jangan lupa klik tombol di bawah untuk <br/>
                    mengunduh hasil tesmu!
                </div>
                <div class="download-button">
                    <a id="download-page-as-image" onclick="captureAndDownload()" type="button" class="btn-blue btn-lg inverted-button"
                    style="text-align: center; width: 200px; font-size: 18px; letter-spacing: 2px">
                        Unduh Hasil Tes
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
