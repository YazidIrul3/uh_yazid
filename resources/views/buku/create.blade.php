@extends('layout')
@section('konten')
<form action="{{route('buku.store')}}" method="POST" >
    @csrf
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul">
    </div>
    <div>
        <label for="">Tahun Penerbit</label>
        <input type="text" name="tahun">
    </div>

    <div>
        <label for="">Penulis</label>
        <input type="text" name="penulis">
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
        <input type="file" name="cover">
    </div>

    <button>Submit</button>
</form>

@endsection