@extends('template_all.menu')
@section('isi')
<style>
    .form-group{
        margin-top: 12px;
    }
    .container{
        margin-top: 50px;
    }
</style>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 45rem">
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="username">Kelas</label>
                        <input type="text" class="form-control" name="kelas">
                    </div>
                    <div class="form-group">
                        <label for="username">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="Osis">Osis</option>
                            <option value="Siswa">Siswa</option>
                            <option value="Guru">Guru</option>
                        </select>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection