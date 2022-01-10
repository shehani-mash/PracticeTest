<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    public function addadmin(Request $req){
        $data = new Admin;

        $data->name = $req->name;
        $data->username = $req->uname;
        $data->email = $req->email;
        $data->password = $req->pass;
        $data->save();
        return redirect('admin');       


    }

    public function getdata(){
        $data = Admin::all();

        return view('fetchdata',['detail' => $data]);
    }

    /*delete data function
    public function delete($id){
        $data = Admin::find($id);
        $data->delete();

        return redirect('fetch');
    }*/
}
