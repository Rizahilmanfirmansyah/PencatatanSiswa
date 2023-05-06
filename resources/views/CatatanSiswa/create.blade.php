@extends('template_all.menu')

@section('isi')

<div class="container d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            Add
        </div>
        <div class="card-body">
            <form action="{{route('catatan.store')}}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" name="kelas" class="form-control">
                    {{-- <br>
                    <select name="kelas" id="" class="form-control">
                        <option value="">XII RPL 1</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> --}}
                </div>
                <div class="form-group">
                    <label for="">Alasan</label>
                    <input type="text" name="alasan" class="form-control">
                </div>
        
                <button class="btn btn-success" style="margin-top: 12px;" type="submit">Tambah</button>
            </form>
        </div>
    </div>
   
</div>
    
@endsection
