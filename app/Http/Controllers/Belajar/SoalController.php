<?php

namespace App\Http\Controllers\Belajar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Soal;

class SoalController extends Controller
{
    public function index(){
    	$data = Soal::paginate(10);

    	return view('form.soal', ['data'=>$data]);
    }
    public function get(Request $request){
    }
    public function store(Request $request){
    	$store = Soal::create([
    		'type'=>$request->type,
    		'soal'=>$request->soal,
    		'jawaban'=>$request->jawaban,
    		'kode_matkul'=>$request->kode_matkul
    	]);

    	if($store){
    		return redirect()->back();
    	} else {
    		return redirect()->back();
    	}
    }
    public function update(){

    }
    public function delete(Request $request){
    	$deleted = Soal::where('id', $request->id)->delete();
    	return redirect()->back();
    }
}
