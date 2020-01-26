<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbonnementMail;
use App\User;
class AbonnementController extends Controller
{


    public function expired(){
        $user_id =\Auth::id();
        dd($user= User::where('id','=',$user_id));

       App\ Mail::to($user['email'])->send(new AbonnementMail($user['nom']));
        return "Message envoyé";
        }


}
