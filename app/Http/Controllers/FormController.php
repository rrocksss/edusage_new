<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request, $id){
        $question = '';
        $type = '';
        switch($id){
            case 1:
                $question = 'Apa jenis kelamin anda?';
                $type = 'dropdown';
                break;
            case 2:
                $question = 'Apakah anda sudah menemukan jurusan yang anda minati?';
                $type = 'dropdown';
                break;
            case 3:
                $question = 'Kondisi apa yang paling sesuai dengan jurusan pilihan Anda?';
                $type = 'dropdown';
                break;
            case 4:
                $question = 'Apa alasan Anda memilih jurusan tersebut? (Max. 3)';
                $type = 'multiselect';
                break;
            case 5:
                $question = 'Apa bidang yang paling menarik bagi Anda? (Max. 2)';
                $type = 'multiselect';
                break;
            case 6:
                $question = 'Bahasa atau kebudayaan apa yang paling menarik untuk dipelajari?';
                $type = 'dropdown';
                break;
            case 7:
                $question = 'Agama apa yang paling menarik untuk dipelajari?';
                $type = 'dropdown';
                break;
            case 8:
                $question = 'Apa mata pelajaran SMA yang paling Anda sukai? (Max. 3)';
                $type = 'multiselect';
                break;
            case 9:
                $question = 'Kemampuan Anda pada mata pelajaran SMA berikut:';
                $type = 'multiradio';
                break;
            default:
                abort(404);
                break;
         }

        return view('layouts.form_layout',[
            'question_id' => $id,
            'title' => 'Form',
            'question' => $question,
            'type' => $type,
            'request' => $request
        ]);
    }

    public function storeForm1Data(Request $request, $question_id)
    {
        if($question_id == 4){
            $request->session()->put('page4_data', $request->reason);
            $validate = $request->validate(
                ['reason' => 'required'],
                ['reason.required' => 'Anda harus memilih minimal satu alasan']
            );
        }
        elseif($question_id == 5){
            $request->session()->put('page5_data', $request->field);
            $validate = $request->validate(
                ['field' => 'required'],
                ['field.required' => 'Anda harus memilih minimal satu bidang']
            );
        }elseif($question_id == 8){
            $request->session()->put('page8_data', $request->fav_subject);
            $validate = $request->validate(
                ['fav_subject' => 'required'],
                ['fav_subject.required' => 'Anda harus memilih minimal satu mata pelajaran']
            );
        }
        // Store data in session for later use
        switch($question_id){
            case 1:
                $request->session()->put('page1_data', $request->gender);
                break;
            case 2:
                $request->session()->put('page2_data', $request->major);
                break;
            case 3:
                $request->session()->put('page3_data', $request->precon);
                break;
            case 4:
                $request->session()->put('page4_data', $request->reason);
                break;
            case 5:
                $request->session()->put('page5_data', $request->field);
                break;
            case 6:
                $request->session()->put('page6_data', $request->language);
                break;
            case 7:
                $request->session()->put('page7_data', $request->religion);
                break;
            case 8:
                $request->session()->put('page8_data', $request->fav_subject);
                break;
            case 9:
                $request->session()->put('page9_data_math', $request->math_score);
                $request->session()->put('page9_data_physics', $request->physics_score);
                $request->session()->put('page9_data_chemistry', $request->chemistry_score);
                $request->session()->put('page9_data_biology', $request->biology_score);
                $request->session()->put('page9_data_economy', $request->economy_score);
                $request->session()->put('page9_data_geography', $request->geography_score);
                $request->session()->put('page9_data_sosiology', $request->sosiology_score);
                $request->session()->put('page9_data_history', $request->history_score);
                $request->session()->put('page9_data_language', $request->language_score);
                $request->session()->put('page9_data_art', $request->art_score);
                $request->session()->put('page9_data_computer', $request->computer_score);
                $request->session()->put('page9_data_music', $request->music_score);
                $request->session()->put('page9_data_pkn', $request->pkn_score);
                $request->session()->put('page9_data_religion', $request->religion_score);
                $request->session()->put('page9_data_PE', $request->PE_score);
                break;
        };
        $next_question_id = $question_id + 1;

        if($question_id == 2){
            if($request->major == 0){
                $next_question_id = 5;
                return redirect('form/'.$next_question_id);
            }
        }

        if($question_id == 5){
            if(in_array('5', $request->field)){
                $next_question_id = 6;
                return redirect('form/'.$next_question_id);
            }else if(in_array('8', $request->field)){
                $next_question_id = 7;
                return redirect('form/'.$next_question_id);
            }else{
                $next_question_id = 8;
                return redirect('form/'.$next_question_id);
            }
        }

        if($question_id == 6){
            $page5Data = $request->session()->get('page5_data');
            if(in_array('8', $page5Data)){
                $next_question_id = 7;
                return redirect('form/'.$next_question_id);
            }else{
                $next_question_id = 8;
                return redirect('form/'.$next_question_id);
            }
        }

        if($question_id == 9){
            $reason = $request->session()->get('page4_data');
            $field = $request->session()->get('page5_data');
            $favsubject = $request->session()->get('page8_data');

            $inputData = new \stdClass();
            $inputData->gender = floatval($request->session()->get('page1_data'));
            if($request->session()->get('page2_data') == null){
                $inputData->precond = floatval(2);
            }else{
                $inputData->precond = floatval($request->session()->get('page2_data'));
            }
            $inputData->math_score = floatval($request->session()->get('page9_data_math'));
            $inputData->physics_score = floatval($request->session()->get('page9_data_physics'));
            $inputData->chem_score = floatval($request->session()->get('page9_data_chemistry'));
            $inputData->bio_score = floatval($request->session()->get('page9_data_biology'));
            $inputData->eco_score = floatval($request->session()->get('page9_data_economy'));
            $inputData->geo_score = floatval($request->session()->get('page9_data_geography'));
            $inputData->soc_score = floatval($request->session()->get('page9_data_sosiology'));
            $inputData->his_score = floatval($request->session()->get('page9_data_history'));
            $inputData->lang_score = floatval($request->session()->get('page9_data_language'));
            $inputData->art_score = floatval($request->session()->get('page9_data_art'));
            $inputData->comp_score = floatval($request->session()->get('page9_data_computer'));
            $inputData->music_score = floatval($request->session()->get('page9_data_music'));
            $inputData->civic_score = floatval($request->session()->get('page9_data_civic'));
            $inputData->religion_score = floatval($request->session()->get('page9_data_religion'));
            $inputData->pe_score = floatval($request->session()->get('page9_data_PE'));
            $inputData->specific_lang = floatval($request->session()->get('page6_data'));
            $inputData->specific_religion = floatval($request->session()->get('page7_data'));
            if($reason == null){
                $inputData->reason_1 = False;
                $inputData->reason_2 = False;
                $inputData->reason_3 = False;
                $inputData->reason_4 = False;
                $inputData->reason_5 = False;
                $inputData->reason_6 = False;
                $inputData->reason_7 = False;
                $inputData->reason_8 = False;
                $inputData->reason_9 = False;
                $inputData->reason_10 = False;
                $inputData->reason_11 = False;
            }else{
                $inputData->reason_1 = in_array('0', $reason) ? True : False;
                $inputData->reason_2 = in_array('1', $reason) ? True : False;
                $inputData->reason_3 = in_array('2', $reason) ? True : False;
                $inputData->reason_4 = in_array('3', $reason) ? True : False;
                $inputData->reason_5 = in_array('4', $reason) ? True : False;
                $inputData->reason_6 = in_array('5', $reason) ? True : False;
                $inputData->reason_7 = in_array('6', $reason) ? True : False;
                $inputData->reason_8 = in_array('7', $reason) ? True : False;
                $inputData->reason_9 = in_array('8', $reason) ? True : False;
                $inputData->reason_10 = in_array('9', $reason) ? True : False;
                $inputData->reason_11 = in_array('10', $reason) ? True : False;
            }
            $inputData->Matematika_favsubject = in_array('0', $favsubject) ? True : False;
            $inputData->Fisika_favsubject = in_array('1', $favsubject) ? True : False;
            $inputData->Kimia_favsubject = in_array('2', $favsubject) ? True : False;
            $inputData->Biologi_favsubject = in_array('3', $favsubject) ? True : False;
            $inputData->Ekonomi_favsubject = in_array('4', $favsubject) ? True : False;
            $inputData->Geografi_favsubject = in_array('5', $favsubject) ? True : False;
            $inputData->Sosiologi_favsubject = in_array('6', $favsubject) ? True : False;
            $inputData->Sejarah_favsubject = in_array('7', $favsubject) ? True : False;
            $inputData->Bahasa_favsubject = in_array('8', $favsubject) ? True : False;
            $inputData->Seni_favsubject = in_array('9', $favsubject) ? True : False;
            $inputData->Komputer_favsubject = in_array('10', $favsubject) ? True : False;
            $inputData->Musik_favsubject = in_array('11', $favsubject) ? True : False;
            $inputData->PPKN_favsubject = in_array('12', $favsubject) ? True : False;
            $inputData->Agama_favsubject = in_array('13', $favsubject) ? True : False;
            $inputData->Penjasorkes_favsubject = in_array('14', $favsubject) ? True : False;
            $inputData->{"Teknologi Informasi_field"} = in_array('0', $field) ? True : False;
            $inputData->Pendidikan_field = in_array('1', $field) ? True : False;
            $inputData->Hukum_field = in_array('2', $field) ? True : False;
            $inputData->Ekonomi_field = in_array('3', $field) ? True : False;
            $inputData->{"Seni dan Musik_field"} = in_array('4', $field) ? True : False;
            $inputData->{"Sastra dan Kebudayaan_field"} = in_array('5', $field) ? True : False;
            $inputData->{"Teknik dan Industri_field"} = in_array('6', $field) ? True : False;
            $inputData->Kesehatan_field = in_array('7', $field) ? True : False;
            $inputData->Agama_field = in_array('8', $field) ? True : False;
            $inputData->{"Perfilman dan Fotografi_field"} = in_array('9', $field) ? True : False;
            $inputData->{"Ilmu Pengetahuan Alam_field"} = in_array('10', $field) ? True : False;
            $inputData->{"Ilmu Pengetahuan Sosial_field"} = in_array('11', $field) ? True : False;
            $inputData->{"Ekosistem dan Agrikultur_field"}= in_array('12', $field) ? True : False;
            $inputData->{'Astronomi dan Dirgantara (Aerospace)_field'} = in_array('13', $field) ? True : False;
            $inputData->Hospitality_field = in_array('14', $field) ? True : False;
            $inputData->Bisnis_field = in_array('15', $field) ? True : False;
            $inputData->Manajemen_field = in_array('16', $field) ? True : False;
            $inputDataJSON = json_encode($inputData);

            // Send HTTP request to your Flask API
            // Flask API default runs locally on port 5000
            $response = Http::post('http://localhost:5000/predict', $inputDataJSON);

            // Check if the request was successful
            if ($response->successful()) {
                $predictions = $response->json();
                $request->session()->put('predictions', $predictions);

                return redirect('/loaded');
            } else {
                // Handle error response from the Flask API
                return response()->json(['error' => 'Failed to get predictions from the Flask API'], 500);
            }
        }

        return redirect('form/'.$next_question_id);
    }
}
