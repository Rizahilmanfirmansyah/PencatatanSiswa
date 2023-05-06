@extends('template_all.menu')

@section('isi')

<style>
    th{
        text-align: center;
    }
</style>

{{-- <div class="container">
    <div class="d-flex justify-content-end">
        <form action="{{ route('aksilogout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form> &nbsp;
        <a href="{{route('catatan.create')}}" class="btn btn-success">Tambah Catatan</a>
    </div>
    <br><br>
    <div class="card">
        @if(Session::has('notif'))
            <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
        @endif
        <div class="card-header">
            Catatan Siswa
        </div>
        <div class="card-body">
            <table class="table text-center" id="ah">
                <thead>
                    <tr class="">
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Catatan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catatans as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->alasan}}</td>
                        <td>
                            <form action="{{route('catatan.destroy',$item->id)}}" method="POST">
                                @csrf
                                <a href="{{route('catatan.edit',$item->id)}}" class="btn btn-success">Edit</a>

                                <a href="{{route('catatan.show',$item->id)}}" class="btn btn-success">Detail</a>


                                @method('DELETE')

                                <button class="btn btn-danger bi bi-trash"></button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="d-flex justify-content-end">
        <form action="{{ route('aksilogout')}}" method="post">
            @csrf
            {{-- <button type="submit" class="btn btn-secondary">Logout</button> --}}
        </form> &nbsp;
        {{-- <a href="{{route('catatan.create')}}" class="btn btn-success">Tambah Catatan</a> --}}
    </div>
    <br><br>
    <div class="card">
        @if(Session::has('notif'))
            <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
        @endif
        <div class="card-header">
            Gender Male
        </div>
        <div class="card-body">
            <table class="table text-center" id="">
                <thead>
                    <tr class="">
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Gender</th>
                        {{-- <th class="text-center">Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($test as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->gender}}</td>
                        {{-- <td>
                            <form action="{{route('catatan.destroy',$item->id)}}" method="POST">
                                @csrf
                                <a href="{{route('catatan.edit',$item->id)}}" class="btn btn-success">Edit</a>

                                <a href="{{route('catatan.show',$item->id)}}" class="btn btn-success">Detail</a>


                                @method('DELETE')

                                <button class="btn btn-danger bi bi-trash"></button>
                            </form>
                        </td> --}}
                    </tr>                     
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-end">
        {{-- <form action="{{ route('aksilogout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form> &nbsp;
        <a href="{{route('catatan.create')}}" class="btn btn-success">Tambah Catatan</a> --}}
    </div>
    <br><br>
    <div class="card">
        @if(Session::has('notif'))
            <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
        @endif
        <div class="card-header">
            Gender Female
        </div>
        <div class="card-body">
            <table class="table text-center" id="">
                <thead>
                    <tr class="">
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Gender</th>
                        {{-- <th class="text-center">Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($female as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->gender}}</td>
                        {{-- <td>
                            <form action="{{route('catatan.destroy',$item->id)}}" method="POST">
                                @csrf
                                <a href="{{route('catatan.edit',$item->id)}}" class="btn btn-success">Edit</a>

                                <a href="{{route('catatan.show',$item->id)}}" class="btn btn-success">Detail</a>


                                @method('DELETE')

                                <button class="btn btn-danger bi bi-trash"></button>
                            </form>
                        </td> --}}
                    </tr>
                        
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- <p>gender laki</p>
@foreach ($test as $item)
<td>{{$item->nama}}</td>
<td>{{$item->gender}}</td>
@endforeach--}}

<script>
    $(document).ready( function () {
      $('#ah').DataTable();
      } );
  </script>




    
@endsection


    
