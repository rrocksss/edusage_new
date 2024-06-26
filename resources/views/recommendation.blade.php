@extends('navbar')

@section('content')
    <div class="container" style="align-items: center">
        <h1 style="letter-spacing: 2px; margin-top: 4%; color: #486194">
            <a href="/result">
                <img style="width: 25px; margin-right: 15px" src="{{ asset('storage/recommendation_assets/back_button.png') }}"></img>
            </a>
            <b>Rekomendasi Universitas {{$major_name}}</b>
        </h1>
        <div class="row" style="margin-top: 2%;">
            <div class="col d-flex justify-content-end" style="width: 100%">
                <div class="dropdown" style="margin-right: 20px">
                    <button
                    class="btn rounded-3 button-wrapper"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    data-hover="dropdown"
                    aria-expanded="false"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
                    <span>Wilayah</span>
                    </button>
                    <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton1"
                    >
                    <li>
                        <a class="dropdown-item" onclick="filterAll_Wilayah()">Semua</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterJakarta_Wilayah()">DKI Jakarta</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterJawaBarat_Wilayah()">Jawa Barat / Banten</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterYogyakarta_Wilayah()">DI Yogyakarta</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterJawaTengah_Wilayah()">Jawa Tengah</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterJawaTimur_Wilayah()">Jawa Timur</a>
                    </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button
                    class="btn rounded-3 button-wrapper"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    data-hover="dropdown"
                    aria-expanded="false"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <span>Tipe Perguruan</span>
                    </button>
                    <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton1"
                    >
                    <li>
                        <a class="dropdown-item" onclick="filterAll_Tipe()">Semua</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterPTN_Tipe()">PTN</a>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="filterPTS_Tipe()">PTS</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%;">
            <div class="col d-flex justify-content-center" style="width: 100%;">
                <div class="card table-card" style="align-items: center">
                    <div class="table-responsive mt-4 p-4 wrapper rounded-3">
                        <table class="table table-scrollable" style="width: 1200px">
                        <thead class="text-center" style="background-color: #486194; color: white">
                            <tr class="align-middle">
                            <th>Nama Universitas</th>
                            <th>Jurusan</th>
                            <th>Wilayah</th>
                            <th>Tipe Perguruan Tinggi</th>
                            <th>Akreditasi</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover text-center" id="univDetails">
                            @foreach ($accreditations as $accreditation)
                                <tr class="align-middle">
                                    <td>{{$accreditation->university->university_name}}</td>
                                    <td>
                                        {{$major_name}}
                                    </td>
                                    <td>{{$accreditation->university->region->region_name}}</td>
                                    <td>{{$accreditation->university->type}}</td>
                                    <td>{{$accreditation->accreditation}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
