@extends('layout')
@section('konten')
<!-- <form action="{{route('penerbit.update', $penerbit -> id)}}" method="POST" >
    @csrf
    @method('PUT')
    <div>
        <label for="">Nama</label>
        <input type="text" value="{{$penerbit->nama_penerbit}}" name="nama_penerbit">
    </div>
    <div>
        <label for="">Alamat</label>
        <input type="text" value="{{$penerbit->alamat}}" name="alamat">
    </div>

    <button>Submit</button>
</form> -->

<div class="bg-white p-8 rounded-xl  shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Penerbit</h2>
    
    <form action="{{route('penerbit.update', $penerbit -> id)}}" method="POST" >
    @csrf
    @method('PUT')
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Nama Penerbit</label>
        <input type="text"  value="{{$penerbit->nama_penerbit}}"  name="nama_penerbit" placeholder="Nama Penerbit"
               class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>

      <div class="mt-3">
        <label class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
        <input type="text"
        value="{{$penerbit-> alamat}}"  name="alamat" placeholder="alamat"
               class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>


      <button
              class="w-full bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition-colors duration-200">
        Edit
      </button>
    </form>
  </div>
@endsection