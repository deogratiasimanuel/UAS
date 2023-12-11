<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice(){
    return "Mohon untuk melakukan verifikasi email terlebih dahulu";
    }
    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return "Berhasil, selamat datang";
    }
}
