<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class MahmoudController extends Controller
{
   public function mahmoudview(){
        return view('mhamoud');
    }
   public  function indexview(){
        return view('welcome');
    }
    public function index(Request $request){
        $params= $request->validate([
            'name',
            'email',
            'password',   
        ]);
        $user = User::create($params);
    }

    
}
