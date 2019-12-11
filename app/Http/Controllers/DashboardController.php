<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
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

    public function searchuser(Request $input){
        $output='';
        if($input->value == ''){
            $user = Account::where('status','=','0')->get();
            $totaluser = $user->count();
        }else{
            $user = Account::where('nama','=',$input->value)->where('status','=','0')->get();
            $totaluser = $user->count();
        }
        if($totaluser > 0){
            foreach($user as $row){
                $output .= "<tr>
                <td>$row->id_user</td>
                <td>$row->nama</td>
                <td>$row->email</td>
                <td>$row->password</td>
                <td>$row->authority</td>
                <td>
                    <a href='#'>Lihat</a>
                    <a href='#'>Edit</a>
                    <a href='#'>Delete</a>
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
