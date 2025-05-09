<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PenerbitController extends Controller
{
    public function index() {
        $penerbit = Penerbit::get();
        return view('penerbit.index',compact('penerbit'));
    }

    public function create() {
        return view('penerbit.create');
    }
   
    public function edit( $id) {
        $penerbit = Penerbit::find($id);

        return view('penerbit.edit',compact('penerbit'));
    }

    public function store(Request $request) {
     $validate = $request -> validate([
            'nama_penerbit' => 'required',
            'alamat' => 'required',
        ]);

        Penerbit::create($validate);
        return redirect() -> route('penerbit.index');
    }

    public function update(Request $request,Penerbit $penerbit) {
     $validate = $request -> validate([
            'nama_penerbit' => 'required',
            'alamat' => 'required',
        ]);

        $penerbit->update($validate);
        return redirect() -> route('penerbit.index');
    }

    public function destroy(Penerbit $penerbit) {
     $penerbit -> delete();
        return redirect() -> route('penerbit.index');
    }
}
