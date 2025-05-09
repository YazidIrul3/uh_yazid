@extends('layout')
@section('konten')

<div class=" flex flex-col p-4">

    <div class="flex justify-between items-center">
        <h1 class=" text-2xl font-bold">Table Penerbit</h1>
    <a href="{{route('penerbit.create')}}">Tambah</a>
</div>

  <table class=" w-full">
    <caption>Team Project Overview</caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Penerbit</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($penerbit as $no => $penerbit)
        <tr>
            <td>{{$no + 1}}</td>
            <td>{{$penerbit ->nama_penerbit}}</td>
            <td>{{$penerbit ->alamat}}</td>
            <td>
                <a href="{{route('penerbit.edit',$penerbit -> id)}}">Edit</a>
                <form action="{{route('penerbit.destroy',$penerbit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>

</div>


@endsection