<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $buku = Buku::get();
        return view('buku.index',compact('buku'));
    }

    public function create() {
        $penerbit = Penerbit::get();

        return view('buku.create',compact('penerbit'));
    }
   
    public function edit( $id) {
        $buku = Buku::find($id);
        $penerbit = Penerbit::get();

        return view('buku.edit',compact('buku','penerbit'));
    }

    public function store(Request $request) {
     $validate = $request -> validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'id_penerbit' => 'required',
            'cover' => 'required',
        ]);

        Buku::create($validate);
        return redirect() -> route('buku.index');
    }

    public function update(Request $request,Buku $buku) {
        $validate = $request -> validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'id_penerbit' => 'required',
            'cover' => 'required',
        ]);

        $buku->update($validate);
        return redirect() -> route('buku.index');
    }

    public function destroy(Buku $buku) {
     $buku -> delete();
        return redirect() -> route('buku.index');
    }
}
