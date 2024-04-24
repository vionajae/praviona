<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function tambahadmin(){
        return view('tambahadmin');
    }
    public function cektambahadmin(Request $request){
        $a = new Kasir();
        $cek = $request->validate(([
            'nama'=>'required|max:10',
            'alamat'=>'required|max:100',
            'telepon'=>'required|max:13',
            'username'=>'required|max:10',
            'password'=>'required|max:10',
            'akses'=>['admin','kasir']
        ]));
        $a->create(($request->all()));
        return redirect('dataadmin');
    }
    public function dataadmin(){
        $a = new Kasir();
        return view('dataadmin',['data'=>$a->all()]);
    }
    public function cekdataadmin(Request $request){
        $a = new Kasir();
        $cek = $request->validate(([
            'nama'=>'required|max:10',
            'alamat'=>'required|max:100',
            'telepon'=>'required|max:13',
            'username'=>'required|max:10',
            'password'=>'required|max:10',
            'akses'=>'required|max:10',
        ]));
        $a->create($request->all());
    }
}
