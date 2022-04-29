<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProjectController extends Controller
{
    public function addProject(Request $request, Offer $id){
//        if (\Auth::user()->balance < $request->get('balance')){
//                echo Auth::user()->balance;
//        }

    }

//    public function userdashboard(){
//        $user = User::all()->get();
//
//        return view('user.userdashboard', compact('user'));
//    }
}
