@extends('layout')
@section('konten')
<form action="{{route('buku.update', $buku -> id)}}" method="POST" >
    @csrf
    @method('PUT')
    <div>
        <label for="">Judul</label>
        <input type="text" value="{{$buku->judul}}" name="judul">
    </div>
    <div>
        <label for="">Tahun Penerbit</label>
        <input type="text" value="{{$buku->tahun}}" name="tahun">
    </div>

    <div>
        <label for="">Penulis</label>
        <input type="text" value="{{$buku->penulis}}" name="penulis">
    </div>

    <div>
        <label for="">Penerbit</label>
        <select name="id_penerbit" id="">
            @foreach($penerbit as $no => $penerbit)
                <option value="{{$penerbit -> id}}">
                {{$penerbit -> nama_penerbit}}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="">Cover</label>
        <!-- <input type="file" name="cover"> -->
        <input type="text" value="{{$buku->cover}}" name="cover">
    </div>

    <button>Submit</button>
</form>
@endsection