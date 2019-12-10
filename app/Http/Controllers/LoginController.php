<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Account;

class LoginController extends Controller
{
    //
    public function authLogin(Request $input){
        $cekemail = Account::where('email',$input->Email)->first();
        if ($cekemail == NULL){
            echo 'EMAIL TIDAK BOLEH KOSONG';
        }else{
            if ($cekemail->password == $input->Password){
                Session::put('iduser',$cekemail->id_user);
                Session::put('nama',$cekemail->nama);
                Session::put('hakakses',$cekemail->authority);

                return redirect('home');
            }else{
                echo 'PASSWORD SALAH';
            }
        }
    }

    public function authLogout(){
        Session::flush();

        return redirect('auth');
    }

    public function registerUser(Request $input){
        $inputdata = new Account;
        $inputdata->nama = $input->namad." ".$input->namab;
        $inputdata->email = $input->email;
        $inputdata->password = $input->pass;
        $inputdata->save();
        return redirect('auth');
    }
}
