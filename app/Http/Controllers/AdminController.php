<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kasir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminlogin(){
        return view('login');
    }
    public function cekadminlogin(Request $request){
        $p = new Kasir();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('dashboard');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    } 

    public function tambahbuku(){
        return view('tambahbuku');
    }
    public function cektambahbuku(Request $request){
        $a = new Buku();
        $cek = $request->validate(([
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'stok'=>'required',
            'harga_pokok'=>'required',
            'harga_jual'=>'required',
            'diskon'=>'required'
        ]));
        $a->create($request->all());
        return redirect('databuku');
    }
    public function databuku(){
        $a = new Buku();
        return view('databuku',['data'=>$a->all()]);
    }
    public function cekdatabuku(Request $request){
        $a = new Buku();
        $cek = $request->validate(([
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'stok'=>'required',
            'harga_pokok'=>'required',
            'harga_jual'=>'required',
            'diskon'=>'required'
        ]));
        $a->create($request->all());
    }
    public function editbuku($id){
        $a = new Buku();
        return view('editbuku',['data'=>$a->find($id)]);
    }
    public function updatebuku(Request $request,$id){
        $validasi = $request->validate([
            // 'judul'=>'required',
            // 'penulis'=>'required',
            // 'penerbit'=>'required',
            // 'tahun_terbit'=>'required',
            // 'stok'=>'required',
            // 'harga_pokok'=>'required',
            // 'harga_jual'=>'required',
            // 'diskon'=>'required'
        ]);

        $buku = new Buku();
        $buku = $buku->find($id);
        $buku->update($request->all());
        return redirect('databuku');
    }
    public function hapusbuku($id){ 
        $buku = new Buku(); 
        $buku = $buku->find($id); 
        $buku->delete(); 
        return back();
    }
}
