<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function showReferral(){
        $referrals = DB::table('users')->where('referrer_id', '>', 0)->get();

        return view('user.referals',  compact('referrals'));
    }

    public function showAffiliate(){
        $referrals = DB::table('users')->where('referrer_id', '>', 0)->get();

        return view('user.affiliate',  compact('referrals'));
    }
}
