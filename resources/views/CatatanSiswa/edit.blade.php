@extends('template_all.menu')

@section('isi')

<div class="container">
    <div class="card" style="width: 50rem">
        <div class="card-header">
            Edit ahhh
        </div>
        <div class="card-body">
            <form action="{{route('catatan.update',$catatan->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" value="{{$catatan->nama}}">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" name="kelas" id="" value="{{$catatan->kelas}}">
                </div>
                <div class="form-group">
                    <label for="">Catatan</label>
                    <input type="text" name="catatan" id="" value="{{$catatan->alasan}}">
                </div>
                <button type="submit" class="btn btn-warning">Edit satt ahh</button>
            </form>
        </div>

    </div>
</div>
    
@endsection