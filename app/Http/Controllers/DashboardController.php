<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Movie;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $user = Account::where('status','=','0')->get();
        return view('pages.dashboards.index',['users'=>$user]);
    }

    public function deleteUser($user){
        Account::where('id_user','=',$user)->update(['status'=>'1']);
        echo 'sukses';
    }

    public function getDataUser(){
        $output='';
        $user = Account::where('status','=','0')->get();
        foreach($user as $row){
            $output .= "<tr>
            <td class='col-1'>$row->id_user</td>
            <td class='col-2'>$row->nama</td>
            <td class='col-2'>$row->email</td>
            <td class='col-2'>$row->password</td>
            <td class='col-2'>$row->authority</td>
            <td class='col-3'>
                <button type='button' class='btn btn-primary'>Lihat</button>
                <button type='button' class='btn btn-primary'>Edit</button>
                <button id='{{$row->id_user}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
            </td>
            </tr>";
        }
        $data = array(
            'table_data'  => $output
        );
        return response()->json(['success'=>$data]);
    }
    
    public function searchuser(Request $input){
        $output='';
        if($input->value == ''){
            $user = Account::where('status','=','0')->get();
            $totaluser = $user->count();
        }else{
            $user = Account::where('nama','like','%'.$input->value.'%')->where('status','=','0')->get();
            $totaluser = $user->count();
        }
        if($totaluser > 0){
            foreach($user as $row){
                $output .= "<tr>
                <td class='col-1'>$row->id_user</td>
                <td class='col-2'>$row->nama</td>
                <td class='col-2'>$row->email</td>
                <td class='col-2'>$row->password</td>
                <td class='col-2'>$row->authority</td>
                <td class='col-3'>
                    <button type='button' class='btn btn-primary'>Lihat</button>
                    <button type='button' class='btn btn-primary'>Edit</button>
                    <button id='{{$row->id_user}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
                </td>
                </tr>";
            }
        }else{
            $output = '
            <tr>
                <td class="text-center" colspan="6">Data tidak Ditemukan</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output
        );
        return response()->json(['success'=>$data]);
    }

    public function searchmovie(Request $input){
        $output='';
        if($input->value == ''){
            $movie = Movie::all();
            $totalmovie = $movie->count();
        }else{
            $movie = Movie::where('judul','like','%'.$input->value.'%')->get();
            $totalmovie = $movie->count();
        }
        if($totalmovie > 0){
            foreach($movie as $row){
                $output .= "<tr>
                <td class='col-1'>$row->id_movie</td>
                <td class='col-3'>$row->judul</td>
                <td class='col-3'>$row->deskripsi</td>
                <td class='col-2'>action</td>
                <td class='col-3'>
                    <button type='button' class='btn btn-primary'>Lihat</button>
                    <button type='button' class='btn btn-primary'>Edit</button>
                    <button id='{{$row->id_movie}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
                </td>
                </tr>";
            }
        }else{
            $output = '
            <tr>
                <td class="text-center" colspan="6">Data tidak Ditemukan</td>
            </tr>
            ';
        }
        $data = array(
            'table_data'  => $output
        );
        return response()->json(['success'=>$data]);
    }

    public function getDataMovie(){
        $output='';
        $user = Movie::all();
        foreach($user as $row){
            $output .= "<tr>
            <td class='col-1'>$row->id_movie</td>
            <td class='col-3'>$row->judul</td>
            <td class='col-3'>$row->deskripsi</td>
            <td class='col-2'>action</td>
            <td class='col-3'>
                <button type='button' class='btn btn-primary'>Lihat</button>
                <button type='button' class='btn btn-primary'>Edit</button>
                <button id='{{$row->id_movie}}' type='submit' class='btn-delete btn btn-primary'>Delete</button>
            </td>
            </tr>";
        }
        $data = array(
            'table_data'  => $output
        );
        return response()->json(['success'=>$data]);
    }

}
