@extends('template_all.menu')

@section('isi')

<style>
    button{
        margin-top: 12px;
    }
    .container{
        margin-top: 50px;
    }
</style>
<div class="container">
    <h3 class="text-center">Input Pelanggaran Siswa</h3>
    <br><br>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
            @if (Session::has('berhasil'))
            <div class="alert">{{Session::get('berhasil')}}</div>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
            @endif
            <div class="card-body">
                <form action="{{ route('aksilogin')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div><br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submin" class="btn btn-success">Login</button>    
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection