<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Account;
use App\Movie;

class DashboardController extends Controller
{
    //
    /*=====
        PROFILE SETTING
    =====*/
    public function profileadmin(){
        $id=Session::get('iduser');
        $cekuser=Account::where('id_user',$id)->first();
        return view('pages.dashboards.profileadmin',['users'=>$cekuser]);
    }

    /*=====
        USER SETTING
    =====*/
    public function userset(){
        $user = Account::where('status','=','0')->orderby('id_user','DESC')->get();
        return view('pages.dashboards.user',['users'=>$user]);
    }

    public function insertUser(Request $input){
        $inputdata = new Account;
        $inputdata->nama = $input->nama;
        $inputdata->email = $input->email;
        $inputdata->password = $input->password;
        $inputdata->authority = $input->auth;
        $inputdata->save();
        echo "sukses";
    }

    public function editUser(Request $input){
        Account::where('id_user','=',$input->id)->update(['nama'=>$input->nama, 'email'=>$input->email, 'password'=>$input->password,'authority'=>$input->auth]);
        echo "sukses";
    }

    public function deleteUser($user){
        Account::where('id_user','=',$user)->update(['status'=>'1']);
        echo 'sukses';
    }

    public function getDataUser(){
        $user['users'] = Account::where('status','=','0')->get();
        return view('pages.dashboards.loaddatauser', $user);
    }

    public function loadDataUser($id){
        $data = Account::where('id_user','=',$id)->first();
        echo json_encode($data);
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
                <td class='col-3'>$row->email</td>
                <td class='col-2'>$row->password</td>
                <td class='col-2'>$row->authority</td>
                <td class='col-3'>
                    <button id='$row->id_user' type='button' class='btn-showedit btn btn-primary' data-toggle='modal' data-target='#editModal'>Edit</button>
                    <button id='$row->id_user' type='submit' class='btn-delete btn btn-primary'>Delete</button>
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

    /*=====
        MOVIE SETTING
    =====*/
    public function movieset(){
        $movie = Movie::all();
        return view('pages.dashboards.movie',['movies'=>$movie]);
    }

    public function insertMovie(Request $input){
        $inputdata = new Movie;
        $inputdata->judul = $input->judul;
        $inputdata->deskripsi = $input->deskripsi;
        $inputdata->cover = $input->cover;
        $inputdata->link = $input->link;
        $inputdata->save();
        echo "sukses";
    }

    public function getDataMovie(){
        $movie['movies'] = Movie::all();
        return view('pages.dashboards.loaddatamovie', $movie);
    }

    public function loadDataMovie($id){
        $movie = Movie::where('id_movie','=',$id)->first();
        echo json_encode($movie);
    }

    public function lihatMovie($input){
        $movie = Movie::where('id_movie','=',$input)->get();
        echo "sukses";
    }
    
    public function editMovie(Request $input){
        Movie::where('id_movie','=',$input->id)->update(['judul'=>$input->judul, 'deskripsi'=>$input->deskripsi, 'cover'=>$input->cover]);
        echo "sukses";
    }
    
    public function deleteMovie($movie){
        Movie::where('id_movie','=',$movie)->delete();
        echo 'sukses';
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
                    <button id='$row->id_movie' type='button' class='movie-show btn btn-primary' data-toggle='modal' data-target='#lihatModalMovie'>Lihat</button>
                    <button id='$row->id_movie' type='button' class='movie-showedit btn btn-primary' data-toggle='modal' data-target='#editMovieModal'>Edit</button>
                    <button id='$row->id_movie' type='submit' class='movie-delete btn btn-primary'>Delete</button>
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
}
