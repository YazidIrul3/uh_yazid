@extends('layout')
@section('konten')
<div class=" flex flex-col p-4">

<div class="flex justify-between items-center">
        <h1 class=" text-2xl font-bold">Table Buku</h1>
    <a href="{{route('buku.create')}}">Tambah</a>
</div>

  <table>
    <caption>Team Project Overview</caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Nama Penerbit</th>
        <th>Tahun Penerbitan</th>
        <th>Penulis</th>
        <th>Cover</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($buku as $no => $buku)
        <tr>
            <td>{{$no + 1}}</td>
            <td>{{$buku ->judul}}</td>
            <td>{{$buku ->penerbit -> nama_penerbit}}</td>
            <td>{{$buku ->tahun}}</td>
            <td>{{$buku ->penulis}}</td>
            <td>{{$buku ->cover}}</td>
            <td>
                <a href="{{route('buku.edit',$buku -> id)}}">Edit</a>
                <form action="{{route('buku.destroy',$buku->id)}}" method="POST" enctype="multipart/form-data">
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