<?php
    $page1Data = $request->session()->get('page1_data');
    $page2Data = $request->session()->get('page2_data');
    $page3Data = $request->session()->get('page3_data');
    $page4Data = $request->session()->get('page4_data');
    $page5Data = $request->session()->get('page5_data');
    $page6Data = $request->session()->get('page6_data');
    $page7Data = $request->session()->get('page7_data');
    $page8Data = $request->session()->get('page8_data');
?>
{{-- <div class="loading row">
    <div class="row loading ring-of-dots">
    </div>
</div>
<div class="loading-text" style="text-align: center">
    Mohon tunggu sebentar...
</div> --}}
@extends('navbar')

@section('content')
    <div class="row" style="margin-left: -30px;">
        <img class="background_home" style="width: 100%" src="{{ asset('storage/form_assets/wave_background.png') }}"></img>
        <div class="form_question">
            {{$question}}
        </div>
    </div>

    @if($question_id == 9)
    <div class="container" style="margin-top: 3%">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="card card-rubrik " style="width: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600">Tidak Menguasai (1)</h5>
                  <p class="card-text">Belum mampu untuk memahami pelajaran sama sekali.</p>
                </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card card-rubrik" style="width: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600">Kurang Menguasai (2)</h5>
                  <p class="card-text">Belum mampu untuk memahami sebagian besar bab dari pelajaran.</p>
                </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card card-rubrik" style="width: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600">Cukup Menguasai (3)</h5>
                  <p class="card-text">Mampu memahami beberapa bab dari pelajaran dan menerapkannya di beberapa proyek atau ujian</p>
                </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card card-rubrik" style="width: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600">Menguasai (4)</h5>
                  <p class="card-text">Mampu memahami sebagian besar bab dari pelajaran dan menerapkan sebagian besar pengetahuannya dalam proyek dan ujian.</p>
                </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card card-rubrik" style="width: 90%">
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600">Sangat Menguasai (5)</h5>
                  <p class="card-text">Mampu memahami pelajaran secara menyeluruh dan menerapkan pengetahuannya dalam proyek dan ujian.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    @endif

    @if ($type == 'dropdown')
        <form action="/form/{{$question_id}}" method="POST" id="form">
            @csrf
            <div class="container" style="text-align: center; padding-top: 5%">
                <div class="row">
                    <div class="col-sm">
                        @if($question_id == 1)
                            <a href="/home" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/home_button.png') }}"></img>
                            </a>
                        @elseif($question_id == 7 and !in_array('5', $page5Data))
                            <a href="/form/{{$question_id - 2 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @else
                            <a href="/form/{{$question_id - 1 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @endif
                    </div>
                    <div class="col-sm">
                        @if($question_id == 1)
                            <select name="gender" class="form-select btn-blue btn-lg rounded-pill" aria-label="Default select example" data-placeholder="Pilih...">
                                <option value="0" <?php if ($page1Data === '0') echo 'selected'; ?>>Perempuan</option>
                                <option value="1" <?php if ($page1Data === '1') echo 'selected'; ?>>Laki-laki</option>
                            </select>
                        @elseif ($question_id == 2)
                            <select name="major" class="form-select btn-blue btn-lg rounded-pill" aria-label="Default select example" data-placeholder="Pilih...">
                                <option value="0" <?php if ($page2Data === '0') echo 'selected'; ?>>Belum</option>
                                <option value="1" <?php if ($page2Data === '1') echo 'selected'; ?>>Sudah</option>
                            </select>
                        @elseif ($question_id == 3)
                            <select name="precon" class="form-select form-select-padding-10 btn-blue btn-lg rounded-pill" aria-label="Default select example" data-placeholder="Pilih...">
                                <option value="0" <?php if ($page3Data === '0') echo 'selected'; ?>>Sudah pernah mempelajarinya dan tertarik</option>
                                <option value="1" <?php if ($page3Data === '1') echo 'selected'; ?>>Belum pernah mempelajarinya namun tertarik</option>
                                <option value="2" <?php if ($page3Data === '2') echo 'selected'; ?>>Biasa saja</option>
                                <option value="3" <?php if ($page3Data === '3') echo 'selected'; ?>>Terpaksa (tidak tertarik)</option>
                            </select>
                        @elseif ($question_id == 6)
                            <select name="language" class="form-select form-select-padding-10 btn-blue btn-lg rounded-pill" aria-label="Default select example" data-placeholder="Pilih...">
                                <option value="1" <?php if ($page6Data === '0') echo 'selected'; ?>>Bahasa Arab</option>
                                <option value="2" <?php if ($page6Data === '1') echo 'selected'; ?>>Bahasa Belanda</option>
                                <option value="3" <?php if ($page6Data === '2') echo 'selected'; ?>>Bahasa Daerah</option>
                                <option value="4" <?php if ($page6Data === '3') echo 'selected'; ?>>Bahasa Indonesia</option>
                                <option value="5" <?php if ($page6Data === '4') echo 'selected'; ?>>Bahasa Inggris</option>
                                <option value="6" <?php if ($page6Data === '5') echo 'selected'; ?>>Bahasa Jawa</option>
                                <option value="7" <?php if ($page6Data === '6') echo 'selected'; ?>>Bahasa Jepang</option>
                                <option value="8" <?php if ($page6Data === '7') echo 'selected'; ?>>Bahasa Jerman</option>
                                <option value="9" <?php if ($page6Data === '8') echo 'selected'; ?>>Bahasa Mandarin</option>
                                <option value="10" <?php if ($page6Data === '9') echo 'selected'; ?>>Bahasa Perancis</option>
                                <option value="11" <?php if ($page6Data === '10') echo 'selected'; ?>>Bahasa Rusia</option>
                            </select>
                        @elseif ($question_id == 7)
                            <select name="religion" class="form-select form-select-padding-10 btn-blue btn-lg rounded-pill" aria-label="Default select example" data-placeholder="Pilih...">
                                <option value="1" <?php if ($page7Data === '0') echo 'selected'; ?>>Kristen</option>
                                <option value="2" <?php if ($page7Data === '1') echo 'selected'; ?>>Katolik</option>
                                <option value="3" <?php if ($page7Data === '2') echo 'selected'; ?>>Islam</option>
                                <option value="4" <?php if ($page7Data === '3') echo 'selected'; ?>>Umum</option>
                            </select>
                        @endif
                    </div>
                    <div class="col-sm next">
                        <button type="submit" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/next_button.png') }}"></img>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @elseif ($type == 'multiselect')
        <form action="/form/{{$question_id}}" method="POST" id="form">
            @csrf
            <div class="container" style="text-align: center; padding-top: 5%">
                <div class="row">
                    <div class="col-sm">
                        @if ($question_id == 5 and $page2Data == 0)
                            <a href="/form/{{$question_id - 3 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @elseif($question_id == 8 and !in_array('5', $page5Data) and !in_array('8', $page5Data))
                            <a href="/form/{{$question_id - 3 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @elseif($question_id == 8 and !in_array('8', $page5Data))
                            <a href="/form/{{$question_id - 2 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @else
                            <a href="/form/{{$question_id - 1 }}" type="button" class="btn-blue btn-lg inverted-button">
                                <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                            </a>
                        @endif
                    </div>
                    <div class="col-sm">
                        @if($question_id == 4)
                            @if($page4Data != null)
                                <select name='reason[]' class="form-select" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
                                    <option value="0" <?php if (in_array('0', $page4Data)) echo 'selected'; ?>>Prospek kerja yang bagus (mudah mendapatkan pekerjaan)</option>
                                    <option value="1" <?php if (in_array('1', $page4Data)) echo 'selected'; ?>>Gaji yang relatif tinggi</option>
                                    <option value="2" <?php if (in_array('2', $page4Data)) echo 'selected'; ?>>Mengikuti teman/pacar/orang yang dikenal</option>
                                    <option value="3" <?php if (in_array('3', $page4Data)) echo 'selected'; ?>>Disuruh oleh orang tua/keluarga</option>
                                    <option value="4" <?php if (in_array('4', $page4Data)) echo 'selected'; ?>>Terinspirasi dari media luar (cthnya: film, buku, influencer, dll)</option>
                                    <option value="5" <?php if (in_array('5', $page4Data)) echo 'selected'; ?>>Terinspirasi dari orang sukses/ternama/keluarga</option>
                                    <option value="6" <?php if (in_array('6', $page4Data)) echo 'selected'; ?>>Terkesan mudah untuk dijalankan</option>
                                    <option value="7" <?php if (in_array('7', $page4Data)) echo 'selected'; ?>>Formalitas (Yang penting ada gelar)</option>
                                    <option value="8" <?php if (in_array('8', $page4Data)) echo 'selected'; ?>>Mengikuti trend (FOMO)</option>
                                    <option value="9" <?php if (in_array('9', $page4Data)) echo 'selected'; ?>>Berkaitan dengan hobi</option>
                                    <option value="10" <?php if (in_array('10', $page4Data)) echo 'selected'; ?>>Menyadari bahwa kelebihanmu ada di bidang tersebut</option>
                                </select>
                                @error('reason')
                                <div class="error" style="color: red">
                                    {{ $message }}
                                </div>
                            @enderror
                            @else
                                <select name='reason[]' class="form-select" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
                                    <option value="0"> Prospek kerja yang bagus (mudah mendapatkan pekerjaan)</option>
                                    <option value="1"> Gaji yang relatif tinggi</option>
                                    <option value="2"> Mengikuti teman/pacar/orang yang dikenal</option>
                                    <option value="3"> Disuruh oleh orang tua/keluarga</option>
                                    <option value="4"> Terinspirasi dari media luar (cthnya: film, buku, influencer, dll)</option>
                                    <option value="5"> Terinspirasi dari orang sukses/ternama/keluarga</option>
                                    <option value="6"> Terkesan mudah untuk dijalankan</option>
                                    <option value="7"> Formalitas (Yang penting ada gelar)</option>
                                    <option value="8"> Mengikuti trend (FOMO)</option>
                                    <option value="9"> Berkaitan dengan hobi</option>
                                    <option value="10"> Menyadari bahwa kelebihanmu ada di bidang tersebut</option>
                                </select>
                                @error('reason')
                                    <div class="error" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        @elseif($question_id == 5)
                            @if($page5Data != null)
                                <select name='field[]' class="form-select" id="multiple-select-clear-field-max-2" data-placeholder="Choose anything" multiple>
                                    <option value="0" <?php if (in_array('0', $page5Data)) echo 'selected'; ?>>Teknologi Informasi</option>
                                    <option value="1" <?php if (in_array('1', $page5Data)) echo 'selected'; ?>>Pendidikan</option>
                                    <option value="2" <?php if (in_array('2', $page5Data)) echo 'selected'; ?>>Hukum</option>
                                    <option value="3" <?php if (in_array('3', $page5Data)) echo 'selected'; ?>>Ekonomi</option>
                                    <option value="4" <?php if (in_array('4', $page5Data)) echo 'selected'; ?>>Seni dan Musik</option>
                                    <option value="5" <?php if (in_array('5', $page5Data)) echo 'selected'; ?>>Sastra dan Kebudayaan</option>
                                    <option value="6" <?php if (in_array('6', $page5Data)) echo 'selected'; ?>>Teknik dan Industri</option>
                                    <option value="7" <?php if (in_array('7', $page5Data)) echo 'selected'; ?>>Kesehatan</option>
                                    <option value="8" <?php if (in_array('8', $page5Data)) echo 'selected'; ?>>Agama</option>
                                    <option value="9" <?php if (in_array('9', $page5Data)) echo 'selected'; ?>>Perfilman dan Fotografi</option>
                                    <option value="10" <?php if (in_array('10', $page5Data)) echo 'selected'; ?>>Ilmu Pengetahuan Alam</option>
                                    <option value="11" <?php if (in_array('11', $page5Data)) echo 'selected'; ?>>Ilmu Pengetahuan Sosial</option>
                                    <option value="12" <?php if (in_array('12', $page5Data)) echo 'selected'; ?>>Ekosistem dan Agrikultur</option>
                                    <option value="13" <?php if (in_array('13', $page5Data)) echo 'selected'; ?>>Astronomi dan Dirgantara (Aerospace)</option>
                                    <option value="14" <?php if (in_array('14', $page5Data)) echo 'selected'; ?>>Hospitality</option>
                                    <option value="15" <?php if (in_array('15', $page5Data)) echo 'selected'; ?>>Bisnis</option>
                                    <option value="16" <?php if (in_array('16', $page5Data)) echo 'selected'; ?>>Manajemen</option>
                                </select>
                                @error('field')
                                    <div class="error" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <select name='field[]' class="form-select" id="multiple-select-clear-field-max-2" data-placeholder="Choose anything" multiple>
                                    <option value="0">Teknologi Informasi</option>
                                    <option value="1">Pendidikan</option>
                                    <option value="2">Hukum</option>
                                    <option value="3">Ekonomi</option>
                                    <option value="4">Seni dan Musik</option>
                                    <option value="5">Sastra dan Kebudayaan</option>
                                    <option value="6">Teknik dan Industri</option>
                                    <option value="7">Kesehatan</option>
                                    <option value="8">Agama</option>
                                    <option value="9">Perfilman dan Fotografi</option>
                                    <option value="10">Ilmu Pengetahuan Alam</option>
                                    <option value="11">Ilmu Pengetahuan Sosial</option>
                                    <option value="12">Ekosistem dan Agrikultur</option>
                                    <option value="13">Astronomi dan Dirgantara (Aerospace)</option>
                                    <option value="14">Hospitality</option>
                                    <option value="15">Bisnis</option>
                                    <option value="16">Manajemen</option>
                                </select>
                                @error('field')
                                <div class="error" style="color: red">
                                    {{ $message }}
                                </div>
                                @enderror
                            @endif
                        @else
                            @if($page8Data != null)
                                <select name='fav_subject[]' class="form-select" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
                                    <option value="0" <?php if (in_array('0', $page8Data)) echo 'selected'; ?>>Matematika</option>
                                    <option value="1" <?php if (in_array('1', $page8Data)) echo 'selected'; ?>>Fisika</option>
                                    <option value="2" <?php if (in_array('2', $page8Data)) echo 'selected'; ?>>Kimia</option>
                                    <option value="3" <?php if (in_array('3', $page8Data)) echo 'selected'; ?>>Biologi</option>
                                    <option value="4" <?php if (in_array('4', $page8Data)) echo 'selected'; ?>>Ekonomi</option>
                                    <option value="5" <?php if (in_array('5', $page8Data)) echo 'selected'; ?>>Geografi</option>
                                    <option value="6" <?php if (in_array('6', $page8Data)) echo 'selected'; ?>>Sosiologi</option>
                                    <option value="7" <?php if (in_array('7', $page8Data)) echo 'selected'; ?>>Sejarah</option>
                                    <option value="8" <?php if (in_array('8', $page8Data)) echo 'selected'; ?>>Bahasa</option>
                                    <option value="9" <?php if (in_array('9', $page8Data)) echo 'selected'; ?>>Seni</option>
                                    <option value="10" <?php if (in_array('10', $page8Data)) echo 'selected'; ?>>Komputer</option>
                                    <option value="11" <?php if (in_array('11', $page8Data)) echo 'selected'; ?>>Musik</option>
                                    <option value="12" <?php if (in_array('12', $page8Data)) echo 'selected'; ?>>PPKN</option>
                                    <option value="13" <?php if (in_array('13', $page8Data)) echo 'selected'; ?>>Agama</option>
                                    <option value="14" <?php if (in_array('14', $page8Data)) echo 'selected'; ?>>Penjasorkes</option>
                                </select>
                                @error('fav_subject')
                                    <div class="error" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @else
                                <select name='fav_subject[]' class="form-select" id="multiple-select-clear-field" data-placeholder="Choose anything" multiple>
                                    <option value="0"> Matematika</option>
                                    <option value="1"> Fisika</option>
                                    <option value="2"> Kimia</option>
                                    <option value="3"> Biologi</option>
                                    <option value="4"> Ekonomi</option>
                                    <option value="5"> Geografi</option>
                                    <option value="6"> Sosiologi</option>
                                    <option value="7"> Sejarah</option>
                                    <option value="8"> Bahasa</option>
                                    <option value="9"> Seni</option>
                                    <option value="10"> Komputer</option>
                                    <option value="11"> Musik</option>
                                    <option value="12"> PPKN</option>
                                    <option value="13"> Agama</option>
                                    <option value="14"> Penjasorkes</option>
                                </select>
                                @error('fav_subject')
                                    <div class="error" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        @endif
                    </div>
                    <div class="col-sm next">
                        <button type="submit" class="btn-blue btn-lg inverted-button">
                            <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/next_button.png') }}"></img>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @else
        <form action="/form/{{$question_id}}" method="POST" id="form">
            @csrf
            <div class="container" style="padding-top: 5%; width: 60%">
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Matematika</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="math_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="math_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="math_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="math_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="math_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="mathChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="math_disabled" onchange="verifyMathDisabled()" id="mathChecked">
                    </div>
                        <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Fisika</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="physics_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="physics_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="physics_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="physics_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="physics_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="physicsChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="physics_disabled" onchange="verifyPhysicsDisabled()" id="physicsChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Kimia</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="chemistry_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="chemistry_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="chemistry_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="chemistry_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="chemistry_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="chemistryChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="chemistry_disabled" onchange="verifyChemistryDisabled()" id="chemistryChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Biologi</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="biology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="biology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="biology_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="biology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="biology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="biologyChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="biology_disabled" onchange="verifyBiologyDisabled()" id="biologyChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Ekonomi</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="economy_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="economy_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="economy_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="economy_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="economy_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="economyChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="economy_disabled" onchange="verifyEconomyDisabled()" id="economyChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Geografi</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="geography_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="geography_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="geography_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="geography_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="geography_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="geographyChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="geography_disabled" onchange="verifyGeographyDisabled()" id="geographyChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Sosiologi</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="sosiology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="sosiology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="sosiology_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="sosiology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="sosiology_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="sosiologyChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="sosiology_disabled" onchange="verifySosiologyDisabled()" id="sosiologyChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Sejarah</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="history_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="history_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="history_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="history_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="history_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="historyChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="history_disabled" onchange="verifyHistoryDisabled()" id="historyChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Bahasa</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="language_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="language_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="language_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="language_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="language_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="languageChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="language_disabled" onchange="verifyLanguageDisabled()" id="languageChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Seni</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="art_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="art_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="art_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="art_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="art_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="artChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="art_disabled" onchange="verifyArtDisabled()" id="artChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Komputer</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="computer_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="computer_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="computer_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="computer_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="computer_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="computerChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="computer_disabled" onchange="verifyComputerDisabled()" id="computerChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Musik</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="music_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="music_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="music_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="music_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="music_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="musicChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="music_disabled" onchange="verifyMusicDisabled()" id="musicChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>PPKN</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="pkn_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="pkn_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="pkn_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="pkn_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="pkn_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="pknChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="pkn_disabled" onchange="verifyPknDisabled()" id="pknChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Agama</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="religion_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="religion_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="religion_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="religion_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="religion_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="religionChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="religion_disabled" onchange="verifyReligionDisabled()" id="religionChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div>
                    <div class="row" style="padding-bottom: 3%; text-align: center; ">
                        <h1>Penjasorkes</h1>
                    </div>
                    <div class="row align-middle" style="padding-bottom: 3%; text-align: center; align-items: center">
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Tidak menguasai
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="1" name="PE_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="2" name="PE_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="3" name="PE_score" id="success-outlined" autocomplete="off" aria-label="..." checked>
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="4" name="PE_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm">
                            <input type="radio" class="form-check-input" value="5" name="PE_score" id="success-outlined" autocomplete="off" aria-label="...">
                        </div>
                        <div class="col-sm fs-4" style="color: #6C81A9; font-weight: 600">
                            Sangat menguasai
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight" style="padding-bottom: 3%; align-items: center">
                        <label class="form-check-label fs-4" for="PEChecked" style="color: #606060; font-weight: 600; padding-left: 4%">
                            Tidak ada pelajarannya
                        </label>
                        <input class="form-check-input" type="checkbox" value="PE_disabled" onchange="verifyPEDisabled()" id="PEChecked">
                    </div>
                    <hr style="border-top: 3px solid #6C81A9; margin-bottom:4%">
                </div>
                <div class="row" style="padding-top: 2%; text-align: center">
                    <div class="col-sm">
                        <a href="/form/{{$question_id - 1 }}" type="button" class="btn-blue btn-lg inverted-button">
                            <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/back_button.png') }}"></img>
                        </a>
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm next">
                        <button type="submit" class="btn-blue btn-lg inverted-button" onclick="loading();">
                            <img style="height: 30px; margin: 10px 20px 10px 20px" src="{{ asset('storage/form_assets/next_button.png') }}"></img>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection
