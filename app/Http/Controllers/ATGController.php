<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\MessageBag;
use App\ATG_RECORD;
use DB;
use app\http\requests;

use Illuminate\Support\Facades\Validator;

class ATGController extends Controller
{
    //
 public function index(){
 	
 return view('register');
 }
 public function insert(request $req){
 	 $this->Validate( $req,[
 		'name'=>'required|max:21',
 		'email'=>'required|email|unique:atg_records|max:40',
 		'pin_code'=>'required|min:6|max:6',]);

 	


 	$name= $req->input('name');
 	
 	$email= $req->input('email');
 	$pin_code= $req->input('pin_code');
 	
 	 	$data=array('name'=>$name,'email'=>$email,'pin_code'=>$pin_code);
 	DB::table('atg_records')->insert($data);
 	echo 'data inserted successfully';
 }
    
}
?>
