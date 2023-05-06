@extends('template_all.menu')

@section('isi')

<div class="container">
    <div class="justify-content-center">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$catatan_detail->nama}}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>{{$catatan_detail->kelas}}</td>
            </tr>

            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td>{{$catatan_detail->alasan}}</td>
            </tr>
        </table>
         
        <a href="{{route('catatan.index')}}">BALIK ANJING</a>
    </div>

</div>
    
@endsection