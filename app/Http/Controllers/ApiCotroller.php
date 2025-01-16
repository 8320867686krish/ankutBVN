<?php

namespace App\Http\Controllers;

use App\Models\Mandal;
use App\Models\User;
use App\Models\Xetra;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiCotroller extends Controller
{
    //
    public function xetrasList(){
        $xetras  = Xetra::select('id','name')->get();
        return response()->json(['status'=>true,'message' => 'successfully fetch','xetras'=>$xetras],200);

    }
    public function mandals($xetra_id = null){
       
        if ($xetra_id) {
            // Logic when xetra_id is present
            $mandals  = Mandal::select('id','mandal_name','xetra_id')->where('xetra_id',$xetra_id)->get()->toArray();
            if(@$mandals){
                return response()->json(['status'=>true,'message' => 'successfully fetch','mandals'=>$mandals],200);

            }else{
                return response()->json(['status'=>true,'message' => 'Not Found','mandals'=>$mandals],200);

            }
        } else {
            // Handle case where xetra_id is not provided
            return response()->json(['status'=>false,'error' => 'xetra_id is required'], 400);
        }
       

    }
    public function login(Request $request){
        $post = $request->input();
        if(!@$post['email']){
            return response()->json(['status'=>false,'error' => 'Please Enter Email'], 400);

        }
        if(!@$post['password']){
            return response()->json(['status'=>false,'error' => 'Please Enter Password'], 400);

        }
        if (Auth::attempt(['email' => $post['email'], 'password' => $post['password']])) {
            $user = Auth()->user();
            return response()->json(['status'=>true,'message' => 'successfully fetch','user'=>$user],200);

        }else{
            return response()->json(['status'=>false,'error' => 'Invalid Credential'], 400);

        }
       
    }
    public function settingSave(Request $post){
        print_r($post);
    }
}
